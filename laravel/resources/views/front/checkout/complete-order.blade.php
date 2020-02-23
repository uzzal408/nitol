@extends('front.master', ['body_class' => 'sticky-header left-side-collapsed'])
@section('title')
    Order Pizza Online For Delivery | Home
@endsection
@section('body')
    <!-- main content start-->
    <div class="main-content">
    @include('front.includes.back-header')
        <!--notification menu end -->
        <div class="toolbar-title toolbar-title-md" style="text-transform: uppercase;color: #424242;padding: 15px 0px 15px 0px; text-align: center; font-weight: 600; font-family: 'Open Sans Condensed', sans-serif;">Order Success
        </div>

        <div class="contain-fluid">
            <div class="store_wrapper">
                <div class="store_card">
                    <h1 class="display-4 font-size-md-down-5 mb-3" style="text-align: center;color: #e13c3f;">
                        <i class="fas fa-shipping-fast" style="font-size: 30px;"></i> <br/>Your order has been placed successfully
                    </h1>

                </div><!-- .store_card -->
                <a class="checkout_btn btn btn-block" href="{{route('/')}}">Back to Store Page</a>
                {{--<button type="button" class="checkout_btn">Back to Store Page</button>--}}

            </div>
        </div>
        <!-- End of .clearfix -->

    </div>
    <!-- main content end-->
@endsection