<?php

namespace App\Http\Controllers;

use App\Order;
use App\ShippingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Psy\sh;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function manageOrderInfo(){
        if($user = Auth::user()){
            $orders = Order::where([['is_deleted', '=', false]])->orderBy('id','desc')->get();
//            return $orders;
        }

//        return Order::first()->shipping_detail;
//        return $orders->first()->customer;
//        return $orders->shipping_detail;

//        {
//            "id": 9,
//            "customer_id": 6,
//            "shipping_id": 1,
//            "order_total": 222,
//            "order_status": "Pending",
//            "created_at": "2018-02-14 14:32:09",
//            "updated_at": "2018-02-14 14:32:09"
//        }
//        $orders = DB::table('orders')
//            ->join('customers','orders.customer_id','=','customers.id')
//            ->join('payments','orders.id','=','payments.order_id')
//            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')->get();

//        return $orders;
        return view('admin.order.manage-order',[
            'orders'=>$orders
        ]);
    }

    public function viewOrderInfo($id){
        $order = Order::find($id);
//        $customer = Customer::find($order->customer_id);

//        $shipping = $order->shipping_detail->with('delivery')->first();
//        return $order->shipping_detail->delivery_mode_type  ;
//        $payment = Payment::where('order_id',$order->id);
//        return $order;
        return view('admin.order.view-order',[
            'order'=>$order
        ]);
    }

    public function editOrderStatus($id,$status){
        $order = Order::find($id);
        $order->order_status = $status;
        $order->save();
//        $customer = Customer::find($order->customer_id);
//        $shipping = Shipping::find($order->shipping_id);
//        $payment = Payment::where('order_id',$order->id);
//        return $order;

        return redirect()->route('manage-order');
    }

    public function deleteOrder(Request $request){
        $order = Order::find($request->order_id);
        if($order){
            $order->is_deleted = true;
            $order->status_description = $request->status_description;
            $order->save();
            return redirect()->route('manage-order')->with('message','Deleted Successfully');
        }

        //        $customer = Customer::find($order->customer_id);
        //        $shipping = Shipping::find($order->shipping_id);
        //        $payment = Payment::where('order_id',$order->id);
        //        return $order;

        return redirect()->route('manage-order')->with('message','Sorry ! Something went wrong');
    }
}
