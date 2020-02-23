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
                    <h3 class="box-title">Billing Address</h3>
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
                        {{-- <label class="checkbox-field">
                            <input name="create-account" id="create-account" value="forever" type="checkbox">
                            <span>Create an account?</span>
                        </label> --}}
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

                            {{-- <label class="payment-method">
                                <input name="payment-method" id="payment-method-visa" value="visa" type="radio">
                                <span>visa</span>
                                <span class="payment-desc">There are many variations of passages of Lorem Ipsum available</span>
                            </label>
                            <label class="payment-method">
                                <input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
                                <span>Paypal</span>
                                <span class="payment-desc">You can pay with your credit</span>
                                <span class="payment-desc">card if you don't have a paypal account</span>
                            </label> --}}

                        </div>
                        
                        {{-- <table>
                            <thead>
                                <th class="text-left"> Id</th>
                                <th class="text-center"> Quantity</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Price (TK)</th>
                                <th class="text-center">Action</th>
                            </thead>
                            <tbody>
                                @php $cartProducts = Cart::content(); @endphp
                                @foreach ($cartProducts as $key => $value)
                                    <tr>
                                        <td class="text-center"><p class="summary-info grand-total"><span class="grand-total-price">{{$value->id}}</span></p></td>
                                        <td class="text-center"><p class="summary-info grand-total"><span class="grand-total-price">{{$value->qty}}</span></p></td>
                                        <td class="text-center"><p class="summary-info grand-total"><span class="grand-total-price">{{$value->name}}</span></p></td>
                                        <td class="text-center"><p class="summary-info grand-total"><span class="grand-total-price">{{$value->price}}</span></p></td>
                                        <td class="text-center">
                                            <a href="{{url('')}}/product/{{$value->id}}"> Edit </a>
                                            <a href="{{url('')}}/cardDelete/{{$value->rowId}}"> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table> --}}
            
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
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed {{$shippingCost->description}}.00</span></p>
                        <h4 class="title-box">Discount Codes</h4>
                        <p class="row-in-form">
                            <label for="coupon-code">Enter Your Coupon code:</label>
                            <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                        </p>
                        <a href="#" class="btn btn-small">Apply</a>
                    </div>
                </div>
            {{Form::close()}}

            {{-- <div class="wrap-iten-in-cart">
                <h3 class="box-title">Products Detail</h3>
                <ul class="products-cart">
                    @php $cartProducts = Cart::content(); @endphp
                    @foreach ($cartProducts as $key => $value)
                        <li class="pr-cart-item">
                            <div class="product-image">
                                <a href="{{route('show-product',['id'=>$value->id])}}" title="">
                                    <figure><img src="{{asset('/')}}/{{$value->options->image}}"alt=""></figure>
                                </a>
                            </div>
                            <div class="product-name">
                                <a class="link-to-product" href="#">{{$value->name}}</a>
                            </div>
                            <div class="price-field produtc-price"><p class="price"> {{$value->price}}</p></div>
                            <div class="quantity">
                                <div class="quantity-input">
                                    <input type="text" name="product-quatity" value={{$value->qty}} data-max="120" pattern="[0-9]*" id="productQuantity">
                                    <a class="btn btn-reduce" href="#"></a>
                                    <a class="btn btn-increase" href="#"></a>
                                </div>
                            </div>
                            <div class="price-field sub-total"><p class="price">{{$value->price*$value->qty}}</p></div>
                            <div class="delete">
                                <a href="{{url('')}}/cardDelete/{{$value->rowId}}"  title="">
                                    <i class="fa fa-times-circle" aria-hidden="true"></i>
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <p class="summary-info grand-total"><span>Grand Total</span> <span class="grand-total-price">{{Cart::subtotal()}} TK</span></p>
                        @if (Session::get('CustomerId')=='')
                            <button type="submit" class="btn btn-medium"><a title="Login" href="{{url('')}}/customerLogin" style="color:white">Proceed to Checkout</a></button>
                        @else
                            <button type="submit" class="btn btn-medium"><a title="Login" href="{{url('')}}/checkoutProceed" style="color:white">Proceed to Checkout</a></button>
                        @endif
                    </div>
                </div>
            </div> --}}

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
    <script !src="">
    </script>
@endsection