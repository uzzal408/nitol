
<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Nitol Electronics</title>
    <link rel="shortcut icon" href="{{asset('/')}}client_end/images/fav.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/animate.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/color-01.css">

    <!-- layerSlider -->
 	<link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/layerSlider/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/layerSlider/css/skin.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/color-01.css">
    <!-- layerSlider -->

    <!-- xzoom plugin here -->
	<script src="{{asset('/')}}client_end/js/xZoom/jquery.js"></script>
	<script src="{{asset('/')}}client_end/js/xZoom/setup.js"></script>
   	<script type="text/javascript" src="{{asset('/')}}client_end/js/xZoom/xzoom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}client_end/css/xZoom/xzoom.css" media="all" /> 
    <!-- xzoom plugin here -->

    @yield('stylesheet')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    
</head>




<body @unless(empty($body_class)) class="{{$body_class}}" @endunless>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153794558-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-153794558-1');
</script>


<script type="text/javascript">
    (function () {
        var options = {
            facebook: "598880463493066", // Facebook page ID
            call_to_action: "Message us", // Call to action
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "getbutton.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<div class="mercado-clone-wrap">
    <div class="mercado-panels-actions-wrap">
        <a class="mercado-close-btn mercado-close-panels" href="#">x</a>
    </div>
    <div class="mercado-panels">
        <div class="nav-section ">
            <div class="primary-nav-section">
                <div class="container">
                    <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                        <li class="menu-item home-icon">
                            <a href="{{ url('/') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                        </li>
                            <li class="menu-item menu-item-has-children item-megamenu">
                                @foreach($allCategory as $category)
                                    @if ($category['name']=='TELEVISION')
                                        <a href="{{url('')}}/products/{{$category->id}}" title="TELEVISION" class="link-term mercado-item-title">Television</a>
                                    @endif
                                @endforeach
                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content min-height-526 bg-digital-electronic">
                                            <div class="row">
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <h2 class="menu-title"><a href="#">SMART LED TV</a></h2>
                                                            <ul>
                                                            @foreach($allCategory as $category)
                                                                    @if ($category['name']=='TELEVISION')
                                                                        @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='Smart LED TV')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <h2 class="menu-title"><a href="#">BASIC LED TV</a></h2>
                                                        <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='TELEVISION')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='Basic LED TV')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>

                            <li class="menu-item menu-item-has-children item-megamenu">
                                @foreach($allCategory as $category)
                                    @if ($category['name']=='AIR CONDITIONAR')
                                        <a href="{{url('')}}/products/{{$category->id}}" title="AIR CONDITIONAR" class="link-term mercado-item-title">Air Conditioner</a>
                                    @endif
                                @endforeach

                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content min-height-526 bg-digital-electronic">
                                            <div class="row">
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <h2 class="menu-title"><a href="#">SPLITE TYPE</a></h2>
                                                <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='AIR CONDITIONAR')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='SPLITE TYPE')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <h2 class="menu-title"><a href="#">CEILING MOUNTED TYPE</a></h2>
                                                        <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='AIR CONDITIONAR')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='Ceiling Mounted Type')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <h2 class="menu-title"><a href="#">CASSETTE TYPE</a></h2>
                                                            <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='AIR CONDITIONAR')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='CASSETTE TYPE')
                                                                                    @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </li>

                            <li class="menu-item menu-item-has-children item-megamenu">
                                @foreach($allCategory as $category)
                                    @if ($category['name']=='REFRIGERATOR')
                                        <a href="{{url('')}}/products/{{$category->id}}" title="REFREGERATOR" class="link-term mercado-item-title">REFRIGERATORS</a>
                                    @endif
                                @endforeach
                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content min-height-526 bg-digital-electronic">
                                            <div class="row">
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <ul>
                                    @foreach($allCategory as $category)

                                        @if ($category['name']=='REFRIGERATOR')
                                            @php $child = getChild($category['id']) @endphp
                                                                    @if(isset($child) && $child!=null)
                                                                        @foreach($child as $subcategory)
                                                    <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term">{{$subcategory->name}}</a></li>
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach
                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </li>

                            <li class="menu-item menu-item-has-children item-megamenu">
                                @foreach($allCategory as $category)
                                    @if ($category['name']=='FREEZER')
                                        <a href="{{url('')}}/products/{{$category->id}}" title="FREEZER" class="link-term mercado-item-title">FREEZER</a>
                                    @endif
                                @endforeach
                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content min-height-526 bg-digital-electronic">
                                            <div class="row">
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <ul>
                                    @foreach($allCategory as $category)

                                        @if ($category['name']=='FREEZER')
                                            @php $child = getChild($category['id']) @endphp

                                            @if(isset($child) && $child!=null)

                                                @foreach($child as $subcategory)
                                                    <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term">{{$subcategory->name}}</a></li>
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </li>
                            <li class="menu-item menu-item-has-children item-megamenu">
                                @foreach($allCategory as $category)
                                    @if ($category['name']=='HOME APPLIANCES')
                                        <a href="{{url('')}}/products/{{$category->id}}" title="HOME APPLIANCES" class="link-term mercado-item-title">Home Appliance</a>
                                    @endif
                                @endforeach
                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content min-height-526 bg-digital-electronic">
                                            <div class="row">
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <ul>
                                    @foreach($allCategory as $category)

                                        @if ($category['name']=='HOME APPLIANCES')
                                            @php $childTop = getChild($category['id']) @endphp

                                            @if(isset($childTop) && $childTop!=null)
                                                @foreach($childTop as $subcategory)
                                                    @if($subcategory->name!='Best Seller Home Appliance' && $subcategory->name!='New Arrivals Home Appliance' && $subcategory->name!='Top Rated Home Appliance')
                                                        @php $child = getChild($subcategory->id) @endphp
                                                        @if(isset($child) && $child!=null)
                                                            @foreach($child as $subSubcategory)
                                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term menu-title ">{{$subSubcategory->name}}</a></li>
                                                            @endforeach
                                                        @endif
                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term menu-title ">{{$subcategory->name}}</a></li>
                                                    @endif
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach
                                                </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                        <li class="menu-item menu-item-has-children item-megamenu">
                                @foreach($allCategory as $category)
                                    @if ($category['name']=='Accessories')
                                        <a href="{{url('')}}/products/{{$category->id}}" title="ACCESSORIES" class="link-term mercado-item-title">Accessories</a>
                                    @endif
                                @endforeach
                                    <div class="wrap-megamenu">
                                        <div class="megamenu-content min-height-526 bg-digital-electronic">
                                            <div class="row">
                                                <div class="custom-col-5">
                                                    <div class="wrap-vertical-nav">
                                                        <ul>
                                    @foreach($allCategory as $category)

                                        @if ($category['name']=='Accessories')
                                            @php $childTop = getChild($category['id']) @endphp

                                            @if(isset($childTop) && $childTop!=null)

                                                @foreach($childTop as $subcategory)
                                                    @php $child = getChild($subcategory->id) @endphp
                                                        @if(isset($child) && $child!=null)
                                                            @foreach($child as $subSubcategory)
                                                                <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term menu-title ">{{$subSubcategory->name}}</a></li>
                                                            @endforeach
                                                        @endif
                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term menu-title ">{{$subcategory->name}}</a></li>
                                                @endforeach
                                            @endif
                                        @endif
                                    @endforeach
                                </ul>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                        </li>
                    </ul>
                </div>
            </div> 
        </div>
        
    </div>
