<?php $__env->startSection('title'); ?>
    Order Pizza Online For Delivery | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <script>
        $(document).ready(function(){
            localStorage.removeItem('newGrandTotal')
        });
    </script>
    <!-- main content start-->
    <div class="main-content">
    <?php echo $__env->make('front.includes.back-header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!--notification menu end -->
        <div class="toolbar-title toolbar-title-md" style="text-transform: uppercase;color: #424242;padding: 15px 0px 15px 0px; text-align: center; font-weight: 600; font-family: 'Open Sans Condensed', sans-serif;">Order Success
        </div>

        <div class="contain-fluid">
            <div class="store_wrapper">
                <div class="store_card">
                    <h1 class="display-4 font-size-md-down-5 mb-3" style="text-align: center;color: #e13c3f;">
                        <i class="fas fa-shipping-fast" style="font-size: 30px;"></i> <br/>Your order has been placed successfully
                    </h1>

                </div><!-- .store_card -->
                <a class="checkout_btn btn btn-block" href="<?php echo e(route('/')); ?>">Back to Store Page</a>
                

            </div>
        </div>
        <!-- End of .clearfix -->

    </div>
    <!-- main content end-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', ['body_class' => 'sticky-header left-side-collapsed'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>