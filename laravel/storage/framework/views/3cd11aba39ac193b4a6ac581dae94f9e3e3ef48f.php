<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Nitol | Dealer - Locator
<?php $__env->stopSection(); ?>
<?php
    header('X-Frame-Options: GOFORIT');
?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="wrap-top-banner-3">
            <!--SLIDER-->
            <div class="wrap-main-slide-3 mt-5">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                    
                </div>
            </div>
            
        </div>

    </div><!--end container-->
    <section>
        
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', ['body_class' => 'main-site'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>