<?php $__env->startSection('title'); ?>
    Nitol Admin || Corporates
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('body'); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Corporate Sales Information
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
        <!-- right column -->
        <div class="col-md-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">All Reviews</h3>

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
                    <a href="<?php echo e(route('admin.exports.corporate-sale')); ?>" class="btn btn-primary">Export Excel</a>
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Full Name</th>
                            <th>Company Name</th>
                            <th>Contact Number</th>
                            <th>Email Address</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Country</th>
                            <th>Enquiry Type</th>
                            <th>Category</th>
                            <th>Enquiry</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $corporateSales; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $corporateSale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                            <tr>
                                <td><?php echo e($corporateSale->id); ?></td>
                                <td><?php echo e($corporateSale->full_name); ?></td>
                                <td><?php echo e($corporateSale->company_name); ?></td>
                                <td><?php echo e($corporateSale->contact_number); ?></td>
                                <td><?php echo e($corporateSale->email_address); ?></td>
                                <td><?php echo e($corporateSale->address); ?></td>
                                <td><?php echo e($corporateSale->city); ?></td>
                                <td><?php echo e($corporateSale->country); ?></td>
                                <td><?php echo e($corporateSale->enquiry_type); ?></td>
                                <td><?php echo e($corporateSale->category); ?></td>
                                <td><?php echo $corporateSale->enquiry; ?></td>
                                <td>
                                    <a class="btn btn-danger btn-xs" href="<?php echo e(url('')); ?>/corporateSalesDelete/<?php echo e($corporateSale->id); ?>" onclick="return confirm('Are You Sure ?')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
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
    <script !src="">
        $(document).ready(function () {

        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>