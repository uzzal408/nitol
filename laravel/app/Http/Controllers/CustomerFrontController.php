<?php

namespace App\Http\Controllers;

use App\Category;
use App\CustomerLogin;
use App\Order;
use App\OrderDetail;
use App\ProductReview;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Auth;

class CustomerFrontController extends Controller
{
        public function __construct(){
        $this->middleware('auth:customer');
    }

    public function reviewStore(Request $request,$id){
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
            $allCategory       = Category::all();
            $customerData       = CustomerLogin::where(['id' => Auth::guard('customer')->user()->id])->first();
            $orderDetailsData   = Order::where(['customer_login_id' => ['id' => auth::guard('customer')->user()->id]])->orderBy('created_at','desc')->paginate(10);

            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.customerOrderDetails',compact(['customerData','orderDetailsData','mostViewedAll','allCategory']));
    }

    public function customerProfile($id){
            $customerInformation= CustomerLogin::where(['id' => $id])->first();
            $allCategory       = Category::all();
            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.customerInformation',compact(['customerInformation','mostViewedAll','allCategory']));
    }

    public function customerProfileEdit($id){
            $customerProfileEdit= CustomerLogin::where(['id' => $id])->first();
            $allCategory       = Category::all();
            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;
            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.customerProfileEdit',compact(['customerProfileEdit','mostViewedAll','allCategory']));
    }

    public function customerProfileupdate(Request $request){
            $id = Auth::guard('customer')->user()->id;
            $customertInfo                        = CustomerLogin::find($id);
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
            return redirect('/customerProfile/'.$id);
        }
    }

    public function orderDetails($id){
            $orderDetailsData   = OrderDetail::where(['order_id' => $id])->orderBy('created_at','desc')->get();
            $allCategory       = Category::all();
            $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
            $mostPopularAll    = $mostPopular->products;

            $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
            $mostViewedAll     = $mostViewed->products;

            return view('front.customerLogin.OrderDetails',compact(['orderDetailsData','mostViewedAll','allCategory']));
    }
}
