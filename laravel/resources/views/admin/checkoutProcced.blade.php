@section('stylesheet')

@endsection
@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Checkout | Home
@endsection
@section('body')

    <div class="container">
        <div class="wrap-breadcrumb">
            {{-- <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul> --}}
        </div>

        <div class=" main-content-area">
            {{Form::open(['route'=>'save-order','class'=>'contact-form','method'=>'POST','name'=>'frm-billing'])}}
                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address 12</h3>
                    <p class="row-in-form" style="display: none"></p>
                    <p class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="lname">last name<span>*</span></label>
                        <input id="lname" type="text" name="lname" value="" placeholder="Your last name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="email">Email Addreess:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Type your email">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone" type="text" name="phone" value="" placeholder="11 digits format" required>
                    </p>
                    <p class="row-in-form">
                        <label for="add">Address:<span>*</span></label>
                        <input id="add" type="text" name="add" value="" placeholder="Street at apartment number" required>
                    </p>
                    <p class="row-in-form">
                        <label for="country">Country<span>*</span></label>
                        <input id="country" type="text" name="country" value="" placeholder="United States" required>
                    </p>
                    <p class="row-in-form">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input id="zip-code" type="number" name="zip-code" value="" placeholder="Your postal code">
                    </p>
                    <p class="row-in-form">
                        <label for="city">Town / City<span>*</span></label>
                        <input id="city" type="text" name="city" value="" placeholder="City name" required>
                    </p>
                    <p class="row-in-form fill-wife">
                        <label class="checkbox-field">
                            <input name="different-add" id="different-add" value="forever" type="checkbox">
                            <span>Ship to a different address?</span>
                        </label>
                    </p>
                </div>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <p class="summary-info"><span class="title">Check / Money order</span></p>
                        <p class="summary-info"><span class="title">Credit Card (saved)</span></p>
                        
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-bank" value="bank" type="radio">
                                <span>Direct Bank Transfer</span>
                                <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>
                            </label>

                        </div>

                        <p class="summary-info grand-total"><span>Grand Total</span> 
                            <span class="grand-total-price">
                                {{filter_var(Cart::subtotal(),FILTER_SANITIZE_NUMBER_INT)/100 + $shippingCost->description}} TK
                            </span>
                        </p>
                        @if (Session::get('CustomerId')=='')
                            <button type="submit" class="btn btn-medium"><a title="Login" href="{{url('')}}/customerLogin" style="color:white">Place order</a></button>
                        @else
                            <button type="submit" class="btn btn-medium">Place order</button>
                        @endif

                    </div>
                    {{Form::close()}}
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed {{$shippingCost->description}}.00</span></p>
                       <form>
                        <h4 class="title-box">Discount Codes</h4>
                        <p class="row-in-form">
                            <label for="coupon-code">Enter Your Coupon code:</label>
                            <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                        </p>
                           <button class="btn btn-small">Apply1</button>
                       </form>
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
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".btn-small").click(function(e){
            e.preventDefault();
            var name = $("input[name=name]").val();
            var password = $("input[name=password]").val();
            var email = $("input[name=email]").val();
            $.ajax({
                type:'POST',
                url:'/ajaxRequest',
                data:{name:name, password:password, email:email},
                success:function(data){
                    alert(data.success);
                }
            });
        });
    </script>
@endsection
{{--@section('script')--}}
{{--    <script type="text/javascript">--}}
{{--        $.ajaxSetup({--}}
{{--            headers: {--}}
{{--                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--            }--}}
{{--        });--}}
{{--        $(".btn-small").click(function(e){--}}
{{--            alert('okey');--}}
{{--            e.preventDefault();--}}
{{--            var name = $("input[name=name]").val();--}}
{{--            var password = $("input[name=password]").val();--}}
{{--            var email = $("input[name=email]").val();--}}
{{--            $.ajax({--}}
{{--                type:'POST',--}}
{{--                url:'/ajaxRequest',--}}
{{--                data:{name:name, password:password, email:email},--}}
{{--                success:function(data){--}}
{{--                    alert(data.success);--}}
{{--                }--}}
{{--            });--}}
{{--        });--}}
{{--    </script>--}}
{{--@endsection--}}