@section('stylesheet')

@endsection
@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Checkout | Home
@endsection
@section('body')

    <div class="container">
        <div class="wrap-breadcrumb">
        </div>

        <div class=" main-content-area">
            {{Form::open(['route'=>'save-order','class'=>'contact-form','method'=>'POST','name'=>'frm-billing'])}}
                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address</h3>
                    <p class="row-in-form" style="display: none"></p>
                    <div class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="{{ isset($customerShoppingDetail->first_name) ? $customerShoppingDetail->first_name : '' }}" placeholder="Your name">
                        @if($errors->has('fname'))
                        <div class="alert alert-danger">{{ $errors->first('fname')  }}</div>
                        @endif
                    </div>
                    <div class="row-in-form">
                        <label for="lname">last name<span></span></label>
                        <input id="lname" type="text" class="@error('lname') is-invalid @enderror" name="lname" value="{{ isset($customerShoppingDetail->last_name) ? $customerShoppingDetail->last_name : '' }}" placeholder="Your last name">
                        @if($errors->has('lname'))
                        <div class="alert alert-danger">{{ $errors->first('lname')  }}</div>
                        @endif
                    </div>
                    <div class="row-in-form">
                        <label for="email">Email Addreess:<span>*</span></label>
                        <input id="email" class="@error('email') is-invalid @enderror" type="email" name="email" value="{{ isset($customerShoppingDetail->email) ? $customerShoppingDetail->email : '' }}" placeholder="Type your email">
                        @if($errors->has('email'))
                            <div class="alert alert-danger">{{ $errors->first('email')  }}</div>
                        @endif
                    </div>
                    <div class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone"  class="@error('phone') is-invalid @enderror" type="text" name="phone" value="{{ isset($customerShoppingDetail->phone) ? $customerShoppingDetail->phone : '' }}" placeholder="11 digits format">
                        @if($errors->has('phone'))
                            <div class="alert alert-danger">{{ $errors->first('phone')  }}</div>
                        @endif
                    </div>

                    <div class="row-in-form">
                        <label for="add">Address:<span></span></label>
                        <input id="add"  class="@error('add') is-invalid @enderror"type="text" name="add" value="{{ isset($customerShoppingDetail->address) ? $customerShoppingDetail->address : '' }}" placeholder="Street at apartment number">
                        @if($errors->has('add'))
                            <div class="alert alert-danger">{{ $errors->first('add')  }}</div>
                        @endif
                    </div>
                    <div class="row-in-form">
                        <label for="country">Country<span></span></label>
                        <input id="country" class="@error('country') is-invalid @enderror" type="text" name="country" value="{{ isset($customerShoppingDetail->country) ? $customerShoppingDetail->country : '' }}" placeholder="United States" >
                        @if($errors->has('country'))
                            <div class="alert alert-danger">{{ $errors->first('country')  }}</div>
                        @endif
                    </div>
                    <div class="row-in-form">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input id="zip-code" type="number" class="@error('zip_code') is-invalid @enderror" name="zip_code" value="{{ isset($customerShoppingDetail->zip_code) ? $customerShoppingDetail->zip_code : '' }}" placeholder="Your postal code">
                        @if($errors->has('zip_code'))
                            <div class="alert alert-danger">{{ $errors->first('zip_code')  }}</div>
                        @endif
                    </div>
                    <div class="row-in-form">
                        <label for="city">Town / City<span></span></label>
                        <input id="city" class="@error('city') is-invalid @enderror" type="text" name="city" value="{{ isset($customerShoppingDetail->town) ? $customerShoppingDetail->town : '' }}" placeholder="City name">
                        @if($errors->has('city'))
                            <div class="alert alert-danger">{{ $errors->first('city')  }}</div>
                        @endif
                    </div>
                </div>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment_method" id="payment-cash-on-delevery" value="cash-on-delivery" type="radio">
                                <span>Cash On Delivery</span>
                            </label>

                            <p class="summary-info"><span class="title">Pay Online</span></p>
                            <label class="payment-method">
                                <input name="payment_method" id="payment-method-sslcommerz" value="sslcommerz" type="radio" checked>
                                <span>Local or International Debit/Credit Card - Visa/Master/Amex or Nexus</span>
                                <span class="payment-desc">You will able to pay for your products using local credit/debit cards like VISA, MasterCard, DBBL Nexus Card and any kind of credit card or bank accounts right from your online store.</span>
                            </label>
                        </div>

