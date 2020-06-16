<?php $__env->startSection('body'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Invoice
            <small>#OR00<?php echo e($order->id); ?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Invoice</li>
        </ol>
    </section>

    <div class="pad margin no-print">
        <div class="callout callout-info" style="margin-bottom: 0!important;">
            <h4><i class="fa fa-info"></i> Note:</h4>
            This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
        </div>
    </div>

    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <?php if($order->customer): ?>
                        <i class="fa fa-globe"></i> <?php echo e($order->customer->first_name); ?> <?php echo e($order->customer->last_name); ?>

                        <small class="pull-right">Date: <?php echo e($order->customer->created_at); ?></small>
                    <?php endif; ?>
                </h2>
            </div>
            <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
                <strong>Shipping Address</strong>

                <address>
                    <?php ($shipping_detail = $order->shipping_detail); ?>
                    
                    <?php if($shipping_detail): ?>
                        <span style="color: red;font-weight: bold"><?php echo e($order->order_type); ?></span><br/>
                        <b>Name: </b><?php echo e($shipping_detail->name); ?><br>
                        <b>E-mail: </b><?php echo e($shipping_detail->email); ?><br>
                        <b>Mobile: </b><?php echo e($shipping_detail->mobile); ?><br>
                        
                        <b>Address: </b><?php echo e($order->address); ?><br>
                        <b>Country: </b><?php echo e($order->country); ?><br>
                        <b>City: </b><?php echo e($order->city); ?><br>
                        <b>Zip Code: </b><?php echo e($order->zip_code); ?><br>
                        
                    <?php if($order->order_type == 'Delivery'): ?>
                            <?php ($delivery = $shipping_detail->delivery); ?>
                            <?php if($delivery): ?>
                                <b>Location: </b><?php echo e($delivery->delivering_to); ?><br>
                                <b>Address Details:</b> <?php echo e($delivery->address_details); ?><br>
                                <b>Additional Information:</b> <?php echo e($delivery->additional_information); ?>

                            <?php endif; ?>
                        <?php else: ?>
                            <?php ($take_away = $order->store); ?>
                            <b>Shop Name: </b><?php echo e($take_away->name); ?><br>
                            <b>Address:</b> <?php echo e($take_away->location); ?>

                        <?php endif; ?>
                    <?php endif; ?>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <strong>Billing Address</strong>
                <?php ($billing_details = $order->billing_detail); ?>
                <address>
                    <?php if($billing_details): ?>
                        Payment Type: <?php echo e($billing_details->payment_type); ?> <br>
                        Payment Status: <?php echo e($billing_details->payment_status); ?>
                    <?php endif; ?>
                </address>
            </div>
            <!-- /.col -->
            <div class="col-sm-4 invoice-col">
                <b>Invoice #OR00<?php echo e($order->id); ?></b><br>
                <br>
                <b>Order ID:</b> OR00<?php echo e($order->id); ?><br>
                <b>Payment Due:</b> <?php echo e($order->created_at); ?><br>
                <b>Account:</b> --------
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $order->order_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order_details): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <?php ($product = $order_details->product); ?>
                            <td><?php echo e($order_details->product_quantity); ?></td>
                            <td><?php echo e($product->title); ?> - <?php echo $order_details->product_name; ?></td>
                            
                            <?php ( $total_price = (int)$order_details->product_price * (int)$order_details->product_quantity  ); ?>
                            <td>৳ <?php echo e($total_price); ?></td>
                        </tr>
                        <tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </tbody>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Payment Methods:</p>
                <img src="<?php echo e(asset('/')); ?>admin/dist/img/credit/visa.png" alt="Visa">
                <img src="<?php echo e(asset('/')); ?>admin/dist/img/credit/mastercard.png" alt="Mastercard">
                <img src="<?php echo e(asset('/')); ?>admin/dist/img/credit/american-express.png" alt="American Express">
                <img src="<?php echo e(asset('/')); ?>admin/dist/img/credit/paypal2.png" alt="Paypal">

                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
                    plugg
                    dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
                </p>
            </div>
            <!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Amount Due <?php echo e($order->created_at); ?></p>

                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th style="width:50%">Subtotal:</th>
                            <td>৳ <?php echo e($order->order_total); ?></td>
                        </tr>
                        <tr>
                            <th>Tax (0.0%)</th>
                            <td>৳ 00.00</td>
                        </tr>
                        <tr>
                            <th>Shipping:</th>
                            <td>৳ 0.00</td>
                        </tr>
                        <tr>
                            <th>Total:</th>
                            <td>৳ <?php echo e($order->order_total); ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                
                <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit
                    Payment
                </button>
                <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;" onclick="generate_pdf()">
                    <i class="fa fa-download"></i> Generate PDF
                </button>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>

<?php $__env->stopSection(); ?>

<script>
    function generate_pdf(){
        window.print()
    }
</script>
<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>