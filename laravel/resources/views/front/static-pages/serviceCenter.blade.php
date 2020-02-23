@section('stylesheet')
@endsection
@extends('front.master', ['body_class' => 'main-site'])
@section('title')
    Nitol | Dealer - Locator
@endsection
@php
    header('X-Frame-Options: GOFORIT');
@endphp
@section('body')
    <div class="container">
        <div class="wrap-top-banner-3">
            <!--SLIDER-->
            <div class="wrap-main-slide-3 mt-5">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    {{-- <div class="item-slide">
                        <img src="{{asset('/')}}client_end/images/banner-shop-full-width.jpg" alt="" class="img-slide" width="830" height="250">
                        <div class="wrap-banners type-1">

                        </div>
                    </div> --}}
                </div>
            </div>
            {{-- <div class="banner-style-vertical">
                <div class="banner-item">
                    <a href="#" class="link-banner banner-effect-1">
                        <figure><img src="{{asset('/')}}client_end/images/3-slide-banner-2.jpg" alt="" width="330" height="245"></figure>
                    </a>
                </div>
            </div> --}}
        </div>

    </div><!--end container-->
    <section>
        {{-- <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('/')}}client_end/images/dilar.jpg" alt="" >
                </div>
            </div>
        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    
                    <div class="locator-sec" style="padding-left:100px;text-align:justify;">
                        <h3 style="padding-bottom:50px;text-align:justify;">Service Center <strong style="color:red"> Hotline-09636 600 700</strong></h3>
                        <p><strong>Own Service Centers</strong></p>
                        <hr style="border-color:red;">
                        <p><strong>Dhaka (Central) Service Center</strong><strong><br /></strong><span style="font-weight: 400;">17, RC Tower (Ground floor), Mohakhali C/A, Dhaka-1212</span></p>
                        <p><strong>Chattogram Service Center</strong><strong><br /></strong><span style="font-weight: 400;">Noor Complex (Ground floor), SK Mujib Road, Pathantuli, Chowmuhani, Chattogram</span></p>
                        <p><strong>Khulna Service Center</strong><strong><br /></strong><span style="font-weight: 400;">16, KDA Avenue, Khulna</span></p>
                        <p><strong>Bogra Service Center</strong><strong><br /></strong><span style="font-weight: 400;">Panir Tank Road (Dutta Bari), Katnarpara, Bogra</span></p>
                        <p><strong>Gazipur Service Center</strong><strong><br /></strong><span style="font-weight: 400;">Baimail, Konabari, Gazipur</span></p>
                        <p><strong>Jashore Service Center</strong><strong><br /></strong><span style="font-weight: 400;">RARS Road, Notun Khoer Tola, Pal Barir Moor, Jashore-7400</span></p>
                        <p><strong>Joypurhat Service Center</strong><strong><br /></strong><span style="font-weight: 400;">1040, Amtoli, Sadar Road, Joypurhat</span></p>
                        <p><strong>Sylhet Service Center</strong><strong><br /></strong><span style="font-weight: 400;">Al Fazal Plaza, Suvessa 26, Dorshon Dewri, Ambarkhana, Sylhet</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
