<div class="flash-message">
    <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Session::has('alert-' . $msg)): ?>
            <p class="alert alert-<?php echo e($msg); ?>" role="alert">
                <?php if($msg == 'success'): ?>
                    <strong><i class="icon fa fa-check"></i></strong>
                <?php elseif($msg == 'warning'): ?>
                    <strong><i class="icon fa fa-warning"></i></strong>
                <?php elseif($msg == 'info'): ?>
                    <strong><i class="icon fa fa-info"></i></strong>
                <?php elseif($msg == 'danger'): ?>
                    <strong><i class="icon fa fa-ban"></i></strong>
                <?php endif; ?>
                <?php echo e(Session::get('alert-' . $msg)); ?>

            </p>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>