@section('stylesheet')

@endsection
@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Checkout | Home
@endsection
@section('body')

    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>Checkout</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Detail</h3>
                <ul class="products-cart">
                    @php $cartProducts = Cart::content(); @endphp
                    @foreach ($cartProducts as $key => $value)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <a href="{{route('show-product',['id'=>$value->id])}}" title="">
                                    <figure><img src="{{asset('/')}}/{{$value->options->image}}"alt=""></figure>
                                </a>

                                {{-- <figure><img src="{{asset('/')}}/{{$value->options->image}}" alt=""></figure> --}}
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="#">{{$value->name}}</a>
                            </div>

                            <div class="product-name">
                                <a class="link-to-product" href="#">{{$value->specification}}</a>
                            </div>

                            <div class="price-field produtc-price"><p class="price" id="product_price[{{$key}}]" value={{$value->price}}> {{$value->price}}</p></div>
                            <div class="quantity">
                                <form class="updateCartNew" action="#" method="post">
                                    <div class="quantity-input">
                                        {{-- <input type="text" name="product-quatity" value={{$value->qty}} data-max="120" pattern="[0-9]*" id="productQuantityItem" onclick="productQuantity(this.value)"> --}}
                                        {{-- <a class="btn btn-reduce" href="#" onclick="quantityDecrease()"></a>
                                        <a class="btn btn-increase" href="#" onclick="quantityIncrease()"></a> --}}
                                        <input type="text" name="product-quatity" value={{$value->qty}} data-max="120" pattern="[0-9]*" id="productQuantityItem[{{$key}}]">
                                        <input type="hidden" name="product_id" value="{{$value->id}}">
                                        <input type="hidden" name="product_rowId" value="{{$value->rowId}}">
                                        <input type="hidden" name="product_name" value="{{$value->name}}">
                                        <input type="hidden" name="product_specification" value="{{$value->specification}}">
                                        <input type="hidden" name="product_price" value="{{$value->price}}" min="1">
                                        <input type="hidden" name="product_image" value="{{$value->options->image}}">

                                        <button type="submit" class="btn btn-reduce" value="{{$key}}"   onclick="quantityDecrease(this.value)"></button>
                                        <button type="submit" class="btn btn-increase" value="{{$key}}" onclick="quantityIncrease(this.value)"></button>
                                    </div>
                                    {{-- <button type="submit" class="btn add-to-cart btn-block">Update Cart</button> --}}
                                </form>
                            </div>
                            <div class="price-field sub-total"><p class="price" id="totalPrice[{{$key}}]">{{$value->price*$value->qty}}</p></div>
                            <div class="delete">
                                <a href="{{url('')}}/cardDelete/{{$value->rowId}}"  title="">
                                    <i class="fa fa-times-circle fa-2x" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price" id="grandTotalBase">{{Cart::subtotal()}} TK</span></p>
                       @guest('customer')
                            <button type="submit" class="btn btn-medium"><a title="Login" href="{{ route('customer.login-form') }}" style="color:white">Proceed to Checkout</a></button>
                        @else
                            <!--<form method="POST" action="{{url('')}}/paymentMethod">-->
                            <!--    @csrf()-->
                            <!--    <input type="hidden" name="hidden" value="1">-->
                            <!--    <button type="submit" class="btn btn-medium">Proceed to Checkout</button>-->
                            <!--</form>-->
                            <button type="submit" class="btn btn-medium"><a title="Login" href="{{url('')}}/checkoutProceed" style="color:white">Proceed to Checkout</a></button>
                        @endif
                    </div>
                </div>
            </div>

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                        @foreach ($mostViewedAll as $item)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="{{route('show-product',['id'=>$item->id])}}" title={{$item->title}}>
                                        <figure><img src="{{asset($item->image1)}}" width="214" height="214" alt={{$item->title}}></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Most Viewed</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="{{route('show-product',['id'=>$item->id])}}" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="{{route('show-product',['id'=>$item->id])}}" class="product-name"><span>{{$item->title}}</span></a>
                                    <div class="wrap-price"><span class="product-price">{{$item->price}}</span></div>
                                </div>
                            </div>
                        @endforeach 
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

@endsection

