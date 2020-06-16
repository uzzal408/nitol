<?php

namespace App\Http\Controllers;

use App\Addon;
use App\Category;
use App\Ingredient;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        return view('admin.product.products', ['products' => $products]);
    }

    // public function productType($id)
    // {
    //     $products = Product::all();
    //     return view('admin.product.products', ['products' => $products]);
    // }

    public function newProduct()
    {
        $categories = Category::allCategory();
        //$categories = Category::all();
        $addons = Addon::all();
        $ingredients = Ingredient::all();
        return view('admin.product.new-product', ['categories' => $categories, 'addons' => $addons, 'ingredients' => $ingredients]);
    }

    public function saveProduct(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'title' => 'required|string|max:255',
            'price' => 'required|string'
        ]);

        $product = new Product();
        $product->title = $request->title;
        $product->specification = $arr_str  = implode(",", $request->specifications);
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->ac_capacity = $request->ac_capacity;
        $product->screen_size = $request->screen_size;
        $product->capacity_litre = $request->capacity_litre;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $adInfo_ids = $request->adInfo_ids;
        $adInfo_values = $request->adInfo_values;
        if(!empty($adInfo_ids) && ($adInfo_ids[0] != NULL)){
            $additional_informations = [];
            $distance = [];
            $j = 0;
            foreach ($adInfo_ids as $key => $n){
                $additional_informations[$j][$adInfo_ids[$key]] = $adInfo_values[$key];
                $j++;
            }
            //            return $request->adInfo_ids;
            $product->additional_information = json_encode($additional_informations);
        }
        if ($product->save()) {
            $product->categories()->attach($request->category_ids);

            //dd($request->file('productImage1'));


            $productImage1 = $request->file('productImage1');
            $productImage2 = $request->file('productImage2');
            $productImage3 = $request->file('productImage3');
            $productImage4 = $request->file('productImage4');
            if (is_file($productImage1)) {
                $imageUrl = $this->productImageUpload($productImage1, $product->id);
                $product->image1 = $imageUrl;
            }
            if (is_file($productImage2)) {
                $imageUrl = $this->productImageUpload($productImage2, $product->id);
                $product->image2 = $imageUrl;
            }
            if (is_file($productImage3)) {
                $imageUrl = $this->productImageUpload($productImage3, $product->id);
                $product->image3 = $imageUrl;
            }
            if (is_file($productImage4)) {
                $imageUrl = $this->productImageUpload($productImage4, $product->id);
                $product->image4 = $imageUrl;
            }
            $product->save();
        };
        return redirect('/all-products')->with('alert-success', 'Product Created Successfully');
    }

    public function editProduct($id)
    {
        //        $products = Product::where('id', '!=', $id)->get();
        $product = Product::find($id);
        $categories = Category::allCategory();
        //        return $categories;
        $addons = Addon::all();
        $ingredients = Ingredient::all();
        $product_category_ids = $product->categories->pluck('id')->toArray(); // related ids
        $product_addon_ids = $product->addons->pluck('id')->toArray(); // related ids
        $product_ingredient_ids = $product->ingredients->pluck('id')->toArray(); // related ids
        return view('admin.product.edit-product',
            [
                'product' => $product,
                'categories' => $categories,
                'product_category_ids' => $product_category_ids,
                'addons' => $addons,
                'product_addon_ids'=>$product_addon_ids,
                'ingredients' => $ingredients,
                'product_ingredient_ids' => $product_ingredient_ids
            ]);
    }

    public function updateProduct(Request $request)
    {
        //        return $request;
        $product = Product::find($request->product_id);
        $productImage1 = $request->file('productImage1');
        $productImage2 = $request->file('productImage2');
        $productImage3 = $request->file('productImage3');
        $productImage4 = $request->file('productImage4');
        if (is_file($productImage1)) {
            $this->removeImage($product->image1);
            $imageUrl = $this->productImageUpload($productImage1, $product->id);
            $product->image1 = $imageUrl;
        }
        if (is_file($productImage2)) {
            $this->removeImage($product->image2);
            $imageUrl = $this->productImageUpload($productImage2, $product->id);
            $product->image2 = $imageUrl;
        }
        if (is_file($productImage3)) {
            $this->removeImage($product->image3);
            $imageUrl = $this->productImageUpload($productImage3, $product->id);
            $product->image3 = $imageUrl;
        }
        if (is_file($productImage4)) {
            $this->removeImage($product->image4);
            $imageUrl = $this->productImageUpload($productImage4, $product->id);
            $product->image4 = $imageUrl;
        }


        $product->title = $request->title;
        $product->specification = $arr_str  = implode(",", $request->specifications);
        $product->price = $request->price;
        $product->sale_price = $request->sale_price;
        $product->ac_capacity = $request->ac_capacity;
        $product->screen_size = $request->screen_size;
        $product->capacity_litre = $request->capacity_litre;
        $product->discount = $request->discount;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $adInfo_ids = $request->adInfo_ids;
        $adInfo_values = $request->adInfo_values;
        if(!empty($adInfo_ids) && ($adInfo_ids[0] != NULL)){
            $additional_informations = [];
            $distance = [];
            $j = 0;
            foreach ($adInfo_ids as $key => $n){
                $additional_informations[$j][$adInfo_ids[$key]] = $adInfo_values[$key];
                $j++;
            }
            //            return $request->adInfo_ids;
            $product->additional_information = json_encode($additional_informations);
        }
        $product->categories()->sync($request->category_ids);
        $product->save();
        return redirect('/all-products')->with('alert-info', 'Product Updated successfully');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product_image1 = $product->image1;
        $product_image2 = $product->image2;
        $product_image3 = $product->image3;
        $product_image4 = $product->image4;
        if ($product->delete()) {
            $product->categories()->detach();
            $this->removeImage($product_image1);
            $this->removeImage($product_image2);
            $this->removeImage($product_image3);
            $this->removeImage($product_image4);
        }

        return redirect('/all-products')->with('alert-warning', 'Product Deleted successfully');
    }

    protected function removeImage($image)
    {
        if (is_file($image)) {
            unlink($image);
        }
    }

    protected function productImageUpload($productImage, $product_id)
    {
        $imageName = $productImage->getClientOriginalName();
        $directory = 'attached_images/products/' . $product_id . '/';
        $imageUrl = $directory . $imageName;
        $productImage->move($directory, $imageName);
        return $imageUrl;
    }

    public function publication($id){
        $product = Product::find($id);
        if($product->publication_status){
            $product->publication_status = 0;
        }else{
            $product->publication_status = 1;
        }
        $product->save();

        return redirect()->back();
    }