</div>
{{--Mobil menu END--}}
<header id="header" class="header header-style-1">
    <div class="container-fluid header-sticky">
        <div class="row">
            <!-- <div class="wrap-banner-top">
                    <figure><img src="{{asset('/')}}client_end/images/banner-top.jpg" alt="mercado top banner" width="1920" height="88"></figure>
                </div> -->

            <div class="topbar-menu-area">
                <div class="container">
                    <div class="topbar-menu left-menu">
                        <ul>
                            <li class="menu-item" >
                                <a title="Hotline: (+88) 096 36 400 400" ><span class="icon label-before fa fa-mobile"></span> <span class="hot_number">Hotline: 09636 400 400</span> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topbar-menu right-menu">
                        <ul>
                            <li class="menu-item" ><a title="Store Location" href="{{url('')}}/store/locator">Showrooms</a></li>
                            <li class="menu-item" ><a title="Corporate Information" href="{{url('')}}/corporateInfo">Corporate Info </a></li>
                            <li class="menu-item" ><a title="Service Center" href="{{url('')}}/serviceCenter/locator">Service Center </a></li>
                             <li class="menu-item" ><a title="Newsletter" href="#">Newsletter / Blog</a></li>
                            @guest('customer')
                                <li class="menu-item" ><a title="Register" href="{{route('customer.registration-form')}}">Register</a></li>
                                <li class="menu-item" ><a title="Login" href="{{ route('customer.login-form') }}">Login</a></li>
                            @else
                                <li class="menu-item" >
                                    <a title="Customer Detail" href="{{url('')}}/customer/customerInfomation">{{ Auth::guard('customer')->user()->name }}
                                    </a>
                                </li>
                                <li class="menu-item" ><a title="Logout" href="{{route('customer.logout')}}">Logout</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">
                    <div class="wrap-logo-top left-section">
                        <a href="{{route('/')}}" class="link-to-home"><img src="{{asset('/')}}client_end/images/Nitol-Electronics-Logo.png" alt="mercado"></a>
                    </div>
                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="{{url('')}}/searchProduct" method="POST" id="form-search-top" name="form-search-top">
                                @csrf
                                <input type="text" name="search" id="searchCategory" value="" placeholder="Search here...">

                                <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

                                <div class="wrap-list-cate">

                                     <select class="form-control" value="" name="productCategory">
                                        <option>All products</option>
                                        @foreach($categories as $category)
                                            @if ($category['name']=='TELEVISION')
                                                <option>{{$category['name']}}</option>
                                                @if(isset($category['children']))
                                                    @foreach($category['children'] as $subcategory)
                                                        <option>{{$subcategory['name']}}</option>
                                                    @endforeach
                                                @endif
                                            @endif

                                            @if ($category['name']=='AIR CONDITIONAR')
                                                <option>{{$category['name']}}</option>
                                                @if(isset($category['children']))
                                                    @foreach($category['children'] as $subcategory)
                                                        <option>{{$subcategory['name']}}</option>
                                                    @endforeach
                                                @endif
                                            @endif

                                            @if ($category['name']=='REFRIGERATOR')
                                                <option>{{$category['name']}}</option>
                                                @if(isset($category['children']))
                                                    @foreach($category['children'] as $subcategory)
                                                        <option>{{$subcategory['name']}}</option>
                                                    @endforeach
                                                @endif
                                            @endif

                                            @if ($category['name']=='FREEZERS')
                                                <option>{{$category['name']}}</option>
                                                @if(isset($category['children']))
                                                    @foreach($category['children'] as $subcategory)
                                                        <option>{{$subcategory['name']}}</option>
                                                    @endforeach
                                                @endif
                                            @endif

                                            @if ($category['name']=='HOME APPLIANCES')
                                                <option>{{$category['name']}}</option>
                                                @if(isset($category['children']))
                                                    @foreach($category['children'] as $subcategory)
                                                        <option>{{$subcategory['name']}}</option>
                                                    @endforeach
                                                @endif
                                            @endif

                                            @if ($category['name']=='Accessories')
                                                <option>{{$category['name']}}</option>
                                                @if(isset($category['children']))
                                                    @foreach($category['children'] as $subcategory)
                                                        <option>{{$subcategory['name']}}</option>
                                                    @endforeach
                                                @endif
                                            @endif

                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            {{-- <a href="#" class="link-direction">
                                <i class="fa fa-heart" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span class="index">0 item</span>
                                    <span class="title">Wishlist</span>
                                </div>
                            </a> --}}
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="{{route('checkout')}}" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span id="cartDetails">
                                        @if(Cart::count() > 0)
                                            <span class="index" id="">{{Cart::count()}} items</span>
                                        @endif
                                    </span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>


                        <div class="wrap-icon-section minicart">
                            <img src="{{asset('/')}}attached_images/Atashii_Logo/Atashii Logo.png">
                        </div>


                        {{-- @if (Session::get('CustomerId')!='')
                            <p class="summary-info grand-total"><span>Grand Total: </span><span class="grand-total-price" id="grandTotal" style="color:red;">{{Cart::subtotal()}}</span> TK</p>
                        @endif --}}
                        <div class="wrap-icon-section show-up-after-1024">
                            <a href="#" class="mobile-navigation">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

                <!-- MObile Menu End-->
                <!--  Menu Descstop menu-->
