<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

global $product;
?>



<!-- =====================================
    	==== Start single-product -->

<div class="single-product">
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">

            <?php
            /**
             * @hooked woocommerce_output_all_notices - 10
             */
            do_action( 'woocommerce_before_single_product' ); ?>

            <div class="product-info">

                <div class="col-md-6">

                    <div class="row">

                        <?php
                        /**
                         * Hook: woocommerce_before_single_product_summary.
                         *
                         * @hooked woocommerce_show_product_sale_flash - 10
                         * @hooked woocommerce_show_product_images - 20
                         */
                        do_action( 'woocommerce_before_single_product_summary' );
                        ?>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="product-meta clearfix">

                        <?php
                        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
                        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
                        add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 3 );


                        /**
                         * Hook: woocommerce_single_product_summary.
                         *
                         * @hooked woocommerce_template_single_title - 5
                         * @hooked woocommerce_template_single_rating - 3
                         * @hooked woocommerce_template_single_price - 10
                         * @hooked woocommerce_template_single_excerpt - 20
                         * @hooked woocommerce_template_single_add_to_cart - 30
                         * @hooked woocommerce_template_single_meta - 40
                         * @hooked woocommerce_template_single_sharing - 50
                         * @hooked WC_Structured_Data::generate_product_data() - 60
                         */
                        do_action( 'woocommerce_single_product_summary' );
                        ?>

                        <div class="social-sharing">
                            <h6 class="text-uppercase">Share:</h6>
                            <a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a>
                            <a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a>
                            <a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a>
                            <a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a>
                            <a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div><!-- /.product-meta -->
                </div>
            </div>

            <!-- product-tab-description -->


                <?php
                /**
                 * Hook: woocommerce_after_single_product_summary.
                 *
                 * @hooked woocommerce_output_product_data_tabs - 10
                 * @hooked woocommerce_upsell_display - deleted in functions.php
                 * @hooked woocommerce_output_related_products - deleted in functions.php
                 */
                do_action( 'woocommerce_after_single_product_summary' );
                ?>

            <!--/product-tab-description -->
        </div>
    </div>
</div>
<!-- =====================================
    ==== End single-product -->

