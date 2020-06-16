<?php
namespace App\Http\Controllers;
use App\Mail\ConfirmOrderMail;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

use App\Order;
use App\Store;
use App\Product;
use App\Delivery;
use App\Category;
use Carbon\Carbon;
use App\OrderDetail;
use App\BillingDetail;
use App\ShippingDetail;

class CheckoutController extends Controller{
    public function __construct(){
        
        $this->config = config('sslcommerz');
    }
    
    public function index(){
        if(Cart::count() > 0){
            $allCategory        = Category::all();
            $mostViewed         = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll      = $mostViewed->products;
            $cartProducts       = Cart::content();

            return view('front.checkout.checkout',compact(['mostViewedAll','allCategory']));
        }else{
            return redirect()->route('/')->with('message','Add Any Product First');
        }
    }

    public function saveOrderInfo(Request $request){
        $request->validate([
            'fname'     => 'required|string',
            'email'     => 'required|email',
            'phone'     => 'required|digits:11',
            'add'       => 'required|string',
            'country'   => 'required|string',
            'city'      => 'required|string',
        ]);

        //****************Card & CardDetail******************//
        $grand_total        = Cart::subtotal();//Session::get('grandTotal');
        $customer_id        = Auth::guard('customer')->user()->id;
        $store_id           = Session::get('StoreID');
        $order_type         = Session::get('Mode');
        $shippingCost       = Category::where(['name' => 'Shipping Cost'])->first();
        $order              = new Order();
        $orderId            = 'NN'.time();
        $order->id          = $orderId;
        $order->order_total = $grand_total;
        $order->order_type  = $order_type;
        
        $order->address     = $request->add;
        $order->country     = $request->country;
        $order->zip_code    = $request->zip_code;
        $order->city        = $request->city;
        $order->payment_method  = $request->payment_method;

        if($customer_id){
            $order->customer_login_id = $customer_id;
        }
        if($store_id){
            $order->store_id = $store_id;
        }
        $order->save();
        
        
        $productssl = array();
        $i=0;
        $cartProducts = Cart::content();
        if ($cartProducts) {
            foreach ($cartProducts as $cartProduct) {
                $orderDetails = new OrderDetail();
                $orderDetails->order_id = $orderId;
                $orderDetails->product_id = $cartProduct->options->product_id;
                $orderDetails->customer_login_id = Session::get('CustomerId');
                $orderDetails->product_name = $cartProduct->name;
                $orderDetails->product_price = $cartProduct->price;
                $orderDetails->product_quantity = $cartProduct->qty;
                $orderDetails->save();

                $product = Product::find($cartProduct->options->product_id);
                $remain_product = $product->quantity-$cartProduct->qty;
                $product->quantity = $remain_product;
                $product->save();
                $productssl[] = $cartProduct->name;
                $i++;
            }
            //Cart::destroy();
        }



        //****************Shipping Detail******************//

        $shipping = new ShippingDetail();

        $shipping->customer_id = $customer_id;
        $shipping->order_id = $orderId;
        $shipping->first_name = $request->fname;
        $shipping->last_name = $request->lname;
        $shipping->email = $request->email;
        $shipping->phone = $request->phone;
        $shipping->address = $request->add;
        $shipping->country = $request->country;
        $shipping->zip_code = $request->zip_code;
        $shipping->town = $request->city;
        $shipping->save();
        $prd = implode(",",$productssl);
        $info = array(
            'name' => $request->fname,
            'order_id' => $orderId,
            'phone'    => $request->phone,
            'total' => $grand_total
        );

        Mail::to('badhon@gmail.com')->send(new ConfirmOrderMail($cartProducts,$info));
        
        // exit;
        $post_data = array();

        $post_data['store_id'] = $this->config['apiCredentials']['store_id'];
//        dd($post_data['store_id']);
        $post_data['store_passwd'] = $this->config['apiCredentials']['store_password'];
//        dd($post_data['store_passwd']);

//        $post_data['store_id'] = "testbox";
//        $post_data['store_passwd'] = "qwerty";

//        define("SSLCZ_STORE_ID", "testbox");
//        define("SSLCZ_STORE_PASSWD", "qwerty");
        
        ///// Only Product Price //////
        $post_data['total_amount'] = str_replace(',', '', $grand_total); # You cant not pay less than 10

        
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $orderId; // tran_id must be unique
        
        //dd($post_data['store_id'],$post_data['store_passwd'],$post_data['tran_id'],$prd,$grand_total,$this->config['apiDomain']);
        
        $post_data['success_url'] = url('/') . $this->config['success_url'];
        $post_data['fail_url']  = url('/') . $this->config['failed_url'];
        $post_data['cancel_url']  = url('/') . $this->config['cancel_url'];

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = $request->fname." ".$request->lname;
        $post_data['cus_email'] = $request->email;
        $post_data['cus_add1'] = $request->add;
        $post_data['cus_city'] = $request->city;
        $post_data['cus_state'] = $request->city;
        $post_data['cus_postcode'] = $request->zip_code;
        $post_data['cus_country'] = $request->country;
        $post_data['cus_phone'] = $request->phone;

        # SHIPMENT INFORMATION
    
        $post_data['ship_name'] = $request->fname." ".$request->lname;
        $post_data['ship_add1'] = "$request->add";
        $post_data['ship_city'] = $request->city;
        $post_data['ship_state'] = $request->city;
        $post_data['ship_postcode'] = $request->zip_code;
        $post_data['ship_phone'] = $request->phone;
        $post_data['ship_country'] = $request->country;

        $post_data['shipping_method'] = "YES";
        $post_data['product_name'] = $prd;
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";
        $post_data['num_of_item'] = $i;

         if($request->payment_method == "sslcommerz")
         {
            $get_api_url = $this->config['apiDomain'] . $this->config['apiUrl']['make_payment'];
//            $get_api_url = "https://" . "sandbox" . ".sslcommerz.com/gwprocess/v3/api.php";;
//            dd($get_api_url);
            //dd($get_api_url);
            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $get_api_url );
            curl_setopt($handle, CURLOPT_TIMEOUT, 30);
            curl_setopt($handle, CURLOPT_CONNECTTIMEOUT, 30);
            curl_setopt($handle, CURLOPT_POST, 1 );
            curl_setopt($handle, CURLOPT_POSTFIELDS, $post_data);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, FALSE); # KEEP IT FALSE IF YOU RUN FROM LOCAL PC
            
            
            $content = curl_exec($handle );
            // dd($post_data);
            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
            
