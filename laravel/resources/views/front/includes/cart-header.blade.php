<!-- header-starts -->
<div class="header-section">
    <!--toggle button start-->
    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    <!--toggle button end-->
    <!--notification menu start -->
    <div class="menu-right">

        <div class="logo_bg edge-shadow">
            <a href="{{route('/')}}">
                <img style="width: 50%;" src="{{asset('/')}}front/assets/imgs/pizzahut-logo-icon.svg" alt="">
            </a>
        </div>
        <div class="profile-icon">
            <a href="{{route('cart')}}">
                <span id="cart_subtotal">৳{{Cart::subtotal()}}</span>
                <img src="{{asset('/')}}front/assets/imgs/basket.png">
                <span id="cart_count">{{Cart::count()}}</span>
            </a>
        </div>
    </div>
</div>
<!--notification menu end -->
<!-- .header-section end -->

<div class="splash"></div><!-- -----Splash -->