<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    Nitol | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <div class="container">

        
        <div class="row">

            <div class="wrap-address-billing">
                <h3 class="box-title">Customer Details</h3>
                <p class="row-in-form">
                    <label for="fname">Name: <span><?php echo e($customerInformation->name); ?></span></label>
                </p>
                <p class="row-in-form">
                    <label for="lname">Email Addreess: <span><?php echo e($customerInformation->email); ?></span></label>
                </p>

                <p class="row-in-form">
                    <label for="fname">Phone Number: <span><?php echo e($customerInformation->phone_number); ?></span></label>
                </p>
                <p class="row-in-form">
                    <label for="lname">NID/Birth Certificate: <span><?php echo e($customerInformation->nidNumber); ?></span></label>
                </p>

                <p class="row-in-form">
                    <label for="fname">Gender: <span><?php echo e($customerInformation->Gender); ?></span></label>
                </p>
                <p class="row-in-form">
                    <label for="fname">Date of Birth: <span><?php echo e($customerInformation->dateOfBirth); ?></span></label>
                </p>

                <p class="row-in-form">
                    <label for="lname">Present Address: <span><?php echo e($customerInformation->present_aadress); ?></span></label>
                </p>
                <p class="row-in-form">
                    <label for="lname">Permanent Address: <span><?php echo e($customerInformation->permanent_address); ?></span></label>
                </p>
            </div>

            <div class="summary-item payment-method">
                <?php if(Session::get('CustomerId')!=''): ?>
                    <button type="submit" class="btn btn-medium"><a title="Edit Prifile" href="<?php echo e(url('')); ?>/customerProfileEdit/<?php echo e(Session::get('CustomerId')); ?>" style="color:white">Edit Profile</a></button>
                <?php endif; ?>
            </div>
        </div><!--end row-->

    </div><!--end container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>