<?php

namespace App\Http\Controllers;
use App\Setting;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use App\ProductsCategory;
use App\ProductReview;
use App\CorporateSale;
use App\Category;
use App\Customer;
use App\Product;
use App\Store;


class NitolElectronicsController extends Controller
{

    public function index(){
        $allCategory = Category::all();

        //////// Header, Banner, Slider, Header Right Image ///////
        $sliderImage            = Category::where(['name' => 'Slider Image'])->first();
        $sliderImageAll         = Category::where(['parent_id' => $sliderImage->id])
                                    ->orderBy('created_at','desc')
                                    ->take(5)
                                    ->get();

        $bannerImage            = Category::where(['name' => 'Banner'])->first();
        $bannerImageAll         = Category::where(['parent_id' => $bannerImage->id])->get();

        $headerRightImage       = Category::where(['name' => 'Header Right'])->first();
        $headerRightImageAll    = Category::where(['parent_id' => $headerRightImage->id])
                                    ->orderBy('created_at','desc')
                                    ->take(2)
                                    ->get();

        
        //// All Products Category /////////
        $bestSellerAll          = [];
        $newArrivalsAll         = [];
        $topRatedAll            = [];

        $bestSellerTv           = Category::where(['name' => 'Best Seller TV'])->first();
        $bestSellerTvAll        = $bestSellerTv->products;
        $bestSellerAll[]        = $bestSellerTvAll;

        $newArrivalsTv          = Category::where(['name' => 'New Arrivals TV'])->first();
        $newArrivalsTvAll       = $newArrivalsTv->products;
        $newArrivalsAll[]       = $newArrivalsTvAll;

        $topRatedTv             = Category::where(['name' => 'Top Rated TV'])->first();
        $topRatedTvAll          = $topRatedTv->products;
        $topRatedAll[]          = $topRatedTvAll;


        $bestSellerAC           = Category::where(['name' => 'Best Seller AC'])->first();
        $bestSellerACAll        = $bestSellerAC->products;
        $bestSellerAll[]        = $bestSellerACAll;

        $newArrivalsAC          = Category::where(['name' => 'New Arrivals AC'])->first();
        $newArrivalsACAll       = $newArrivalsAC->products;
        $newArrivalsAll[]       = $newArrivalsACAll;

        $topRatedAC             = Category::where(['name' => 'Top Rated AC'])->first();
        $topRatedACAll          = $topRatedAC->products;
        $topRatedAll[]          = $topRatedACAll;


        $bestSellerRefregerator = Category::where(['name' => 'Best Seller Refregerator'])->first();
        $bestSellerRefregeratorAll = $bestSellerRefregerator->products;
        $bestSellerAll[]        = $bestSellerRefregeratorAll;

        $newArrivalsRefregerator= Category::where(['name' => 'New Arrivals Refregerator'])->first();
        $newArrivalsRefregeratorAll = $newArrivalsRefregerator->products;
        $newArrivalsAll[]       = $newArrivalsRefregeratorAll;

        $topRatedRefregerator   = Category::where(['name' => 'Top Rated Refregerator'])->first();
        $topRatedRefregeratorAll= $topRatedRefregerator->products;
        $topRatedAll[]          = $topRatedRefregeratorAll;

        $bestSellerFreeze       = Category::where(['name' => 'Best Seller Frezeer'])->first();
        $bestSellerFreezeAll    = $bestSellerFreeze->products;
        $bestSellerAll[]        = $bestSellerFreezeAll;

        $newArrivalsFreeze      = Category::where(['name' => 'New Arrivals Frezeer'])->first();
        $newArrivalsFreezeAll   = $newArrivalsFreeze->products;
        $newArrivalsAll[]       = $newArrivalsFreezeAll;

        $topRatedFreeze         = Category::where(['name' => 'Top Rated Frezeer'])->first();
        $topRatedFreezeAll      = $topRatedFreeze->products;
        $topRatedAll[]          = $topRatedFreezeAll;


        $bestSellerHA           = Category::where(['name' => 'Best Seller Home Appliance'])->first();
        $bestSellerHAll         = $bestSellerHA->products;
        $bestSellerAll[]        = $bestSellerHAll;

        $newArrivalsHA          = Category::where(['name' => 'New Arrivals Home Appliance'])->first();
        $newArrivalsHAAll       = $newArrivalsHA->products;
        $newArrivalsAll[]       = $newArrivalsHAAll;

        $topRatedHA             = Category::where(['name' => 'Top Rated Home Appliance'])->first();
        $topRatedHAAll          = $topRatedHA->products;  
        $topRatedAll[]          = $topRatedHAAll;  

        ////// Footer Information ///////////
        $companyOverview        = Category::where(['name' => 'Company Overview'])->first();
        $youtubeLink            = Category::where(['name' => 'Youtube Link'])->first();
        $youtubeLinkAll         = Category::where(['parent_id' =>$youtubeLink->id])->get();

        Session::put('Mode','Delivery');
        return view('front.home.home-content',compact([
        'sliderImageAll','bannerImageAll','bestSellerTvAll','newArrivalsTvAll','topRatedTvAll',
        'bestSellerACAll','newArrivalsACAll','topRatedACAll','bestSellerFreezeAll','bestSellerRefregeratorAll','newArrivalsRefregeratorAll','topRatedRefregeratorAll','newArrivalsFreezeAll',
        'topRatedFreezeAll','bestSellerHAll','newArrivalsHAAll','topRatedHAAll','headerRightImageAll',
        'bestSellerAll','newArrivalsAll','topRatedAll','companyOverview','youtubeLinkAll','allCategory']));
    }

