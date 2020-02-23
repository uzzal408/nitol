
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
        .q_details{
            width: 62px;
        }
        .q_toal{
            width: 85px;
        }
        .quantity{
            display: block;
        }
        .quantity button, .times-circle button{
            background-color: white;
            padding: 0px;
        }
        .quantity  .fa, .times-circle .fa{
            color: black;
        }
        .quantity .item-qty{
            float: left;
            margin: 7px 10px;
        }
        .quantity .minus-circle, .quantity .plus-circle, .quantity .times-circle {
            float: left;
        }

        .product_name {
            /* min-height: 30px; */
            /* line-height: 15px; */
            /* font-weight: 400; */
            /* font-size: 12px; */
            /* color: #000; */
            /* white-space: normal; */
            /* margin: 2px 0px 2px 0px; */
            display: block;
            display: -webkit-box;
            max-width: 60px;
            /* height: 27px; */
            /* line-height: 1; */
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            /* margin-bottom: 5px; */
            /* text-overflow: ellipsis; */
            /* white-space: nowrap; */
            /* overflow: hidden; */
            /* width: 134px; */
            /* display: block; */
        }
    </style>
@endsection
@extends('front.master', ['body_class' => 'cat-bg'])
@section('title')
    Nitol Electroncis | Home
@endsection
@section('body')
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div id="left-main-top" class="col-9" >
                <div class="row" style="background-color: #fff;">
                    <div class="col-md-3">
                        <div class="cat-logo">
                            <a href="{{route('/')}}"><img alt="Pizza Hut" src="{{asset('/')}}client_end/images/pizzahut-logo.svg"></a>
                        </div>
                    </div>
                    <div class="col-md-7 p-3 text-right">
                        <span style="color: #858585;"><i class="fas fa-truck"></i> Mode:</span> {{ Session::get('Mode') }}
                        <span style="color: #858585;"><i class="fas fa-map-marker-alt"></i> Location:</span> {{ Session::get('Location') }}</div>
                    <div class="col-md-2 p-3 text-right">
                        <div class="dropdown sing-in">
                            <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user-circle" style="font-size: 20px;"></i> Sign In/Register</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <a class="dropdown-item" href="Sign-In-reg.html">Sign In/Register</a>
                                <a class="dropdown-item" href="track-oder.html">Track Order</a>
                                <a class="dropdown-item" href="aboutus.html">About Us</a>
                                <a class="dropdown-item" href="storelocator.html">Store Locator</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 border-top">
                        <nav id="pizzaMenu" class="navbar navbar-expand-lg navbar-light bg-white">
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item ">
                                        <a class="nav-link disabled">Deals</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="Pizzas.html">Pizzas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled">Sides</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="desserts.html">Desserts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="drinks.html">Drinks</a>
                                    </li>
                                </ul>
                                <label class="switch text-right">
                                    <label class="switch">
                                        <input type="checkbox" checked="">
                                        <span class="slider round"></span>
                                    </label>
                                    <div style="font-size: 13px;margin: -9px -20px 0px auto;">Veg Only </div>
                                </label>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="container scroll-content_cart">
                    <div><h5 class="titel-1">Supreme</h5></div>
                    <div class="row">
                        @foreach($products as $product)
                        <div class="col-md-3">
                            <form class="addToCart" action="#" method="post">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="product_name" value="{{$product->title}}">
                                <input type="hidden" name="product_qty" value="1" min="1">
                                <input type="hidden" name="product_price" value="{{$product->price_medium}}" min="1">
                                <input type="hidden" name="product_image" value="{{$product->image}}">
                            <div class="polaroid">
                                @if($product->image)
                                    <img src="{{asset($product->image)}}" alt="{{$product->name}}" width="120px">
                                @else
                                    <img src="https://via.placeholder.com/511x357" alt="5 Terre" style="width:100%">
                                @endif
                                <div class="container thame">
                                    <div class="left-con-pizzas">{{$product->title}}</div>
                                    <p>{{$product->short_description}}</p>
                                    <div class="info">
                                        <div class="customize-txt" float-left=""><span>Customize</span></div>
                                        <div class="price-info" float-right=""><span>From</span><span>৳{{$product->price_medium}}</span></div>
                                    </div>
                                    <div class="left-con">
                                        <button type="submit" class="btn btn-success add_button">Add</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                        @endforeach
                    </div><!-- End of Row -->
                </div>
            </div>
            <div class="clearfix"></div>
            <div id="right-card" class="col-3 cart-side" style="height: 650px">
                <div class="cart-head" id="cartDetails">
                    @include('front.includes.ajax-cart-header')
                </div>
                <div class="right-card">
                    <div class="cart_card_other_center">
                        <div class="title cart_other_center" text-center="">Others have ordered these too</div>

                        <div id="demo" class="carousel slide" data-ride="carousel"><!-- The slideshow -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="ad_product_card">
                                        <div class="ad_product_card_image">
                                            <img src="{{asset('/')}}client_end/images/noimage.png" width="120px">
                                            <div class="ad_product_detail">
                                                <span>Veggie Italiano</span>
                                                <span class="ad_price">₹550</span>

                                                <p style="font-size: 12px; overflow: inherit;margin-bottom: -11px;">Red Capsicum, Mushroo...</p>

                                                <div class="ad_product_card_footer">
                                                    <div class="ad_product_card_footer_text">
                                                        <div class="label-auto left" style="">
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
                                <div class="carousel-item">
                                    <div class="ad_product_card">
                                        <div class="ad_product_card_image">
                                            <img src="{{asset('/')}}client_end/images/noimage.png" width="120px">
                                            <div class="ad_product_detail">
                                                <span>Veggie Italiano</span>
                                                <span class="ad_price">₹550</span>

                                                <p style="font-size: 12px; overflow: inherit;margin-bottom: -11px;">Red Capsicum, Mushroo...</p>

                                                <div class="ad_product_card_footer">
                                                    <div class="ad_product_card_footer_text">
                                                        <div class="label-auto left" style="">
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
                                <div class="carousel-item">
                                    <div class="ad_product_card">
                                        <div class="ad_product_card_image">
                                            <img src="{{asset('/')}}client_end/images/noimage.png" width="120px">
                                            <div class="ad_product_detail">
                                                <span>Veggie Italiano</span>
                                                <span class="ad_price">₹550</span>

                                                <p style="font-size: 12px; overflow: inherit; margin-bottom: -11px;">Red Capsicum, Mushr...</p>

                                                <div class="ad_product_card_footer">
                                                    <div class="ad_product_card_footer_text">
                                                        <div class="label-auto left" style="">
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

                            <!-- Left and right controls -->

                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <!--<span class="carousel-control-next-icon"></span>-->
                                <div class="ad_right_arrow">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="">
                            <div class="ad_total" style="border-bottom: 2px solid #cccccc;padding-bottom: 10px;">
                                <div class="bill_title_head" style="">
                                    <span class="bill-total-text"> Your Total
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
                                    </span>
                                    <div class="right bill-total" id="totalPrice">
                                        ৳ <span>{{Cart::subtotal()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--<div id="collapse1" class="panel-collapse collapse in">--}}
                            {{--<div class="">--}}
                                {{--<div class="ad_total" style="margin-top: -9px;">--}}
                                    {{--<div class="bill_title_head" style="">--}}
                                        {{--<div class="bill">--}}
                                            {{--<span class="left">Item total</span>--}}
                                            {{--<span class="right">₹1,090.00</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="bill">--}}
                                            {{--<span class="left">C-GST</span>--}}
                                            {{--<span class="right">₹27.25</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="bill">--}}
                                            {{--<span class="left">S-GST</span>--}}
                                            {{--<span class="right">₹27.25</span>--}}
                                        {{--</div>--}}
                                        {{--<div class="bill you_pay">--}}
                                            {{--<span class="left">Order Total</span>--}}
                                            {{--<span class="right">₹1,144.50</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                </div>
                {{--<button  type="button" class="checkout_btn">Checkout</button>--}}
                <a class="btn" id="ckt_btn" href="{{route('checkout')}}">Checkout</a>
            </div>


        </div>
    </div>

    @include('front.category._product_details')
    <!-- Footer Tab Script -->
@endsection
@section('script')
    <script>
        $(function () {
            $('.addToCart').submit(function (event) {
                event.preventDefault();
                var form = $(this);
                var product_id = form.find("input[name='product_id']").val();
                var product_virtual_id = form.find("input[name='product_virtual_id']").val();
                var product_name = form.find("input[name='product_name']").val();
                var product_price = form.find("input[name='product_price']").val();
                var product_qty = form.find("input[name='product_qty']").val();
                var product_image = form.find("input[name='product_image']").val();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    url: '{{route('add-to-card')}}',
                    // data: {form:form},
                    data: {
                        _token: CSRF_TOKEN,
                        product_id: product_id,
                        product_virtual_id: product_virtual_id,
                        product_name: product_name,
                        product_price: product_price,
                        product_qty: product_qty,
                        product_image: product_image
                    },
                    success: function (msg) {
                        $('#cartDetails').html(msg);
                        $('#totalPrice').children('span').html($('#totalPriceVirtual').html());

                    }
                });
            });
            $('#cartDetails').on('submit', '.UpdateToCart', function(e) {
                // $('.UpdateToCart').submit(function (event) {
                e.preventDefault();
                var form = $(this);
                var qty = form.find("input[name='qty']").val();
                var rowId = form.find("input[name='rowId']").val();
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                if(qty){
                    var url = '{{ route("update-cart", ":id") }}';
                }else {
                    var url = '{{ route("delete-cart-product", ":id") }}';
                }
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
                        $('#totalPrice').children('span').html($('#totalPriceVirtual').html())

                        // $('.profile-icon').html(msg);
                        // console.log(msg);
                        // $('#productCustomize').modal('hide');
                    }
                });
            });
            setNavigation();
            $('#productCustomize').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget);// Button that triggered the modal
                // var url = button[0].baseURI;
                var recipient = button.data('whatever'); // Extract info from data-* attributes
                var modal = $(this);
                $.ajax({
                    type: 'GET',
                    url: "{{URL::to('product-details')}}/"+ recipient,
                    success: function (msg) {
                        // $('.profile-icon').html(msg);
                        var product = JSON.parse(msg);
                        console.log(product);
                        var product_id = product.id;
                        var product_title = product.title;
                        var product_price_m = product.price_medium;
                        var product_price_p = product.price_personal;
                        var product_short_description = product.short_description;
                        var item_quantity = parseInt($('.item-qty').html());
                        var total_price = product_price_m;
                        modal.find('.modal-body .pizza-title').html(product_title);
                        modal.find('.modal-body .pizza-desc').html(product_short_description);
                        modal.find('.modal-footer #total_price').html(product_price_m);
                        // $('#productCustomize').show();
                        modal.find('.modal-body .custom_piza_check.medium').children('i').removeClass().addClass('fa fa-check');
                        modal.find('.modal-body .custom_piza_check.medium').data('price',product_price_m);
                        modal.find('.modal-body .custom_piza_check.personal').children('i').removeClass().addClass('fa fa-plus');
                        modal.find('.modal-body .custom_piza_check.personal').data('price',product_price_p);
                        modal.find('.modal-footer input[name=product_id]').val(product_id);
                        modal.find('.modal-footer input[name=product_name]').val(product_title);
                        modal.find('.modal-footer input[name=product_price]').val(product_price_m);
                        modal.find('.modal-footer input[name=product_qty]').val(item_quantity);

                        var addons = product.addons;
                        var total_crust = "<tr>\n" +
                            "                            <td width=\"60%\">\n" +
                            "                                <div class=\"pizza-builder-group-item\" >Pan\n" +
                            "                                </div>\n" +
                            "                            </td>\n" +
                            "                            <td width=\"20%\">\n" +
                            "                                <div class=\"group-item-price\" >\n" +
                            "                                </div>\n" +
                            "                            </td>\n" +
                            "                            <td class=\"custom_piza_check\" width=\"20%\"><i class=\"fa fa-check text-right\" aria-hidden=\"true\"></i>\n" +
                            "                            </td>\n" +
                            "                        </tr>";
                        for(var i = 0; i < addons.length; i++){
                            var crust = "<tr>\n" +
                                "                            <td width=\"60%\">\n" +
                                "                                <div class=\"pizza-builder-group-item\" >:addon_name\n" +
                                "                                </div>\n" +
                                "                            </td>\n" +
                                "                            <td width=\"20%\">\n" +
                                "                                <div class=\"group-item-price\" >+:addon_price1\n" +
                                "                                </div>\n" +
                                "                            </td>\n" +
                                "                            <td class=\"custom_piza_check\" width=\"20%\" data-price=:addon_price2><i class=\"fa fa-plus text-right\" aria-hidden=\"true\"></i>\n" +
                                "                            </td>\n" +
                                "                        </tr>";
                            var addon = addons[i];
                            var addon_name = addon.name;
                            var addon_price = addon.price;
                            crust = crust.replace(':addon_name', addon_name);
                            crust = crust.replace(':addon_price1', addon_price);
                            crust = crust.replace(':addon_price2', addon_price);
                            total_crust += crust;
                        }
                        $('#crust_content').html(total_crust);
                        $('.modal-body').on('click', '.custom_piza_check', function(e) {
                            if ($(this).find('i').hasClass('fa-check')) { //then change back to the original one
                            } else {
                                var addCheckIcon = function(){
                                    // var this = $(e.currentTarget);
                                    $(this).find('i').removeClass('fa-plus').addClass('fa-check');
                                    var this_tr = $(this).parents('tr');
                                    $(this).closest('tbody').children().not(this_tr).each(function () {
                                        $(this).find('i').removeClass('fa-check').addClass('fa-plus');
                                    });
                                }.bind(this);
                                var calculateTotalPrice = function(){
                                    total_price = 0;
                                    $('.custom_piza_check').each(function () {
                                        if($(this).children('i').hasClass('fa-check')){
                                            var price = $(this).data('price');
                                            if (typeof price !== "undefined") {
                                                total_price += parseFloat(price);
                                            }
                                        }
                                    });
                                    if(item_quantity > 1)
                                        total_price = (total_price * item_quantity).toFixed(2);
                                    $('#total_price').html(total_price);
                                    $('.modal-footer input[name=product_price]').val(total_price);
                                }.bind(this);
                                $.when(addCheckIcon()).done(function () {
                                    calculateTotalPrice();
                                });
                            }
                        });
                        $('input[name="current_toppings"]').change(function () {
                            if (this.checked) {
                                $(this).parents('tr').find('.group-item-price').html('+99')
                                // alert("Checked");
                            }else{
                                $(this).parents('tr').find('.group-item-price').html('')
                            }
                        });
                        var setTotalPrice = function(qty){
                            $('.item-qty').html(qty);
                            modal.find('.modal-footer input[name=product_qty]').val(qty);
                            var grand_total_price = (total_price * item_quantity).toFixed(2);
                            $('#total_price').html(grand_total_price);
                            // $('.modal-footer input[name=product_price]').val(grand_total_price);
                        };
                        $('#minus-circle').click(function () {
                            if(item_quantity >1){
                                item_quantity -= 1;
                                setTotalPrice(item_quantity);
                            }
                        });
                        $('#plus-circle').click(function () {
                            item_quantity += 1;
                            setTotalPrice(item_quantity);
                        });
                    }
                });
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

                // modal.find('.modal-title').text('New message to ' + recipient)
            });



            // $('.custom_piza_check').click(function (event) {
            //     var element = $(this);
            //     console.log(element);
            //
            // });



        });

        function setNavigation() {
            var path = window.location;
            // path = path.replace(/\/$/, "");
            path = decodeURIComponent(path);

            $(".tab a").each(function () {
                var href = $(this).attr('href');
                if (path.substring(0, href.length) === href) {
                    $(this).addClass('active');
                }
            });
        }
    </script>
@endsection