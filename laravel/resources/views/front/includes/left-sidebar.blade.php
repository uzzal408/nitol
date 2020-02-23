<!-- left side start-->
<div class="left-side sticky-left-side">

    <!--logo and iconic logo end-->
    <div class="left-side-inner">

        <!--sidebar nav start -->
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li style="padding: 36px 0px 40px 20px;font-size: 25px; font-weight: 600; font-style: bold !important; background-color: #fff; ">
                <span >
                @if(Session::has('CustomerName'))
                        {{Session::get('CustomerName')}}
                    @else
                        Hello Guest
                    @endif
                </span>
            </li>

            <li><a href="{{route('/')}}"><span>Home</span></a>
            </li>
            <li>
                @if(Session::has('CustomerId'))
                    <a href="{{ route('logout-customer') }}"><span>{{ __('Logout') }}</span></a>
                @else
                    <a href="{{route('login-customer')}}"> <span>Log in/Register</span></a>
                @endif
            </li>

            <li><a href="{{route('track_order')}}"><span>Track Order</span></a></li>

            <li><a href="{{route('about-us')}}"><span>About Us</span></a></li>

            <li><a href="{{route('stores')}}"><span>Store Locator</span></a></li>

        </ul>
        <!--sidebar nav end-->

    </div>
</div>
</div>

<!-- left side end-->