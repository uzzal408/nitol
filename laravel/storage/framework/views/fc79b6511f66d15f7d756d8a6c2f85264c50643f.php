<?php $__env->startSection('title'); ?>
    Nitol Admin || Edit Settings
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           <?php echo e($data->name); ?>

            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Settings</a></li>
            <li class="active"><?php echo e($data->name); ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">



                    <!-- /.box-header -->
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                <!-- form start -->
                    <form role="form" method="post" id="settingsForm" action="<?php echo e(route('admin.settings.upload')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name"  name="name" value="<?php echo e($data->name); ?>" readonly>
                                <span class="text-danger"><?php echo e($errors->has('name') ? $errors->first('name') : ''); ?></span>
                                <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                            </div>
                            <input type="hidden" name="type" value="<?php echo e($data->type); ?>">
                            <?php if($data->type==1): ?>
                                <div class="form-group">
                                    <label>Value</label>
                                    <input type="text" class="form-control" name="value" value="<?php echo e($data->value); ?>">
                                </div>
                                <?php endif; ?>
                            <?php if($data->type == 2): ?>
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Value</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="value"><?php echo e($data->value); ?></textarea>
                            </div>
                            <?php endif; ?>
                            <?php if($data->type==3): ?>
                            <div class="form-group">
                                <label for="value">Image</label>
                                <input type="file" id="value" name="value">
                                <p class="help-block">Example block-level help text here.</p>
                                <span class="text-danger"><?php echo e($errors->has('value') ? $errors->first('value') : ''); ?></span>

                                <iframe src="<?php echo e(asset($data->value)); ?>"></iframe>
                            </div>
                                <?php endif; ?>
                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
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