    public function showProduct($id){
        $product = Product::find($id);
        //dd($product);
        $allCategory = Category::all();
        Session::put('Mode','Delivery');

        //////// Most Polular Most Viewed Products ///////////
        $mostPopular       = Category::where(['name' => 'Most Popular'])->first();
        $mostPopularAll    = $mostPopular->products;

        $mostViewed        = Category::where(['name' => 'Most Viewed'])->first();
        $mostViewedAll     = $mostViewed->products;

        $cartProducts      = Cart::content();

        $matchThese        = ['product_id' => $id];
        $productReview     = ProductReview::where($matchThese)->orderBy('created_at','desc')->get();
        $categorycount     = ProductReview::where($matchThese)->orderBy('created_at','desc')->count();
        $productReviewAvg  = ceil(ProductReview::where($matchThese)->orderBy('created_at','desc')->avg('product_review'));

        $productCategoryId = ProductsCategory::where(['product_id' => $id])->first();

        for ($i=0;;$i++) { 
            if($i==0){
                $categoryId = Category::where(['id' => $productCategoryId->category_id])->first();
            }
            else{
                $categoryId = Category::where(['id' => $categoryId->parent_id])->first();
            }

            if($categoryId->parent_id==0){
                if($categoryId->name=='TELEVISION'){
                    $categoryId         = Category::where(['name' => 'TELEVISION'])->first();
                    $allProducts        = $categoryId->products;
                }
                elseif($categoryId->name=='AIR CONDITIONAR'){
                    $categoryId         = Category::where(['name' => 'AIR CONDITIONAR'])->first();
                    $allProducts        = $categoryId->products;
                }
                elseif($categoryId->name=='REFRIGERATOR'){
                    $categoryId         = Category::where(['name' => 'REFRIGERATOR'])->first();
                    $allProducts        = $categoryId->products;
                }
                elseif($categoryId->name=='FREEZER'){
                    $categoryId         = Category::where(['name' => 'FREEZER'])->first();
                    $allProducts        = $categoryId->products;
                }
                elseif($categoryId->name=='HOME APPLIANCES'){
                    $categoryId         = Category::where(['name' => 'HOME APPLIANCES'])->first();
                    $allProducts        = $categoryId->products;
                }
                elseif($categoryId->name=='Accessories'){
                    $categoryId         = Category::where(['name' => 'Accessories'])->first();
                    $allProducts        = $categoryId->products;
                }
                break;
            } 
        }
        foreach($allCategory as $category){
            if ($category['name']=='Free Shipping Cost'){
                $free_shipping = explode(',',$category['description']);
            }
        } 

        return view('front.home.show-product',compact(['id','product','mostPopularAll','mostViewedAll','cartProducts','productReview','categorycount',
        'productReviewAvg','allCategory','allProducts','free_shipping']));
    }

