<?php $__env->startSection('title'); ?>
    Nitol Admin || Coupons
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            All Coupons
            <small>Preview</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create New Coupon</h3>
                    </div>
                    <!-- /.box-header -->
                <?php if(Session::get('message')): ?>
                <div class="alert alert-success" role="alert">
                <?php echo e(Session::get('message')); ?>

                </div>
                <?php endif; ?>
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- form start -->
                    <?php echo e(Form::open(['route'=>'admin.coupons.store','class'=>'contact-form','method'=>'POST','name'=>'newAddon','files' => true])); ?>


                    <div class="box-body">
                        <div class="<?php echo e('form-group required'.$errors->first('coupon_code',' has-error')); ?>">
                            <label for="name">Coupon Code</label>
                            <?php echo e(Form::text('coupon_code','',array('id' => 'coupon_code', 'required' => 'required', 'placeholder' => 'Enter coupon code', 'class' => 'form-control '))); ?>

                            <div class="help-block"><?php echo e($errors->has('coupon_code') ? $errors->first('coupon_code') : ''); ?></div>
                        </div>

                        <div class="<?php echo e('form-group required'.$errors->first('discount',' has-error')); ?>">
                            <label for="discount">Discount</label>
                            <?php echo e(Form::text('discount','',array('id' => 'discount', 'required' => 'required', 'placeholder' => 'Enter discount', 'class' => 'form-control '))); ?>

                            <div class="help-block"><?php echo e($errors->has('discount') ? $errors->first('discount') : ''); ?></div>
                        </div>
                        <div class="<?php echo e('form-group required'.$errors->first('type',' has-error')); ?>">
                            <label for="name">Discount Type</label>
                            <select name="type" class="form-control" id="type">
                                <option value="1" selected="selected">Percentage</option>
                                <option value="0">Fixed Amount</option>
                            </select>
                            <div class="help-block"><?php echo e($errors->has('type') ? $errors->first('type') : ''); ?></div>
                        </div>
                        <div class="<?php echo e('form-group required'.$errors->first('status',' has-error')); ?>">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" id="status">
                                <option value="1" selected="selected">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            <div class="help-block"><?php echo e($errors->has('type') ? $errors->first('type') : ''); ?></div>
                        </div>
                    </div>
                    <!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create Coupon</button>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>
                <!-- /.box -->
            </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Coupon</h3>

                        <div class="box-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
                                <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                                <div class="input-group-btn">
                                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tr>
                                <th>Coupon Code</th>
                                <th>Discount Amount</th>
                                <th>Discount Type</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($coupon->coupon_code); ?></td>
                                    <td><?php echo e($coupon->discount); ?></td>
                                    <td><?php echo e(($coupon->type) ? 'Percentage' : 'Fixed Amount'); ?></td>
                                    <td><?php echo e(($coupon->status) ? 'Active' : 'Inactive'); ?></td>
                                    <td>
                                        <a href="<?php echo e(route('admin.coupons.edit',['id'=>$coupon->id])); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                        <a class="btn btn-danger btn-xs" href="<?php echo e(route('admin.coupons.delete',[$coupon->id])); ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!--/.col (right) -->
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

    <script !src="">
        $(document).ready(function () {


        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>