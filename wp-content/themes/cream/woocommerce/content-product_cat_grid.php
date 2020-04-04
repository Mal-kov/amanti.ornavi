<?php

    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }
    global $product;

    if ( empty($product) || !$product->is_visible() ) {
        return;
    }
?>




<div class="col-md-4 col-sm-6">
    <div class="product-block" data-publish-date="">

        <div class="product-image ">


            <?php
            /**
             * woocommerce_template_loop_product_thumbnail - 10
             */
            do_action('woocommerce_before_shop_loop_item_title'); ?>

<!--            <div class="product-thumbnail">-->

            <div class="product-actions">
                <a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
                    <i class="fa fa-heart-o"></i>
                </a>

                <?php amanti_quick_view_product(); ?>
<!--                <a href="" data-id="" class="btn product-quick-view btn-quickview" title="Quick view">-->
<!--                    <i class="fa fa-eye"></i>-->
<!--                </a>-->
<!--                <a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">-->
<!--                    <i class="fa fa-retweet"></i>-->
<!--                </a>-->
            </div>

        </div><!-- /.product-image -->

        <div class="product-meta">


                <?php amanti_woocommerce_template_loop_rating(); ?>
<!--            <span class="product-rating" data-rating="">-->
<!--                <span class="star-rating">-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                    <i class="fa fa-star-o"></i>-->
<!--                </span>-->
<!--            </span>-->
            <!-- end rating -->

            <?php do_action('woocommerce_shop_loop_item_title'); ?>
            <!--@woocommerce_template_loop_product_title-->


            <div class="product-price">
                <?php amanti_woocommerce_template_loop_price(); ?>

<!--                --><?php //do_action('woocommerce_before_shop_loop_item'); ?>



                <?php do_action('woocommerce_after_shop_loop_item'); ?>
<!--                <a href="product_single.html" class="add_to_cart_button">Add to Cart</a>-->
            </div>
        </div><!-- /.product-meta -->



    </div>
</div>












