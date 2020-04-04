<?php
/**
 * Single Product Thumbnails
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-thumbnails.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();
?>

<?php if ( $attachment_ids && $product->get_image_id() ) : ?>



<?php
//    foreach ($attachment_ids as $attachment_id) {
//
//    $props = wc_get_product_attachment_props($attachment_id, $post);
//
//    if (!$props['url']) {
//    continue;
//    }
//
//    $props['data-imagezoom'] = true;
//
//    echo apply_filters(
//    'woocommerce_single_product_image_thumbnail_html',
//    sprintf(
//    '<li data-thumb="%s">%s</li>',
//    wp_get_attachment_image_src($attachment_id, 'shop_thumbnail')[0],
//    wp_get_attachment_image($attachment_id, apply_filters('single_product_small_thumbnail_size', 'shop_full'), 0, $props)
//    ),
//    $attachment_id,
//    $post->ID
//    );
//
//
//    }
//
//
//    ?>

    <?php  ?>

    <div class="container-gallery">
        <ul class="featuredPostSlider col-md-10 col-sm-11 gallery">


            <?php foreach ( $attachment_ids as $attachment_id ) : ?>
                <?php $props = wc_get_product_attachment_props($attachment_id, $post); ?>
<!--                --><?php //print_r($props); ?>
                <li class="item-gallery">
                    <a class="thumb-image" href="<?php echo $props['url']; ?>">
                        <?php echo apply_filters( 'woocommerce_single_product_image_thumbnail_html',
                            amanti_wc_get_gallery_image_html( $attachment_id, 'full' ), $attachment_id ); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div id="slick-page">
        <div class="pagerNavigation pagerNavigationTop">
            <span class="top"><i class="fa fa-angle-up"></i></span>
        </div>
        <div class="slick-pager">

            <?php $i = 1; ?>
            <?php foreach ( $attachment_ids as $attachment_id ) : ?>

                <a data-slide-index="<?php echo $i; ?>" href="javascript:void(0)">
                    <?php echo apply_filters( 'woocommerce_single_product_image_thumbnail_html',
                        amanti_wc_get_gallery_image_html( $attachment_id ), $attachment_id ); ?>
                </a>
                <?php $i++; ?>
            <?php endforeach; ?>
            <?php $i = 0; ?>

        </div>
        <div class="pagerNavigation pagerNavigationBottom">
            <span class="bottom"><i class="fa fa-angle-down"></i></span>
        </div>
    </div>




<?php endif; ?>


