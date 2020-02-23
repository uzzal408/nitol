@section('stylesheet')
@endsection

@extends('front.master', ['body_class' => 'detail page','main_class' => 'main-site'])
@section('title')
    Nitol | Home
@endsection
@section('body')
    <div class="container">
        <div class="wrap-breadcrumb">
            {{-- <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul> --}}
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery"><br>
                            <div class="xzoom-container">
                            <img class="xzoom" id="xzoom-default" src="{{asset($product->image1)}}" xoriginal="{{asset($product->image1)}}" />
                                <div class="xzoom-thumbs">
                                    @if($product->image1)
                                        <a href="{{asset($product->image1)}}"><img class="xzoom-gallery" width="80" src="{{asset($product->image1)}}"  xpreview="{{asset($product->image1)}}" title="{{$product->title}}"></a>
                                    @endif
                                    @if($product->image2)
                                        <a href="{{asset($product->image2)}}"><img class="xzoom-gallery" width="80" src="{{asset($product->image2)}}" title="{{$product->title}}"></a>
                                    @endif
                                    @if($product->image3)
                                        <a href="{{asset($product->image3)}}"><img class="xzoom-gallery" width="80" src="{{asset($product->image3)}}" title="{{$product->title}}"></a>
                                    @endif
                                    @if($product->image4)
                                        <a href="{{asset($product->image4)}}"><img class="xzoom-gallery" width="80" src="{{asset($product->image4)}}" title="{{$product->title}}"></a>
                                    @endif
                                </div>
                            </div>

                            {{-- <ul class="slides">
                                @if($product->image1)
                                    <li data-thumb="{{asset($product->image1)}}">
                                        <img src="{{asset($product->image1)}}" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                @endif
                                @if($product->image2)
                                    <li data-thumb="{{asset($product->image2)}}">
                                        <img src="{{asset($product->image2)}}" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                @endif
                                @if($product->image3)
                                    <li data-thumb="{{asset($product->image3)}}">
                                        <img src="{{asset($product->image3)}}" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                @endif
                                @if($product->image4)
                                    <li data-thumb="{{asset($product->image4)}}">
                                        <img src="{{asset($product->image4)}}" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                @endif
                            </ul> --}}
                        </div>
                    </div>
                    <div class="detail-info">

                        {{-- @if ($productReviewAvg>0)
                            <div class="comment-text">
                                <div class="comment-form-rating">
                                    <p class="stars">
                                        @for ($i = 1; $i <=$productReviewAvg; $i++)
                                            <label for="rated-{{$i}}"></label>
                                            <input type="radio" id="rated-{{$i}}" name="rating" value="{{$i}}" checked>
                                        @endfor
                                        ({{ $productReviewAvg}} Stars)
                                    </p>
                                </div>
                            </div>
                        @else
                            <span class="count-review"><strong class="rating">{{$productReviewAvg}}</strong></span>
                        @endif --}}

                        <form class="addToCart" action="#" method="post">
                            
                            @if ($productReviewAvg>0)
                                <div class="product-rating">
                                    @for ($i = 1; $i <=$productReviewAvg; $i++)
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    @endfor
                                    ({{$productReviewAvg}} Ratings)
                                </div>
                            @else
                            @endif
                            {{-- <div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">({{$productReviewAvg}} review)</a>
                            </div> --}}
                            
                            <h2 class="product-name">{{$product->title}}</h2>
                            <div class="short-desc">
                                <ul>
                                    @php($specifications = explode(',', $product->specification))
                                    @foreach($specifications as $category)
                                        <li>{{$category}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            
                            {{-- <div class="wrap-social">
                                <a class="link-socail" href="#"><img src="{{asset('/')}}client_end/images/social-list.png" alt=""></a>
                            </div> --}}

                            <div class="wrap-price">
                                @if($product->sale_price==0 && $product->discount==0)
                                    <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                @elseif($product->sale_price>0)
                                    <ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p>
                                @else
                                    <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
                                @endif
                            </div>

                            
                            @if($product->quantity==0)
                                <div class="stock-info in-stock">
                                    <p class="availability">Availability: <b>Stock Out</b></p>
                                </div>
                            @else
                                <div class="stock-info in-stock">
                                    <p class="availability" value="{{$product->quantity}}" id="productQuantityTotal">Availability: <b>In Stock</b></p>
                                </div>
                                
                                @if($product->sale_price==0 && $product->discount==0)
                                    <?php
                                        $product_price = $product->price;
                                    ?>

                                @elseif($product->sale_price>0)
                                    <?php
                                        $product_price = $product->sale_price;
                                    ?>

                                @else
                                    <?php
                                        $product_price = ($product->price/100)*(100-$product->discount);
                                    ?>
                                @endif

                                <div class="radio"> 
                                
                                    @if($product_price > 10001 && $product_price<30000)
                                        0% EMI
                                    
                                        <label><input type="radio" name="optradio" checked onclick="emiAmount({{$product_price}},3)">3 Month</label>

                                        <label><input type="radio" name="optradio" onclick="emiAmount({{$product_price}},6)">6 Month</label>
                                    
                                    @elseif( $product_price>30001)
                                    
                                        0% EMI
                                        
                                        <label><input type="radio" name="optradio" checked onclick="emiAmount({{$product_price}},3)">3 Month</label>

                                        <label><input type="radio" name="optradio" onclick="emiAmount({{$product_price}},6)">6 Month</label>

                                        <label><input type="radio" name="optradio" onclick="emiAmount({{$product_price}},9)">9 Month</label>

                                        <label><input type="radio" name="optradio" onclick="emiAmount({{$product_price}},12)">12 Month</label>
                                    @endif
                                    
                                </div>
                                
                                @if($product_price >10001)

                                    <div class="stock-info in-stock">
                                        <p class="availability">Installment:
                                            <b id="installmentAmount">
                                                {{number_format($product_price/3),2}} BDT/Month
                                            </b>
                                        </p>
                                    </div>
                                @endif
                                
                                
                                <div class="quantity">
                                    <span>Quantity:</span>
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="1" data-max="{{$product->quantity}}" pattern="[0-9]*" id="productQuantityItem">
                                        <a class="btn btn-increase" href="#" onclick="productQuantity()"></a>
                                        <a class="btn btn-reduce" href="#"></a>
                                    </div>
                                </div>
                                <div class="wrap-butons">
                                    <input type="hidden" name="product_id" value="{{$product->id}}" id="productIdSelect">
                                    <input type="hidden" name="product_name" value="{{$product->title}}">
                                    <input type="hidden" name="product_specification" value="{{$product->specification}}">

                                    @if($product->sale_price==0 && $product->discount==0)
                                        <input type="hidden" name="product_price" value="{{$product->price}}" min="1">
                                    @elseif($product->sale_price>0)
                                        <input type="hidden" name="product_price" value="{{$product->sale_price}}" min="1">
                                    @else
                                        <input type="hidden" name="product_price" value="{{($product->price/100)*(100-$product->discount)}}" min="1">
                                    @endif

                                    <input type="hidden" name="product_image" value="{{$product->image1}}">
                                    {{-- <input type="hidden" name="product_discount" value="{{$product->discount}}"> --}}
                                    <button type="submit" class="btn add-to-cart btn-block">Add to Cart</button>
                                    <div class="wrap-btn">
                                        {{-- <a href="#" class="btn btn-compare">Add Compare</a>
                                        <a href="#" class="btn btn-wishlist">Add Wishlist</a> --}}
                                    </div>
                                </div>
                            @endif
                        </form>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">Description</a>
                            <a href="#add_infomation" class="tab-control-item">Features & Specifications</a>
                            <a href="#review" class="tab-control-item">Reviews</a>
                        </div>

                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                {!! $product->description !!}
                            </div>

                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                    @php($additional_informations = json_decode($product->additional_information))
                                    @if(!empty($additional_informations))
                                        @foreach($additional_informations as $additional_information)
                                            @foreach($additional_information as $key=>$value)
                                                <tr>
                                                    <td>{{$key}}</td>
                                                    <td class="product_weight">{{$value}}</td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endif
                                    {{--<tr>--}}
                                    {{--<th>Weight</th><td class="product_weight">1 kg</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th>Dimensions</th><td class="product_dimensions">12 x 15 x 23 cm</td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                    {{--<th>Color</th><td><p>Black, Blue, Grey, Violet, Yellow</p></td>--}}
                                    {{--</tr>--}}
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="tab-content-item " id="review">
                                <div class="wrap-review-form">
                                    
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">

                                                

                                                @if (Session::get('CustomerId')=='')   
                                                    <p class="form-submit" style="font-weight:bold;">Please <button type="submit" type="submit" id="submit" class="submit"><a title="Login" href="{{url('')}}/customerLogin" style="color:red;">Login</a></button> to give a review</p>
                                                @else
                                                    <form id="commentform" class="comment-form" method="POST" action="{{url('')}}/productReview/store/{{$id}}" enctype="multipart/form-data" novalidate="">
                                                        {{csrf_field()}}      
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span>
                                                            Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <span>Your rating</span>
                                                            <p class="stars">
                                                                <label for="rated-1"></label>
                                                                <input type="radio" id="rated-1" name="rating" value="1">
                                                                <label for="rated-2"></label>
                                                                <input type="radio" id="rated-2" name="rating" value="2">
                                                                <label for="rated-3"></label>
                                                                <input type="radio" id="rated-3" name="rating" value="3">
                                                                <label for="rated-4"></label>
                                                                <input type="radio" id="rated-4" name="rating" value="4">
                                                                <label for="rated-5"></label>
                                                                <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                            </p>
                                                        </div>
                                                        {{-- <p class="comment-form-author">
                                                            <label for="author">Name <span class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email <span class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="">
                                                        </p> --}}
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review <span class="required">*</span></label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                        </p>

                                                        <p class="form-submit">
                                                            @if (Session::get('CustomerId')=='')
                                                                <button type="submit" type="submit" id="submit" class="submit"><a title="Login" href="{{url('')}}/customerLogin">Submit</a></button>
                                                            @else
                                                                <input type="submit" type="submit" id="submit" class="submit" value="Submit">
                                                            @endif
                                                        </p>
                                                    </form>    
                                                @endif


                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->

                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">
                                            @if ($categorycount>0)
                                                {{$categorycount}} review for <span>{{$product->title}}</span>
                                            @else
                                                0 review for <span>{{$product->title}}</span>
                                            @endif
                                        </h2>

                                        
                                        @foreach ($productReview as $reviewItem)
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt="" src="{{asset('/')}}client_end/images/download1234.jpg"
                                                            height="80" width="80">

                                                        <div class="comment-text"> 
                                                            <div class="product-rating">
                                                                @for ($i = 1; $i <=$reviewItem->product_review; $i++)
                                                                    <i class="fa fa-star" aria-hidden="true" ></i>
                                                                @endfor
                                                                ({{$reviewItem->product_review}} Ratings)
                                                            </div>
                                                            
                                                            {{-- <div class="comment-form-rating">
                                                                <p class="stars">
                                                                    @for ($i = 1; $i <=$reviewItem->product_review; $i++)
                                                                        <label for="rated-{{$i}}"></label>
                                                                        <input type="radio" id="rated-{{$i}}" name="rating" value="{{$i}}" checked>
                                                                    @endfor
                                                                </p>
                                                            </div> --}}
                                                            
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author">{{$reviewItem->customer_name}}</strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                    datetime="2008-02-14 20:00">{{$reviewItem->created_at}}
                                                                </time>
                                                            </p>
                                                            <div class="description">
                                                                <p>{{$reviewItem->product_comment}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        @endforeach
                                    </div><!-- #comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

            {{-- <div class="col-md-3">
                <table class="table">
                    <thead>
                        <th class="text-left">Qty</th>
                        <th class="text-left">Name</th>
                        <th class="text-left">Price(TK)</th>
                        <th class="text-center">Action</th>
                    </thead>
                    <tbody id="newRowInsert">                        
                    </tbody>
                    <tbody>
                        @foreach ($cartProducts as $key => $value)
                            <tr>
                                <td>{{$value->qty}}</td>
                                <td>{{$value->name}}</td>
                                <td>{{$value->price}}</td>
                                <td>
                                    <a href="{{url('')}}/product/{{$value->id}}">Edit</a>|<a href="{{url('')}}/cardDelete/{{$value->rowId}}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>    
            </div> --}}

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                {{-- <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Free Shipping</b>
                                        <span class="subtitle">Free On Oder Over ৳{{$free_shipping[0]}}</span>
                                        <p class="desc">{{$free_shipping[1]}}</p>
                                            
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Special Offer</b>
                                        <span class="subtitle">Get a gift!</span>
                                        @foreach($allCategory as $category)                      
                                            @if ($category['name']=='Special Offer')
                                                
                                                <ul>
                                                    @foreach($specifications as $category)
                                                        <li>{{$category}}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endforeach
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="{{url('')}}/returns">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Order Return</b>
                                        <span class="subtitle">Return within 7 days</span>
                                        @foreach($allCategory as $category)                      
                                            @if ($category['name']=='Order Return')
                                                
                                                <ul>
                                                    @foreach($specifications as $category)
                                                        <li>{{$category}}</li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        @endforeach
                                        
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget--> --}}

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">
                            @foreach ($mostPopularAll as $key=>$product)
                                @if ($key<4)
                                    <li class="product-item">
                                        <div class="product product-widget-style">
                                            <div class="thumbnnail">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                                    <figure><img src="{{asset($product->image1)}}"alt=""></figure>
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
                                            </div>
                                        </div>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div><!--end sitebar-->

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Releted Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                            

                            @foreach ($allProducts as $product)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('show-product',['id'=>$product->id])}}" title="{{$product->title}}">
                                            <figure><img src="{{asset($product->image1)}}"width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">Releted Product</span>
                                        </div>
                                        {{-- <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div> --}}
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
                                    </div>
                                </div>
                            @endforeach
                            
                            
                            
                            
                            {{-- @foreach ($mostViewedAll as $item)
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{route('show-product',['id'=>$item->id])}}" title="{{$item->title}}">
                                            <figure><img src="{{asset($item->image1)}}"width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">Most Viewed</span>
                                        </div>
                                        <div class="wrap-btn">
                                            <a href="#" class="function-link">quick view</a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{route('show-product',['id'=>$item->id])}}" class="product-name"><span>{{$item->title}}</span></a>
                                        <div class="wrap-price"><span class="product-price">৳ {{$item->price}}</span></div>
                                    </div>
                                </div>
                            @endforeach --}}
                            

                        </div>
                    </div><!--End wrap-products-->
                </div>
            </div>

        </div><!--end row-->

    </div><!--end container-->