    public function allProducts($id=null){
        //dd($id);
        $allCategory        = Category::all();

        $rootColorName      = Category::where('name','=','COLOR')->first();
        $colorNameAll       = Category::where('parent_id','=',$rootColorName->id)->get();

        $uniqueColorName    = [];
        $colorName          = [];

        for ($i=0;;$i++) { 
            if($i==0){
                $categoryId = Category::where(['id' => $id])->first();
            }
            else{
                $categoryId = Category::where(['id' => $categoryId->parent_id])->first();
            }
            if($categoryId->parent_id==0){
                if($categoryId->name=='TELEVISION'){
                    $categoryId         = Category::where(['name' => 'TELEVISION'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'LED TV Banner'])->first();
                }
                elseif($categoryId->name=='AIR CONDITIONAR'){
                    $categoryId         = Category::where(['name' => 'AIR CONDITIONAR'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Air Conditioner Banner'])->first();
                }
                elseif($categoryId->name=='REFRIGERATOR'){
                    $categoryId         = Category::where(['name' => 'REFRIGERATOR'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Refrigerators Banner'])->first();
                }
                elseif($categoryId->name=='FREEZER'){
                    $categoryId         = Category::where(['name' => 'FREEZER'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Refrigerators Banner'])->first();
                }
                elseif($categoryId->name=='HOME APPLIANCES'){
                    $categoryId         = Category::where(['name' => 'HOME APPLIANCES'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Kitchen Appliance Banner'])->first();
                }
                elseif($categoryId->name=='Accessories'){
                    $categoryId         = Category::where(['name' => 'Accessories'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Kitchen Appliance Banner'])->first();
                }
                break;
            } 
        }

        $colorId = null;
        if($id==null){
            $products = Product::all();
        }
        else{
            $productCategory       = Category::where(['id' => $id])->first();
            $products              = $productCategory->products;
            $minPrice              = $productCategory->products->min('price');
            $maxPrice              = $productCategory->products->max('price');           
        } 

        foreach ($products as $key1 => $value1) {
            foreach ($colorNameAll as $key2 => $value2) {
                $categoryColor  = ProductsCategory::where('product_id', '=', $value1->id)
                ->where('category_id', '=', $value2->id)
                ->first();

                if($categoryColor!=''){
                    $colorName[] = $value2;
                }
            }
        }

        if(count($colorName)>0){
            $uniqueColorName =  array_unique($colorName);
            usort($uniqueColorName, function($a, $b) {
                return $a->name <=> $b->name;
            });
        }
        
        $priceRange =  null;
        return view('front.home.products',compact(['id','products','colorId','bannerImageAll','categoryIdAll','categoryId',
        'priceRange','minPrice','maxPrice','uniqueColorName','allCategory'])); 
    }

    public function priceFilter(Request $request,$id,$colorId=null){
        $allCategory        = Category::all();

        $rootColorName      = Category::where('name','=','COLOR')->first();
        $colorNameAll       = Category::where('parent_id','=',$rootColorName->id)->get();
        $uniqueColorName    = [];
        $colorName          = [];
        

        $priceRange =  $request->priceRangce;
        if($colorId == null){
            $categoryProduct       = Category::where(['id' => $id])->first();
            $categoryProductAll    = $categoryProduct->products;
            $minPrice              = $categoryProduct->products->min('price');
            $maxPrice              = $categoryProduct->products->max('price');
            $products              = [];
            foreach ($categoryProductAll as $key => $value) {
                if($value->price <= $request->priceRangce){
                    $products[] = $value;
                }
            }
        }
        else{
            $maxPrice           = 0;
            $minPrice           = 0;
            $products           = [];
            $matchThese         = ['id' => $id];
            $categoryProduct    = Category::where($matchThese)->first();
            $categoryProductAll = $categoryProduct->products;

            foreach ($categoryProductAll as $key => $value) {
                $categoryColor  = ProductsCategory::where('product_id', '=', $value->pivot->product_id)
                ->where('category_id', '=', $colorId)
                ->get();
                if(count($categoryColor)>0){
                    $products[] = $value;
                }  
            }
            if(count($products)>0){
                $maxPrice      = max(array_column($products, 'price'));
                $minPrice      = min(array_column($products, 'price'));
            } 
        };

        //dd($products);

        foreach ($products as $key1 => $value1) {
            foreach ($colorNameAll as $key2 => $value2) {
                $categoryColor  = ProductsCategory::where('product_id', '=', $value1->id)
                ->where('category_id', '=', $value2->id)
                ->first();

                if($categoryColor!=''){
                    $colorName[] = $value2;
                }
            }
        }

        $uniqueColorName =  array_unique($colorName);
        
        usort($uniqueColorName, function($a, $b) {
            return $a->name <=> $b->name;
        });

        for ($i=0;;$i++) { 
            if($i==0){
                $categoryId = Category::where(['id' => $id])->first();
            }
            else{
                $categoryId = Category::where(['id' => $categoryId->parent_id])->first();
            }
            if($categoryId->parent_id==0){
                if($categoryId->name=='TELEVISION'){
                    $categoryId         = Category::where(['name' => 'TELEVISION'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'LED TV Banner'])->first();
                }
                elseif($categoryId->name=='AIR CONDITIONAR'){
                    $categoryId         = Category::where(['name' => 'AIR CONDITIONAR'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Air Conditioner Banner'])->first();
                }
                elseif($categoryId->name=='REFRIGERATOR'){
                    $categoryId         = Category::where(['name' => 'REFRIGERATOR'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Refrigerators Banner'])->first();
                }
                elseif($categoryId->name=='FREEZER'){
                    $categoryId         = Category::where(['name' => 'FREEZER'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Refrigerators Banner'])->first();
                }
                elseif($categoryId->name=='HOME APPLIANCES'){
                    $categoryId         = Category::where(['name' => 'HOME APPLIANCES'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Kitchen Appliance Banner'])->first();
                }
                elseif($categoryId->name=='Accessories'){
                    $categoryId         = Category::where(['name' => 'Accessories'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Kitchen Appliance Banner'])->first();
                }
                break;
            } 
        }

        return view('front.home.products',compact(['id','products','bannerImageAll','colorId','categoryIdAll','categoryId','priceRange',
        'minPrice','maxPrice','uniqueColorName','allCategory']));  
    }

    public function bestSellerProduct($id){
        $allCategory        = Category::all();

        $rootColorName      = Category::where('name','=','COLOR')->first();
        $colorNameAll       = Category::where('parent_id','=',$rootColorName->id)->get();
        $uniqueColorName    = [];
        $colorName          = [];

        for ($i=0;;$i++) { 
            if($i==0){
                $bestSellerProducts = Category::where(['id' => $id])->first();  
            }
            else{
                $bestSellerProducts = Category::where(['id' => $bestSellerProducts->parent_id])->first();
            }

            if($bestSellerProducts->parent_id==0){
                if($bestSellerProducts->name=='TELEVISION'){
                    $categoryId         = Category::where(['name' => 'TELEVISION'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'LED TV Banner'])->first();
                }
                elseif($bestSellerProducts->name=='AIR CONDITIONAR'){
                    $categoryId         = Category::where(['name' => 'AIR CONDITIONAR'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Air Conditioner Banner'])->first();
                }
                elseif($bestSellerProducts->name=='REFRIGERATOR'){
                    $categoryId         = Category::where(['name' => 'REFRIGERATOR'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Refrigerators Banner'])->first();
                }
                elseif($bestSellerProducts->name=='FREEZER'){
                    $categoryId         = Category::where(['name' => 'FREEZER'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Refrigerators Banner'])->first();
                }
                elseif($bestSellerProducts->name=='HOME APPLIANCES'){
                    $categoryId         = Category::where(['name' => 'HOME APPLIANCES'])->first();
                    $categoryIdAll      = Category::where(['parent_id' =>$categoryId->id])->get();
                    $bannerImageAll     = Category::where(['name' => 'Kitchen Appliance Banner'])->first();
                }
                break;    
            } 
        }

        $colorId = null;
        if($id==null){
            $products = Product::all();
        }
        else{
            $productCategory       = Category::where(['id' => $id])->first();
            $products              = $productCategory->products;   
            $minPrice              = $productCategory->products->min('price');
            $maxPrice              = $productCategory->products->max('price');         
        } 

        foreach ($products as $key1 => $value1) {
            foreach ($colorNameAll as $key2 => $value2) {
                $categoryColor  = ProductsCategory::where('product_id', '=', $value1->id)
                ->where('category_id', '=', $value2->id)
                ->first();

                if($categoryColor!=''){
                    $colorName[] = $value2;
                }
            }
        }

        $uniqueColorName =  array_unique($colorName);
        
        usort($uniqueColorName, function($a, $b) {
            return $a->name <=> $b->name;
        });


        $priceRange =  null;
        return view('front.home.products',compact(['id','products','colorId','bannerImageAll','categoryIdAll','categoryId',
        'priceRange','minPrice','maxPrice','uniqueColorName','allCategory']));
        
    }

    public function detectLocation($mode){
        if($mode == 'delivery'){
            Session::put('Mode','Delivery');
        }else{
            Session::put('Mode','Take-Away');
        }
        return view('front.location.search-location',['mode'=>$mode]);
    }

    public function saveLocation($location, $store, $mode){
        Session::put('Location', $location);
        if ($mode == 'delivery') {
            $storeDetails = Store::where('tag', '=', $store)->first();
            if ($storeDetails) {
                Session::put('StoreID', $storeDetails->id);
                if (time() >= (strtotime($storeDetails->start_time)) && (time() <= strtotime($storeDetails->start_time))) {
                    return redirect()->route('/')->with('message', $storeDetails->name . ' open from ' . HelperClass::timeOnly($storeDetails->start_time) . ' To ' . HelperClass::timeOnly($storeDetails->end_time));
                }else{
                    Session::put('Mode', 'Delivery');
                    return redirect()->route('category-product', ['id' => 2]);
                }
            } else {
                return redirect()->route('/')->with('message', 'No Location Found');
            }
        }elseif ($mode == 'takeaway' && $location == 'false'){       // Wants to Take-Away in a Delivery Area
            $storeDetails = Store::where('tag', '=', $store)->first();
            if (time() >= (strtotime($storeDetails->start_time)) && (time() <= strtotime($storeDetails->start_time))) {
                return redirect()->route('/')->with('message', $storeDetails->name . ' open from ' . HelperClass::timeOnly($storeDetails->start_time) . ' To ' . HelperClass::timeOnly($storeDetails->end_time));
            }else {
                Session::put('Mode', 'Take-Away');
                return redirect()->route('category-product', ['id' => 2]);
            }
        }
        else {
            Session::put('Mode', 'Take-Away');
            return redirect()->route('stores', ['storeTags' => $store]);
        }

    }

    public function allStores($storeTags){
        $user_nearest_stores = explode(',', $storeTags);
        $store_list = [];
        $distance = [];
        $j = 0;
        for($i = 0; $i < sizeof($user_nearest_stores); $i+=2){
            $store_list[$j]['tag'] = $user_nearest_stores[$i];
            $distance[$j] = $store_list[$j]['distance'] = $user_nearest_stores[$i+1];
            $j++;
        }
        array_multisort($distance, SORT_ASC, $store_list);

        foreach ($store_list as $key=>$value){
            $store = Store::where('tag','=',$value['tag'])->first();
            $store_list[$key]['id'] = $store['id'];
            $store_list[$key]['name'] = $store['name'];
            $store_list[$key]['location'] = $store['location'];
            $store_list[$key]['start_time'] = $store['start_time'];
            $store_list[$key]['end_time'] = $store['end_time'];
        }
        if($store_list){
            return view('front.stores.store-selection',['stores'=>$store_list]);
        }else{
            return redirect()->route('/');
        }
    }

    public function saveStore($id){
        $storeDetails = Store::where('id', '=', $id)->first();
        if ($storeDetails) {
            if (time() >= (strtotime($storeDetails->start_time)) && (time() <= strtotime($storeDetails->start_time))) {
                return redirect()->route('/')->with('message', $storeDetails->name . ' open from ' . HelperClass::timeOnly($storeDetails->start_time) . ' To ' . HelperClass::timeOnly($storeDetails->end_time));
            }else {
                Session::put('StoreID', $id);
                return redirect()->route('category-product', ['id' => 2]);
            }
        } else {
            return redirect()->route('/')->with('message', 'No Location Found');
        }
    }

    public function categoryProduct($category_id){
        $categories = Category::where('publication_status',1)->orderBy('order', 'ASC')->get();
        //        return Session::get('Mode');
        $category = Category::find($category_id);
        $products = $category->products;
        $carts = Cart::content();
        $store = Store::where('id','=',Session::get('StoreID'))->first();
        if($store){
            return view('front.category.category-product',[
                'products' => $products,
                'categories' => $categories,
                'carts' => $carts,
                'storeName' => $store->name
            ]);
        }

        //        $products = Product::where('category_id',$category_id)
        //            ->orderBy('id','asc')
        //            ->paginate(3);
        //        return $products;
    }

    public function ajaxProductDetails($product_id){
        $product = Product::with(['addons','ingredients'])->find($product_id);
        //        echo $product;
        //        $orders = DB::table('products')
        //            ->join('customers','orders.customer_id','=','customers.id')
        //            ->join('payments','orders.id','=','payments.order_id')
        //            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')->get();
        //
        //        $inventories = DB::table('products')
        //            ->leftJoin('addons', function($q) {
        //            $q->on('addons.model_id', '=', 'inventories.id');
        //            $q->where('media.model_type', '=', 'App\Models\Inventory');
        //            $q->orderBy('media.order_column', 'asc');
        //            $q->groupBy('model.model_id');
        //        });

        echo $product;
    }

    public function aboutUs(){
        return view('front.static-pages.about-us');
    }

    public function storeLocator($id = null){
        //dd($id);
        $allCategory        = Category::all();
        $divisionRoot       = Category::where(['name' => 'Store Locator'])->first();
        $divisionAll        = Category::where(['parent_id' =>$divisionRoot->id])->orderBy('name','asc')->get();

        
        $storeInformationAll= [];
        foreach ($divisionAll as $key => $divisionName) {
            if(isset($divisionName['children'])){
                foreach ($divisionName['children'] as $key => $districtonName) {
                    if(isset($districtonName['children'])){
                        foreach ($districtonName['children'] as $key => $storeInformation) {
                            $storeInformationAll[] = $storeInformation;
                        }
                    }
                }
            }
        }

        //dd($divisionAll,$storeInformationAll);
        $storeInfomation = null;
        if($id==null){
            //dd('Hello');
        }
        else{
            $storeInfomation    = Category::where(['id' => $id])->first();
            //dd($storeInfomation);
        }

        return view('front.static-pages.storeLocator',compact(['divisionAll',
        'id','storeInfomation','storeInformationAll','allCategory']));

    }

    public function dealerLocator($id = null){
        //dd($id);
        $allCategory        = Category::all();

        $divisionRoot       = Category::where(['name' => 'Store Locator'])->first();
        $divisionAll        = Category::where(['parent_id' =>$divisionRoot->id])->orderBy('name','asc')->get();

        $storeInfomation    = null;
        if($id==null){
            //dd('Hello');
        }
        else{
            $storeInfomation    = Category::where(['id' => $id])->first();
            //dd($storeInfomation);
        }

        return view('front.static-pages.dealerLocator',compact(['divisionAll','id','storeInfomation','allCategory']));

    }

    public function serviceCenter(){
        $allCategory        = Category::all();

        $divisionRoot       = Category::where(['name' => 'Store Locator'])->first();
        $divisionAll        = Category::where(['parent_id' =>$divisionRoot->id])->orderBy('name','asc')->get();

        return view('front.static-pages.serviceCenter',compact(['divisionAll','allCategory']));
    }

    public function corporateInfo(){
        $allCategory        = Category::all();

        $divisionRoot       = Category::where(['name' => 'Store Locator'])->first();
        $divisionAll        = Category::where(['parent_id' =>$divisionRoot->id])->orderBy('name','asc')->get();

        return view('front.static-pages.corporateInfo',compact(['divisionAll','allCategory']));
    }

    public function corporateInfoStore(Request $request){
        //dd($request->all());

        $request->validate([
            'full_name'                 => ['required'],
            'company_name'              => ['required'],
            'contact_number'            => ['required'],
            'email_address'             => ['required'],
            'address'                   => ['required'],
            'country'                   => ['required'],
            'city'                      => ['required'],
            'inlineRadioOptions'        => ['required'],
            'category'                  => ['required'],
            'enquiry'                   => ['required'],

        ]);

        $corporateSale = new CorporateSale();
        $corporateSale->full_name = $request->full_name;
        $corporateSale->email_address = $request->email_address;
        $corporateSale->company_name = $request->company_name;
        $corporateSale->contact_number = $request->contact_number;
        $corporateSale->address = $request->address;
        $corporateSale->country = $request->country;
        $corporateSale->city = $request->city;
        $corporateSale->enquiry_type = $request->inlineRadioOptions;
        $corporateSale->category = $request->category;
        $corporateSale->enquiry = $request->enquiry;
        $corporateSale->save();
        return redirect()->route('/');
    }

    public function searchProduct(Request $request){
        $allCategory        = Category::all();
        $searchAllPdoduct = [];
        if($request->search == null && $request->productCategory =='All products'){
            session()->flash('message',"No product select");
            dd('1');
        }
        elseif($request->search != null && $request->productCategory != 'All products'){
            $searchAllPdoduct1   = Product::where('title','LIKE','%'.$request->search.'%')
                                    ->orWhere('specification','LIKE','%'.$request->search.'%')
                                    ->orWhere('additional_information','LIKE','%'.$request->search.'%')
                                    ->orWhere('description','LIKE','%'.$request->search.'%')
                                    ->orWhere('price','LIKE','%'.$request->search.'%')
                                    ->orWhere('sale_price','LIKE','%'.$request->search.'%')
                                    ->get();
            $categoryIdTv        = Category::where(['name' => $request->productCategory])->first();
            $searchAllPdoduct2   = $categoryIdTv->products;
            if(count($searchAllPdoduct1)>0 && count($searchAllPdoduct2)>0){
                $searchAllPdoduct = [];
                foreach ($searchAllPdoduct1 as $key => $value) {
                    $searchAllPdoduct[] = $value;
                }
                foreach ($searchAllPdoduct2 as $key => $value) {
                    $searchAllPdoduct[] = $value;
                }
            }
            elseif(count($searchAllPdoduct1)>0){
                $searchAllPdoduct = $searchAllPdoduct1;
            }
            elseif(count($searchAllPdoduct2)>0){
                $searchAllPdoduct = $searchAllPdoduct2;
            } 
            else{
                session()->flash('message',"$request->search && $request->productCategory does not exist");
            }   
        }
        elseif($request->search!=null){
            $searchAllPdoduct   = Product::where('title','LIKE','%'.$request->search.'%')
                                    ->orWhere('specification','LIKE','%'.$request->search.'%')
                                    ->orWhere('additional_information','LIKE','%'.$request->search.'%')
                                    ->orWhere('description','LIKE','%'.$request->search.'%')
                                    ->orWhere('price','LIKE','%'.$request->search.'%')
                                    ->orWhere('sale_price','LIKE','%'.$request->search.'%')
                                    ->get();
            if(count($searchAllPdoduct)>0){
            }
            else{
                session()->flash('message',"$request->search does not exist");
            }
        }
        elseif($request->productCategory!='All products'){
            $categoryIdTv           = Category::where(['name' => $request->productCategory])->first();
            $searchAllPdoduct       = $categoryIdTv->products;
            if(count($searchAllPdoduct)>0){  
            }
            else{
                session()->flash('message',"$request->productCategory does not exist");
            }
        }
        

        return view('front.home.searchProducts',compact(['searchAllPdoduct','allCategory']));
        //dd($searchAllPdoduct);
    }

    public function contactUs(){
        $allCategory        = Category::all();
        
        return view('front.static-pages.contact-us',compact(['allCategory']));
    }

    public function customerComments(Request $request){
        //dd($request->all());
        // $this->validate($request,[
        //     'name'           => ['required', 'string', 'max:255'],
        //     'phone_number'   => ['required', 'string', 'max:14'],
        //     'email_address'  => ['required', 'string', 'email', 'max:255', 'unique:customers']
        // ]);

        $customerInfo                      = new Customer;
        $customerInfo->name                = $request->input('name');
        $customerInfo->email_address       = $request->input('email');
        $customerInfo->phone_number        = $request->input('phone');
        $customerInfo->comment             = $request->input('comment');
        if($customerInfo->save()){
            return redirect('/')->with('message','Comment Submit Successful');
        }
    }

    public function returnsContact(){
        $allCategory        = Category::all();
        return view('front.static-pages.return-us',compact(['allCategory']));
    }

    public function warrantyPolicy(){
        $allCategory        = Category::all();
        return view('front.static-pages.warranty',compact(['allCategory']));
    }

    public function companyOverView(){
        $allCategory        = Category::all();
        $divisionRoot       = Category::where(['name' => 'Store Locator'])->first();
        $divisionAll        = Category::where(['parent_id' =>$divisionRoot->id])->orderBy('name','asc')->get();

        return view('front.static-pages.companyOverView',compact(['allCategory','divisionAll']));
    }

    public function acTonCalculation(){
        $allCategory        = Category::all();
        return view('front.home.acCalculation',compact(['allCategory']));    
    }

    public function tonCalculationRecommend(Request $request){
        $request->validate([
            'roomWidth'         => ['required'],
            'roomLength'        => ['required'],
            'roomHeight'        => ['required'],
            'window'            => ['required'],
            'door'              => ['required'],
            'people'            => ['required']
        ]);

        $roomWidth              = $request->roomWidth;
        $roomLength             = $request->roomLength;
        $roomHeight             = $request->roomHeight;
        $allCategory            = Category::all();
        $suggestAcTon           = null;
        $conditionalValue       = null;
        $notFound               = '';
        $allSuggestAC           = array();

        if(($roomWidth*$roomLength*$roomHeight)>=1200 && ($roomWidth*$roomLength*$roomHeight)<=1300){
            $suggestAcTon       = '1'; 
            $conditionalValue   = '1.0 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>1300 && ($roomWidth*$roomLength*$roomHeight)<=1800){
            $suggestAcTon       = '1.5';
            $conditionalValue   = '1.5 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>1800 && ($roomWidth*$roomLength*$roomHeight)<=2400){
            $suggestAcTon       = '2.0';
            $conditionalValue   = '2.0 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>2400 && ($roomWidth*$roomLength*$roomHeight)<=3000){
            $suggestAcTon       = '2.5';
            $conditionalValue   = '2.5 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>3000 && ($roomWidth*$roomLength*$roomHeight)<=3600){
            $suggestAcTon       = '3.0';
            $conditionalValue   = '3.0 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>3600 && ($roomWidth*$roomLength*$roomHeight)<=4200){
            $suggestAcTon       = '3.5';
            $conditionalValue   = '3.5 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>4200 && ($roomWidth*$roomLength*$roomHeight)<=4800){
            $suggestAcTon       = '4.0';
            $conditionalValue   = '4.0 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>4800 && ($roomWidth*$roomLength*$roomHeight)<=5400){
            $suggestAcTon       = '4.5';
            $conditionalValue   = '4.5 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        elseif(($roomWidth*$roomLength*$roomHeight)>5400 && ($roomWidth*$roomLength*$roomHeight)<=6000){
            $suggestAcTon       = '5.0';
            $conditionalValue   = '5.0 ton';
            $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
        }
        else{
            if(($roomWidth*$roomLength*$roomHeight)<1200){
                $suggestAcTon       = '1.0';
                $conditionalValue   = '1.0 ton';
                $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
            }else{
                $suggestAcTon       = '5.0';
                $conditionalValue   = '5.0 ton';
                $allSuggestAC       = Product::where('specification','LIKE','%'.$conditionalValue.'%')->get();
            }  
        }
        return view('front.home.acCalculation',compact(['allCategory','allSuggestAC','suggestAcTon']));
    }

    public function back(){
        return back();
    }

    public function DownloadBrotuiar(){
        $brotuiar  = Setting::where('name','brotuiar')->first();
        $ext = pathinfo($brotuiar->value, PATHINFO_EXTENSION);
        if($brotuiar!=null){
            return Response::download($brotuiar->value, 'nitol-electronic-brotuiar.'.$ext);
        }else{
            return $this->back();
        }
    }
}
