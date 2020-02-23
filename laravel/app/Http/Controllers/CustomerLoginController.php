<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\CustomerLogin;
use App\ProductReview;
use App\OrderDetail;
use App\Category;
use App\Customer;
use App\Order;
use Hash;

class CustomerLoginController extends Controller
{
    public function __construct(){
        $this->middleware(function ($request, $next) {
            if(2==1){
                return redirect('/');
            }
            return $next($request);
        });
    }
    
    public function register(){
        return view('front.customerLogin.register');
    }

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'name'                  => ['required', 'string', 'max:255'],
            'email'                 => ['required', 'string', 'email', 'max:255', 'unique:customer_logins'],
            'phone_number'        => ['required', 'string', 'max:15'],
            'password'              => ['required', 'string', 'min:3', 'confirmed']
        ]);

        $customerInfo                       = new CustomerLogin;
        $customerInfo->name                 = $request->input('name');
        $customerInfo->email                = $request->input('email');
        $customerInfo->phone_number       = $request->input('phone_number');
        $customerInfo->remember_token       = $request->get ( '_token' );
        $customerInfo->password             = bcrypt($request->password);
        if($customerInfo->save()){
            return redirect('/customerLogin')->with('message','Register Successful');
        }
    }

    public function login(){
        Session::put('previousUrl',url()->previous());
        $previous_url = Session::get('previousUrl');
        if(Session::has('CustomerId')){
            return redirect('/')->with('success','You have already login');
        }
        return view('front.customerLogin.login');
    }

    public function authenticate(Request $request){
        $previous_url        = Session::get('previousUrl');
        $customerData        = CustomerLogin::where(['email' => $request->email])->first();
        if ($customerData)
        {
            if(Hash::check($request->password,$customerData->password)){
                Session::put('CustomerId',$customerData->id);
                Session::put('CustomerName',$customerData->name);
                if(Session::has('lastUrl')){
                    $lastUrl = Session::get('lastUrl');
                    return redirect($lastUrl);
                }
                
                if($previous_url=="http://localhost/Nitol/customer/register"){
                    return redirect('/');
                    //return redirect()->intended('/'); 
                }
                elseif($previous_url=="http://nitolelectronics.com/customer/register"){
                    return redirect('/');
                    //return redirect()->intended('/');    
                }
                //dd($previous_url);
                //return redirect('/');
                return redirect(Session::get('previousUrl'));      
            }else{
                $request->session()->flash('message', 'Password not match');
                return redirect('/customerLogin')->with('message','Password not match');
            }
        }else{
            $request->session()->flash('message', 'Customer email is not available');
            return redirect('/customerLogin')->with('message','Customer email is not available');
        }
    }

    public function request(){
        return view('front.customerLogin.email');  
    }

    public function logout(){
        Session::forget('CustomerId');
        Session::forget('CustomerName');
        return redirect('/');
    }

    public function reviewStore(Request $request,$id){
        //dd($request->all());
        $this->validate($request,[
            'rating'                => ['required'],
            'comment'               => ['required']
        ]);

        $productReview                          = new ProductReview;
        $productReview->product_id              = $id;
        $productReview->customer_id             = Session::get('CustomerId');
        $productReview->customer_name           = Session::get('CustomerName');
        $productReview->product_review          = $request->input('rating');
        $productReview->product_comment         = $request->input('comment');
        if($productReview->save()){
            return back()->with('message','Review Successful');
        }
    }  

    public function cardDelete($id,$product_id=null){
        if($product_id!=null){
            $cartProducts = Cart::content();
            //dd($cartProducts);
            foreach ($cartProducts as $key => $value) {
                if($value->id==$product_id){
                    Cart::remove($value->rowId);
                }
            }
        }
        else{
            Cart::remove($id);
        }
        return back();
    }

    public function customerInfomation(){
        if(Session::get('CustomerId')!=''){
            $allCategory       = Category::all();
            $customerData       = CustomerLogin::where(['id' => Session::get('CustomerId')])->first();
            $orderDetailsData   = Order::where(['customer_login_id' => Session::get('CustomerId')])->orderBy('created_at','desc')->paginate(10);
            
            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.customerOrderDetails',compact(['customerData','orderDetailsData','mostViewedAll','allCategory']));
        }
        else{
            return redirect('/');
        }
    }

    public function customerProfile($id){
        if(Session::get('CustomerId')==$id){
            $customerInformation= CustomerLogin::where(['id' => Session::get('CustomerId')])->first();
            
            $allCategory       = Category::all();

            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.customerInformation',compact(['customerInformation','mostViewedAll','allCategory']));
        }
        else{
            return back();
        }
    }

    public function customerProfileEdit($id){
        if(Session::get('CustomerId')==$id){
            $customerProfileEdit= CustomerLogin::where(['id' => Session::get('CustomerId')])->first();
            
            $allCategory       = Category::all();

            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.customerProfileEdit',compact(['customerProfileEdit','mostViewedAll','allCategory']));
        }
        else{
            return redirect('/');
        }
    }

    public function customerProfileupdate(Request $request){
        //dd($request->all());
        // $this->validate($request,[
        //     'name'                  => ['required', 'string', 'max:255'],
        //     'email'                 => ['required', 'string', 'email', 'max:255', 'unique:customer_logins']
        // ]);

        $customertInfo                        = CustomerLogin::find(Session::get('CustomerId'));
        $customertInfo->name                  = $request->input('name');
        $customertInfo->email                 = $request->input('email');
        $customertInfo->dateOfBirth           = $request->input('dateOfBirth');
        $customertInfo->phone_number          = $request->input('phone_number');
        $customertInfo->nidNumber             = $request->input('nidNumber');
        $customertInfo->Gender                = $request->input('Gender');
        $customertInfo->present_aadress       = $request->input('present_aadress');
        $customertInfo->permanent_address     = $request->input('permanent_address');
        
        if($customertInfo->save()){
            $request->session()->flash('message', 'Customer Information update Successful');
            return redirect('/');
        }
    }

    public function orderDetails($id){   
        if(Session::get('CustomerId')!=''){
            $orderDetailsData   = OrderDetail::where(['order_id' => $id])->orderBy('created_at','desc')->get();
            //dd($orderDetailsData);

            $allCategory       = Category::all();

            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.OrderDetails',compact(['orderDetailsData','mostViewedAll','allCategory']));
        }
        else{
            return redirect('/');
        }
    }
}
