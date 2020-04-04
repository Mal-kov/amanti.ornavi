<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
global $product;

if ( empty($product) || !$product->is_visible() ) {
    return;
}
?>


<div class="col-md-12">
    <div class="product-block">
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-4">
                <div class="product-image product_2">

                    <?php do_action('woocommerce_before_shop_loop_item_title'); ?>

                </div><!-- /.product-image -->
            </div>

            <div class="col-md-8 col-lg-8 col-sm-8">
                <div class="product-meta">
                    <?php amanti_woocommerce_template_loop_rating(); ?>
<!--                    <span class="product-rating" data-rating="">-->
<!--                        <span class="star-rating">-->
<!--                            <i class="fa fa-star-o"></i>-->
<!--                            <i class="fa fa-star-o"></i>-->
<!--                            <i class="fa fa-star-o"></i>-->
<!--                            <i class="fa fa-star-o"></i>-->
<!--                            <i class="fa fa-star-o"></i>-->
<!--                        </span>-->
<!--                    </span>-->
                    <!-- end rating -->

                    <?php do_action('woocommerce_shop_loop_item_title'); ?>
<!--                    <h4 class="product-name">-->
<!--                        <a href="product_single.html" title="">-->
<!--                            Casual Premium edition-->
<!--                        </a>-->
<!--                    </h4><!-- /.product-product -->

                    <div class="product-price">
                        <?php amanti_woocommerce_template_loop_price(); ?>
<!--                        <span class="amout">-->
<!--                            <span class="money" data-currency-usd="$1200.0">$1200.0</span>-->
<!--                        </span>-->
                    </div><!-- /.product-price -->
                    <div class="excerpt">
                        Revolutionary multi-touch interface. iPod touch features the same multi-touch screen
                        technology as iPhone. Pinch to zoom in on a photo. Scroll through your songs and videos
                        with a flick. Flip throug..
                    </div>
                    <div class="product-footer">
                        <a href="cart.html" class="btn btn-primary">Add to Cart<i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
                        <div class="product-actions">
                            <a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
                                <i class="fa fa-heart-o"></i>
                            </a>
                            <a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quickview">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">
                                <i class="fa fa-retweet"></i>
                            </a>
                        </div>
                    </div>
                </div><!-- /.product-meta -->
            </div>
        </div>
    </div>
</div>







<?php //do_action('woocommerce_before_shop_loop_item'); ?>
<!--                <a href="product_single.html" title="">-->


<!--                    <img class="product-featured-image" src="assets/images/product/product_5.jpg" alt="">-->



<?php //do_action('woocommerce_after_shop_loop_item'); ?>
<!--                </a>-->
<!--            </div>-->


