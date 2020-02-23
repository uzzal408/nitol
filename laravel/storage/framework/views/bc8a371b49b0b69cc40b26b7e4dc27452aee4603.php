<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    Checkout | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>

    <div class="container">
        <div class="wrap-breadcrumb">
            
        </div>

        <div class=" main-content-area">
            <?php echo e(Form::open(['route'=>'save-order','class'=>'contact-form','method'=>'POST','name'=>'frm-billing'])); ?>

                <div class="wrap-address-billing">
                    <h3 class="box-title">Billing Address</h3>
                    <p class="row-in-form" style="display: none"></p>
                    <p class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="" placeholder="Your name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="lname">last name<span>*</span></label>
                        <input id="lname" type="text" name="lname" value="" placeholder="Your last name" required>
                    </p>
                    <p class="row-in-form">
                        <label for="email">Email Addreess:</label>
                        <input id="email" type="email" name="email" value="" placeholder="Type your email">
                    </p>
                    <p class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone" type="text" name="phone" value="" placeholder="11 digits format" required>
                    </p>
                    <p class="row-in-form">
                        <label for="add">Address:<span>*</span></label>
                        <input id="add" type="text" name="add" value="" placeholder="Street at apartment number" required>
                    </p>
                    <p class="row-in-form">
                        <label for="country">Country<span>*</span></label>
                        <input id="country" type="text" name="country" value="" placeholder="United States" required>
                    </p>
                    <p class="row-in-form">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input id="zip-code" type="number" name="zip_code" value="" placeholder="Your postal code">
                    </p>
                    <p class="row-in-form">
                        <label for="city">Town / City<span>*</span></label>
                        <input id="city" type="text" name="city" value="" placeholder="City name" required>
                    </p>
                    <p class="row-in-form fill-wife">
                        
                        <label class="checkbox-field">
                            <input name="different-add" id="different-add" value="forever" type="checkbox">
                            <span>Ship to a different address?</span>
                        </label>
                    </p>
                </div>
                
                <div class="summary summary-checkout">
                    <div class="summary-item payment-method">
                        <h4 class="title-box">Payment Method</h4>
                        <!--<p class="summary-info"><span class="title">Check / Money order</span></p>-->
                        <!--<p class="summary-info"><span class="title">Credit Card (saved)</span></p>-->
                        <p class="summary-info"><span class="title">Pay Online</span></p>
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment_method_ssl" id="payment-method-sslcommerz" value="sslcommerz" type="radio" checked>
                                <span>Local or International Debit/Credit Card - Visa/Master/Amex or Nexus</span>
                                <span class="payment-desc">You will able to pay for your products using local credit/debit cards like VISA, MasterCard, DBBL Nexus Card and any kind of credit card or bank accounts right from your online store.</span>
                            </label>
                            
                            <!--<label class="payment-method">-->
                            <!--    <input name="payment-method" id="payment-method-bank" value="bank" type="radio">-->
                            <!--    <span>Direct Bank Transfer</span>-->
                            <!--    <span class="payment-desc">But the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable</span>-->
                            <!--</label>-->

                            

                        </div>
                        
                        
            
                        <p class="summary-info grand-total"><span>Grand Total</span> 
                            <span class="grand-total-price">
                                <?php echo e(filter_var(Cart::subtotal(),FILTER_SANITIZE_NUMBER_INT)/100 + $shippingCost->description); ?> TK
                            </span>
                        </p>
                        <?php if(Session::get('CustomerId')==''): ?>
                            <button type="submit" class="btn btn-medium"><a title="Login" href="<?php echo e(url('')); ?>/customerLogin" style="color:white">Place order</a></button>
                        <?php else: ?>
                            <button type="submit" class="btn btn-medium">Place order</button>
                        <?php endif; ?>

                    </div>
                    <div class="summary-item shipping-method">
                        <h4 class="title-box f-title">Shipping method</h4>
                        <p class="summary-info"><span class="title">Flat Rate</span></p>
                        <p class="summary-info"><span class="title">Fixed <?php echo e($shippingCost->description); ?>.00</span></p>
                        <h4 class="title-box">Discount Codes</h4>
                        <p class="row-in-form">
                            <label for="coupon-code">Enter Your Coupon code:</label>
                            <input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">
                        </p>
                        <a href="#" class="btn btn-small">Apply</a>
                    </div>
                </div>
            <?php echo e(Form::close()); ?>


            

            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
                        <?php $__currentLoopData = $allCategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                      
                            <?php if($category['name']=='Most Viewed'): ?>
                                <?php $mostViewed            = $category->products; ?>
                                <?php $__currentLoopData = $mostViewed; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" title=<?php echo e($product->title); ?>>
                                                <figure><img src="<?php echo e(asset($product->image1)); ?>" width="214" height="214" alt=<?php echo e($product->title); ?>></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">Most Viewed</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="product-name"><span><?php echo e($product->title); ?></span></a>

                                            <?php if($product->sale_price==0 && $product->discount==0): ?>
                                                <div class="wrap-price"><span class="product-price"><?php echo e($product->price); ?></span></div>
                                            <?php elseif($product->sale_price>0): ?>
                                                <div class="wrap-price"><span class="product-price"><ins><p class="product-price">৳ <?php echo e($product->sale_price); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e(number_format((($product->price-$product->sale_price)*100)/$product->price),2); ?>% off</p></span></div>                                            
                                            <?php else: ?>
                                                <div class="wrap-price"><span class="product-price"><ins><p class="product-price">৳ <?php echo e(($product->price/100)*(100-$product->discount)); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e($product->discount); ?>% off</p></span></div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
    </div><!--end container-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script !src="">
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', ['body_class' => 'sticky-header left-side-collapsed'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>