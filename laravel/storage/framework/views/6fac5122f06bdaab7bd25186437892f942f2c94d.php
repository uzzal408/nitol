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
        <div class="col-md-6">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Create New Employee</h3>
                </div>
                <!-- /.box-header -->
                
                    
                        
                    
                    
                <?php echo $__env->make('admin.includes.common-error', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                            <!-- form start -->
                    <?php echo e(Form::open(['route'=>'save-employee','class'=>'contact-form','method'=>'POST','name'=>'newEmployee','files' => true])); ?>


                    


                    <div class="box-body">
                        <div class="<?php echo e('form-group required'.$errors->first('name',' has-error')); ?>">
                            <label for="name">Name</label>
                            <?php echo e(Form::text('name','',array('id' => 'name', 'required' => 'required', 'placeholder' => 'Enter Employee Name', 'class' => 'form-control '))); ?>

                            <div class="help-block"><?php echo e($errors->has('name') ? $errors->first('name') : ''); ?></div>
                            
                            
                        </div>
                        <div class="<?php echo e('form-group required'.$errors->first('email',' has-error')); ?>">
                            <label for="email">E-Mail</label>
                            <?php echo e(Form::text('email','',array('id' => 'email', 'required' => 'required', 'placeholder' => 'Enter Employee email', 'class' => 'form-control '))); ?>

                            <div class="help-block"><?php echo e($errors->has('email') ? $errors->first('email') : ''); ?></div>
                            
                            
                        </div>
                        <div class="<?php echo e('form-group required'.$errors->first('password',' has-error')); ?>">
                            <label for="password">password</label>
                            <?php echo e(Form::password('password',array('id' => 'password', 'required' => 'required', 'class' => 'form-control '))); ?>

                            <div class="help-block"><?php echo e($errors->has('password') ? $errors->first('password') : ''); ?></div>
                            
                            
                        </div>
                        <div class="<?php echo e('form-group required'.$errors->first('password_confirmation',' has-error')); ?>">
                            <label for="password_confirmation"><?php echo e(__('Confirm Password')); ?></label>
                            <?php echo e(Form::password('password_confirmation',array('id' => 'password_confirmation', 'required' => 'required', 'class' => 'form-control '))); ?>

                            <div class="help-block"><?php echo e($errors->has('password_confirmation') ? $errors->first('password_confirmation') : ''); ?></div>
                            
                            
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
                        <button type="submit" class="btn btn-primary">Create Employee</button>
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
                    <h3 class="box-title">All Employees</h3>

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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Store</th>
                            <th>Action</th>
                        </tr>
                        <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($employee->name); ?></td>
                                <td><?php echo e($employee->email); ?></td>
                                <?php if($employee->store->isEmpty()): ?>
                                    <td>All</td>
                                <?php else: ?>
                                    <td><?php echo e($employee->store->first()->name); ?></td>
                                <?php endif; ?>
                                <td>
                                    <a href="<?php echo e(route('edit-employee',['id'=>$employee->id])); ?>" class="btn btn-info btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
                                    
                                    
                                    
                                    
                                    
                                    
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