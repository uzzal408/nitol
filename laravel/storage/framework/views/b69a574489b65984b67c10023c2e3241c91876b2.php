<?php $__env->startSection('body'); ?>
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Employees
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
                    <h3 class="box-title">Create New Employee</h3>
                </div>
                <!-- /.box-header -->
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- form start -->
                    <form role="form" method="post" id="updateEmployeeForm" action="<?php echo e(route('update-employee')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Employee Name" name="name" value="<?php echo e($employee->name); ?>">
                                <span class="text-danger"><?php echo e($errors->has('name') ? $errors->first('name') : ''); ?></span>
                                <input type="hidden" name="user_id" value="<?php echo e($employee->id); ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">E-mail</label>
                                <input type="text" class="form-control" id="email" placeholder="Enter Employee E-mail" name="email" value="<?php echo e($employee->email); ?>">
                                <span class="text-danger"><?php echo e($errors->has('email') ? $errors->first('email') : ''); ?></span>
                            </div>
                            <div class="form-group">
                                <label>Select Store</label>
                                <select class="form-control" name="storeId">
                                    <option value="">All</option>
                                    <?php $__currentLoopData = $stores; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $store): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($store->id); ?>"><?php echo e($store->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Employee</button>
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

<script !src="">
        $(document).ready(function () {
            document.forms['updateEmployeeForm'].elements['storeId'].value = '<?php echo e($store_id); ?>';
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>