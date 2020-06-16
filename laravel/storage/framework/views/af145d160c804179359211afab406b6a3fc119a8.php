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
                    <div class="row-in-form">
                        <label for="fname">first name<span>*</span></label>
                        <input id="fname" type="text" name="fname" value="<?php echo e(isset($customerShoppingDetail->first_name) ? $customerShoppingDetail->first_name : ''); ?>" placeholder="Your name">
                        <?php if($errors->has('fname')): ?>
                        <div class="alert alert-danger"><?php echo e($errors->first('fname')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="row-in-form">
                        <label for="lname">last name<span>*</span></label>
                        <input id="lname" type="text" class="@error('lname') is-invalid @enderror" name="lname" value="<?php echo e(isset($customerShoppingDetail->last_name) ? $customerShoppingDetail->last_name : ''); ?>" placeholder="Your last name" required>
                        <?php if($errors->has('lname')): ?>
                        <div class="alert alert-danger"><?php echo e($errors->first('lname')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="row-in-form">
                        <label for="email">Email Addreess:</label>
                        <input id="email" class="@error('email') is-invalid @enderror" type="email" name="email" value="<?php echo e(isset($customerShoppingDetail->email) ? $customerShoppingDetail->email : ''); ?>" placeholder="Type your email">
                        <?php if($errors->has('email')): ?>
                            <div class="alert alert-danger"><?php echo e($errors->first('email')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="row-in-form">
                        <label for="phone">Phone number<span>*</span></label>
                        <input id="phone"  class="@error('phone') is-invalid @enderror" type="text" name="phone" value="<?php echo e(isset($customerShoppingDetail->phone) ? $customerShoppingDetail->phone : ''); ?>" placeholder="11 digits format" required>
                        <?php if($errors->has('phone')): ?>
                            <div class="alert alert-danger"><?php echo e($errors->first('phone')); ?></div>
                        <?php endif; ?>
                    </div>

                    <div class="row-in-form">
                        <label for="add">Address:<span>*</span></label>
                        <input id="add"  class="@error('add') is-invalid @enderror"type="text" name="add" value="<?php echo e(isset($customerShoppingDetail->address) ? $customerShoppingDetail->address : ''); ?>" placeholder="Street at apartment number" required>
                        <?php if($errors->has('add')): ?>
                            <div class="alert alert-danger"><?php echo e($errors->first('add')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="row-in-form">
                        <label for="country">Country<span>*</span></label>
                        <input id="country" class="@error('country') is-invalid @enderror" type="text" name="country" value="<?php echo e(isset($customerShoppingDetail->country) ? $customerShoppingDetail->country : ''); ?>" placeholder="United States" >
                        <?php if($errors->has('country')): ?>
                            <div class="alert alert-danger"><?php echo e($errors->first('country')); ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="row-in-form">
                        <label for="zip-code">Postcode / ZIP:</label>
                        <input id="zip-code" type="number" name="zip_code" value="<?php echo e(isset($customerShoppingDetail->zip_code) ? $customerShoppingDetail->zip_code : ''); ?>" placeholder="Your postal code">
                    </div>
                    <div class="row-in-form">
                        <label for="city">Town / City<span>*</span></label>
                        <input id="city" class="@error('city') is-invalid @enderror" type="text" name="city" value="<?php echo e(isset($customerShoppingDetail->town) ? $customerShoppingDetail->town : ''); ?>" placeholder="City name">
                        <?php if($errors->has('city')): ?>
                            <div class="alert alert-danger"><?php echo e($errors->first('city')); ?></div>
                        <?php endif; ?>
                    </div>
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
                        <div class="choose-payment-methods">
                            <label class="payment-method">
                                <input name="payment_method" id="payment-cash-on-delevery" value="cash-on-delivery" type="radio">
                                <span>Cash On Delivery</span>
                            </label>

                            <p class="summary-info"><span class="title">Pay Online</span></p>
                            <label class="payment-method">
                                <input name="payment_method" id="payment-method-sslcommerz" value="sslcommerz" type="radio" checked>
                                <span>Local or International Debit/Credit Card - Visa/Master/Amex or Nexus</span>
                                <span class="payment-desc">You will able to pay for your products using local credit/debit cards like VISA, MasterCard, DBBL Nexus Card and any kind of credit card or bank accounts right from your online store.</span>
                            </label>
                        </div>
            
                        <p class="summary-info grand-total"><span>Grand Total</span> 
                            <span class="grand-total-price">
                                <?php echo e(filter_var(Cart::subtotal(),FILTER_SANITIZE_NUMBER_INT)/100 + $shippingCost->description); ?> TK
                            </span>
                        </p>
                        <?php if(auth()->guard('customer')->guest()): ?>
                            <button type="submit" class="btn btn-medium"><a title="Login" href="<?php echo e(route('customer.login-form')); ?>" style="color:white">Place order</a></button>
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
        $(document).ready(function(){
            $("#payment-cash-on-delevery").click(function(){
                document.getElementById('payment-method-sslcommerz').checked = false;
            });
            $("#payment-method-sslcommerz").click(function(){
                document.getElementById('payment-cash-on-delevery').checked = false;
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', ['body_class' => 'sticky-header left-side-collapsed'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>