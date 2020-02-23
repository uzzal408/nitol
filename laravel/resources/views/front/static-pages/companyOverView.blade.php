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
                    
                    <div class="locator-sec">
                        <div class="repeat-dealor" style="padding:30px;text-align:justify;">
                            <h3> Electronics Limited (NEL)</h3>
                            <h3> Company Overview</h3>
                            
                                <p><span style="font-weight: 400;">Nitol Electronics Limited (NEL), a sister concern of Nitol Niloy Group (Group Chairman Mr. Abdul Matlub Ahmad and Vice-Chairperson Mrs. Selima Ahmad) is one of the fastest growing electronics product manufacturers in Bangladesh. The company was established in 4th April 2013 in Mohakhali, Dhaka by Mr. Abdul Musabbir Ahmad.</span></p>
                                <p><span style="font-weight: 400;">Atashii is our company's main brand, which help to enhance and enrich lifestyle all around the country. We have our own huge factory set up where we produce our brand TV Atashii.</span></p>
                                <p><span style="font-weight: 400;">We offer world class electronic manufacturing services and support, targeted specially to meet the requirement and budget of small to medium sized customers. We also worked with different NGOs.</span></p>
                                <p><span style="font-weight: 400;">NEL's product line includes TV, refrigerator, deep fridge, air conditioner, microwave oven, multi cooker, rice cooker, electric kettle, blender, grinder, stabilizer, iron, and hairdryer etc.</span></p>
                                <p><strong>Our operation areas are:</strong><span style="font-weight: 400;"> Dhaka, Gazipur, Chattogram, Sylhet, Jashore, Khulna, Bogra, Tangail, Kushtia, Savar, Joypurhat, Naogaon, Rajshahi, Cumilla, Barishal, Rangpur, Mymensingh, Barguna, Pirojpur, Bagerhat, Pabna, Sirajganj, Feni, Noakhali, and Jamalpur.&nbsp;</span></p>
                                <p><span style="font-weight: 400;">Currently we have 110 dealers in 64 districts.</span></p>
                                <p><span style="font-weight: 400;">NEL has a clear vision towards with quality and innovation including protecting the environment, and the climate has been an integral part of the company&rsquo;s corporate strategy. The company rely on its outstanding products and the added value that they provide to the customers in terms of performance, conveniences and user-friendliness.</span></p>
                                <p><span style="font-weight: 400;">Since its inception, Nitol Electronics Ltd. is serving world class services and products to its customers. The company is also striving to continue its excellence and commitment in terms of high-quality services and products.</span></p>
   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