//    protected function allCategory(){
//        $categories = DB::table('categories as c1')
//            ->leftJoin('categories as c2','c2.parent_id','=','c1.id')
//            ->leftJoin('categories as c3','c3.parent_id','=','c2.id')
//            ->leftJoin('categories as c4','c4.parent_id','=','c3.id')
//            ->select('c1.id as c1_id','c1.name as c1_name','c2.id as c2_id','c2.name as c2_name','c3.id as c3_id','c3.name as c3_name','c4.id  as c4_id','c4.name as c4_name')
//            ->where('c1.parent_id','=',0)
//            ->get();
//        $all_categories = [];
//        $category_c1_id = '';
//        $category_c2_id = '';
//        $category_c3_id = '';
//        $category_c4_id = '';
//        $c1_id = -1;
//        $c2_id = -1;
//        $c3_id = -1;
//        $c4_id = -1;
//        foreach ($categories as $k=>$category){
//            if($category->c1_id != $category_c1_id){
//                $c1_id = $c1_id +1;
//                $all_categories[$c1_id]['id'] = $category->c1_id;
//                $all_categories[$c1_id]['name'] = $category->c1_name;
//                $c2_id = -1;
//            }
//            if($category->c2_id != $category_c2_id && $category->c2_id <> NULL){
//                $c2_id = $c2_id +1;
//                $all_categories[$c1_id]['children'][$c2_id]['id'] = $category->c2_id;
//                $all_categories[$c1_id]['children'][$c2_id]['name'] = $category->c2_name;
//                $c3_id = -1;
//            }
//            if($category->c3_id != $category_c3_id && $category->c3_id <> NULL){
//                $c3_id = $c3_id +1;
//                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['id'] = $category->c3_id;
//                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['name'] = $category->c3_name;
//                $c4_id = -1;
//            }
//            if($category->c4_id != $category_c4_id && $category->c3_id <> NULL){
//                $c4_id = $c4_id +1;
//                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['children'][$c4_id]['id'] = $category->c4_id;
//                $all_categories[$c1_id]['children'][$c2_id]['children'][$c3_id]['children'][$c4_id]['name'] = $category->c4_name;
//            }
//            $category_c1_id = $category->c1_id;
//            $category_c2_id = $category->c2_id;
//            $category_c3_id = $category->c3_id;
//            $category_c4_id = $category->c4_id;
//        }
//        return $all_categories;
//    }
}
