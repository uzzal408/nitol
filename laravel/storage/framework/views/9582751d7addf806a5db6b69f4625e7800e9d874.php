<?php $__env->startSection('body'); ?>
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        All Categories
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
                    <h3 class="box-title">Create New Category</h3>
                </div>
                <!-- /.box-header -->
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- form start -->
                    <form role="form" method="post" id="updateCategoryForm" action="<?php echo e(route('update-category')); ?>" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="box-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter Category Name" name="name" value="<?php echo e($category->name); ?>" readonly=true>
                                <span class="text-danger"><?php echo e($errors->has('name') ? $errors->first('name') : ''); ?></span>
                                <input type="hidden" name="category_id" value="<?php echo e($category->id); ?>">
                            </div>
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." name="description"><?php echo e($category->description); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label>Store Locator</label>
                                <input type="text" class="form-control" rows="3" placeholder="Enter Google Map URL" name="storeLocator" value="<?php echo e($category->storeLocator); ?>">
                            </div>


                            <div class="form-group">
                                <label for="categoryImage">Image</label>
                                <input type="file" id="categoryImage" name="categoryImage">
                                <p class="help-block">Example block-level help text here.</p>
                                <span class="text-danger"><?php echo e($errors->has('categoryImage') ? $errors->first('categoryImage') : ''); ?></span>
                                <img src="<?php echo e(asset($category->image)); ?>" alt="Image"/>
                            </div>
                            <div class="form-group">
                                <label>Parent Category</label>
                                <select class="form-control" name="parentId">
                                    <option value="0">None</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($a_category->id); ?>"><?php echo e($a_category->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Order</label>
                                <select class="form-control" name="order">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                                <div class="col-sm-9">
                                    <input type="radio" id="publication_status_published"  name="publicationStatus" value="1"> Published
                                    <input type="radio" id="publication_status_unpublished" name="publicationStatus" value="0"> Unpublished
                                </div>
                            </div>

                        </div>
                        <!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Update Category</button>
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
            var publication_status  = "<?php echo e($category->publication_status); ?>"
            if(publication_status == "1"){
                $('#publication_status_published').prop('checked', true);
            }else{
                $('#publication_status_unpublished').prop('checked', true);
            }
            //document.forms['updateCategoryForm'].elements['parentId'].value = '<?php echo e($category->parent_id); ?>';
            document.forms['updateCategoryForm'].elements['parentId'].value = '<?php echo e($category->parent_id); ?>';
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>