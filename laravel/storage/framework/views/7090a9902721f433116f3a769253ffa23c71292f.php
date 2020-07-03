<?php $__env->startSection('title'); ?>
    Nitol Admin || Edit Coupon
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Coupon
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Coupon</h3>
                    </div>
                    <!-- /.box-header -->
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- form start -->
                    <form role="form" method="post" id="updateAddonForm" action="<?php echo e(route('admin.coupons.update')); ?>" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="coupon_code">Coupon Code</label>
                                <input type="text" class="form-control" id="coupon_code"  name="coupon_code" value="<?php echo e($coupon->coupon_code); ?>" readonly>
                                <span class="text-danger"><?php echo e($errors->has('coupon_code') ? $errors->first('coupon_code') : ''); ?></span>
                                <input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
                            </div>
                            <div class="form-group">
                                <label for="discount">Discount</label>
                                <input type="text" class="form-control" id="discount"  name="discount" value="<?php echo e($coupon->discount); ?>">
                                <span class="text-danger"><?php echo e($errors->has('discount') ? $errors->first('discount') : ''); ?></span>
                                <input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select name="type" id="type" class="form-control">
                                    <option value="1" <?php echo e(($coupon->type) ? 'selected': ''); ?> >Percentage</option>
                                    <option value="0" <?php echo e((!$coupon->type) ? 'selected': ''); ?> >Fixed</option>
                                </select>
                                <span class="text-danger"><?php echo e($errors->has('type') ? $errors->first('type') : ''); ?></span>
                                <input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
                            </div>
                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="1" <?php echo e(($coupon->status) ? 'selected': ''); ?> >Active</option>
                                    <option value="0" <?php echo e((!$coupon->status) ? 'selected': ''); ?> >Inactive</option>
                                </select>
                                <span class="text-danger"><?php echo e($errors->has('status') ? $errors->first('status') : ''); ?></span>
                                <input type="hidden" name="id" value="<?php echo e($coupon->id); ?>">
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Coupon</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <!-- jQuery Validation -->
    <script src="<?php echo e(asset('/')); ?>admin/dist/js/jquery.validate.min.js"></script>
    <!-- Present Form Validation  -->
    <script src="<?php echo e(asset('/')); ?>admin/dist/js/implement.validate.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>