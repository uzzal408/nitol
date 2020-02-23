@section('stylesheet')
    <style>
        #ckt_btn {
            background-color: #70a401;
            width: 95%;
            margin: 10px;
            height: 30px;
            font-size: 12px;
            padding-top: 5px;
            color: #fff;
            border-radius: 2px;
        }
        .quantity{
            display: block;
            width: 100px;

        }
        .quantity button{
            background-color: white;
        }
        .quantity  .fa{
            color: #e0e0e0;
            font-size: 20px;
        }
        .minus-circle {
            float: left;
        }
        .item-qty{
            float: left;
            margin: 0 10px;
        }

        .plus-circle {
            float: left;
        }
        .times-circle{
            float: right;
        }
        .product_name{
            text-overflow: ellipsis;
            white-space: nowrap;
            overflow: hidden;
            width: 134px;
            display: block;
        }
    </style>
@endsection
@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Order Pizza Online For Delivery | Cart
@endsection
@section('body')
    <!-- main content start-->
    <div class="main-content">
        @include('front.includes.back-header',['user_login'=>true,'back'=>route('category-product',['id'=>2])])

        <div class="clearfix">
            <div class="scroll-content" style="margin-top: 44px;">
                <div class="hr-border text-style " text-center="" style="margin-top: 25px;"> YOUR CART</div>
                <div class="contain-fluid">
                    <div class="cart_wrapper">
                        <div class="cart_card" id="cartDetails">
                            <table>
                                <col width="45%" />
                                <col width="5%" />
                                <col width="10%" />
                                <col width="40%" />
                                <tr>
                                    <td><span class="">Item</span></td>
                                    <td><span class=""></span></td>
                                    <td><span class="">Quantity</span></td>
                                    <td><span class="">Amount</span></td>
                                </tr>
                                @php($subtotal = 0)
                                @php($total_price = 0)
                                @foreach($carts as $cart)
                                    <tr>
                                        <td><span class="storename product_name">{{$cart->name}}</span></td>
                                        <td><span class="storename"><i class="fa fa-angle-down"></i></span></td>
                                        <td>
                                            <span class="storename quantity">
                                                <div class="minus-circle">
                                                    <form class="UpdateToCart" action="{{-- route('update-cart-product')  --}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="qty" id="" value="{{(int)$cart->qty - 1}}">
                                                    <input type="hidden" name="rowId" id="" value="{{$cart->rowId}}">
                                                    <button type="submit"><i class="fa fa-minus-circle"></i></button>
                                                </form>
                                                </div>
                                                <div class="item-qty">{{$cart->qty}}</div>
                                                <div class="plus-circle">
                                                    <form class="UpdateToCart" action="{{-- route('update-cart-product')  --}}" method="post">
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="qty" id="" value="{{(int)$cart->qty + 1}}">
                                                    <input type="hidden" name="rowId" id="" value="{{$cart->rowId}}">
                                                    <button class="plus-circle" type="submit"><i class="fa fa-plus-circle"></i></button>
                                                </form>
                                                </div>
                                            </span>
                                        </td>
                                        <td style="">
                                            <span class="storename">৳ {{$subtotal = $cart->price * $cart->qty}} </span>
                                            @php($total_price += $subtotal)
                                            <a class="times-circle" href="{{route('delete-cart-product',['id'=>$cart->rowId])}}">
                                                <i class="fa fa-times-circle" aria-hidden="true"
                                                   style="font-size: 20px;color: #e0e0e0;margin-left: 10px;"></i>
                                            </a>

                                        </td>

                                    </tr>
                                @endforeach
                                @php(Session::put('totalPrice',$total_price))
                            </table>
                        </div><!-- .store_card -->
                        <hr style="background-color: #858585;">
                        <div class="cart_apply_text">
                            Avail special offer or <span class="underline" style="margin-left: 5px;font-weight: 600;">  apply personalized coupon?</span>
                        </div>

                        <div class="cart_card_other_center">
                            <div class="title cart_other_center" text-center="">Others have ordered these too</div>
                            <div id="demo" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <div class="ad_product_card">
                                            <div class="ad_product_card_image">
                                                <img src="{{asset('/')}}front/assets/imgs/noimage.png" width="120px">
                                                <div class="ad_product_detail">
                                                    <span>Veggie Italiano</span>
                                                    <span class="ad_price">৳ 550</span>

                                                    <p style="font-size: 12px; overflow: inherit; padding-top:5px;">Red Capsicum,
                                                        Mushroom, Jal...</p>

                                                    <div class="ad_product_card_footer">
                                                        <div class="ad_product_card_footer_text">
                                                            <div class="label-auto left" style="width: 98px;">
                                                                <p>Crust: Pan</p><br>
                                                            </div>
                                                            <div class="label-auto left">
                                                                <button class="btn btn-success" style="" type="button">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item">
                                        <div class="ad_product_card">
                                            <div class="ad_product_card_image">
                                                <img src="{{asset('/')}}front/assets/imgs/noimage.png" width="120px">
                                                <div class="ad_product_detail">
                                                    <span>Veggie Italiano</span>
                                                    <span class="ad_price">৳ 550</span>

                                                    <p style="font-size: 12px; overflow: inherit; padding-top:5px;">Red Capsicum,
                                                        Mushroom, Jal...</p>

                                                    <div class="ad_product_card_footer">
                                                        <div class="ad_product_card_footer_text">
                                                            <div class="label-auto left" style="width: 98px;">
                                                                <p>Crust: Pan</p><br>
                                                            </div>
                                                            <div class="label-auto left">
                                                                <button class="btn btn-success" style="" type="button">Add</button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <a class="right carousel-control" href="#demo" data-slide="next">
                                    <div class="ad_right_arrow">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                                    </div>
                                </a>
                            </div>


                        </div>
                        @include('front.checkout._total-amount')
                    </div>
                </div>
                <a class="btn" id="ckt_btn" href="{{route('checkout')}}">Checkout</a>


            </div>

        </div><!-- End of .clearfix -->
    {{--</div>--}}

    </div>

    <!-- main content end-->
@endsection
@section('script')
    <script>
        $(function () {
            $('#cartDetails').on('submit', '.UpdateToCart', function(event) {
            // $('.UpdateToCart').submit(function (event) {
                event.preventDefault();
                var form = $(this);
                var qty = form.find("input[name='qty']").val();
                var rowId = form.find("input[name='rowId']").val();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                var url = '{{ route("update-cart", ":id") }}';
                url = url.replace(':id', rowId);
                $.ajax({
                    type: "POST",
                    url: url,
                    // data: {form:form},
                    data: {
                        _token: CSRF_TOKEN,
                        qty: qty,
                        rowId: rowId
                    },
                    success: function (msg) {
                        $('#cartDetails').html(msg);
                        var totalPrice = $('#totalPrice').html();
                        $('.bill-total').children('span').html(totalPrice);
                        // $('.profile-icon').html(msg);
                        // console.log(msg);
                        // $('#productCustomize').modal('hide');
                    }
                });
            });
        });
    </script>
@endsection