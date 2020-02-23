<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
    Nitol | Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
    <div class="container">
        <div class="wrap-breadcrumb">
            
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery">
                            <ul class="slides">
                                <?php if($product->image1): ?>
                                    <li data-thumb="<?php echo e(asset($product->image1)); ?>">
                                        <img src="<?php echo e(asset($product->image1)); ?>" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                <?php endif; ?>
                                <?php if($product->image2): ?>
                                    <li data-thumb="<?php echo e(asset($product->image2)); ?>">
                                        <img src="<?php echo e(asset($product->image2)); ?>" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                <?php endif; ?>
                                <?php if($product->image3): ?>
                                    <li data-thumb="<?php echo e(asset($product->image3)); ?>">
                                        <img src="<?php echo e(asset($product->image3)); ?>" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                <?php endif; ?>
                                <?php if($product->image4): ?>
                                    <li data-thumb="<?php echo e(asset($product->image4)); ?>">
                                        <img src="<?php echo e(asset($product->image4)); ?>" alt="product thumbnail" width="380" height="150"/>
                                    </li>
                                <?php endif; ?>

                                
                                
                                
                                

                                
                                
                                
                                

                                
                                
                                
                                

                                
                                
                                
                                

                            </ul>
                        </div>
                    </div>
                    <div class="detail-info">

                        

                        <form class="addToCart" action="#" method="post">
                            
                            <?php if($productReviewAvg>0): ?>
                                <div class="product-rating">
                                    <?php for($i = 1; $i <=$productReviewAvg; $i++): ?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                    <?php endfor; ?>
                                    (<?php echo e($productReviewAvg); ?> Ratings)
                                </div>
                            <?php else: ?>
                            <?php endif; ?>
                            
                            
                            <h2 class="product-name"><?php echo e($product->title); ?></h2>
                            <div class="short-desc">
                                <ul>
                                    <?php ($specifications = explode(',', $product->specification)); ?>
                                    <?php $__currentLoopData = $specifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($category); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                            
                            

                            <div class="wrap-price">
                                <?php if($product->discount==0): ?>
                                    <ins><p class="product-price">৳ <?php echo e($product->price); ?></p></ins>
                                <?php else: ?>
                                    <ins><p class="product-price">৳ <?php echo e(($product->price/100)*(100-$product->discount)); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e($product->discount); ?>% off</p>
                                <?php endif; ?>
                            </div>

                            
                            <?php if($product->quantity==0): ?>
                                <div class="stock-info in-stock">
                                    <p class="availability">Availability: <b>Stock Out</b></p>
                                </div>
                            <?php else: ?>
                                <div class="stock-info in-stock">
                                    <p class="availability" value="<?php echo e($product->quantity); ?>" id="productQuantityTotal">Availability: <b>In Stock</b></p>
                                </div>
                                <div class="quantity">
                                    <span>Quantity:</span>
                                    <div class="quantity-input">
                                        <input type="text" name="product-quatity" value="1" data-max="<?php echo e($product->quantity); ?>" pattern="[0-9]*" id="productQuantityItem">
                                        <a class="btn btn-increase" href="#" onclick="productQuantity()"></a>
                                        <a class="btn btn-reduce" href="#"></a>
                                    </div>
                                </div>
                                <div class="wrap-butons">
                                    <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>" id="productIdSelect">
                                    <input type="hidden" name="product_name" value="<?php echo e($product->title); ?>">
                                    <input type="hidden" name="product_specification" value="<?php echo e($product->specification); ?>">
                                    <?php if($product->discount==0): ?>
                                        <input type="hidden" name="product_price" value="<?php echo e($product->price); ?>" min="1">
                                    <?php else: ?>
                                        <input type="hidden" name="product_price" value="<?php echo e(($product->price/100)*(100-$product->discount)); ?>" min="1">
                                    <?php endif; ?>
                                    <input type="hidden" name="product_image" value="<?php echo e($product->image1); ?>">
                                    
                                    <button type="submit" class="btn add-to-cart btn-block">Add to Cart</button>
                                    <div class="wrap-btn">
                                        
                                    </div>
                                </div>
                            <?php endif; ?>
                        </form>
                    </div>
                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">Description</a>
                            <a href="#add_infomation" class="tab-control-item">Features & Specifications</a>
                            <a href="#review" class="tab-control-item">Reviews</a>
                        </div>

                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                <?php echo $product->description; ?>

                            </div>

                            <div class="tab-content-item " id="add_infomation">
                                <table class="shop_attributes">
                                    <tbody>
                                    <?php ($additional_informations = json_decode($product->additional_information)); ?>
                                    <?php if(!empty($additional_informations)): ?>
                                        <?php $__currentLoopData = $additional_informations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $additional_information): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $__currentLoopData = $additional_information; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key); ?></td>
                                                    <td class="product_weight"><?php echo e($value); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="tab-content-item " id="review">
                                <div class="wrap-review-form">
                                    
                                    <div id="review_form_wrapper">
                                        <div id="review_form">
                                            <div id="respond" class="comment-respond">

                                                

                                                <?php if(Session::get('CustomerId')==''): ?>   
                                                    <p class="form-submit" style="font-weight:bold;">Please <button type="submit" type="submit" id="submit" class="submit"><a title="Login" href="<?php echo e(url('')); ?>/customerLogin" style="color:red;">Login</a></button> to give a review</p>
                                                <?php else: ?>
                                                    <form id="commentform" class="comment-form" method="POST" action="<?php echo e(url('')); ?>/productReview/store/<?php echo e($id); ?>" enctype="multipart/form-data" novalidate="">
                                                        <?php echo e(csrf_field()); ?>      
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span>
                                                            Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <span>Your rating</span>
                                                            <p class="stars">
                                                                <label for="rated-1"></label>
                                                                <input type="radio" id="rated-1" name="rating" value="1">
                                                                <label for="rated-2"></label>
                                                                <input type="radio" id="rated-2" name="rating" value="2">
                                                                <label for="rated-3"></label>
                                                                <input type="radio" id="rated-3" name="rating" value="3">
                                                                <label for="rated-4"></label>
                                                                <input type="radio" id="rated-4" name="rating" value="4">
                                                                <label for="rated-5"></label>
                                                                <input type="radio" id="rated-5" name="rating" value="5" checked="checked">
                                                            </p>
                                                        </div>
                                                        
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review <span class="required">*</span></label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" required></textarea>
                                                        </p>

                                                        <p class="form-submit">
                                                            <?php if(Session::get('CustomerId')==''): ?>
                                                                <button type="submit" type="submit" id="submit" class="submit"><a title="Login" href="<?php echo e(url('')); ?>/customerLogin">Submit</a></button>
                                                            <?php else: ?>
                                                                <input type="submit" type="submit" id="submit" class="submit" value="Submit">
                                                            <?php endif; ?>
                                                        </p>
                                                    </form>    
                                                <?php endif; ?>


                                            </div><!-- .comment-respond-->
                                        </div><!-- #review_form -->
                                    </div><!-- #review_form_wrapper -->

                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">
                                            <?php if($categorycount>0): ?>
                                                <?php echo e($categorycount); ?> review for <span><?php echo e($product->title); ?></span>
                                            <?php else: ?>
                                                0 review for <span><?php echo e($product->title); ?></span>
                                            <?php endif; ?>
                                        </h2>

                                        
                                        <?php $__currentLoopData = $productReview; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reviewItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <ol class="commentlist">
                                                <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                    id="li-comment-20">
                                                    <div id="comment-20" class="comment_container">
                                                        <img alt="" src="<?php echo e(asset('/')); ?>client_end/images/download1234.jpg"
                                                            height="80" width="80">

                                                        <div class="comment-text"> 
                                                            <div class="product-rating">
                                                                <?php for($i = 1; $i <=$reviewItem->product_review; $i++): ?>
                                                                    <i class="fa fa-star" aria-hidden="true" ></i>
                                                                <?php endfor; ?>
                                                                (<?php echo e($reviewItem->product_review); ?> Ratings)
                                                            </div>
                                                            
                                                            
                                                            
                                                            <p class="meta">
                                                                <strong class="woocommerce-review__author"><?php echo e($reviewItem->customer_name); ?></strong>
                                                                <span class="woocommerce-review__dash">–</span>
                                                                <time class="woocommerce-review__published-date"
                                                                    datetime="2008-02-14 20:00"><?php echo e($reviewItem->created_at); ?>

                                                                </time>
                                                            </p>
                                                            <div class="description">
                                                                <p><?php echo e($reviewItem->product_comment); ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div><!-- #comments -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end main products area-->

            

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>
                    <div class="widget-content">
                        <ul class="products">
                            <?php $__currentLoopData = $mostPopularAll; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($key<4): ?>
                                    <li class="product-item">
                                        <div class="product product-widget-style">
                                            <div class="thumbnnail">
                                                <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" title="<?php echo e($product->title); ?>">
                                                    <figure><img src="<?php echo e(asset($product->image1)); ?>"alt=""></figure>
                                                </a>
                                            </div>
                                            <div class="product-info">
                                                <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="product-name"><span><?php echo e($product->title); ?></span></a>
                                                <div class="wrap-price">
                                                    <?php if($product->discount==0): ?>
                                                        <ins><p class="product-price">৳ <?php echo e($product->price); ?></p></ins>
                                                    <?php else: ?>
                                                        <ins><p class="product-price">৳ <?php echo e(($product->price/100)*(100-$product->discount)); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e($product->discount); ?>% off</p>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>

            </div><!--end sitebar-->

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Releted Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>

                            

                            <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" title="<?php echo e($product->title); ?>">
                                            <figure><img src="<?php echo e(asset($product->image1)); ?>"width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                        </a>
                                        <div class="group-flash">
                                            <span class="flash-item new-label">Releted Product</span>
                                        </div>
                                        
                                    </div>
                                    <div class="product-info">
                                        <a href="<?php echo e(route('show-product',['id'=>$product->id])); ?>" class="product-name"><span><?php echo e($product->title); ?></span></a>
                                        <div class="wrap-price">
                                            <?php if($product->discount==0): ?>
                                                <ins><p class="product-price">৳ <?php echo e($product->price); ?></p></ins>
                                            <?php else: ?>
                                                <ins><p class="product-price">৳ <?php echo e(($product->price/100)*(100-$product->discount)); ?> </p></ins> <del><p class="product-price">৳ <?php echo e($product->price); ?></p></del><p class="product-price" style="margin-left:10px;">-<?php echo e($product->discount); ?>% off</p>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                            
                            
                            
                            
                            

                        </div>
                    </div><!--End wrap-products-->
                </div>
            </div>

        </div><!--end row-->

    </div><!--end container-->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script>
        $(function () {
            $('.addToCart').submit(function (event) {
                event.preventDefault();
                var form                    = $(this);
                var product_id              = form.find("input[name='product_id']").val();
                var product_virtual_id      = form.find("input[name='product_virtual_id']").val();
                var product_name            = form.find("input[name='product_name']").val();
                var product_specification   = form.find("input[name='product_specification']").val();
                var product_price           = form.find("input[name='product_price']").val();
                var product_qty             = form.find("input[name='product-quatity']").val();
                var product_image           = form.find("input[name='product_image']").val();
                var CSRF_TOKEN              = $('meta[name="csrf-token"]').attr('content');

                //console.log(product_image);
                //alert(product_virtual_id);
                //console.log(product_virtual_id);

                // var table       = document.getElementById("newRowInsert");
                // var row         = table.insertRow(0);
                // var cell1       = row.insertCell(0);
                // var cell2       = row.insertCell(1);
                // var cell3       = row.insertCell(2);
                // var cell4       = row.insertCell(3);
                // cell1.innerHTML = product_qty;
                // cell2.innerHTML = product_name;
                // cell3.innerHTML = product_price;
                // cell4.innerHTML = '<a href="<?php echo e(url('')); ?>/product/'+product_id+'">Edit</a>|'+
                // '<a href="<?php echo e(url('')); ?>/cardDelete/'+product_id+'/'+product_id+'">Delete</a>';
            
                $.ajax({
                    type: "POST",
                    url: '<?php echo e(route('add-to-card')); ?>',
                    dataType: "text",
                    // data: {form:form},
                    data: {
                        _token:                 CSRF_TOKEN,
                        product_id:             product_id,
                        product_name:           product_name,
                        product_specification:  product_specification,
                        product_price:          product_price,
                        product_qty:            product_qty,
                        product_image:          product_image
                    },
                    success: function (msg) {
                        $('#cartDetails').html(msg);
                        // var result = $(msg).text().split('|');
                        // $('#cartDetails').html(result[0]).css("color", "red");
                        // $('#grandTotal').html(result[1]).css("color", "red");
                        // $('#grandTotalBase').html(result[1]);
                        // $('#totalPrice').children('span').html($('#totalPriceVirtual').html());

                    }
                });
            });
        });

        function productQuantity(){
            var productQuantitySelect   = document.getElementById("productQuantityItem").value;
            var productIdSelect         = document.getElementById("productIdSelect").value;
            productQuantityIn           = parseInt(productQuantitySelect)+1;
            var CSRF_TOKEN              = $('meta[name="csrf-token"]').attr('content'); 

            $.ajax({
                type: "POST",
                url: "<?php echo e(url('')); ?>/api/product/productIdLimit/"+productIdSelect,
                success: function (response) {
                    if(productQuantityIn>response){
                        alert('Product Limit Exit');
                    }
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.master', ['body_class' => 'detail page','main_class' => 'main-site'], \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>