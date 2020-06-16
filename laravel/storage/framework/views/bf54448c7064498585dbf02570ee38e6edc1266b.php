<?php $__env->startSection('title'); ?>
    Nitol Admin || Products
<?php $__env->stopSection(); ?>
        <?php $__env->startSection('body'); ?>
            <!-- Content Header (Page header) -->
            <section class="content-header">
    <h1>
        All Products
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
                    <h3 class="box-title">All Products</h3>

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
                <div class="box-body">
                    <table class="table" id="#test">
                        <tr>
                            <th>Image1</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Sale Price</th>
                            <th>Discount</th>
                            <th>Quantity</th>


                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php ($specifications = explode(',', $product->specification)); ?>
                            <tr>
                                <td><img src="<?php echo e($product->image1); ?>" alt="<?php echo e($product->name1); ?>" height="48" width="48"></td>
                                <td><?php echo e($product->title); ?>

                                    <?php if($product->ac_capacity!=null): ?>
                                        <?php echo e($product->ac_capacity); ?> TON
                                    <?php endif; ?>

                                    <?php if($product->screen_size!=null): ?>
                                        <?php echo e($product->screen_size); ?>"
                                    <?php endif; ?>

                                    <?php if($product->capacity_litre!=null): ?>
                                        <?php echo e($product->capacity_litre); ?> Ltr
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($product->price); ?></td>
                                <td><?php echo e($product->sale_price); ?></td>
                                <td><?php echo e($product->discount); ?></td>
                                <td><?php echo e($product->quantity); ?></td>





















                                <td>
                                    <a href="<?php echo e(route('publication-product',$product->id)); ?>" class="btn btn-xs <?php echo e(($product->publication_status) ? 'btn-info' : 'btn-danger'); ?>" onclick="return confirm('Are You Sure?')"><span class="glyphicon glyphicon-ok"></span></a>
                                    <a href="<?php echo e(route('edit-product',['id'=>$product->id])); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    <a
                                    class="btn btn-danger btn-xs"
                                    href="<?php echo e(route('delete-product',[$product->id])); ?>"
                                    onclick="return confirm('Are You Sure ?')">
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>