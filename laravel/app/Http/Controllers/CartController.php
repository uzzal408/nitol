<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCard(Request $request){
        $product = Product::find($request->product_id);
        if($product){
            $cart = Cart::add([
                'id'=>$request->product_id,
                'name'=>$request->product_name,
                'specification'=>$request->product_specification,
                'price'=>$request->product_price,
                'qty'=>$request->product_qty,
                'options'=>[
                    'image'=>$product->image1,
                    'product_id'=>$request->product_id
                ]
            ]);
            $carts = Cart::content();
            echo view('front.includes.ajax-cart-header',['carts'=>$carts]);
        }else{
            echo 'Product Not Available';
        }
    }

    public function showCart(){
        $carts = Cart::content();
        return view('front.cart.view-cart',['carts'=>$carts]);
    }

    public function deleteCart(Request $request){
        Cart::remove($request->rowId);
        $carts = Cart::content();
        echo view('front.includes.ajax-cart-header',['carts'=>$carts]);
    }

    public function updateCard(Request $request){
        //dd($request->all());
        Cart::update($request->product_rowId,$request->product_qty);
        $carts = Cart::content();
        echo view('front.includes.ajax-cart-header',['carts'=>$carts]);
        //return redirect('cart/show');
    }

    public function updateCardAjax(Request $request){
        Cart::update($request->rowId,$request->qty);
        $carts = Cart::content();
        echo view('front.includes.ajax-cart-header',['carts'=>$carts]);
    }
}
