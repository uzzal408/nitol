<?php

namespace App\Http\Controllers;

use App\ProductReview;
use App\CorporateSale;
use App\Customer;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class AdminviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    public function corporateSales(){
        $corporateSales = CorporateSale::all();
        return view('admin.review.corporate',compact(['corporateSales']));
    }

    public function customers(){
        $customers = Customer::all();
        return view('admin.review.customers',compact(['customers']));
    }

    public function productReview(){
        $productReviews = productReview::all();
        return view('admin.review.review',compact(['productReviews']));
    }

    public function reviewDelete($id){
        $productReviewId = productReview::find($id);
        $productReviewId->delete();
        return redirect('/product/review');
    } 

    public function customerDelete($id){
        $CustomerId = Customer::find($id);
        $CustomerId->delete();
        return redirect('/customers');
    }

    public function corporateSalesDelete($id){
        $corporateSales = CorporateSale::find($id);
        $corporateSales->delete();
        return redirect('/corporate/sales');
    }  
}
