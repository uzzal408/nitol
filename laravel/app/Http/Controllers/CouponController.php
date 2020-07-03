<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;

class CouponController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $coupons = Coupon::all();
        return view('admin.coupons.coupon',['coupons'=>$coupons]);
    }

    public function store(Request $request){
        $this->validate($request, [
            'coupon_code' => 'required|string|min:5|max:255|unique:coupons',
            'discount' => 'required|numeric',
            'type' => 'required',
            'status' => 'required',
        ]);
        $coupon = new Coupon();
        $coupon->coupon_code = $request->coupon_code;
        $coupon->discount = $request->discount;
        $coupon->type = $request->type;
        $coupon->status = $request->status;
        $coupon->save();
        return redirect()->route('admin.coupons.all')->with('alert-success','Coupon Created Successfully');
    }

    public function edit($id){
        $coupon = Coupon::find($id);
        return view('admin.coupons.edit-coupon',['coupon'=>$coupon]);
    }

    public function update(Request $request){
        $this->validate($request, [
            'coupon_code' => 'required|string|min:5|max:255',
            'discount' => 'required|numeric',
            'type' => 'required',
            'status' => 'required',
        ]);
        $coupon = Coupon::find($request->id);

        $coupon->coupon_code = $request->coupon_code;
        $coupon->discount = $request->discount;
        $coupon->type = $request->type;
        $coupon->status = $request->status;
        $coupon->save();
        return redirect()->route('admin.coupons.all')->with('alert-info','Coupon Updated successfully');
    }

    public function delete($id){
        $coupon = Coupon::find($id);
        $coupon->delete();
        return redirect()->route('admin.coupons.all')->with('alert-danger','Coupon Deleted successfully');
    }


}