            if($code == 200 && !( curl_errno($handle))) {
            	curl_close( $handle);
            	$sslcommerzResponse = $content;
            } else {
            	curl_close( $handle);
            	echo "FAILED TO CONNECT WITH SSLCOMMERZ API";
            	exit;
            }
            
            # PARSE THE JSON RESPONSE
            $sslcz = json_decode($sslcommerzResponse, true );
            
            if(isset($sslcz['GatewayPageURL']) && $sslcz['GatewayPageURL']!="" ) {
                # THERE ARE MANY WAYS TO REDIRECT - Javascript, Meta Tag or Php Header Redirect or Other
                # echo "<script>window.location.href = '". $sslcz['GatewayPageURL'] ."';</script>";
            	echo "<meta http-equiv='refresh' content='0;url=".$sslcz['GatewayPageURL']."'>";
            	# header("Location: ". $sslcz['GatewayPageURL']);
            	Cart::destroy();
            	exit;
            } else {
            	echo "JSON Data parsing error!";
            }
         }
         else
         {
             Cart::destroy();
             return redirect()->route('complete-order');
         }
        
        // return redirect()->route('complete-order');
    }

    public function completeOrder(){
        $allCategory = Category::all();
        return view('front.checkout.complete-order',compact(['allCategory']));
    }

    public function sendMail(){
        //        $user = Customer::find(8);
        //        Mail::send('front.customer.mail', ['user' => $user], function ($m) use ($user) {
        //            $m->from('no-reply@pizzahutbd.com', 'PizzaHut');
        //
        //            $m->to($user->email_address, $user->first_name)->subject('Your Reminder!');
        //        });

        $subject = 'Order';
        $name = 'Sanaulla';
        $email = 'no-reply@pizzahutbd.com';
        $message = 'Lorem';

        $to = 'sanaulla.ict@gmail.com';
        $subject = "Contact: ".$subject;
        $body = "Name: $name \r\n Email: $email \r\n Query: $message";
        $headers = "From: ".$email;

        mail($to,$subject,$body,$headers);
    }

    public function checkoutProceed(){
        if(Cart::count() > 0){
            $allCategory        = Category::all();
            $shippingCost       = Category::where(['name' => 'Shipping Cost'])->first();
            $cartProducts       = Cart::content();
           $customer_id =  Session::get('CustomerId');
           $customerShoppingDetail =  ShippingDetail::where('customer_id',$customer_id)->latest()->first();
            return view('front.checkout.checkoutProcced',compact(['shippingCost','allCategory','customerShoppingDetail']));
        }else{
            return redirect()->route('/')->with('message','Add Any Product First');
        }
    }
    
    public function success(Request $request){
       $tran_id = $request->tran_id;
       $amount = $request->currency_amount;
       $currency = $request->currency;

        if(!empty($request->all()))
        {
//            dd('okey');
            $val_id = ($request->val_id);
            $store_id = urlencode($this->config['apiCredentials']['store_id']);
            $store_passwd = urlencode($this->config['apiCredentials']['store_password']);
            
            $requested_url = ($this->config['apiDomain'] . $this->config['apiUrl']['order_validate'] . "?val_id=" . $val_id . "&store_id=" . $store_id . "&store_passwd=" . $store_passwd . "&v=1&format=json");
            $handle = curl_init();
            curl_setopt($handle, CURLOPT_URL, $requested_url);
            curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    
            $result = curl_exec($handle);
    
            $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);
    
            if ($code == 200 && !(curl_errno($handle))) {
//                dd('okye1');
    
                # TO CONVERT AS ARRAY
                $result = json_decode($result,true);

                if(($result['status'] == 'VALID' || $result['status'] == 'VALIDATED') &&  $result['tran_id'] != ""  &&  $result['amount'] != "" )
                {

                    $update_status = DB::table('orders')
                    ->where('id', $tran_id)
                    ->update(['order_status' => 'Processing','payment_status'=>'VALID']);
                    
                    if($update_status)
                    {
                        Cart::destroy();
                        return redirect()->route('complete-order');
                    }
                }else{
                    echo "Transaction not validate";
                }
            }

            // $order_detials = DB::table('orders')
            // ->where('id', $tran_id)->first();
            // print_r($order_detials);
        }
        else
        {
            echo "Transaction is Failed";
        }

    }
    
    public function fail(Request $request)
    {
        $tran_id = $request->tran_id;
        
        if($request->status == 'FAILED')
        {
            Cart::destroy();
            return redirect()->route('/')->with('message','Transaction Failed');
        }
    }
    public function cancel(Request $request)
    {
        $tran_id = $request->tran_id;

        if($request->status == 'CANCELLED')
        {
            Cart::destroy();
            return redirect()->route('/')->with('message','Transaction Cancelled');
        }
        
    }
    
    public function sslcOrderValidate($post_data, $tran_ids, $amounts ,$currencys){
        # MERCHANT SYSTEM INFO
        echo "<pre>";
        $val_id = ($post_data['val_id']);
        $store_id = urlencode($this->config['apiCredentials']['store_id']);
        $store_passwd = urlencode($this->config['apiCredentials']['store_password']);
        
        echo $requested_url = ($this->config['apiDomain'] . $this->config['apiUrl']['order_validate'] . "?val_id=" . $val_id . "&store_id=" . $store_id . "&store_passwd=" . $store_passwd . "&v=1&format=json");
        //dd($post_data,$store_id,$requested_url);
        $handle = curl_init();
        curl_setopt($handle, CURLOPT_URL, $requested_url);
        curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($handle);

        $code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

        if ($code == 200 && !(curl_errno($handle))) {

            # TO CONVERT AS ARRAY
            # $result = json_decode($result, true);
            # $status = $result['status'];

            # TO CONVERT AS OBJECT
            $result = json_decode($result);
            
            print_r($result);

            # TRANSACTION INFO
            $status = $result->status;
            $tran_date = $result->tran_date;
            $tran_id = $result->tran_id;
            $val_id = $result->val_id;
            $amount = $result->amount;
            $store_amount = $result->store_amount;
            $bank_tran_id = $result->bank_tran_id;
            $card_type = $result->card_type;
            $currency_type = $result->currency_type;
            $currency_amount = $result->currency_amount;

            # ISSUER INFO
            $card_no = $result->card_no;
            $card_issuer = $result->card_issuer;
            $card_brand = $result->card_brand;
            $card_issuer_country = $result->card_issuer_country;
            $card_issuer_country_code = $result->card_issuer_country_code;

            # GIVE SERVICE
            if (($tran_id == $tran_ids) && ($currency_amount == $amounts) && ($currency_type == $currencys) && ($status == "VALID" || $status == "VALIDATED") )
            {
                return true;
            } 
            else 
            {
                # FAILED TRANSACTION
                return false;
            }
        } 
        else 
        {
            # Failed to connect with SSLCOMMERZ
            echo "Faile to connect with SSLCOMMERZ";
        }
    }
   
}
