<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Checkout | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="#" class="link">home</a></li>
                <li class="item-link"><span>login</span></li>
            </ul>
        </div>
        <div class=" main-content-area">
            <?php echo e(Form::open(['route'=>'customerProfileupdate','class'=>'contact-form','method'=>'POST','name'=>'frm-billing'])); ?>

                
                <div class="wrap-address-billing">
                    <h3 class="box-title">Customer Information Edit</h3>
                    <p class="row-in-form" style="display: none"></p>

                    <p class="row-in-form">
                        <label for="fname">Customer Name<span>*</span></label>
                        <input id="fname" type="text" name="name" value="<?php echo e($customerProfileEdit->name); ?>" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">Email Address<span>*</span></label>
                        <input id="fname" type="text" name="email" value="<?php echo e($customerProfileEdit->email); ?>" placeholder="Your name" required>
                    </p>
                    
                    <p class="row-in-form">
                        <label for="fname">Phone Number<span>*</span></label>
                        <input id="fname" type="text" name="phone_number" value="<?php echo e($customerProfileEdit->phone_number); ?>" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">NID/Birth Certificate No<span>*</span></label>
                        <input id="fname" type="text" name="nidNumber" value="<?php echo e($customerProfileEdit->nidNumber); ?>" placeholder="Your name" required>
                    </p>

                    <p class="row-in-form">
                        <label for="fname">Gender<span>*</span></label>
                        <input id="fname" type="text" name="Gender" value="<?php echo e($customerProfileEdit->Gender); ?>" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">Date of Birth</label>
                        <input id="fname" type="text" name="dateOfBirth" value="<?php echo e($customerProfileEdit->dateOfBirth); ?>" placeholder="Your name">
                    </p>

                    <p class="row-in-form">
                        <label for="fname">Present Address<span>*</span></label>
                        <input id="fname" type="text" name="present_aadress" value="<?php echo e($customerProfileEdit->present_aadress); ?>" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="fname">Permanent Address<span>*</span></label>
                        <input id="fname" type="text" name="permanent_address" value="<?php echo e($customerProfileEdit->permanent_address); ?>" placeholder="Your name" required>
                    </p>
                </div>
                <div class="summary-item shipping-method">
                    <input type="submit" class="btn btn-small" name="Submit" value="Apply">
                </div>
                
            <?php echo e(Form::close()); ?>


            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                        <?php $__currentLoopData = $mostViewedAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="<?php echo e(route('show-product',['id'=>$item->id])); ?>" title=<?php echo e($item->title); ?>>
                                        <figure><img src="<?php echo e(asset($item->image1)); ?>" width="214" height="214" alt=<?php echo e($item->title); ?>></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">Most Viewed</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="<?php echo e(route('show-product',['id'=>$item->id])); ?>" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="<?php echo e(route('show-product',['id'=>$item->id])); ?>" class="product-name"><span><?php echo e($item->title); ?></span></a>
                                    <div class="wrap-price"><span class="product-price"><?php echo e($item->price); ?></span></div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script !src="">
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', ['body_class' => 'sticky-header left-side-collapsed'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>