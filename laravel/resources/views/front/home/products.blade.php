@section('stylesheet')

@endsection

@extends('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'])
@section('title')
    Nitol | Home
@endsection
@section('body')


    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                {{-- <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Digital & Electronics</span></li> --}}
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="{{asset($bannerImageAll->image)}}" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">{{$categoryId->name}}</h1>

                    <div class="wrap-right">

                        {{-- <div class="sort-item orderby ">
                            <select name="orderby" class="use-chosen" >
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div> --}}

                        {{-- <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" >
                                <option value="12" selected="selected">12 per page</option>
                                <option value="16">16 per page</option>
                                <option value="18">18 per page</option>
                                <option value="21">21 per page</option>
                                <option value="24">24 per page</option>
                                <option value="30">30 per page</option>
                                <option value="32">32 per page</option>
                            </select>
                        </div> --}}

                        {{-- <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="flaticon-squares"></i>Grid</a>
                            <a href="#" class="list-mode display-mode"><i class="flaticon-interface"></i>List</a>
                        </div> --}}

                    </div>

                </div><!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">
                        @foreach($products as $product)
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure>
                                                @if($product->image1)
                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                @else
                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                @endif
                                            </figure>
                                            {{--<img src="{{asset('/')}}client_end/images/products/digital_20.jpg" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>--}}
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                            <span>
                                                {{$product->title}}
                                                @if($product->ac_capacity!=null)
                                                    {{$product->ac_capacity}} TON
                                                @endif

                                                @if($product->screen_size!=null)
                                                    {{$product->screen_size}}"
                                                @endif
                                                
                                                @if($product->capacity_litre!=null)
                                                    {{$product->capacity_litre}} Ltr
                                                @endif
                                            </span>
                                        </a>
                                        <div class="wrap-price">
                                            @if($product->sale_price==0 && $product->discount==0)
                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                            @elseif($product->sale_price>0)
                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                            @else
                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                            @endif
                                        </div>
                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="wrap-pagination-info">
                    <ul class="page-numbers">
                        {{-- {{$products->links()}} --}}
                    </ul>
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">{{$categoryId->name}}</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach ($categoryIdAll as $item)
                                <li class="category-item has-child-cate">
                                    <a href="{{url('')}}/products/{{$item->id}}" class="cate-link">{{$item->name}}</a>
                                    @if(count($item['children'])>0)
                                        <span class="toggle-control">+</span>
                                        @foreach($item['children'] as $subcategory)
                                            <ul class="sub-cate">
                                                <li class="category-item has-child-cate">
                                                    <a href="{{url('')}}/products/{{$subcategory->id}}" class="cate-link">{{$subcategory->name}}</a>
                                                </li>
                                            </ul>
                                        @endforeach
                                    @endif 
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Price</h2>
                    <div class="widget-content">
                        {{-- <div id="slider-range"></div> --}}
                        <form method="POST" action="{{url('')}}/price/priceFilter/{{$id}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <p>
                                <label for="amount">Price:</label>
                                {{-- <input id="slider" name="priceRangce" type="range" min="100" max="10000" step="10"> --}}
                                
                                @if ($priceRange==null)
                                    <input id="slider" name="priceRangce" type="range" min="{{$minPrice}}" max="{{$maxPrice}}" step="10" oninput="priceRange(this.value)">
                                @else
                                    <input id="slider" name="priceRangce" type="range" value="{{$priceRange}}" min="{{$minPrice}}" max="{{$maxPrice}}" step="10" oninput="priceRange(this.value)">
                                @endif

                                @if ($priceRange==null)
                                    <p id="currentPrice">৳ {{ceil(($minPrice+$maxPrice)/2)}}</p>
                                @else
                                    <p id="currentPrice">৳ {{$priceRange}}</p>
                                @endif
                                
                                {{-- <input type="text" id="amount" oninput="priceRange(this.value)" readonly> --}}
                                <button class="filter-submit">Filter</button>
                            </p>
                        </form>
                    </div>
                </div><!-- Price-->

                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Color</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list has-count-index">
                            @php
                                $rootColorName = \App\Category::where('name','=','COLOR')->first();
                                $colorName     = \App\Category::where('parent_id','=',$rootColorName->id)->get();    
                            @endphp
                            @foreach ($uniqueColorName as $item)
                                @if ($item->id==$colorId) 
                                    <input type="checkbox" class="list-item" name="vehicle" value="{{$item->id}}" checked>
                                    <a class="filter-link" href="{{url('')}}/price/priceFilter/{{$id}}/{{$item->id}}">
                                        <span>{{$item->name}}</span>
                                    </a><br>
                                    {{-- <li class="list-item">
                                        <a class="filter-link" href="{{url('')}}/price/priceFilter/{{$id}}/{{$item->id}}">
                                            <span checked>{{$item->name}}</span>
                                        </a>
                                    </li>  --}}
                                @else
                                    <input type="checkbox" class="list-item" name="vehicle" value="{{$item->id}}">
                                    <a class="filter-link" href="{{url('')}}/price/priceFilter/{{$id}}/{{$item->id}}">
                                        <span>{{$item->name}}</span>
                                    </a><br>
                                {{-- <li class="list-item"><a class="filter-link" href="{{url('')}}/price/priceFilter/{{$id}}/{{$item->id}}"><span>{{$item->name}}</span></a></li>  --}}
                                @endif
                                
                            @endforeach
                            {{-- <li class="list-item"><a class="filter-link " href="{{url('')}}/price/priceFilter/{{$id}}/60">Red <span>(217)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="{{url('')}}/price/priceFilter/{{$id}}/61">Yellow <span>(179)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="{{url('')}}/price/priceFilter/{{$id}}/62">Black <span>(79)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="{{url('')}}/price/priceFilter/{{$id}}/63">Blue <span>(283)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="{{url('')}}/price/priceFilter/{{$id}}/64">Grey <span>(116)</span></a></li>
                            <li class="list-item"><a class="filter-link " href="{{url('')}}/price/priceFilter/{{$id}}/65">Pink <span>(29)</span></a></li> --}}
                        </ul>
                    </div>
                </div><!-- Color -->

                
                <!-- brand widget-->

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

@endsection
@section('script')
<script>
    // function priceRange(priceRangeValue) {
    //     alert(priceRangeValue);
    //     $.ajax({
    //         type: "POST",
    //         url: "{{url('')}}/api/product/filterProduct/"+priceRangeValue,
    //         success: function (response) {
    //             document.getElementById("currentPrice").innerHTML ='৳'+' '+priceRangeValue;
    //             console.log(response);
    //         }
    //     });
    // }
    function priceRange(value){
        document.getElementById("currentPrice").innerHTML ='৳'+' '+value;
    }
</script>
@endsection

