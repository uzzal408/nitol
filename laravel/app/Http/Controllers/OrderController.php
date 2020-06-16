<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function manageOrderInfo(){
            $orders = Order::where([['is_deleted', '=', false]])->orderBy('id','desc')->get();
        return view('admin.order.manage-order',[
            'orders'=>$orders
        ]);
    }

    public function viewOrderInfo($id){
        $order = Order::find($id);
        return view('admin.order.view-order',[
            'order'=>$order
        ]);
    }

    public function editOrderStatus($id,$status){
        $order = Order::find($id);
        $order->order_status = $status;
        $order->save();
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
        return redirect()->route('manage-order')->with('message','Sorry ! Something went wrong');
    }
}
