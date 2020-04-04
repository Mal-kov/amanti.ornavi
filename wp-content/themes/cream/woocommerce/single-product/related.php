<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

//print_r($related_product);
?>
<?php if ( $related_products ) : ?>
    <div class="up-sells pt-20">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-md-12">

                    <div class=" up-sells_content pt-30">
                        <h3 class="theme-heading"><?php esc_html_e( 'You May Also Like', 'woocommerce' ); ?></h3>

                        <div class="product products-grid">
                            <div class="owl-carousel owl-theme" data-pagination="true" data-nav="flase" data-items="3" data-large="3" data-medium="3" data-smallmedium="2" data-extrasmall="1" data-verysmall="1" data-autoplay="true">

                                <?php //woocommerce_product_loop_start(); ?>

                                <?php foreach ( $related_products as $related_product ) : ?>

                                    <?php
                                    $post_object = get_post( $related_product->get_id() );

                                    setup_postdata( $GLOBALS['post'] =& $post_object );

                                    wc_get_template_part( 'content', 'product' ); ?>

                                <?php endforeach; ?>

                                <?php //woocommerce_product_loop_end(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif;?>

<?php wp_reset_postdata();?>


<?php
//if ( $related_products ) : ?>
<!---->
<!--    <section class="related products">-->
<!---->
<!--        <h2>--><?php //esc_html_e( 'Related products', 'woocommerce' ); ?><!--</h2>-->
<!---->
<!--        --><?php //woocommerce_product_loop_start(); ?>
<!---->
<!--        --><?php //foreach ( $related_products as $related_product ) : ?>
<!---->
<!--            --><?php
//            $post_object = get_post( $related_product->get_id() );
//
//            setup_postdata( $GLOBALS['post'] =& $post_object );
//
//            wc_get_template_part( 'content', 'product' ); ?>
<!---->
<!--        --><?php //endforeach; ?>
<!---->
<!--        --><?php //woocommerce_product_loop_end(); ?>
<!---->
<!--    </section>-->
<!---->
<?php //endif;
//
//wp_reset_postdata();