<div class="nav-section">
                <div class="primary-nav-section">
                    <div class="container">
                        <nav class="navbar-nit">
                            <div class="sitenavigation">
                              <ul>
                                <li class="active2"><a href="{{ url('/') }}" class="homeicon" ><i class="fa fa-home" aria-hidden="true"></i></a></span></li>
                                  <li class="nav-dropdown">
                                  @foreach($allCategory as $category)
                                      @if ($category['name']=='TELEVISION')
                                          <a href="{{url('')}}/products/{{$category->id}}" title="Digital & Electronics" class="link-term mercado-item-title">Television</a>
                                      @endif
                                  @endforeach
{{--                                  <li class="nav-dropdown"><a href="#">TELEVISION</a>--}}
                                  <ul>
                                    <li class="nav-dropdown aro"><a href="#">SMART LED TV</a>
                                      <ul>
                                          @foreach($allCategory as $category)

                                              @if ($category['name']=='TELEVISION')

                                                  @if(isset($category['children']))

                                                      @foreach($category['children'] as $subcategory)
                                                          @if ($subcategory['name']=='Smart LED TV')
                                                              @php $child = getChild($subcategory['id']) @endphp
                                                              @if(isset($child) && $child!=null)
                                                                  @foreach($child as $subSubcategory)
                                                                      <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                  @endforeach
                                                              @endif
                                                          @endif
                                                      @endforeach
                                                  @endif
                                              @endif
                                          @endforeach
                                      </ul>

                                      <li class="nav-dropdown aro"><a href="#">BASIC LED TV</a>
                                          <ul>
                                              @foreach($allCategory as $category)

                                                  @if ($category['name']=='TELEVISION')

                                                      @if(isset($category['children']))

                                                          @foreach($category['children'] as $subcategory)
                                                              @if ($subcategory['name']=='Basic LED TV')
                                                                  @php $child = getChild($subcategory['id']) @endphp
                                                                  @if(isset($child) && $child!=null)
                                                                      @foreach($child as $subSubcategory)
                                                                          <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                      @endforeach
                                                                  @endif
                                                              @endif
                                                          @endforeach
                                                      @endif
                                                  @endif
                                              @endforeach
                                          </ul>
                                      </li>
                                  </ul>
                                  </li>

                                  <li class="nav-dropdown ">
                                      @foreach($allCategory as $category)
                                          @if ($category['name']=='AIR CONDITIONAR')
                                              <a href="{{url('')}}/products/{{$category->id}}" title="Digital & Electronics" class="link-term mercado-item-title">Air Conditioner</a>
                                          @endif
                                      @endforeach
                                      <ul>
                                         <li class="nav-dropdown aro"><a href="#">SPLITE TYPE</a>
                                        <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='AIR CONDITIONAR')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='SPLITE TYPE')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                      </li>

                                      <li class="nav-dropdown aro"><a href="#">CEILING MOUNTED TYPE</a>
                                        <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='AIR CONDITIONAR')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='Ceiling Mounted Type')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="nav-dropdown aro"><a href="#">CASSETTE TYPE</a>
                                        <ul>
                                            @foreach($allCategory as $category)

                                                @if ($category['name']=='AIR CONDITIONAR')

                                                    @if(isset($category['children']))

                                                        @foreach($category['children'] as $subcategory)
                                                            @if ($subcategory['name']=='CASSETTE TYPE')
                                                                @php $child = getChild($subcategory['id']) @endphp
                                                                @if(isset($child) && $child!=null)
                                                                    @foreach($child as $subSubcategory)
                                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term">{{$subSubcategory->name}}</a></li>
                                                                    @endforeach
                                                                @endif
                                                            @endif
                                                        @endforeach
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    </li>
                                    </ul>
                                  </li>

                                  <li class="nav-dropdown ">
                                      @foreach($allCategory as $category)
                                          @if ($category['name']=='REFRIGERATOR')
                                              <a href="{{url('')}}/products/{{$category->id}}" title="Digital & Electronics" class="link-term mercado-item-title">REFRIGERATORS</a>
                                          @endif
                                      @endforeach
                                    <ul>
                                        <ul>
                                        </ul>
                                        @foreach($allCategory as $category)

                                            @if ($category['name']=='REFRIGERATOR')

                                                @php $child = getChild($category['id']) @endphp
                                                @if(isset($child) && $child != null)

                                                    @foreach($child as $subcategory)
                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term">{{$subcategory->name}}</a></li>
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                  </li>

                                  <li class="nav-dropdown ">
                                      @foreach($allCategory as $category)
                                          @if ($category['name']=='FREEZER')
                                              <a href="{{url('')}}/products/{{$category->id}}" title="Digital & Electronics" class="link-term mercado-item-title">FREEZER</a>
                                          @endif
                                      @endforeach
                                    <ul>
                                        @foreach($allCategory as $category)

                                            @if ($category['name']=='FREEZER')
                                                @php $child = getChild($category['id']) @endphp

                                                @if(isset($child) && $child!=null)

                                                    @foreach($child as $subcategory)
                                                        <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term">{{$subcategory->name}}</a></li>
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                  </li>
                                  <li class="nav-dropdown">
                                      @foreach($allCategory as $category)
                                          @if ($category['name']=='HOME APPLIANCES')
                                              <a href="{{url('')}}/products/{{$category->id}}" title="Digital & Electronics" class="link-term mercado-item-title">Home Appliance</a>
                                          @endif
                                      @endforeach
                                  <ul>
                                          @foreach($allCategory as $category)

                                              @if ($category['name']=='HOME APPLIANCES')
                                              @php  $childTop = getChild($category['id'])@endphp
                                          @if(isset($childTop) && $childTop!=null)
                                                      @foreach($childTop as $subcategory)
                                                          @if($subcategory->name!='Best Seller Home Appliance' && $subcategory->name!='New Arrivals Home Appliance' && $subcategory->name!='Top Rated Home Appliance')
                                                          @php  $child = getChild($subcategory->id)@endphp
                                                              @if(isset($child) && $child!=null)
                                                                  @foreach($child as $subSubcategory)
                                                                          <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term menu-title ">{{$subSubcategory->name}}</a></li>
                                                                  @endforeach
                                                              @endif
                                                                  <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term menu-title ">{{$subcategory->name}}</a></li>
                                                          @endif
                                                      @endforeach
                                                  @endif
                                              @endif
                                          @endforeach
                                  </ul>
                                  </li>

                                  <li class="nav-dropdown ">
                                      @foreach($allCategory as $category)
                                          @if ($category['name']=='Accessories')
                                              <a href="{{url('')}}/products/{{$category->id}}" title="Digital & Electronics" class="link-term mercado-item-title">Accessories</a>
                                          @endif
                                      @endforeach
                                    <ul>
                                        @foreach($allCategory as $category)

                                            @if ($category['name']=='Accessories')
                                                @php $childTop = getChild($category['id']) @endphp

                                                @if(isset($childTop) && $childTop!=null)

                                                    @foreach($childTop as $subcategory)
                                                        @php $child = getChild($subcategory->id) @endphp
                                                            @if(isset($child))
                                                                @foreach($child as $subSubcategory)
                                                                    <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term menu-title ">{{$subSubcategory->name}}</a></li>
                                                                @endforeach
                                                            @endif
                                                                <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term menu-title ">{{$subcategory->name}}</a></li>
                                                    @endforeach
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                          <ul>
                                              @foreach($allCategory as $category)

                                              @if ($category['name']=='Accessories')

                                                  @if(isset($category['children']))

                                                      @foreach($category['children'] as $subcategory)
                                                          @if(($subcategory->id)%2==0)
                                                              @if(isset($subcategory['children']))
                                                                  @foreach($subcategory['children'] as $subSubcategory)
                                                                      <ul>
                                                                          <li class="menu-item"><a href="{{url('')}}/products/{{$subSubcategory->id}}" class="link-term menu-title ">{{$subSubcategory->name}}</a></li>
                                                                      </ul>
                                                                  @endforeach
                                                              @endif
                                                              <ul>
                                                                  <li class="menu-item"><a href="{{url('')}}/products/{{$subcategory->id}}" class="link-term menu-title ">{{$subcategory->name}}</a></li>
                                                              </ul>
                                                          @endif
                                                      @endforeach
                                                  @endif
                                              @endif
                                          @endforeach
                                    </ul>
                                  </li>
                              </ul>
                            </div>
                          </nav>
                </div>
        </div>
    </div>
