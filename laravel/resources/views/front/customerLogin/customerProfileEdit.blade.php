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
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            {{Form::open(['route'=>'customerProfileupdate','class'=>'contact-form','method'=>'POST','name'=>'frm-billing'])}}
                
                <div class="wrap-address-billing">
                    <h3 class="box-title">Customer Information Edit</h3>
                    <p class="row-in-form" style="display: none"></p>

                    <p class="row-in-form">
                        <label for="fname">Customer Name<span>*</span></label>
                        <input id="fname" type="text" name="name" value="{{$customerProfileEdit->name}}" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">Email Address<span>*</span></label>
                        <input id="fname" type="text" name="email" value="{{$customerProfileEdit->email}}" placeholder="Your name" required>
                    </p>
                    
                    <p class="row-in-form">
                        <label for="fname">Phone Number<span>*</span></label>
                        <input id="fname" type="text" name="phone_number" value="{{$customerProfileEdit->phone_number}}" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">NID/Birth Certificate No<span>*</span></label>
                        <input id="fname" type="text" name="nidNumber" value="{{$customerProfileEdit->nidNumber}}" placeholder="Your name" required>
                    </p>

                    <p class="row-in-form">
                        <label for="fname">Gender<span>*</span></label>
                        <input id="fname" type="text" name="Gender" value="{{$customerProfileEdit->Gender}}" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">Date of Birth</label>
                        <input id="fname" type="text" name="dateOfBirth" value="{{$customerProfileEdit->dateOfBirth}}" placeholder="Your name">
                    </p>

                    <p class="row-in-form">
                        <label for="fname">Present Address<span>*</span></label>
                        <input id="fname" type="text" name="present_aadress" value="{{$customerProfileEdit->present_aadress}}" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">Permanent Address<span>*</span></label>
                        <input id="fname" type="text" name="permanent_address" value="{{$customerProfileEdit->permanent_address}}" placeholder="Your name" required>
                    </p>
                </div>
                <div class="summary-item shipping-method">
                    <input type="submit" class="btn btn-small" name="Submit" value="Apply">
                </div>
                
            {{Form::close()}}

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