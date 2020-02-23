<?php $__env->startSection('body'); ?>
<!-- Main content -->
<section class="content">



<!-- Main row -->
<div class="row">
    <!-- Left col -->
    <div class="col-md-12">



        <!-- TABLE: LATEST ORDERS -->
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Latest Orders</h3>

                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <?php if(Session::get('message')): ?>
                    <div class="alert alert-success" role="alert">
                        <strong></strong> <?php echo e(Session::get('message')); ?>

                    </div>
                <?php endif; ?>
                <div class="table-responsive">
                    <table class="table no-margin">
                        <thead>
                        <tr>
                            <?php ($i = 1); ?>
                            <th>SL</th>
                            <th>Or#ID</th>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile</th>
                            <th>Total</th>
                            <th>Or#Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                    
                    
                    
                        <tbody>
                        <?php ($i = 1); ?>
                        <?php ($store_name = ''); ?>
                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php ($shipping_detail = $order->shipping_detail); ?>
                            <?php ($customer = $order->customer); ?>
                            <?php ($store = $order->store); ?>
                            <tr>
                                <td><?php echo e($i++); ?></td>
                                <td><a href="<?php echo e(route('view-order-details',['id'=>$order->id])); ?>">OR00<?php echo e($order->id); ?></a></td>
                                <td><span style="color: red;"><?php echo e($order->order_type); ?></span></td>
                                <td><?php echo e($shipping_detail ? $shipping_detail->name : ''); ?> </td>
                                <td><?php echo e($shipping_detail ? $shipping_detail->email : ''); ?></td>
                                <td><?php echo e($shipping_detail ? $shipping_detail->mobile : ''); ?></td>
                                <td><?php echo e($order->order_total); ?></td>
                                <td>
                                <?php if($order->order_status == 'Pending'): ?>
                                        <span class="label label-warning">Pending</span>
                                    <?php elseif($order->order_status == 'Processing'): ?>
                                        <span class="label label-info">Processing</span>
                                    <?php elseif($order->order_status == 'Shipped'): ?>
                                        <span class="label label-success">Shipped</span>
                                    <?php else: ?>
                                        <span class="label label-danger">Delivered</span>
                                <?php endif; ?>
                                </td>
                                
                                    
                                
                                <td>
                                    <a href="<?php echo e(route('edit-order-status',['id'=>$order->id,'status'=>'Processing'])); ?>" class="btn btn-info btn-xs" title="Processing">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a>
                                    <a href="<?php echo e(route('edit-order-status',['id'=>$order->id,'status'=>'Shipped'])); ?>" class="btn btn-xs btn-success" title="Shipped">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a>
                                    <a href="<?php echo e(route('edit-order-status',['id'=>$order->id,'status'=>'Delivered'])); ?>" class="btn btn-xs btn-danger" title="Delivered">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </a>

                                    <button type="button" class="btn btn-xs" data-toggle="modal" data-target="#deleteOrder" data-whatever="<?php echo e($order->id); ?>">
                                        <span class="glyphicon glyphicon-remove"></span>
                                    </button>

                                    
                                        
                                    
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
                
                
            </div>
            <!-- /.box-footer -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
</section>
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="deleteOrder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Delete Order</h4>
            </div>
            <?php echo e(Form::open(['route'=>'delete-order','class'=>'contact-form','method'=>'POST','name'=>'deleteOrder'])); ?>

            <div class="modal-body">

                <div class="form-group">
                    <label>Description</label>
                    <?php echo Form::textarea('status_description',null,['class'=>'form-control', 'rows' => 2, 'cols' => 10]); ?>

                    <?php echo e(Form::hidden('order_id','',array('class' => 'order_id'))); ?>

                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete Order</button>
            </div>
            <?php echo e(Form::close()); ?>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script !src="">
        $('#deleteOrder').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var recipient = button.data('whatever') // Extract info from data-* attributes
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
            var modal = $(this);
            // modal.find('.modal-title').text('New message to ' + recipient)
            modal.find('.modal-body input.order_id').val(recipient)
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>