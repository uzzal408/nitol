<?php $__env->startSection('stylesheet'); ?>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    Nitol | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>


    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12 main-content-area">

                

                

                <div class="row">
                    <?php if(session('message')): ?>
                        <div class="alert alert-danger" id="flash_message">
                            <?php echo e(session('message')); ?>

                        </div>
                    <?php endif; ?>
                    <ul class="product-list grid-products equal-container">
                        <?php $__currentLoopData = $searchAllPdoduct; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                            <figure>
                                                <?php if($product->image1): ?>
                                                    <img src="<?php echo e(asset($product->image1)); ?>" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <?php else: ?>
                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                <?php endif; ?>
                                            </figure>
                                            
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="#" class="product-name">
                                            <span>
                                                <?php echo e($product->title); ?>

                                                <?php if($product->ac_capacity!=null): ?>
                                                    <?php echo e($product->ac_capacity); ?> TON
                                                <?php endif; ?>
                                                
                                                <?php if($product->screen_size!=null): ?>
                                                    <?php echo e($product->screen_size); ?>"
                                                <?php endif; ?>
                                            </span>
                                        </a>
                                        <div class="wrap-price">
                                            <?php if($product->discount==0): ?>
                                                <ins><p class="product-price">৳ <?php echo e($product->price); ?></p></ins>
                                            <?php else: ?>
                                                <ins><p class="product-price">৳ <?php echo e(($product->price/100)*(100-$product->discount)); ?> </p></ins><del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e($product->discount); ?>% off</p>
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="wrap-pagination-info">
                    <ul class="page-numbers">
                        
                    </ul>
                </div>
            </div><!--end main products area-->

            
            <!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>

<?php $__env->stopSection(); ?>

<script>
    function priceRange(priceRangeValue) {
        //alert(priceRangeValue);
        $.ajax({
            type: "POST",
            url: "<?php echo e(url('')); ?>/api/product/filterProduct/"+priceRangeValue,
            success: function (response) {
                document.getElementById("currentPrice").innerHTML ='৳'+' '+priceRangeValue;
                console.log(response);
            }
        });
    }

    function priceRange(value){
        //alert(value);
        document.getElementById("currentPrice").innerHTML ='৳'+' '+value;
    }

    setTimeout( function () {
        $('#flash_message').hide();
    }, 20000);
</script>
<?php echo $__env->make('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>