@section('script')
    <script>

        function quantityIncrease(keyValueIn) {
            var productQuantityIn = document.getElementById("productQuantityItem["+keyValueIn+"]").value;
            var productPriceIn    = document.getElementById("product_price["+keyValueIn+"]").innerHTML;
            productQuantityIn     = parseInt(productQuantityIn)+1;
            var totalPriceIn      = parseFloat(productPriceIn)*parseInt(productQuantityIn);
            document.getElementById("totalPrice["+keyValueIn+"]").innerHTML = totalPriceIn.toFixed(1); 
            var CSRF_TOKEN        = $('meta[name="csrf-token"]').attr('content'); 

            $.ajax({
                type: "POST",
                url: '{{route('update-cart-product')}}',
                data: {
                    _token:                 CSRF_TOKEN,
                    product_rowId:          keyValueIn,
                    product_qty:            productQuantityIn
                },
                success: function (msg) {
                    console.log(msg);
                    $('#cartDetails').html(msg);
                    var result = $(msg).text().split('|');
                    $('#cartDetails').html(result[0]).css("color", "red");
                    $('#grandTotal').html(result[1]).css("color", "red");
                    $('#grandTotalBase').html(result[1]);
                                            
                }
            });           
        }

        function quantityDecrease(keyValueDec) {
            var productQuantityDec = document.getElementById("productQuantityItem["+keyValueDec+"]").value;
            var productPriceDec    = document.getElementById("product_price["+keyValueDec+"]").innerHTML;
            if(productQuantityDec  == 1){
                var totalPriceDec  = parseFloat(productPriceDec)*parseInt(productQuantityDec);
                document.getElementById("totalPrice["+keyValueDec+"]").innerHTML = totalPriceDec;
            }
            else{
                productQuantityDec = parseInt(productQuantityDec)-1;
                var totalPriceDec  = parseFloat(productPriceDec)*parseInt(productQuantityDec);
                document.getElementById("totalPrice["+keyValueDec+"]").innerHTML = totalPriceDec;
            } 
            var CSRF_TOKEN         = $('meta[name="csrf-token"]').attr('content'); 

            $.ajax({
                type: "POST",
                url: '{{route('update-cart-product')}}',
                data: {
                    _token:                 CSRF_TOKEN,
                    product_rowId:          keyValueDec,
                    product_qty:            productQuantityDec
                },
                success: function (msg) {
                    console.log(msg);
                    $('#cartDetails').html(msg);
                    var result = $(msg).text().split('|');
                    $('#cartDetails').html(result[0]).css("color", "red");
                    $('#grandTotal').html(result[1]).css("color", "red");
                    $('#grandTotalBase').html(result[1]);
                                            
                }
            }); 
        }

        // $(function () {
        //     $('.updateCartNew').submit(function (event) {
        //         event.preventDefault();
        //         var form                    = $(this);
        //         var product_id              = form.find("input[name='product_id']").val();
        //         var product_rowId           = form.find("input[name='product_rowId']").val();
        //         var product_virtual_id      = form.find("input[name='product_virtual_id']").val();
        //         var product_name            = form.find("input[name='product_name']").val();
        //         var product_specification   = form.find("input[name='product_specification']").val();
        //         var product_price           = form.find("input[name='product_price']").val();
        //         var product_qty             = form.find("input[name='product-quatity']").val();
        //         var product_image           = form.find("input[name='product_image']").val();
        //         var CSRF_TOKEN              = $('meta[name="csrf-token"]').attr('content');
            
        //         $.ajax({
        //             type: "POST",
        //             url: '{{route('update-cart-product')}}',
        //             data: {
        //                 _token:                 CSRF_TOKEN,
        //                 product_id:             product_id,
        //                 product_rowId:          product_rowId,
        //                 product_name:           product_name,
        //                 product_specification:  product_specification,
        //                 product_price:          product_price,
        //                 product_qty:            product_qty,
        //                 product_image:          product_image
        //             },
        //             success: function (msg) {
        //                 $('#cartDetails').html(msg);
        //                 var result = $(msg).text().split('|');
        //                 $('#cartDetails').html(result[0]).css("color", "red");
        //                 $('#grandTotal').html(result[1]).css("color", "red");
        //                 $('#grandTotalBase').html(result[1]);
                                                
        //             }
        //         });
        //     });
        // });

    </script>
@endsection