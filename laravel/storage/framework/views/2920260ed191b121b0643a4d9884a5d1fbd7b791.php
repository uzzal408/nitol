<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Nitol | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>


    <div class="container">
        <div class="row">
            <div class="summary-item payment-method"><br>
                    <button type="submit" class="btn btn-medium"><a title="My Prifile" href="<?php echo e(url('')); ?>/customerProfile/<?php echo e(Auth::guard('customer')->user()->id); ?>" style="color:white">My Profile</a></button>
            </div><br>
            <div class="table-responsive">
                <table class="table no-margin">
                    <thead>
                        <tr>
                            <th>SL No.</th>
                            <th>Order ID</th>
                            <th>Customer Name</th>
                            <th>Customer Email</th>
                            <th>Phone Number</th>
                            <th>Total Price</th>
                            <th>Order Status</th>
                            <th>Order Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $orderDetailsData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td scope="row"><a href="<?php echo e(url('')); ?>/customer/orderDetails/<?php echo e($item->id); ?>"><?php echo e($item->id); ?></a></td>
                                <td><?php echo e($item->shipping_detail['name']); ?></td>
                                <td><?php echo e($item->shipping_detail['email']); ?></td>
                                <td><?php echo e($item->shipping_detail['mobile']); ?></td>
                                <td><?php echo e($item->order_total); ?></td>
                                <td><?php echo e($item->order_status); ?></td>
                                <td><?php echo e($item->created_at); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <?php echo e($orderDetailsData->links()); ?>

        </div><!--end row-->

    </div><!--end container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>