</header>

<!--main area-->
<main id="main"
    @unless(empty($main_class))
        class="{{$main_class}}"
    @endunless class="">
    @yield('body')
</main>
<!--main area-->

<!--footer area-->
<footer id="footer">
    <div class="wrap-footer-content footer-style-1">
        <div class="wrap-function-info">
            <div class="container">
                <ul>
                    <li class="fc-info-item">
                        <div class="wrap-left-info">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                            <h4 class="fc-name">Free Shipping</h4>
                            <p class="fc-desc">At your doorstep</p>
                            {{-- <p class="fc-desc">
                                @foreach($allCategory as $category)  
                                    @if ($category['name']=='Free Shipping Cost') 
                                        @php
                                            $free_shipping = explode(',',$category['description']) 
                                        @endphp
                                        Free On Oder Over {{$free_shipping[0]}}
                                    @endif
                                @endforeach
                            </p> --}}
                        </div>
                    </li>

                    {{-- <li class="fc-info-item">
                        <i class="fa fa-recycle" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Guarantee</h4>
                            <p class="fc-desc">30 Days Money Back</p>
                        </div>
                    </li> --}}

                    <li class="fc-info-item">
                        <i class="fa fa-credit-card-alt" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Safe Payment</h4>
                            <p class="fc-desc">Safe your online payment</p>
                        </div>

                    </li>
                    <li class="fc-info-item">
                        <i class="fa fa-life-ring" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Online Support</h4>
                            <p class="fc-desc">We Have Support 24/7</p>
                        </div>

                    </li>
                </ul>
            </div>
        </div>

        <!--End function info-->

        <div class="main-footer-content">

            <div class="container">

                <div class="row">

                    <div class="col-lg-6 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Office Address</h3>
                            <div class="item-content">
                                <div class="wrap-contact-detail">
                                    <ul>
                                        <li>
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="contact-txt">Nitol Center (12th Floor) 71, Mohakhali C/A, Dhaka-1212, Bangladesh. </p>
                                        </li>
                                        <li>
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="contact-txt">09636 400 400</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="contact-txt">info@nitolelectronics.com</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p class="contact-txt">Sun-Thr 9:00am - 6:30pm Fri,Sat:Closed</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Hot Line</h3>
                            <div class="item-content">
                                <div class="wrap-hotline-footer">
                                    {{-- <span class="desc">Call Us toll Free</span> --}}
                                    <b class="phone-number">09636 400 400 </b>
                                </div>
                            </div>
                        </div>


                        <div class="wrap-footer-item">
                            <h3 class="item-header">My Account</h3>
                            <div class="item-content">
                                <div class="wrap-vertical-nav">
                                    <ul>
                                        @guest('customer')
                                            <li class="menu-item"><a href="{{ route('customer.login-form') }}" class="link-term">My Account</a></li>
                                        @else
                                            <li class="menu-item"><a href="{{url('')}}/customer/customerInfomation" class="link-term">My Account</a></li> 
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        

                        {{-- <div class="wrap-footer-item footer-item-second">
                            <h3 class="item-header">Sign up for newsletter</h3>
                            <div class="item-content">
                                <div class="wrap-newletter-footer">
                                    <form action="#" class="frm-newletter" id="frm-newletter">
                                        <input type="email" class="input-email" name="email" value="" placeholder="Enter your email address">
                                        <button class="btn-submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}

                    </div>

                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Infomation</h3>
                            <div class="item-content">
                                <div class="wrap-vertical-nav">
                                    <ul>
                                        <li class="menu-item"><a href="{{url('')}}/contactUs" class="link-term">Contact Us</a></li>
                                        <li class="menu-item"><a href="{{url('')}}/companyOverView" class="link-term">Company Overview</a></li>
                                        <li class="menu-item"><a href="{{url('')}}/termrAndConditions" class="link-term">Terms & Conditions</a></li>
                                        <li class="menu-item"><a href="{{url('')}}/warrantyPolicy" class="link-term">Warranty Policy</a></li>
                                        {{-- <li class="menu-item"><a href="#" class="link-term">Specials</a></li>
                                        <li class="menu-item"><a href="#" class="link-term">Order History</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">We Using Safe Payments:</h3>
                            <div class="item-content">
                                <div class="wrap-list-item wrap-gallery">
                                    <ul>
                                        <li><a href="#" class="link-to-item"><figure><img src="{{asset('/')}}client_end/images/Payment System.png" alt="american express"></figure></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Social network</h3>
                            <div class="item-content">
                                <div class="wrap-list-item social-network">
                                    <ul>
                                        <li><a href="https://www.facebook.com/nitolelectronics/" class="link-to-item" title="facebook" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/atashii_nitol_electronics/" class="link-to-item" title="instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.youtube.com/channel/UCNWBbN6gtqtHO4JuAlSTqDg" class="link-to-item" title="youtube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                        {{-- <li><a href="#" class="link-to-item" title="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
                                        <li><a href="https://www.instagram.com/atashii_nitol_electronics/" class="link-to-item" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="wrap-footer-item">

                            <div class="item-header"><span><a href="{{ route('front.download.brotuiar') }}" target="_blank"> Dowload Brushier/<br>Catalogue</a> </span></div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="wrap-footer-item">
    
                                <span> Marketed by</span>
                                
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li ><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="{{asset('/')}}client_end/images/downapp-logo.png" alt="google play store" width="128" height="36"></figure></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>




                </div>
            </div>


            <div style=" height:30px;"></div>
        </div>

        <div class="coppy-right-box">
            <div class="container">
                <div class="coppy-right-item item-left">
                    <p class="coppy-right-text">Copyright © {{ date('Y') }} <a href="#" class="link-to-home">Nitol</a>. All rights reserved</p>
                </div>
                <div class="coppy-right-item item-right">
                    <div class="wrap-nav horizontal-nav">
                        <p style="color:#ccc;">Powered by: <img src="{{asset('/')}}client_end/images/poweredby-aamra-white.png" alt=""> infotainment ltd.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>


<script src="{{asset('/')}}client_end/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="{{asset('/')}}client_end/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="{{asset('/')}}client_end/js/bootstrap.min.js"></script>
<script src="{{asset('/')}}client_end/js/jquery.flexslider.js"></script>
<script src="{{asset('/')}}client_end/js/chosen.jquery.min.js"></script>
<script src="{{asset('/')}}client_end/js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}client_end/js/jquery.countdown.min.js"></script>
<script src="{{asset('/')}}client_end/js/jquery.sticky.js"></script>
<script src="{{asset('/')}}client_end/js/functions.js"></script>

<!-- layerSlider -->

<script src="{{asset('/')}}client_end/layerSlider/js/jquery-easing-1.3.js"></script>
<script src="{{asset('/')}}client_end/layerSlider/js/layerslider.transitions.js"></script>
<script src="{{asset('/')}}client_end/layerSlider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="{{asset('/')}}client_end/js/functions.js"></script>	


<script type="text/javascript">
    // Running the code when the document is ready
    $(document).ready(function() {
        // Calling LayerSlider on the target element
        $('#layerslider2').layerSlider({
            responsiveUnder: 676,
            layersContainer: 1900,
            skin: 'noskin',
            skinsPath: 'layerslider/skins/',
            pauseOnHover: true,
            showCircleTimer: false,
            navStartStop: false,
            navButtons: false
            // Slider options goes here,
            // please check the 'List of slider options' section in the documentation
        });
    });
</script>
            
              <script id="rendered-js">
              // on document ready
              $(document).ready(function () {
              
                // show/hide the mobile menu based on class added to container
                $('.menu-icon').click(function () {
                  $(this).parent().toggleClass('is-tapped');
                  $('#hamburger').toggleClass('open');
                });
              
                // handle touch device events on drop down, first tap adds class, second navigates
                $('.touch .sitenavigation li.nav-dropdown > a').on('touchend',
                function (e) {
                  if ($('.menu-icon').is(':hidden')) {
                    var parent = $(this).parent();
                    $(this).find('.clicked').removeClass('clicked');
                    if (parent.hasClass('clicked')) {
                      window.location.href = $(this).attr('href');
                    } else {
                      $(this).addClass('linkclicked');
              
                      // close other open menus at this level
                      $(this).parent().parent().find('.clicked').removeClass('clicked');
              
                      parent.addClass('clicked');
                      e.preventDefault();
                    }
                  }
                });
              
                // handle the expansion of mobile menu drop down nesting
                $('.sitenavigation li.nav-dropdown').click(
                function (event) {
                  if (event.stopPropagation) {
                    event.stopPropagation();
                  } else {
                    event.cancelBubble = true;
                  }
              
                  if ($('.menu-icon').is(':visible')) {
                    $(this).find('> ul').toggle();
                    $(this).toggleClass('expanded');
                  }
                });
              
              
                // prevent links for propagating click/tap events that may trigger hiding/unhiding
                $('.sitenavigation a.nav-dropdown, .sitenavigation li.nav-dropdown a').click(
                function (event) {
                  if (event.stopPropagation) {
                    event.stopPropagation();
                  } else {
                    event.cancelBubble = true;
                  }
                });
              
              
                // javascript fade in and out of dropdown menu
                $('.no-touch .sitenavigation li').hover(
                function () {
                  if (!$('.menu-icon').is(':visible')) {
                    $(this).find('> ul').fadeIn(100);
                  }
                },
                function () {
                  if (!$('.menu-icon').is(':visible')) {
                    $(this).find('> ul').fadeOut(100);
                  }
                });
              
              });
              
                  </script>




 <!-- layerSlider -->


@yield('script')
<!--footer area-->
</body>
</html>
