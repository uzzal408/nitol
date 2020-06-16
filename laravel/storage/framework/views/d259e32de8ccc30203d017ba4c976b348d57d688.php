<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    Nitol | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>


    <div class="container">

        
        <div class="row">
            <div class="summary-item payment-method"><br>
                <?php if(Session::get('CustomerId')!=''): ?>
                    <button type="submit" class="btn btn-medium"><a title="My Prifile" href="<?php echo e(url('')); ?>/customerProfile/<?php echo e(Session::get('CustomerId')); ?>" style="color:white">My Profile</a></button>
                <?php endif; ?>
            </div>
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orderDetailsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <th scope="row"><?php echo e($key+1); ?></th>
                                
                                <td><?php echo e($item->product_name); ?></td>
                                <td><?php echo e($item->product_price); ?></td>
                                <td><?php echo e($item->product_quantity); ?></td>
                                <td><?php echo e($item->product_price*$item->product_quantity); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div><!--end row-->

    </div><!--end container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>