<?php
/**
 * Simple product add to cart
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/add-to-cart/simple.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

echo wc_get_stock_html( $product ); // WPCS: XSS ok.


if ( $product->is_in_stock() ) : ?>



<!--    <div class="product-footer">-->
<!--        <form action="#" class="add-to-cart" method="post" enctype="multipart/form-data">-->
<!--            <input class="cart-qty-box" type="number" name="qtybutton" value="0">-->
<!--            <input type="hidden" name="id" value="">-->
<!--        </form>-->
<!--        <a href="cart.html" class="btn btn-primary">Add to Cart<i class="fa fa-shopping-bag" aria-hidden="true"></i></a>-->
<!--        <div class="product-actions">-->
<!--            <a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">-->
<!--                <i class="fa fa-heart-o"></i>-->
<!--            </a>-->
            <!--                                <a href="" data-id="" class="btn product-quick-compare btn-compare" title="Compare">-->
            <!--                                    <i class="fa fa-retweet"></i>-->
            <!--                                </a>-->
<!--        </div>-->
<!--    </div>-->


<div class="product-footer">

    <?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

    <form class="cart add-to-cart" action="<?php echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?>" method="post" enctype='multipart/form-data'>
        <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>


        <?php
        do_action( 'woocommerce_before_add_to_cart_quantity' );

        woocommerce_quantity_input( array(
            'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
            'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
            'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
        ) );

        do_action( 'woocommerce_after_add_to_cart_quantity' );
        ?>


        <button id="purchaseNow" type="submit" name="add-to-cart" value="<?php echo esc_attr( $product->get_id() ); ?>" class="btn btn-primary single_add_to_cart_button button alt"><?php echo esc_html( $product->single_add_to_cart_text() ); ?><i class="fa fa-shopping-bag" aria-hidden="true"></i></button>

<!--        <a id="purchaseNow" type="submit"-->
<!--           name="add-to-cart"-->
<!--           value="--><?php //echo esc_attr( $product->get_id() ); ?><!--"-->
<!--           class="btn btn-primary single_add_to_cart_button button alt">-->
<!--            --><?php //echo esc_html( $product->single_add_to_cart_text() ); ?>
<!--            <i class="fa fa-shopping-bag" aria-hidden="true"></i>-->
<!--        </a>-->

        <div class="product-actions">
            <a href="#" data-id="" class="btn wishlist product-quick-whistlist" title="Add to whistlist">
                <i class="fa fa-heart-o"></i>
            </a>
        </div>



        <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
    </form>

<!--    <a id="purchaseNow" type="submit"-->
<!--       name="add-to-cart"-->
<!--       value="--><?php //echo esc_attr( $product->get_id() ); ?><!--"-->
<!--       class="btn btn-primary single_add_to_cart_button button alt">-->
<!--        --><?php //echo esc_html( $product->single_add_to_cart_text() ); ?>
<!--        <i class="fa fa-shopping-bag" aria-hidden="true"></i>-->
<!--    </a>-->








    <?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

</div>


<?php endif; ?>















<?php // if ( $product->is_in_stock() ) : ?>
<!---->
<!--	--><?php //do_action( 'woocommerce_before_add_to_cart_form' ); ?>
<!---->
<!--	<form class="cart" action="--><?php //echo esc_url( apply_filters( 'woocommerce_add_to_cart_form_action', $product->get_permalink() ) ); ?><!--" method="post" enctype='multipart/form-data'>-->
<!--		--><?php //do_action( 'woocommerce_before_add_to_cart_button' ); ?>
<!---->
<!--		--><?php
//		do_action( 'woocommerce_before_add_to_cart_quantity' );
//
//		woocommerce_quantity_input( array(
//			'min_value'   => apply_filters( 'woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product ),
//			'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product ),
//			'input_value' => isset( $_POST['quantity'] ) ? wc_stock_amount( wp_unslash( $_POST['quantity'] ) ) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
//		) );
//
//		do_action( 'woocommerce_after_add_to_cart_quantity' );
//		?>
<!---->
<!--		<button type="submit"
                    name="add-to-cart"
                    value="--><?php //echo esc_attr( $product->get_id() ); ?><!--"
                    class="single_add_to_cart_button button alt">-->
                        <?php //echo esc_html( $product->single_add_to_cart_text() ); ?>
        <!--</button>-->
<!---->
<!--		--><?php //do_action( 'woocommerce_after_add_to_cart_button' ); ?>
<!--	</form>-->
<!---->
<!--	--><?php //do_action( 'woocommerce_after_add_to_cart_form' ); ?>
<!---->
<?php //endif; ?>