@endsection
@section('script')
    <script>
        $(function () {
            $('.addToCart').submit(function (event) {
                event.preventDefault();
                var form                    = $(this);
                var product_id              = form.find("input[name='product_id']").val();
                var product_virtual_id      = form.find("input[name='product_virtual_id']").val();
                var product_name            = form.find("input[name='product_name']").val();
                var product_specification   = form.find("input[name='product_specification']").val();
                var product_price           = form.find("input[name='product_price']").val();
                var product_qty             = form.find("input[name='product-quatity']").val();
                var product_image           = form.find("input[name='product_image']").val();
                var CSRF_TOKEN              = $('meta[name="csrf-token"]').attr('content');

                //console.log(product_image);
                //alert(product_virtual_id);
                //console.log(product_virtual_id);

                // var table       = document.getElementById("newRowInsert");
                // var row         = table.insertRow(0);
                // var cell1       = row.insertCell(0);
                // var cell2       = row.insertCell(1);
                // var cell3       = row.insertCell(2);
                // var cell4       = row.insertCell(3);
                // cell1.innerHTML = product_qty;
                // cell2.innerHTML = product_name;
                // cell3.innerHTML = product_price;
                // cell4.innerHTML = '<a href="{{url('')}}/product/'+product_id+'">Edit</a>|'+
                // '<a href="{{url('')}}/cardDelete/'+product_id+'/'+product_id+'">Delete</a>';
            
                $.ajax({
                    type: "POST",
                    url: '{{route('add-to-card')}}',
                    dataType: "text",
                    // data: {form:form},
                    data: {
                        _token:                 CSRF_TOKEN,
                        product_id:             product_id,
                        product_name:           product_name,
                        product_specification:  product_specification,
                        product_price:          product_price,
                        product_qty:            product_qty,
                        product_image:          product_image
                    },
                    success: function (msg) {
                        $('#cartDetails').html(msg);
                        // var result = $(msg).text().split('|');
                        // $('#cartDetails').html(result[0]).css("color", "red");
                        // $('#grandTotal').html(result[1]).css("color", "red");
                        // $('#grandTotalBase').html(result[1]);
                        // $('#totalPrice').children('span').html($('#totalPriceVirtual').html());

                    }
                });
            });
        });

        function productQuantity(){
            var productQuantitySelect   = document.getElementById("productQuantityItem").value;
            var productIdSelect         = document.getElementById("productIdSelect").value;
            productQuantityIn           = parseInt(productQuantitySelect)+1;
            var CSRF_TOKEN              = $('meta[name="csrf-token"]').attr('content'); 

            $.ajax({
                type: "POST",
                url: "{{url('')}}/api/product/productIdLimit/"+productIdSelect,
                success: function (response) {
                    if(productQuantityIn>response){
                        alert('Product Limit Exit');
                    }
                }
            });
        }
        
        function emiAmount(price,month){
            var emi_amount = price/month;
            document.getElementById("installmentAmount").innerHTML = parseInt(emi_amount)+" " +"BDT/Month";
        }
    </script>
@endsection