<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Exports\ExportController;
use App\Exports\ExportCorporate;
use App\Exports\ExportReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class CustomerController extends Controller
{
    public function customerRegistrationForm(){
        return view('front.customer.registration');
    }


    public function sendOtpToCustomer(Request $request){
        $this->validate($request, [
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email_address' => 'required|string|email|max:50|unique:customers',
            'password' => 'required|string|min:6|confirmed',
            'phone_number' => 'required|numeric|min:5'
        ]);
        //        return $request;
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = $request->password;
        $customer->phone_number = $request->phone_number;
        //        $customer->address = $request->address;
        //        $customer->save();
        Session::put('newCustomer',$customer);
        $new_customer =  Session::get('newCustomer');
        //        return $new_customer->email_address;
        //        Session::put('CustomerId',$customer->id);
        //        Session::put('CustomerName',$customer->first_name);
        //        $data = $customer->toArray();
        //        $data =(array)$customer;

        //        Mail::send('front.mails.congratulation-mail',$data, function ($message) use ($data){
        //            $message->to($data['email_address']);
        //            $message->subject('Confirmaiton Mail');
        //        });
        if($request->phone_number){
            $digits = 6;
            $i = 0; //counter
            $pin_code = ""; //our default pin is blank.
            while($i < $digits){
                //generate a random number between 0 and 9.
                $pin_code .= mt_rand(0, 9);
                $i++;
            }
            Session::put('newCustomerOTP',$pin_code);
            //            return $pin_code;
            $parent_mobile = $request->phone_number;
            $url = "https://smsportal.bangladeshinfo.com/api/send/KFC/2fa4231a009e148288114ea5dafc149f/?text=Your%20OTP%20PIN%20Code%20is%20{$pin_code}&mobileNumber={$parent_mobile}";
            //            $url = "http://smsportal.bangladeshinfo.com/api/send/BITSCHOOL/8dbeddf9445b769c9f0e65b3a7867357/?text=Your%20BIT%20Election%20OTP%20PIN%20Code%20is%20{$pin_code}&mobileNumber={$parent_mobile}";
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

            $data = curl_exec($ch);

            curl_close($ch);

        }

        return redirect()->route('verify-customer-otp');

    }

    public function verifyCustomerOTP(){
        return view('front.customer.check_otp');

    }


    public function saveCustomer(Request $request){
        $this->validate($request, [
            'otp_pin' => 'required|numeric|max:10000'
        ]);
        if(Session::has('newCustomerOTP')){
            $pin_code = Session::get('newCustomerOTP');
            if($pin_code == $request->otp_pin){
                if(Session::has('newCustomer')){
                    $customer = Session::get('newCustomer');
                    $new_customer = new Customer();
                    $new_customer->first_name = $customer->first_name;
                    $new_customer->last_name = $customer->last_name;
                    $new_customer->email_address = $customer->email_address;
                    $new_customer->password = bcrypt($customer->password);
                    $new_customer->phone_number = $customer->phone_number;
                    if($new_customer->save()){
                        Session::put('CustomerId',$new_customer->id);
                        Session::put('CustomerName',$new_customer->first_name);
                        return redirect()->route('/')->with('message','Thanks for your Registration');
                    }
                }else{
                    return redirect()->route('register-customer');
                }
            }else{
                return redirect()->route('verify-customer-otp')->with('message','OTP Not Match');

            }
        }else{
            return redirect()->route('login-customer');
        }
    }

    public function customerLoginForm(){
        if(Session::has('CustomerId')){
            return redirect()->route('/');
        }
        return view('front.customer.login');
    }



    public function customerLoginByEmail(Request $request){
        $email = $request->email_address;
        $password = $request->password;
        $customer = Customer::where(['email_address' => $email])->first();

        if ($customer)
        {
            if (Hash::check($password, $customer->password))
            {
                Session::put('CustomerId',$customer->id);
                Session::put('CustomerName',$customer->first_name);
                if(Session::has('lastUrl')){
                    $lastUrl = Session::get('lastUrl');
                    return redirect($lastUrl);
                }
                return redirect('/');
            }else{
                return redirect()->route('login-customer')->with('message','Password not match');
            }
        }else{
            return redirect()->route('login-customer')->with('message','User is not available');
        }
    }
    public function customerLoginFormByMobile(){

    }

    public function customerLogout(){
        Session::forget('CustomerId');
        Session::forget('CustomerName');
        return redirect('/');
    }

    public function trackOrder(){
        if(Session::has('CustomerId')){
            $customer_id = Session::get('CustomerId');
            $customer = Customer::find($customer_id);
            $orders = $customer->orders()->orderBy('id','desc')->get();;
            //            return $orders;
            return view('front.customer.track_order',['customer'=>$customer,'orders'=>$orders]);
        }else{
            return redirect()->route('login-customer')->with('message','Login First');
        }

    }

    public function trackRegistration(){
        if(Session::has('CustomerId')){
            $customer_id = Session::get('CustomerId');
            $customer    = Customer::find($customer_id);
        }

        return view('front.customer.track_registration',['customer'=>$customer]);
    }

    public function export(){
        return Excel::download(new ExportController(), 'customer-information.xlsx');
    }

    public function exportCorporate(){
       return Excel::download(new ExportCorporate(),'corporate-sales.xlsx');
    }

    public function exportReview(){
        return Excel::download(new ExportReview(),'customer-review.xlsx');
    }

}
