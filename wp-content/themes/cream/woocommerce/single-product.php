<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header();
?>

<!-- =====================================
        ==== Start breadcrumb -->


<?php
/**
 * woocommerce_breadcrumb
 */
do_action( 'woocommerce_before_main_content' ); ?>

<!-- =====================================
    ==== End breadcrumb -->


<?php while ( have_posts() ) : the_post(); ?>

    <?php wc_get_template_part( 'content', 'single-product' ); ?>

<?php endwhile; // end of the loop. ?>






<!-- =====================================
    ==== Start up-sells -->

    <?php
    /**
     * Hook: woocommerce_after_single_product_summary.
     *
     * @hooked woocommerce_output_content_wrapper_end - 10 - deleted in functions.php
     * @hooked woocommerce_upsell_display - added in functions.php
     * @hooked woocommerce_output_related_products - added in functions.php
     */
    do_action( 'woocommerce_after_main_content' );
    ?>


<!-- =====================================
    ==== End up-sells -->







<?php get_footer(); ?>
