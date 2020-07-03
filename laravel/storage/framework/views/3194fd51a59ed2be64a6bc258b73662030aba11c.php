<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: ghostwhite;
        }
        .container{
            margin-top: 20px;
            overflow: hidden;
            height: 100px;
            width: 100%;
        }
        .logo{
            margin-left: 100px;
            float: left;
        }
        .address{
            float: right;
            margin-right: 100px;
        }
        #img{
            width: 200px;
            height: 50px;
        }
        .order{
            margin-left: 100px;
            height: 200px;
        }
        .order_details table th td{
            border-collapse: collapse;
        }
        th {
            text-align: left;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="logo">
        <img src="<?php echo e(asset('/client_end/images/Nitol-Electronics-Logo.png')); ?>" id="img">
    </div>
    <div class="address">
        <p>Nitol Electronics Ltd<br>
            <span>Nitol Tower, #Road-10,Block#B</span><br>
            <span>Mohakhali, Dhaka, Bangladesh</span>
        </p>
    </div>
</div>
<div class="order">
    <p>OrderId: <?php echo e($info['order_id']); ?><br>
        <span>www.nitolelectonics.com</span></p>
    <p>Date: April,11,2020</p>
    <table width="70%">
        <thead>
        <th><h2>Billing Information:</h2></th>
        <th><h2>Shipping Information:</h2></th>
        </thead>
        <tbody>
        <tr>
            <td>
                Name:<?php echo e($info['name']); ?><br>
                Phone: <?php echo e($info['phone']); ?><br>
                Address: <?php echo e($info['address']); ?> <br>
                city: <?php echo e($info['city']); ?> <br>
                Bangladesh
                <h3>Payment: <?php echo e($info['payment_type']); ?></h3>
            </td>
            <td>
                Name:<?php echo e($info['name']); ?><br>
                Phone: <?php echo e($info['phone']); ?><br>
                Address: <?php echo e($info['address']); ?> <br>
                city: <?php echo e($info['city']); ?> <br>
                <h3>Payment: Cash on deleivary</h3>
            </td>
        </tr>
        </tbody>
    </table>
    <table border="1" width="70%" style="border-collapse: collapse;" >
        <thead>
        <th>Product Name</th>
        <th>Price</th>
        <th>qty</th>
        <th>Total</th>
        </thead>
        <tbody>
        <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($cart->name); ?></td>
            <td><?php echo e($cart->price); ?></td>
            <td><?php echo e($cart->qty); ?></td>
            <td><?php echo e($cart->price * $cart->qty); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td colspan="3">Total</td>
            <td colspan="2">
                Subtotal: <?php echo e($info['subtotal']); ?><br>
                Discount: <?php echo e($info['discount']); ?><br>
                Shipping Cost:<?php echo e($info['shipping_cost']); ?><br>
                Total: <?php echo e($info['total']); ?>

            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>