<?php $__env->startSection('title'); ?>
    Nitol Admin || New Products
<?php $__env->stopSection(); ?>
<?php $__env->startSection('stylesheet'); ?>
<!-- bootstrap wysihtml5 - text editor -->
<!-- <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"> -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Add Products
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
                    <h3 class="box-title">Create New Product</h3>
                </div>
                <!-- /.box-header -->
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <!-- form start -->
                <?php echo e(Form::open(['route'=>'save-product','class'=>'contact-form','method'=>'POST','name'=>'newProduct','files' => true])); ?>


                
                
                
                <div class="box-body">
                    <div class="<?php echo e('form-group required'.$errors->first('title',' has-error')); ?>">
                        <label for="title">Title</label>
                        <?php echo e(Form::text('title','',array('id' => 'title', 'required' => 'required', 'placeholder' => 'Enter Product Title', 'class' => 'form-control '))); ?>

                        <div class="help-block"><?php echo e($errors->has('title') ? $errors->first('title') : ''); ?></div>
                        
                        
                    </div>
                    
                    
                    <div class="form-group input_fields_wrap">
                        <label>Specification *</label>

                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" name="specifications[]" id="add_button" class="form-control" autocomplete="on" required style="margin-bottom: 15px;">
                            </div>
                            <div class="col-md-3">

                                <button type="button" class="add_field_button" style="margin-left:20px;">Add More Specification</button>
                                <!-- <input type="button" class="btn btn-secondary" value="+" onClick="addSpecification();" style="padding:0 10px;"> -->
                            </div>
                            
                        </div>

                    </div>
                    
                    
                    <!--<div class="form-group" id="specification">-->
                    <!--    <label>Specification</label>-->
                    <!--    <div class="row">-->
                    <!--        <div class="col-md-8">-->
                    <!--            <input type="text" name="specifications[]" class="form-control" autocomplete="on">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-2">-->
                    <!--            <input type="button" class="btn btn-secondary" value="+" onClick="addSpecification();" style="padding:0 10px;">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div class="form-group" id="specification">
                        <div class="row">
                            <div class="col-md-4">
                                <label>AC Capacity</label>
                                <?php echo e(Form::number('ac_capacity',null,array('id' => 'ac_capacity', 'class' => 'form-control ', 'step'=>0.5, 'min'=>1, 'max'=>20))); ?>

                            </div>
                            <div class="col-md-4">
                                <label>Screen Size</label>
                                <?php echo e(Form::number('screen_size',null,array('id' => 'screen_size', 'class' => 'form-control ', 'step'=>0.5, 'min'=>1, 'max'=>200))); ?>

                            </div>
                            
                            <div class="col-md-4">
                                <label>Refrezarator Capacity</label>
                                <?php echo e(Form::number('capacity_litre',null,array('id' => 'capacity_litre', 'class' => 'form-control ', 'step'=>0.5, 'min'=>1, 'max'=>20000))); ?>

                            </div>
                        </div>
                    </div>


                    <div class="form-group" id="specification">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Price</label>
                                <?php echo e(Form::number('price',null,array('id' => 'price', 'class' => 'form-control ', 'min'=>1, 'max'=>5000000))); ?>

                            </div>
                            <div class="col-md-3">
                                <label>Sale Price</label>
                                <?php echo e(Form::number('sale_price',null,array('id' => 'sale_price', 'class' => 'form-control ', 'min'=>1, 'max'=>5000000))); ?>

                            </div>
                            <div class="col-md-3">
                                <label>Discount</label>
                                <?php echo e(Form::number('discount',null,array('id' => 'discount', 'class' => 'form-control ', 'min'=>0, 'max'=>90,'step'=>0.01,'placeholder'=>'Enter Discount Number'))); ?>

                            </div>
                            
                            <div class="col-md-3">
                                <label>Stock Quantity</label>
                                <?php echo e(Form::number('quantity',null,array('id' => 'quantity', 'class' => 'form-control ', 'min'=>1, 'max'=>5000000))); ?>

                            </div>
                        </div>
                    </div>




                    
                    <div class="form-group">
                        
                    </div>
                    <div class="form-group">
                        
                    </div>
                    <div class="form-group">
                        
                    </div>


                    <div class="<?php echo e('form-group '.$errors->first('productImage1',' has-error')); ?>">
                        <label for="productImage">Image | 1st</label>
                        <?php echo e(Form::file('productImage1', array('id' => 'productImage1', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage1','is-invalid')))); ?>

                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block"><?php echo e($errors->has('productImage1') ? $errors->first('productImage1') : ''); ?></div>

                        
                        
                    </div>

                    <div class="<?php echo e('form-group '.$errors->first('productImage2',' has-error')); ?>">
                        <label for="productImage2">Image | 2nd</label>
                        <?php echo e(Form::file('productImage2', array('id' => 'productImage2', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage2','is-invalid')))); ?>

                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block"><?php echo e($errors->has('productImage2') ? $errors->first('productImage2') : ''); ?></div>

                        
                        
                    </div>

                    <div class="<?php echo e('form-group '.$errors->first('productImage3',' has-error')); ?>">
                        <label for="productImage3">Image | 3rd</label>
                        <?php echo e(Form::file('productImage3', array('id' => 'productImage3', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage3','is-invalid')))); ?>

                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block"><?php echo e($errors->has('productImage3') ? $errors->first('productImage3') : ''); ?></div>

                        
                        
                    </div>

                    <div class="<?php echo e('form-group '.$errors->first('productImage4',' has-error')); ?>">
                        <label for="productImage4">Image | 4th</label>
                        <?php echo e(Form::file('productImage4', array('id' => 'productImage4', 'accept'=>"image/*", 'class' => 'form-control '.$errors->first('productImage4','is-invalid')))); ?>

                        <small>
                            <b>Type:</b> jpeg | png | jpg | gif | svg <b>Maximum Size:</b> 2 MB
                        </small>
                        <div class="help-block"><?php echo e($errors->has('productImage4') ? $errors->first('productImage4') : ''); ?></div>

                        
                        
                    </div>


                    <div class="form-group">
                        <label>Description</label>
                        <?php echo e(Form::textarea('description',null,array('id' => 'description', 'rows'=> '3', 'placeholder' => 'Enter Description of Your Product', 'class' => 'form-control description'))); ?>

                    </div>
                    
                    <div class="form-group input_fields_wrap_feature" id="additional_info">
                        <label>Features & Specifications</label>
                        <div class="row">
                            <div class="col-md-4">
                                <input type="text" name="adInfo_ids[]" class="form-control" autocomplete="on">
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="adInfo_values[]" class="form-control" autocomplete="on">
                            </div>
                            <div class="col-md-4">
                                <button type="button" class="add_field_button_feature" style="margin-left:20px;">Add More Feature</button>
                                <!-- <input type="button" class="btn btn-secondary" value="+" onClick="addAdditionalInfo();" style="padding:0 10px;"> -->
                            </div>
                        </div>
                    </div>
                    
                    
                    <!--<div class="form-group" id="additional_info">-->
                    <!--    <label>Features & Specifications</label>-->
                    <!--    <div class="row">-->
                    <!--        <div class="col-md-5">-->
                    <!--            <input type="text" name="adInfo_ids[]" class="form-control" autocomplete="on">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-5">-->
                    <!--            <input type="text" name="adInfo_values[]" class="form-control" autocomplete="on">-->
                    <!--        </div>-->
                    <!--        <div class="col-md-2">-->
                    <!--            <input type="button" class="btn btn-secondary" value="+" onClick="addAdditionalInfo();" style="padding:0 10px;">-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                        
                        
                            
                            
                        
                    
                    <div class="form-group">
                        <label>Select Categories</label><br/>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php ($category = (object)$category); ?>
                            <div class="form-check">
                                <label class="form-check-label" for="<?php echo e($category->id); ?>">
                                    <?php echo e(Form::checkbox('category_ids[]', $category->id, null, array('id'=>$category->id))); ?>

                                    <?php echo e($category->name); ?>

                                </label>
                                <?php if(isset($category->children)): ?>
                                    <?php $__currentLoopData = $category->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php ($subcategory = (object)$subcategory); ?>
                                        <div class="form-check" style="margin-left: 15px;">
                                            <label class="form-check-label" for="<?php echo e($subcategory->id); ?>">
                                                <?php echo e(Form::checkbox('category_ids[]', $subcategory->id, null, array('id'=>$subcategory->id))); ?>

                                                <?php echo e($subcategory->name); ?>

                                            </label>
                                            <?php if(isset($subcategory->children)): ?>
                                                <?php $__currentLoopData = $subcategory->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subsubcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php ($subsubcategory = (object)$subsubcategory); ?>
                                                    <div class="form-check" style="margin-left: 15px;">
                                                        <label class="form-check-label" for="<?php echo e($subsubcategory->id); ?>">
                                                            <?php echo e(Form::checkbox('category_ids[]', $subsubcategory->id, null, array('id'=>$subsubcategory->id))); ?>

                                                            <?php echo e($subsubcategory->name); ?>

                                                        </label>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Create Product</button>
                </div>
                <?php echo e(Form::close()); ?>

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

<script>
    $(function () {
        //bootstrap WYSIHTML5 - text editor
        $('.description').wysihtml5();
    });
    function addAdditionalInfo(){
        var additional_info = "<div class=\"row\">\n" +
            "                            <div class=\"col-md-5\">\n" +
            "                                <input type=\"text\" name=\"adInfo_ids[]\" class=\"form-control\" autocomplete=\"on\">\n" +
            "                            </div>\n" +
            "                            <div class=\"col-md-5\">\n" +
            "                                <input type=\"text\" name=\"adInfo_values[]\" class=\"form-control\" autocomplete=\"on\">\n" +
            "                            </div>\n" +
            "                        </div>";
        $('#additional_info').append(additional_info);
    }
    function addSpecification(){
        var new_specification = "<div class=\"row\">\n" +
            "                            <div class=\"col-md-8\">\n" +
            "                                <input type=\"text\" name=\"specifications[]\" class=\"form-control\" autocomplete=\"on\">\n" +
            "                            </div>\n" +
            "                        </div>";
        $('#specification').append(new_specification);
    }
</script>

<?php $__env->stopSection(); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        var max_fields      = 15; //maximum input boxes allowed
        var wrapper         = $(".input_fields_wrap"); //Fields wrapper
        var add_button      = $(".add_field_button"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper).append('<div class"row"><div class="col-md-9"><input type="text" class="form-control" name="specifications[]"/><a href="#" class="remove_field"><i class="fa fa-times"></i></a></div></div>'); //add input box
            }
        });
        
        $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
    
    
    $(document).ready(function() {
        var max_fields              = 15; //maximum input boxes allowed
        var wrapper_feature         = $(".input_fields_wrap_feature"); //Fields wrapper
        var add_button_feature      = $(".add_field_button_feature"); //Add button ID
        
        var x = 1; //initlal text box count
        $(add_button_feature).click(function(e){ //on add input button click
            e.preventDefault();
            if(x < max_fields){ //max input box allowed
                x++; //text box increment
                $(wrapper_feature).append('<div class"row"><div><div class="col-md-4"><input type="text" class="form-control" name="adInfo_ids[]"/></div><div class="col-md-4"><input type="text" class="form-control" name="adInfo_values[]"/></div><a href="#" class="remove_field_feature"><i class="fa fa-times"></i></a></div></div><br>'); //add input box
            }
        });
        
        $(wrapper_feature).on("click",".remove_field_feature", function(e){ //user click on remove text
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>