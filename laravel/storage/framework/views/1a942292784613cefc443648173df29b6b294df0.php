<html>
<head>
    <title>Order</title>
</head>
<body>
<h1>Order Confirmation</h1>
<p>
    A order is sent by <?php echo e($info['name']); ?> that's order no. is <?php echo e($info['order_id']); ?> and order total is
    <?php echo e($info['total']); ?>.
</p>
<p>
    Contact with <?php echo e($info['name']); ?> over phone by <?php echo e($info['phone']); ?>

</p>
</body>