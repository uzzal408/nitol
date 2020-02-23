<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ApiController extends Controller
{
    public function filterProduct($priceValue)
    {
        $pricaeRangeProduct = Product::whereBetween('price', [1, $priceValue])->get();
        return $pricaeRangeProduct[0]->price;
    }

    public function filterDistrict($id)
    {
        $divisionRoot       = Category::where(['id' => $id])->first();
        $districtAll        = Category::where(['parent_id' =>$divisionRoot->id])->orderBy('name','asc')->get();
        return $districtAll;
    }

    public function filterThana($id)
    {
        $districtRoot       = Category::where(['id' => $id])->first();
        $thanaAll           = Category::where(['parent_id' =>$districtRoot->id])->orderBy('name','asc')->get();
        return $thanaAll;
    } 

    public function filterStore($id)
    {
        $storeInfomation    = Category::where(['id' => $id])->first();
        return $storeInfomation;
    }

    public function productLimit($productId)
    {
        $pricaeRangeProduct = Product::where('id',$productId)->first();
        return $pricaeRangeProduct->quantity;
    }   
}
