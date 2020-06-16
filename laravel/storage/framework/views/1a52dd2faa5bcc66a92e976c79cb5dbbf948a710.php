<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('/')); ?>client_end/login.css">
    <div id="login-box">
        <div class="left">
            <h1>Sign up</h1>
            <input type="text" name="email" id="email" autofocus value="<?php echo e(old('email')); ?>" placeholder="E-mail" />
            <input type="password" name="password" id="password" placeholder="Password" />
            <input type="checkbox" name="remember"><span class="label-text">Stay Signed in</span>
            <input type="submit" name="login" value="Login" />
        </div>

        <div class="right">
            <span class="loginwith">Sign in with<br />social network</span>

            <button class="social-signin facebook">Log in with facebook</button>
            <button class="social-signin twitter">Log in with Twitter</button>
            <button class="social-signin google">Log in with Google+</button>
        </div>
        <div class="or">OR</div>
    </div>

















































































<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.customerLogin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>