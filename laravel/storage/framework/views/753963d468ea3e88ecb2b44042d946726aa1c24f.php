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

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="<?php echo e(asset($bannerImageAll->image)); ?>" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title"><?php echo e($categoryId->name); ?></h1>

                    <div class="wrap-right">

                        

                        

                        

                    </div>

                </div><!--end wrap shop control-->

                <div class="row">

                    <ul class="product-list grid-products equal-container">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($product->publication_status): ?>
                            <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                <div class="product product-style-3 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" title="<?php echo e($product->title); ?>">
                                            <figure>
                                                <?php if($product->image1): ?>
                                                    <img src="<?php echo e(asset($product->image1)); ?>" width="800" height="800" alt="<?php echo e($product->title); ?>">
                                                <?php else: ?>
                                                    <img src="https://via.placeholder.com/511x357" width="800" height="800" style="width:100%">
                                                <?php endif; ?>
                                            </figure>
                                            
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="product-name">
                                            <span>
                                                <?php echo e($product->title); ?>

                                                <?php if($product->ac_capacity!=null): ?>
                                                    <?php echo e($product->ac_capacity); ?> TON
                                                <?php endif; ?>

                                                <?php if($product->screen_size!=null): ?>
                                                    <?php echo e($product->screen_size); ?>"
                                                <?php endif; ?>
                                                
                                                <?php if($product->capacity_litre!=null): ?>
                                                    <?php echo e($product->capacity_litre); ?> Ltr
                                                <?php endif; ?>
                                            </span>
                                        </a>
                                        <div class="wrap-price">
                                            <?php if($product->sale_price==0 && $product->discount==0): ?>
                                                <ins><p class="product-price">৳ <?php echo e($product->price); ?></p></ins>
                                            <?php elseif($product->sale_price>0): ?>
                                                <ins><p class="product-price">৳ <?php echo e($product->sale_price); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e(number_format((($product->price-$product->sale_price)*100)/$product->price),2); ?>% off</p>
                                            <?php else: ?>
                                                <ins><p class="product-price">৳ <?php echo e(($product->price/100)*(100-$product->discount)); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e($product->discount); ?>% off</p>
                                            <?php endif; ?>
                                        </div>
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="btn add-to-cart">Add To Cart</a>
                                    </div>
                                </div>
                            </li>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>

                <div class="wrap-pagination-info">
                    <ul class="page-numbers">
                        
                    </ul>
                </div>
            </div><!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title"><?php echo e($categoryId->name); ?></h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            <?php $__currentLoopData = $categoryIdAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="category-item has-child-cate">
                                    <a href="<?php echo e(url('')); ?>/products/<?php echo e($item->id); ?>" class="cate-link"><?php echo e($item->name); ?></a>
                                    <?php if(count($item['children'])>0): ?>
                                        <span class="toggle-control">+</span>
                                        <?php $__currentLoopData = $item['children']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <ul class="sub-cate">
                                                <li class="category-item has-child-cate">
                                                    <a href="<?php echo e(url('')); ?>/products/<?php echo e($subcategory->id); ?>" class="cate-link"><?php echo e($subcategory->name); ?></a>
                                                </li>
                                            </ul>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?> 
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div><!-- Categories widget-->

                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Price</h2>
                    <div class="widget-content">
                        
                        <form method="POST" action="<?php echo e(url('')); ?>/price/priceFilter/<?php echo e($id); ?>" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <p>
                                <label for="amount">Price:</label>
                                
                                
                                <?php if($priceRange==null): ?>
                                    <input id="slider" name="priceRangce" type="range" min="<?php echo e($minPrice); ?>" max="<?php echo e($maxPrice); ?>" step="10" oninput="priceRange(this.value)">
                                <?php else: ?>
                                    <input id="slider" name="priceRangce" type="range" value="<?php echo e($priceRange); ?>" min="<?php echo e($minPrice); ?>" max="<?php echo e($maxPrice); ?>" step="10" oninput="priceRange(this.value)">
                                <?php endif; ?>

                                <?php if($priceRange==null): ?>
                                    <p id="currentPrice">৳ <?php echo e(ceil(($minPrice+$maxPrice)/2)); ?></p>
                                <?php else: ?>
                                    <p id="currentPrice">৳ <?php echo e($priceRange); ?></p>
                                <?php endif; ?>
                                
                                
                                <button class="filter-submit">Filter</button>
                            </p>
                        </form>
                    </div>
                </div><!-- Price-->

                <div class="widget mercado-widget filter-widget">
                    <h2 class="widget-title">Color</h2>
                    <div class="widget-content">
                        <ul class="list-style vertical-list has-count-index">
                            <?php
                                $rootColorName = \App\Category::where('name','=','COLOR')->first();
                                $colorName     = \App\Category::where('parent_id','=',$rootColorName->id)->get();    
                            ?>
                            <?php $__currentLoopData = $uniqueColorName; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($item->id==$colorId): ?> 
                                    <input type="checkbox" class="list-item" name="vehicle" value="<?php echo e($item->id); ?>" checked>
                                    <a class="filter-link" href="<?php echo e(url('')); ?>/price/priceFilter/<?php echo e($id); ?>/<?php echo e($item->id); ?>">
                                        <span><?php echo e($item->name); ?></span>
                                    </a><br>
                                    
                                <?php else: ?>
                                    <input type="checkbox" class="list-item" name="vehicle" value="<?php echo e($item->id); ?>">
                                    <a class="filter-link" href="<?php echo e(url('')); ?>/price/priceFilter/<?php echo e($id); ?>/<?php echo e($item->id); ?>">
                                        <span><?php echo e($item->name); ?></span>
                                    </a><br>
                                
                                <?php endif; ?>
                                
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                        </ul>
                    </div>
                </div><!-- Color -->

                
                <!-- brand widget-->

            </div><!--end sitebar-->

        </div><!--end row-->

    </div><!--end container-->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    // function priceRange(priceRangeValue) {
    //     alert(priceRangeValue);
    //     $.ajax({
    //         type: "POST",
    //         url: "<?php echo e(url('')); ?>/api/product/filterProduct/"+priceRangeValue,
    //         success: function (response) {
    //             document.getElementById("currentPrice").innerHTML ='৳'+' '+priceRangeValue;
    //             console.log(response);
    //         }
    //     });
    // }
    function priceRange(value){
        document.getElementById("currentPrice").innerHTML ='৳'+' '+value;
    }
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('front.master', ['body_class' => 'home-page home-01','main_class' => 'main-site left-sidebar'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>