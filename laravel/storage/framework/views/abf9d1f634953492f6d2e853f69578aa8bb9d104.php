<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <title>Nitol Electronics</title>
    <link rel="shortcut icon" href="<?php echo e(asset('/')); ?>client_end/images/fav.png" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/chosen.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/color-01.css">

    <!-- layerSlider -->
 	<link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/layerSlider/css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/layerSlider/css/skin.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/color-01.css">
    <!-- layerSlider -->

    <!-- xzoom plugin here -->
	
	<script src="<?php echo e(asset('/')); ?>client_end/js/xZoom/jquery.js"></script>
	<script src="<?php echo e(asset('/')); ?>client_end/js/xZoom/setup.js"></script>
   	<script type="text/javascript" src="<?php echo e(asset('/')); ?>client_end/js/xZoom/xzoom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/css/xZoom/xzoom.css" media="all" /> 
    <!-- xzoom plugin here -->

    <?php echo $__env->yieldContent('stylesheet'); ?>
</head>




<body <?php if (! (empty($body_class))): ?> class="<?php echo e($body_class); ?>" <?php endif; ?>>

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
    <div class="mercado-panels"></div>
</div>

<header id="header" class="header header-style-1">
    <div class="container-fluid header-sticky">
        <div class="row">
            <!-- <div class="wrap-banner-top">
                    <figure><img src="<?php echo e(asset('/')); ?>client_end/images/banner-top.jpg" alt="mercado top banner" width="1920" height="88"></figure>
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
                            
                            
                            <li class="menu-item" ><a title="Store Location" href="<?php echo e(url('')); ?>/store/locator">Showrooms</a></li>
                            
                            <li class="menu-item" ><a title="Corporate Information" href="<?php echo e(url('')); ?>/corporateInfo">Corporate Info </a></li>
                            <li class="menu-item" ><a title="Service Center" href="<?php echo e(url('')); ?>/serviceCenter/locator">Service Center </a></li>
                            
                            <?php if(Session::get('CustomerName')==''): ?>
                                <li class="menu-item" ><a title="Register" href="<?php echo e(url('')); ?>/customer/register">Register</a></li> 
                                <li class="menu-item" ><a title="Login" href="<?php echo e(url('')); ?>/customerLogin">Login</a></li>
                            <?php else: ?>
                                <li class="menu-item" >
                                    <a title="Customer Detail" href="<?php echo e(url('')); ?>/customer/customerInfomation"><?php echo e((Session::get('CustomerName'))); ?>

                                    </a>
                                </li>
                                <li class="menu-item" ><a title="Logout" href="<?php echo e(url('')); ?>/customer/logout">Logout</a></li>
                                
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="mid-section main-info-area">
                    <div class="wrap-logo-top left-section">
                        <a href="<?php echo e(route('/')); ?>" class="link-to-home"><img src="<?php echo e(asset('/')); ?>client_end/images/Nitol-Electronics-Logo.png" alt="mercado"></a>
                    </div>
                    <div class="wrap-search center-section">
                        <div class="wrap-search-form">
                            <form action="<?php echo e(url('')); ?>/searchProduct" method="POST" id="form-search-top" name="form-search-top">
                                <?php echo csrf_field(); ?>
                                <input type="text" name="search" id="searchCategory" value="" placeholder="Search here...">

                                <button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                
                                <div class="wrap-list-cate">

                                    <select class="form-control" value="" name="productCategory">
                                        <option>All products</option>
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($category['name']=='TELEVISION'): ?>
                                                <option><?php echo e($category['name']); ?></option>
                                                <?php if(isset($category['children'])): ?>
                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($subcategory['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($category['name']=='AIR CONDITIONAR'): ?>
                                                <option><?php echo e($category['name']); ?></option>
                                                <?php if(isset($category['children'])): ?>
                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($subcategory['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($category['name']=='REFRIGERATOR'): ?>
                                                <option><?php echo e($category['name']); ?></option>
                                                <?php if(isset($category['children'])): ?>
                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($subcategory['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($category['name']=='FREEZERS'): ?>
                                                <option><?php echo e($category['name']); ?></option>
                                                <?php if(isset($category['children'])): ?>
                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($subcategory['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($category['name']=='HOME APPLIANCES'): ?>
                                                <option><?php echo e($category['name']); ?></option>
                                                <?php if(isset($category['children'])): ?>
                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($subcategory['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                            <?php if($category['name']=='Accessories'): ?>
                                                <option><?php echo e($category['name']); ?></option>
                                                <?php if(isset($category['children'])): ?>
                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option><?php echo e($subcategory['name']); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <?php endif; ?>
                                            <?php endif; ?>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>                                
                            </form>
                        </div>
                    </div>

                    <div class="wrap-icon right-section">
                        <div class="wrap-icon-section wishlist">
                            
                        </div>
                        <div class="wrap-icon-section minicart">
                            <a href="<?php echo e(route('checkout')); ?>" class="link-direction">
                                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                <div class="left-info">
                                    <span id="cartDetails">
                                        <?php if(Cart::count() > 0): ?>
                                            <span class="index" id=""><?php echo e(Cart::count()); ?> items</span>
                                        <?php endif; ?>
                                    </span>
                                    <span class="title">CART</span>
                                </div>
                            </a>
                        </div>


                        <div class="wrap-icon-section minicart">
                            <img src="<?php echo e(asset('/')); ?>attached_images/Atashii_Logo/Atashii Logo.png">
                        </div>


                        
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

            <div class="nav-section">
                <div class="primary-nav-section">
                    <div class="container">
                        <ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
                            <li class="menu-item home-icon">
                                <a href="<?php echo e(route('/')); ?>" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
                            </li>

                            <li class="menu-item menu-item-has-children item-megamenu" >
                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                                    <?php if($category['name']=='TELEVISION'): ?>
                                        <a href="<?php echo e(url('')); ?>/products/<?php echo e($category->id); ?>" title="Digital & Electronics" class="link-term mercado-item-title">Television</a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>        
                                <div class="wrap-megamenu">
                                    <div class="megamenu-content min-height-526 bg-digital-electronic">
                                        <div class="row">
                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">SMART LED TV</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='TELEVISION'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($subcategory['name']=='Smart LED TV'): ?>
                                                                            <?php if(isset($subcategory['children'])): ?>
                                                                                <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term"><?php echo e($subSubcategory->name); ?></a></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">BASIC LED TV</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='TELEVISION'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($subcategory['name']=='Basic LED TV'): ?>
                                                                            <?php if(isset($subcategory['children'])): ?>
                                                                                <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term"><?php echo e($subSubcategory->name); ?></a></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item menu-item-has-children item-megamenu" >
                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                                    <?php if($category['name']=='AIR CONDITIONAR'): ?>
                                        <a href="<?php echo e(url('')); ?>/products/<?php echo e($category->id); ?>" title="Digital & Electronics" class="link-term mercado-item-title">Air Conditioner</a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                                <div class="wrap-megamenu">
                                    <div class="megamenu-content min-height-526 bg-air-Conditioner">
                                        <div class="row">
                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">SPLITE TYPE</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='AIR CONDITIONAR'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($subcategory['name']=='SPLITE TYPE'): ?>
                                                                            <?php if(isset($subcategory['children'])): ?>
                                                                                <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term"><?php echo e($subSubcategory->name); ?></a></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">CEILING MOUNTED TYPE</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='AIR CONDITIONAR'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($subcategory['name']=='Ceiling Mounted Type'): ?>
                                                                            <?php if(isset($subcategory['children'])): ?>
                                                                                <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term"><?php echo e($subSubcategory->name); ?></a></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">CASSETTE TYPE</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='AIR CONDITIONAR'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php if($subcategory['name']=='CASSETTE TYPE'): ?>
                                                                            <?php if(isset($subcategory['children'])): ?>
                                                                                <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term"><?php echo e($subSubcategory->name); ?></a></li>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            <?php endif; ?>
                                                                        <?php endif; ?>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="menu-item menu-item-has-children item-megamenu" >
                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                                    <?php if($category['name']=='REFRIGERATOR'): ?>
                                        <a href="<?php echo e(url('')); ?>/products/<?php echo e($category->id); ?>" title="Digital & Electronics" class="link-term mercado-item-title">REFRIGERATORS</a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="wrap-megamenu">
                                    <div class="megamenu-content min-height-526 bg-menu-refrigerator">
                                        <div class="row">
                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">REFRIGERATOR</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='REFRIGERATOR'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term"><?php echo e($subcategory->name); ?></a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="menu-item menu-item-has-children item-megamenu" >
                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                                    <?php if($category['name']=='FREEZER'): ?>
                                        <a href="<?php echo e(url('')); ?>/products/<?php echo e($category->id); ?>" title="Digital & Electronics" class="link-term mercado-item-title">FREEZER</a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="wrap-megamenu">
                                    <div class="megamenu-content min-height-526 bg-menu-refrigerator">
                                        <div class="row">
                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <h2 class="menu-title">FREEZER</h2>
                                                    <ul>
                                                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                            <?php if($category['name']=='FREEZER'): ?>
                                                            
                                                                <?php if(isset($category['children'])): ?>
                                                                    
                                                                    <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                        <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term"><?php echo e($subcategory->name); ?></a></li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="menu-item menu-item-has-children item-megamenu" >
                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                                    <?php if($category['name']=='HOME APPLIANCES'): ?>
                                        <a href="<?php echo e(url('')); ?>/products/<?php echo e($category->id); ?>" title="Digital & Electronics" class="link-term mercado-item-title">Home Appliance</a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="wrap-megamenu">
                                    <div class="megamenu-content min-height-526 bg-microwave-oven">
                                        <div class="row">

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        <?php if($category['name']=='HOME APPLIANCES'): ?>
                                                        
                                                            <?php if(isset($category['children'])): ?>
                                                                
                                                                <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(($subcategory->id)%3==0 && $subcategory->name!='Best Seller Home Appliance' && $subcategory->name!='New Arrivals Home Appliance' && $subcategory->name!='Top Rated Home Appliance'): ?>
                                                                        <?php if(isset($subcategory['children'])): ?>
                                                                            <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <ul>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term menu-title "><?php echo e($subSubcategory->name); ?></a></li>                                                                    
                                                                                </ul>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                        <ul>
                                                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term menu-title "><?php echo e($subcategory->name); ?></a></li>                                                                    
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        <?php if($category['name']=='HOME APPLIANCES'): ?>
                                                        
                                                            <?php if(isset($category['children'])): ?>
                                                                
                                                                <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(($subcategory->id)%3==1 && $subcategory->name!='Best Seller Home Appliance' && $subcategory->name!='New Arrivals Home Appliance' && $subcategory->name!='Top Rated Home Appliance'): ?>
                                                                        <?php if(isset($subcategory['children'])): ?>
                                                                            <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <ul>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term menu-title "><?php echo e($subSubcategory->name); ?></a></li>                                                                    
                                                                                </ul>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                        <ul>
                                                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term menu-title "><?php echo e($subcategory->name); ?></a></li>                                                                    
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        <?php if($category['name']=='HOME APPLIANCES'): ?>
                                                        
                                                            <?php if(isset($category['children'])): ?>
                                                                
                                                                <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if(($subcategory->id)%3==2 && $subcategory->name!='Best Seller Home Appliance' && $subcategory->name!='New Arrivals Home Appliance' && $subcategory->name!='Top Rated Home Appliance'): ?>
                                                                        <?php if(isset($subcategory['children'])): ?>
                                                                            <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <ul>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term menu-title "><?php echo e($subSubcategory->name); ?></a></li>                                                                    
                                                                                </ul>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                        <ul>
                                                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term menu-title "><?php echo e($subcategory->name); ?></a></li>                                                                    
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </li>
                            
                            <li class="menu-item menu-item-has-children item-megamenu" >
                                <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                                    <?php if($category['name']=='Accessories'): ?>
                                        <a href="<?php echo e(url('')); ?>/products/<?php echo e($category->id); ?>" title="Digital & Electronics" class="link-term mercado-item-title">Accessories</a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="wrap-megamenu">
                                    <div class="megamenu-content min-height-526 bg-Home-kitchen-appliancel">
                                        <div class="row">
                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        <?php if($category['name']=='Accessories'): ?>
                                                        
                                                            <?php if(isset($category['children'])): ?>
                                                                
                                                                <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(($subcategory->id)%2==1): ?>
                                                                        <?php if(isset($subcategory['children'])): ?>
                                                                            <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <ul>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term menu-title "><?php echo e($subSubcategory->name); ?></a></li>                                                                    
                                                                                </ul>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                        <ul>
                                                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term menu-title "><?php echo e($subcategory->name); ?></a></li>                                                                    
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>
                                            </div>

                                            <div class="custom-col-5">
                                                <div class="wrap-vertical-nav">
                                                    <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            
                                                        <?php if($category['name']=='Accessories'): ?>
                                                        
                                                            <?php if(isset($category['children'])): ?>
                                                                
                                                                <?php $__currentLoopData = $category['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if(($subcategory->id)%2==0): ?>
                                                                        <?php if(isset($subcategory['children'])): ?>
                                                                            <?php $__currentLoopData = $subcategory['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subSubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                <ul>
                                                                                    <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subSubcategory->id); ?>" class="link-term menu-title "><?php echo e($subSubcategory->name); ?></a></li>                                                                    
                                                                                </ul>
                                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                        <?php endif; ?>
                                                                        <ul>
                                                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="link-term menu-title "><?php echo e($subcategory->name); ?></a></li>                                                                    
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <?php endif; ?>
                                                        <?php endif; ?>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</header>

<!--main area-->
<main id="main"
    <?php if (! (empty($main_class))): ?>
        class="<?php echo e($main_class); ?>"
    <?php endif; ?> class="">
    <?php echo $__env->yieldContent('body'); ?>
</main>
<!--main area-->

<!--footer area-->
<footer id="footer">
    <div class="wrap-footer-content footer-style-1">
        <div class="wrap-function-info">
            <div class="container">
                <ul>
                    <li class="fc-info-item">
                        <i class="fa fa-truck" aria-hidden="true"></i>
                        <div class="wrap-left-info">
                            <h4 class="fc-name">Free Shipping</h4>
                            
                        </div>
                    </li>

                    

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
                                    
                                    <b class="phone-number">09636 400 400 </b>
                                </div>
                            </div>
                        </div>


                        <div class="wrap-footer-item">
                            <h3 class="item-header">My Account</h3>
                            <div class="item-content">
                                <div class="wrap-vertical-nav">
                                    <ul>
                                        <?php if(Session::get('CustomerId')==''): ?>
                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/customerLogin" class="link-term">My Account</a></li>
                                        <?php else: ?>
                                            <li class="menu-item"><a href="<?php echo e(url('')); ?>/customer/customerInfomation" class="link-term">My Account</a></li> 
                                        <?php endif; ?>
                                        
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>

                        

                        

                    </div>

                    <div class="col-lg-3 col-sm-4 col-md-4 col-xs-12">
                        <div class="wrap-footer-item">
                            <h3 class="item-header">Infomation</h3>
                            <div class="item-content">
                                <div class="wrap-vertical-nav">
                                    <ul>
                                        <li class="menu-item"><a href="<?php echo e(url('')); ?>/contactUs" class="link-term">Contact Us</a></li>
                                        <li class="menu-item"><a href="<?php echo e(url('')); ?>/companyOverView" class="link-term">Company Overview</a></li>
                                        <li class="menu-item"><a href="<?php echo e(url('')); ?>/termrAndConditions" class="link-term">Terms & Conditions</a></li>
                                        <li class="menu-item"><a href="<?php echo e(url('')); ?>/warrantyPolicy" class="link-term">Warranty Policy</a></li>
                                        
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
                                        <li><a href="#" class="link-to-item"><figure><img src="<?php echo e(asset('/')); ?>client_end/images/Payment System.png" alt="american express"></figure></a></li>

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
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                        <div class="wrap-footer-item">

                            <div class="item-header"><span><a href="#" target="_blank"> Dowload Brushier/<br>Catalogue</a> </span></div>
                        </div>
                    </div>


                    <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12">
                            <div class="wrap-footer-item">
    
                                <span> Marketed by</span>
                                
                                <div class="item-content">
                                    <div class="wrap-list-item apps-list">
                                        <ul>
                                            <li ><a href="#" class="link-to-item" title="our application on google play store"><figure><img src="<?php echo e(asset('/')); ?>client_end/images/downapp-logo.png" alt="google play store" width="128" height="36"></figure></a></li>
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
                    <p class="coppy-right-text">Copyright © 2019 <a href="#" class="link-to-home">Nitol</a>. All rights reserved</p>
                </div>
                <div class="coppy-right-item item-right">
                    <div class="wrap-nav horizontal-nav">
                        <p style="color:#ccc;">Powered by: <img src="<?php echo e(asset('/')); ?>client_end/images/poweredby-aamra-white.png" alt=""> infotainment ltd.</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>


<script src="<?php echo e(asset('/')); ?>client_end/js/jquery-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/bootstrap.min.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/jquery.flexslider.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/chosen.jquery.min.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/owl.carousel.min.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/jquery.countdown.min.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/jquery.sticky.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/functions.js"></script>

<!-- layerSlider -->

<script src="<?php echo e(asset('/')); ?>client_end/layerSlider/js/jquery-easing-1.3.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/layerSlider/js/layerslider.transitions.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/layerSlider/js/layerslider.kreaturamedia.jquery.js"></script>
<script src="<?php echo e(asset('/')); ?>client_end/js/functions.js"></script>	


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
 <!-- layerSlider -->


<?php echo $__env->yieldContent('script'); ?>
<!--footer area-->
</body>
</html>
