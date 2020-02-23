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

            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">

                {{-- <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="{{asset($bannerImageAll->image)}}" alt=""></figure>
                    </a>
                </div> --}}

                

                <div class="row">
                    @if (session('message'))
                        <div class="alert alert-danger" id="flash_message">
                            {{session('message')}}
                        </div>
                    @endif
                    <ul class="product-list grid-products equal-container">
                        @foreach($searchAllPdoduct as $product)
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
                                        <a href="#" class="product-name">
                                            <span>
                                                {{$product->title}}
                                                @if($product->ac_capacity!=null)
                                                    {{$product->ac_capacity}} TON
                                                @endif
                                                
                                                @if($product->screen_size!=null)
                                                    {{$product->screen_size}}"
                                                @endif
                                            </span>
                                        </a>
                                        <div class="wrap-price">
                                            @if($product->discount==0)
                                                <ins><p class="product-price">৳ {{$product->price}}</p></ins>
                                            @else
                                                <ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins><del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p>
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

            
            <!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

@endsection
@section('script')

@endsection

<script>
    function priceRange(priceRangeValue) {
        //alert(priceRangeValue);
        $.ajax({
            type: "POST",
            url: "{{url('')}}/api/product/filterProduct/"+priceRangeValue,
            success: function (response) {
                document.getElementById("currentPrice").innerHTML ='৳'+' '+priceRangeValue;
                console.log(response);
            }
        });
    }

    function priceRange(value){
        //alert(value);
        document.getElementById("currentPrice").innerHTML ='৳'+' '+value;
    }

    setTimeout( function () {
        $('#flash_message').hide();
    }, 20000);
</script>