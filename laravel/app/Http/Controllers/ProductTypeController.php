<?php

namespace App\Http\Controllers;

use App\Addon;
use App\Category;
use App\Ingredient;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductTypeController extends Controller
{
	public function index($id=null)
    {
        if($id!=null){
        	//$products = Product::all();
        	$productInfo   = Category::where('name', $id)->first();
	        //dd($productInfo);
	        return view('admin.product.products', ['products' => $products]);
        }
        else{
        	$products = Product::all();
	        //dd($id);
	        return view('admin.product.products', ['products' => $products]);
        }
        
    }
}