{{--                        @if(session()->has('discount'))--}}
{{--                            @endif--}}
                        <p class="summary-info grand-total"><span>Grand Total</span> 
                            <span class="grand-total-price" id="grandTotal">
                                {{filter_var(Cart::subtotal(),FILTER_SANITIZE_NUMBER_INT)/100 + $shippingCost->description}} TK
                            </span>
                        </p>
                        <p id="discount"></p>
                        @guest('customer')
                            <button type="submit" class="btn btn-medium"><a title="Login" href="{{ route('customer.login-form') }}" style="color:white">Place order</a></button>
                        @else
                            <button type="submit" class="btn btn-medium" id="place_order">Place order</button>
                        @endif

                    </div>
                    {{Form::close()}}
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed {{$shippingCost->description}}.00</span></p>
                       <form method="POST">
                        <h4 class="title-box">Discount Codes</h4>
                           <h2 style="color: red" id="message"></h2>
                        <p class="row-in-form">
                            <label for="coupon-code">Enter Your Coupon code:</label>
                            <input id="coupon_code" type="text" name="coupon_code" value="">
                            <input id="shipping_cost" type="hidden" name="shipping_cost" value="{{$shippingCost->description}}" placeholder="">
                            <input id="sub_total" type="hidden" name="sub_total" value="{{filter_var(Cart::subtotal(),FILTER_SANITIZE_NUMBER_INT)/100}}" placeholder="">
                        </p>
                        <button class="btn btn-small">Apply</button>
                       </form>
                    </div>
                </div>
            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                        @foreach($allCategory as $category)                      
                            @if ($category['name']=='Most Viewed')
                                @php $mostViewed            = $category->products; @endphp
                                @foreach($mostViewed as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('show-product',['id'=>$product->id])}}" title={{$product->title}}>
                                                <figure><img src="{{asset($product->image1)}}" width="214" height="214" alt={{$product->title}}></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">Most Viewed</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="{{route('show-product',['id'=>$product->id])}}" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('show-product',['id'=>$product->id])}}" class="product-name"><span>{{$product->title}}</span></a>

                                            @if($product->sale_price==0 && $product->discount==0)
                                                <div class="wrap-price"><span class="product-price">{{$product->price}}</span></div>
                                            @elseif($product->sale_price>0)
                                                <div class="wrap-price"><span class="product-price"><ins><p class="product-price">৳ {{ $product->sale_price}} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{number_format((($product->price-$product->sale_price)*100)/$product->price),2}}% off</p></span></div>                                            
                                            @else
                                                <div class="wrap-price"><span class="product-price"><ins><p class="product-price">৳ {{ ($product->price/100)*(100-$product->discount) }} </p></ins> <del><p class="product-price">৳ {{$product->price}}</p></del><p class="product-price" style="margin-left:10px;">-{{$product->discount}}% off</p></span></div>
                                            @endif
                                        </div>
                                    </div>
                                @endforeach 
                            @endif
                        @endforeach
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

@endsection
@section('script')
    <script !src="">
        $(document).ready(function(){
            if(localStorage.getItem("newGrandTotal") != null) {
                document.getElementById("grandTotal").innerHTML = localStorage.getItem("newGrandTotal") +' ' +'TK';
            }
            $("#payment-cash-on-delevery").click(function(){
                document.getElementById('payment-method-sslcommerz').checked = false;
            });
            $("#payment-method-sslcommerz").click(function(){
                document.getElementById('payment-cash-on-delevery').checked = false;
            });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(".btn-small").click(function(e){
                e.preventDefault();
                var coupon_code = $("input[name=coupon_code]").val();
                var shipping_cost = $("input[name=shipping_cost]").val();
                var sub_total = $("input[name=sub_total]").val();
                $.ajax({
                    type:'POST',
                    url:'/nitol/check-coupon-discount',
                    data:{coupon_code:coupon_code, sub_total:sub_total, shipping_cost:shipping_cost},
                    success:function(data){
                        $(".grand-total-price").text(data.newGrandTotal+' '+'TK');
                        $("#message").html(data.success);
                        if(data.newGrandTotal) {
                            $("#discount").html("Discount added with GrandTotal");
                            localStorage.setItem("newGrandTotal", data.newGrandTotal);
                        }else{
                            $("#discount").html("")
                        }
                    }
                });

            });
        });
    </script>
@endsection