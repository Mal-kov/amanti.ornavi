<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'product-featured-image',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );



?>
<!--<div class="flexslider">-->
<!--<ul class="featuredPostSlider col-md-10 col-sm-11">-->
<?php
//    if(has_post_thumbnail()) {
//
//    $props            = wc_get_product_attachment_props( get_post_thumbnail_id(), $product );
//    $image            = get_the_post_thumbnail( $post_thumbnail_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
//    'class'	 => 'product-featured-image',
//    'alt'    => $props['alt'],
//    'data-imagezoom' => "true"
//    ) );
//
//    echo apply_filters('woocommerce_single_product_image_thumbnail_html',
//
//    sprintf(
//    '<li data-thumb="%s"> %s </li>',
//    esc_url($props['url']),$image ), $post_thumbnail_id  );
//
//    do_action('woocommerce_product_thumbnails');
//    }
// ?>
<!--<!--    <li>-->
<!--<!--    <img class="product-featured-image" src="assets/images/product_single/product_single_2.jpg" alt="">-->
<!--<!--    </li>-->
<!---->
<!--</ul>-->
<!--</div>-->
<!--<div id="slick-page">-->
<!--    <div class="pagerNavigation pagerNavigationTop">-->
<!--        <span class="top"><i class="fa fa-angle-up"></i></span>-->
<!--    </div>-->
<!--    <div class="slick-pager">-->
<!--        <a data-slide-index="1" href="javascript:void(0)">-->
<!--            <img class="product-featured-image" src="assets/images/product_single/product_single_4.jpg" alt="">-->
<!--        </a>-->
<!---->
<!---->
<!--    </div>-->
<!--    <div class="pagerNavigation pagerNavigationBottom">-->
<!--        <span class="bottom"><i class="fa fa-angle-down"></i></span>-->
<!--    </div>-->
<!--</div>-->















<!--<div class="--><?php //echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?><!--" data-columns="--><?php //echo esc_attr( $columns ); ?><!--" style="opacity: 0; transition: opacity .25s ease-in-out;">-->


		<?php
		if ( $product->get_image_id() ) {

//			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
//			var_dump($html);

//            $props            = wc_get_product_attachment_props( get_post_thumbnail_id(), $product );
//            $image            = get_the_post_thumbnail( $post_thumbnail_id, apply_filters( 'single_product_large_thumbnail_size', 'shop_single' ), array(
//                'class'	 => 'product-featured-image ',
//                'alt'    => $props['alt'],
//                'data-imagezoom' => "true"
//            ) );

//            $html  = '<li>';

//            $html = wc_get_gallery_image_html( $post_thumbnail_id, true );
//            $html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image product-featured-image product_selector_1" />',
//                esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ),
//                esc_html__( 'Awaiting product image', 'woocommerce' ) );
//            $html .= '</li>';

		} else {








//            echo apply_filters('woocommerce_single_product_image_thumbnail_html',
//
//                sprintf( '<li> %s </li>', $image ), $post_thumbnail_id );



//			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
//			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />',
//                esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ),
//                esc_html__( 'Awaiting product image', 'woocommerce' ) );
//			$html .= '</div>';
		}

//		echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped





        ?>


        <?php do_action( 'woocommerce_product_thumbnails' ); ?>


<!--</div>-->

















<!---->
<!--    <li>-->
<!--        <img class="product-featured-image product_selector_1" src="assets/images/product_single/product_single_4.jpg" alt="">-->
<!--    </li>-->
<!--    <li>-->
<!--        <img class="product-featured-image" src="assets/images/product_single/product_single_2.jpg" alt="">-->
<!--    </li>-->
<!--    <li>-->
<!--        <img class="product-featured-image" src="assets/images/product_single/product_single_3.jpg" alt="">-->
<!--    </li>-->
<!--    <li>-->
<!--        <img class="product-featured-image" src="assets/images/product_single/product_single_1.jpg" alt="">-->
<!--    </li>-->
<!--    <li>-->
<!--        <img class="product-featured-image" src="assets/images/product_single/product_single_5.jpg" alt="">-->
<!--    </li>-->



