@section('stylesheet')

@endsection

@extends('front.master', ['body_class' => 'home-page home-03','main_class' => 'main-site'])
@section('title')
    Nitol | Home
@endsection
@section('body')
    <div class="container">
        <div class="wrap-top-banner-3">
            <!--SLIDER-->

            <div id="layerslider2" style="width: 70.9401709402%; height:375px;padding:0;" class="wrap-main-slide-3">
                <!-- 1 slide -->
                <div class="ls-slide" data-ls="transition2d: 5; slidedelay: 7000;">
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider1/bg.jpg" class="ls-bg" alt="TestImage2">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider1/AC.png" class="ls-l" style="top:45%; left: 30%;" alt="TestImage2" data-ls="offsetxin: 0; offsetyin:-15%; easingin:easeOutCubic; delayin:1000; durationin:600; offsetxout:0; offsetyout: -100%;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider1/bottom-icon.png" class="ls-l" style="top:85%; left: 25%;" alt="TestImage2" data-ls="offsetxin: 0; offsetxout: 0; offsetyin: 50; delayin:1000; easingin:easeOutCubic; durationin:5000;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider1/RIGHT-text.png" class="ls-l" style="top:50%; left:80%;" alt="TestImage2" data-ls="durationin: 2000; delayin: 1000; offsetxout:0;">                                                          
                </div>


                <!-- 2 slide -->
                <div class="ls-slide" data-ls="transition2d: 5; slidedelay: 7000;">
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider2/2bg.jpg" class="ls-bg" alt="TestImage2">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider2/tex-1.png" class="ls-l" style="top:40%; left:50%;" alt="TestImage2" data-ls="offsetxin: 0; offsetyin:-15%; easingin:easeOutCubic; delayin:1000; durationin:1000; offsetxout:0; offsetyout: -100%;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider2/product.png" class="ls-l" style="top:50%; left:40%;" alt="TestImage2" data-ls="offsetxin: 0; offsetxout: 0; offsetyin: 100; delayin:1000; easingin:easeOutCubic; durationin:6000;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider2/text-2.png" class="ls-l" style="top:15%; left:85%;" alt="TestImage2" data-ls="durationin: 2000; delayin: 1000; offsetxout:0;">                                                          
                </div>

                <!-- 3 slide -->
                <div class="ls-slide" data-ls="transition2d: 5; slidedelay: 7000;">
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider3/bg-3.jpg" class="ls-bg" alt="TestImage2">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider3/product.png" class="ls-l" style="top:60%; left:35%;" alt="TestImage2" data-ls="offsetxin: 0; offsetyin:-15%; easingin:easeOutCubic; delayin:1000; durationin:1000; offsetxout:0; offsetyout: -100%;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider3/text-bottom.png" class="ls-l" style="top:85%; left: 75%;" alt="TestImage2" data-ls="offsetxin: 0; offsetxout: 0; offsetyin: 100; delayin:1000; easingin:easeOutCubic; durationin:6000;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider3/top-right-text.png" class="ls-l" style="top:15%; left:75%;" alt="TestImage2" data-ls="durationin: 2000; delayin: 1000; offsetxout:0;">                                                          
                </div>

                <!-- 4 slide -->
                <div class="ls-slide" data-ls="transition2d: 5; slidedelay: 7000;">
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider4/bg.jpg" class="ls-bg" alt="TestImage2">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider4/product.png" class="ls-l" style="top:55%; left: 30%;" alt="TestImage2" data-ls="offsetxin: 0; offsetyin:-15%; easingin:easeOutCubic; delayin:1000; durationin:1000; offsetxout:0; offsetyout: 100%;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider4/text2.png" class="ls-l" style="top:15%; left:75%;" alt="TestImage2" data-ls="durationin: 2000; delayin: 1000; offsetxout:0;">

                    <img src="{{asset('/')}}client_end/layerSlider/images/slider4/text1.png" class="ls-l" style="top:85%; left: 75%;" alt="TestImage2" data-ls="offsetxin: 0; offsetxout: 0; offsetyin: 100; delayin:1000; easingin:easeOutCubic; durationin:6000;">                                                          
                </div>

                <!-- 5 slide -->
                <div class="ls-slide" data-ls="transition2d: 5; slidedelay: 7000;">
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider5/bg.jpg" class="ls-bg" alt="TestImage2">
  
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider5/product.png" class="ls-l" style="top:55%; left: 30%;" alt="TestImage2" data-ls="offsetxin: 0; offsetyin:-15%; easingin:easeOutCubic; delayin:1000; durationin:1000; offsetxout:0; offsetyout: 100%;">
  
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider5/tex1.png" class="ls-l" style="top:15%; left:85%;" alt="TestImage2" data-ls="durationin: 2000; delayin: 1000; offsetxout:0;">
  
                    <img src="{{asset('/')}}client_end/layerSlider/images/slider5/tex2.png" class="ls-l" style="top:85%; left: 80%;" alt="TestImage2" data-ls="offsetxin: 0; offsetxout: 0; offsetyin: 100; delayin:1000; easingin:easeOutCubic; durationin:6000;">                                                          
                </div>   
            </div>


            {{-- <div class="wrap-main-slide-3">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    @foreach ($sliderImageAll as $key=>$item)
                        <div class="item-slide">
                            <img src="{{url('')}}/{{$item->image}}" alt="" class="img-slide" width="830" height="500">
                            <div class="wrap-banners type-{{$key}}">
                            </div>
                        </div>
                    @endforeach                    
                </div>
            </div> --}}



            <div class="banner-style-vertical">
                @foreach ($headerRightImageAll as $key=>$item)
                    <div class="banner-item">
                        <a href="#" class="link-banner banner-effect-1">
                            <figure><img src="{{url('')}}/{{$item->image}}" alt="" width="330" height="245"></figure>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div><!--end container-->

    <div class="container">
        <!-- PRODUCT DEAL-->
        <div class="wrap-show-advance-info-box style-3 ">
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-3">
                    <div class="tab-control">
                        <a href="#deal-01" class="tab-control-item active"> Best seller products</a>
                        <a href="#deal-02" class="tab-control-item"> New Arrival Products</a>
                        <a href="#deal-03" class="tab-control-item"> Top Rated products</a>
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="deal-01">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5"
                                data-loop="false"
                                data-nav="true"
                                data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($bestSellerAll as $key=>$item_one)
                                    @foreach ($item_one as $key=>$product)
                                        @if($product->publication_status)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                    <figure>
                                                        @if($product->image1)
                                                            <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                        @else
                                                            <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">Best Seller</span>
                                                </div>
                                                {{-- <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div> --}}
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
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="deal-02">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5"
                                data-loop="false"
                                data-nav="true"
                                data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                @foreach ($newArrivalsAll as $key=>$item_one)
                                    @foreach ($item_one as $key=>$product)
                                        @if($product->publication_status)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                    <figure>
                                                        @if($product->image1)
                                                            <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                        @else
                                                            <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">New Arrival</span>
                                                </div>
                                                {{-- <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div> --}}
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
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
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="deal-03">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                data-items="5"
                                data-loop="false"
                                data-nav="true"
                                data-dots="false"
                                data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                @foreach ($topRatedAll as $key=>$item_one)
                                    @foreach ($item_one as $key=>$product)
                                        @if($product->publication_status)
                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                    <figure>
                                                        @if($product->image1)
                                                            <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                        @else
                                                            <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                        @endif
                                                    </figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">Top Rated</span>
                                                </div>
                                                {{-- <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div> --}}
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
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
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                    @endforeach
                                @endforeach

                                {{-- <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure><img src="{{asset('/')}}client_end/images/products/digital_16.jpg" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                        <div class="product-rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <a href="#" class="count-review">(05 review)</a>
                                        </div>
                                        <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--TELEVISION Digital & Electronics-->
        <div class="wrap-combined-box">
            <div class="box-item wrap-show-advance-info-box style-1">
                <h3 class="title-box">Television</h3>
                <div class="wrap-top-banner">
                    <a href="{{ url('products',$tvId) }} "class="link-banner banner-effect-2">
                        <figure><img src="{{url('')}}/{{$bannerImageAll[0]->image}}" width="870" height="240" alt=""></figure>
                    </a>
                </div>
                
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#digital_1a" class="tab-control-item active">All Products</a>
                            <a href="#digital_1b" class="tab-control-item">Best Seller</a>
                            <a href="#digital_1c" class="tab-control-item">New Arrivals</a>
                            <a href="#digital_1d" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents tab-not-equal">

                            <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='TELEVISION')
                                            @php $productIdTv            = $category->products; @endphp
                                            @foreach($productIdTv as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        {{-- <div class="wrap-btn">
                                                            <a href="#" class="function-link">quick view</a>
                                                        </div> --}}
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
                                                                @if($product->screen_size!=null)
                                                                    {{$product->screen_size}}"
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
                                                    </div>
                                                </div>
                                                    @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="digital_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Best Seller TV')
                                            @php $productIdTv            = $category->products; @endphp
                                            @foreach($productIdTv as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
                                                                @if($product->screen_size!=null)
                                                                    {{$product->screen_size}}"
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="digital_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='New Arrivals TV')
                                            @php $productIdTv            = $category->products; @endphp
                                            @foreach($productIdTv as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">New Arrivalr</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
                                                                @if($product->screen_size!=null)
                                                                    {{$product->screen_size}}"
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="digital_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Top Rated TV')
                                            @php $productIdTv            = $category->products; @endphp
                                            @foreach($productIdTv as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Top Rated</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
                                                                @if($product->screen_size!=null)
                                                                    {{$product->screen_size}}"
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-item wrap-product-widget">
                <h3 class="title-box">Bestseller Products</h3>
                <div class="widget-content">
                    <ul class="products">

                        @foreach($allCategory as $category)                      
                            @if ($category['name']=='Best Seller TV')
                                @php $productIdTv            = $category->products; @endphp
                                @foreach($productIdTv as $key=>$product)
                                    @if($product->publication_status)
                                    @if ($key<5)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->specification}}">
                                                        <figure>
                                                            @if($product->image1)
                                                                <img src="{{asset($product->image1)}}"  alt="">
                                                            @else
                                                                <img src="https://via.placeholder.com/511x357">
                                                            @endif
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                        <span>
                                                            {{$product->title}}
                                                            @if($product->screen_size!=null)
                                                                {{$product->screen_size}}"
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
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                @endforeach
                                @if (count($productIdTv)>5)
                                    <li class="funtion-item">
                                        <a href="{{url('')}}/bestSellerProduct/{{$productIdTv[0]->pivot->category_id}}" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!--Tool & Equipments-->
        <div class="wrap-combined-box">
            <div class="box-item wrap-show-advance-info-box style-1">
                <h3 class="title-box">Air Conditioner <span class="ac_ton_calculation"><a href="{{url('')}}/ac_ton_calculation">জেনে নিন আপনার রুমের জন্য কত টনের এসি প্রয়োজন</a></span></h3>
                
                <div class="wrap-top-banner">
                    <a href="{{ url('products',$acId) }}" class="link-banner banner-effect-2">
                        <figure><img src="{{url('')}}/{{$bannerImageAll[1]->image}}" width="870" height="240" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#digital_1a" class="tab-control-item active">All Products</a>
                            <a href="#digital_1b" class="tab-control-item">Best Seller</a>
                            <a href="#digital_1c" class="tab-control-item">New Arrivals</a>
                            <a href="#digital_1d" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents tab-not-equal">

                            <div class="tab-content-item active" id="digital_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='AIR CONDITIONAR')
                                            @php $productIdAC            = $category->products; @endphp
                                            @foreach($productIdAC as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        {{-- <div class="wrap-btn">
                                                            <a href="#" class="function-link">quick view</a>
                                                        </div> --}}
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}  {{$product->ac_capacity}} TON</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="digital_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Best Seller AC')
                                            @php $productIdAC            = $category->products; @endphp
                                            @foreach($productIdAC as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}  {{$product->ac_capacity}} TON</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="digital_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='New Arrivals AC')
                                            @php $productIdAC            = $category->products; @endphp
                                            @foreach($productIdAC as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">New Arrivalr</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}  {{$product->ac_capacity}} TON</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="digital_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Top Rated AC')
                                            @php $productIdAC            = $category->products; @endphp
                                            @foreach($productIdAC as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Top Rated</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}  {{$product->ac_capacity}} TON</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-item wrap-product-widget">
                <h3 class="title-box">Bestseller Products</h3>
                <div class="widget-content">
                    <ul class="products">

                        @foreach($allCategory as $category)                      
                            @if ($category['name']=='Best Seller AC')
                                @php $productIdAC            = $category->products; @endphp
                                @foreach($productIdAC as $key=>$product)
                                    @if($product->publication_status)
                                    @if ($key<5)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->specification}}">
                                                        <figure>
                                                            @if($product->image1)
                                                                <img src="{{asset($product->image1)}}"  alt="">
                                                            @else
                                                                <img src="https://via.placeholder.com/511x357">
                                                            @endif
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->specification}}</span></a>
                                                    <div class="wrap-price">
                                                        @if($product->sale_price==0 && $product->discount==0)
                                                            <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                        @elseif($product->sale_price>0)
                                                            <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                        @else
                                                            <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                @endforeach
                                @if (count($productIdAC)>5)
                                    <li class="funtion-item">
                                        <a href="{{url('')}}/bestSellerProduct/{{$productIdAC[0]->pivot->category_id}}" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        
        <!--Refregarator-->
        <div class="wrap-combined-box">
            <div class="box-item wrap-show-advance-info-box style-1">
                <h3 class="title-box">Refrigerator</h3>
                <div class="wrap-top-banner">
                    <a href="{{ url('products',$rfgnId) }}" class="link-banner banner-effect-2">
                        <figure><img src="{{url('')}}/{{$bannerImageAll[2]->image}}" width="870" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#fashion_1a" class="tab-control-item active">All Products</a>
                            <a href="#fashion_1b" class="tab-control-item">Best Seller</a>
                            <a href="#fashion_1c" class="tab-control-item">New Arrivals</a>
                            <a href="#fashion_1d" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents tab-not-equal">

                            <div class="tab-content-item active" id="fashion_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='REFRIGERATOR')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        {{-- <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div> --}}
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    @foreach($allCategory as $category)                      
{{--                                        @if ($category['name']=='Best Seller Freeze')--}}
                                        @if ($category['name']=='Best Seller Refregerator')
                                            @php $productIdFreeze= $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
    
                            <div class="tab-content-item" id="fashion_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='New Arrivals Refregerator')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">New Arrivalr</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
{{--                                        @if ($category['name']=='Top Rated Freeze')--}}
                                        @if ($category['name']=='Top Rated Refregerator')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Top Rated</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-item wrap-product-widget">
                <h3 class="title-box">Bestseller Products</h3>
                <div class="widget-content">
                    <ul class="products">
                        @foreach($allCategory as $category)                      
{{--                            @if ($category['name']=='Best Seller Freeze')--}}
                            @if ($category['name']=='Best Seller Refregerator')
                                @php $productIdFreeze            = $category->products; @endphp
                                @foreach($productIdFreeze as $key=>$product)
                                    @if($product->publication_status)
                                    @if ($key<5)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->specification}}">
                                                        <figure>
                                                            @if($product->image1)
                                                                <img src="{{asset($product->image1)}}"  alt="">
                                                            @else
                                                                <img src="https://via.placeholder.com/511x357">
                                                            @endif
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                        <span>
                                                            {{$product->title}}
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
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                @endforeach
                                @if (count($productIdFreeze)>5)
                                    <li class="funtion-item">
                                        <a href="{{url('')}}/bestSellerProduct/{{$productIdFreeze[0]->pivot->category_id}}" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <!--Frezeer-->
        <div class="wrap-combined-box">
            <div class="box-item wrap-show-advance-info-box style-1">
                <h3 class="title-box">Frezeer</h3>
                <div class="wrap-top-banner">
                    <a href="{{ url('products',$freezerId) }}" class="link-banner banner-effect-2">
                        <figure><img src="{{url('')}}/{{$bannerImageAll[2]->image}}" width="870" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#fashion_1a" class="tab-control-item active">All Products</a>
                            <a href="#fashion_1b" class="tab-control-item">Best Seller</a>
                            <a href="#fashion_1c" class="tab-control-item">New Arrivals</a>
                            <a href="#fashion_1d" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents tab-not-equal">

                            <div class="tab-content-item active" id="fashion_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='FREEZER')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        {{-- <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div> --}}
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Best Seller Frezeer')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
    
                            <div class="tab-content-item" id="fashion_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='New Arrivals Frezeer')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">New Arrival</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Top Rated Frezeer')
                                            @php $productIdFreeze            = $category->products; @endphp
                                            @foreach($productIdFreeze as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Top Rated</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                            <span>
                                                                {{$product->title}}
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
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-item wrap-product-widget">
                <h3 class="title-box">Bestseller Products</h3>
                <div class="widget-content">
                    <ul class="products">
                        @foreach($allCategory as $category)                      
                            @if ($category['name']=='Best Seller Frezeer')
                                @php $productIdFreeze            = $category->products; @endphp
                                @foreach($productIdFreeze as $key=>$product)
                                    @if($product->publication_status)
                                    @if ($key<5)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->specification}}">
                                                        <figure>
                                                            @if($product->image1)
                                                                <img src="{{asset($product->image1)}}"  alt="">
                                                            @else
                                                                <img src="https://via.placeholder.com/511x357">
                                                            @endif
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name">
                                                        <span>
                                                            {{$product->title}}
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
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                @endforeach
                                @if (count($productIdFreeze)>5)
                                    <li class="funtion-item">
                                        <a href="{{url('')}}/bestSellerProduct/{{$productIdFreeze[0]->pivot->category_id}}" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>



        <!--Fashion & Accessories-->
        <div class="wrap-combined-box">
            <div class="box-item wrap-show-advance-info-box style-1">
                <h3 class="title-box">Home & Kitchen Appliance</h3>
                <div class="wrap-top-banner">
                    <a href="{{ url('products',$HAId) }}" class="link-banner banner-effect-2">
                        <figure><img src="{{asset('/')}}/{{$bannerImageAll[3]->image}}" width="870" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#fashion_1a" class="tab-control-item active">All Products</a>
                            <a href="#fashion_1b" class="tab-control-item">Best Seller</a>
                            <a href="#fashion_1c" class="tab-control-item">New Arrivals</a>
                            <a href="#fashion_1d" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents tab-not-equal">

                            <div class="tab-content-item active" id="fashion_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='HOME APPLIANCES')
                                            @php $productIdHomeAppliance            = $category->products; @endphp
                                            @foreach($productIdHomeAppliance as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        {{-- <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div> --}}
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Best Seller Home Appliance')
                                            @php $productIdHomeAppliance            = $category->products; @endphp
                                            @foreach($productIdHomeAppliance as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
        
                            <div class="tab-content-item" id="fashion_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='New Arrivals Home Appliance')
                                            @php $productIdHomeAppliance            = $category->products; @endphp
                                            @foreach($productIdHomeAppliance as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">New Arrivalr</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Top Rated Home Appliance')
                                            @php $productIdHomeAppliance            = $category->products; @endphp
                                            @foreach($productIdHomeAppliance as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Top Rated</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-item wrap-product-widget">
                <h3 class="title-box">Bestseller Products</h3>
                <div class="widget-content">
                    <ul class="products">
                        @foreach($allCategory as $category)                      
                            @if ($category['name']=='Best Seller Home Appliance')
                                @php $productIdHomeAppliance            = $category->products; @endphp
                                @foreach($productIdHomeAppliance as $key=>$product)
                                    @if($product->publication_status)
                                    @if ($key<5)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->specification}}">
                                                        <figure>
                                                            @if($product->image1)
                                                                <img src="{{asset($product->image1)}}"  alt="">
                                                            @else
                                                                <img src="https://via.placeholder.com/511x357">
                                                            @endif
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->specification}}</span></a>
                                                    <div class="wrap-price">
                                                        @if($product->sale_price==0 && $product->discount==0)
                                                            <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                        @elseif($product->sale_price>0)
                                                            <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                        @else
                                                            <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                @endforeach
                                @if (count($productIdHomeAppliance)>5)
                                    <li class="funtion-item">
                                        <a href="{{url('')}}/bestSellerProduct/{{$productIdHomeAppliance[0]->pivot->category_id}}" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>

        <!--Fashion & Accessories-->
        <div class="wrap-combined-box">
            <div class="box-item wrap-show-advance-info-box style-1">
                <h3 class="title-box">Accessories</h3>
                <div class="wrap-top-banner">
                    <a href="{{ url('products',$accessoriesId) }}" class="link-banner banner-effect-2">
                        <figure><img src="{{asset('/')}}/{{$bannerImageAll[3]->image}}" width="870" height="240" alt=""></figure>
                    </a>
                </div>
                <div class="wrap-products">
                    <div class="wrap-product-tab tab-style-1">
                        <div class="tab-control">
                            <a href="#fashion_1a" class="tab-control-item active">All Products</a>
                            <a href="#fashion_1b" class="tab-control-item">Best Seller</a>
                            <a href="#fashion_1c" class="tab-control-item">New Arrivals</a>
                            <a href="#fashion_1d" class="tab-control-item">Top Rated</a>
                        </div>
                        <div class="tab-contents tab-not-equal">

                            <div class="tab-content-item active" id="fashion_1a">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >

                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Accessories')
                                            @php $productIdAccessories            = $category->products; @endphp
                                            @foreach($productIdAccessories as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        {{-- <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div> --}}
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1b">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Best Seller Accessories')
                                            @php $productIdAccessories            = $category->products; @endphp
                                            @foreach($productIdAccessories as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Best Seller</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>
        
                            <div class="tab-content-item" id="fashion_1c">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='New Arrivals Accessories')
                                            @php $productIdAccessories            = $category->products; @endphp
                                            @foreach($productIdAccessories as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">New Arrivalr</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                            <div class="tab-content-item" id="fashion_1d">
                                <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                                    data-items="4"
                                    data-loop="false"
                                    data-nav="true"
                                    data-dots="false"
                                    data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"4"}}' >
                                    
                                    @foreach($allCategory as $category)                      
                                        @if ($category['name']=='Top Rated Accessories')
                                            @php $productIdAccessories            = $category->products; @endphp
                                            @foreach($productIdAccessories as $product)
                                                @if($product->publication_status)
                                                <div class="product product-style-2 equal-elem ">
                                                    <div class="product-thumnail">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                            <figure>
                                                                @if($product->image1)
                                                                    <img src="{{asset($product->image1)}}" width="800" height="800" alt="{{$product->title}}">
                                                                @else
                                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                                @endif
                                                            </figure>
                                                        </a>
                                                        <div class="group-flash">
                                                            <span class="flash-item new-label">Top Rated</span>
                                                        </div>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>
                                                        <div class="wrap-price">
                                                            @if($product->sale_price==0 && $product->discount==0)
                                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                            @elseif($product->sale_price>0)
                                                                <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                            @else
                                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach
                                        @endif
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="box-item wrap-product-widget">
                <h3 class="title-box">Bestseller Products</h3>
                <div class="widget-content">
                    <ul class="products">
                        @foreach($allCategory as $category)                      
                            @if ($category['name']=='Best Seller Home Appliance')
                                @php $productIdHomeAppliance            = $category->products; @endphp
                                @foreach($productIdHomeAppliance as $key=>$product)
                                    @if($product->publication_status)
                                    @if ($key<5)
                                        <li class="product-item">
                                            <div class="product product-widget-style">
                                                <div class="thumbnnail">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->specification}}">
                                                        <figure>
                                                            @if($product->image1)
                                                                <img src="{{asset($product->image1)}}"  alt="">
                                                            @else
                                                                <img src="https://via.placeholder.com/511x357">
                                                            @endif
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->specification}}</span></a>
                                                    <div class="wrap-price">
                                                        @if($product->sale_price==0 && $product->discount==0)
                                                            <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                                        @elseif($product->sale_price>0)
                                                            <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                                        @else
                                                            <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endif
                                    @endif
                                @endforeach
                                @if (count($productIdHomeAppliance)>5)
                                    <li class="funtion-item">
                                        <a href="{{url('')}}/bestSellerProduct/{{$productIdHomeAppliance[0]->pivot->category_id}}" class="view-all" >View all<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                @endif
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
        

        <!-------------------- about company ------------------------>
        <div class="row" style="margin-top: 30px;">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left home-top-ab">
                    <b class="box-title">Company Overview</b>
                    <p class="txt-content">{{$companyOverview->description}}<br>
                    <a href="{{url('')}}/companyOverView" style="text-align:right;">More..</a></p>
                </div>
            </div>

            {{-- <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left home-top-ab2">
                    <b class="box-title">Get to know Us</b>
                    <div class="wrap-vertical-nav">
                        <ul>
                            <li class="menu-item"><a href="#" class="link-term"><i class="fas fa-angle-double-right"></i> Store Location</a></li>
                            <li class="menu-item"><a href="#" class="link-term"><i class="fas fa-angle-double-right"></i> Dealer Sales</a></li>
                            <li class="menu-item"><a href="#" class="link-term"><i class="fas fa-angle-double-right"></i> Corporate Sales</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    @if ($youtubeLinkAll[0])
                        <iframe width="100%" height="200" src="{{$youtubeLinkAll[0]->description}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    @else
                        <iframe width="100%" height="200" src="https://www.youtube.com/embed/EIDhkxPPA40" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                    @endif
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="aboutus-info style-small-left">
                    <iframe width="100%" height="200" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnitolelectronics%2F&tabs=timeline&width=400px&height=300px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>

        </div>
        <!------------------ about company END------------------->

        <!----------------Midia----------------->
        {{-- <div class="box-item wrap-combined-box video-part ">
            <div class="row">
                <div class="col-md-4">
                    @if ($youtubeLinkAll[1])
                        <iframe width="100%" height="300" src="{{$youtubeLinkAll[1]->description}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    @else
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/jUC8KR5kbRM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                    @endif
                    
                </div>
                <div class="col-md-4 ">
                    @if ($youtubeLinkAll[2])
                        <iframe width="100%" height="300" src="{{$youtubeLinkAll[2]->description}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    @else
                        <iframe width="100%" height="300" src="https://www.youtube.com/embed/3NbHiOsBoTI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                    @endif
                </div>
                <div class="col-md-4 ">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fnitolelectronics%2F&tabs=timeline&width=400px&height=300px&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="300px" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                </div>
            </div>
        </div> --}}
        <!--BRAND SLIDER -->

    </div><!--end container-->
@endsection
@section('script')
@endsection
