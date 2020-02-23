<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Nitol | Dealer - Locator
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <main id="main" class="main-site left-sidebar">
            <div class="container">

                <div class="wrap-breadcrumb">
                    <ul>
                        <li class="item-link"><a href="#" class="link">home</a></li>
                        <li class="item-link"><span>Contact us</span></li>
                    </ul>
                </div>
                
                <div class="row">
                    <div class=" main-content-area">
                        <div class="wrap-map" > 
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.077310000188!2d90.40385211536308!3d23.78026119355095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7717d2f8a77%3A0xdc823f791ac1ece0!2sNITS+Service+Private+Limited!5e0!3m2!1sen!2sbd!4v1566107654645!5m2!1sen!2sbd" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>                               
                        </div><br>
                        <div class="wrap-contacts ">
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="contact-box contact-form">
                                    <h2 class="box-title">GET IN TOUCH</h2>
                                    <?php echo e(Form::open(['route'=>'customerComment','class'=>'contact-form','method'=>'POST','name'=>'frm-billing'])); ?>

                                        
                                        <label for="name">Name<span>*</span></label>
                                        <input type="text" value="" id="name" name="name" required>
    
                                        <label for="email">Email<span>*</span></label>
                                        <input type="email" value="" id="email" name="email" required>
    
                                        <label for="phone">Number Phone</label>
                                        <input type="text" value="" id="phone" name="phone" required>
    
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" id="comment" required></textarea>
    
                                        <input type="submit" name="submit" value="Submit">
                                        
                                    <?php echo e(Form::close()); ?>

                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                                <div class="contact-box contact-info">
                                    
                                    <h2 class="box-title">Contact Detail</h2>
                                    <div class="wrap-icon-box">
    
                                        <div class="icon-box-item">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <div class="right-info">
                                                <b>Email</b>
                                                <p>info@nitolelectronics.com</p>
                                            </div>
                                        </div>
    
                                        <div class="icon-box-item">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <div class="right-info">
                                                <b>Phone</b>
                                                <p>09636 400 400, 01953 400 400</p>
                                            </div>
                                        </div>
    
                                        <div class="icon-box-item">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <div class="right-info">
                                                <b>Mail Office</b>
                                                <p>Nitol Center (12th Floor) 71,<br> Mohakhali C/A,<br> Dhaka-1212, Bangladesh.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                        </div>
                    </div><!--end main products area-->
                    
                   
                </div><!--end row-->
    
            </div><!--end container-->
    
        </main>
        

    </div><!--end container-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', ['body_class' => 'main-site left-sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>