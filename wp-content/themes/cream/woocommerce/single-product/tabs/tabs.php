<?php
/**
 * Single Product tabs
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/tabs/tabs.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.8.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Filter tabs and allow third parties to add their own.
 *
 * Each tab is an array containing title, callback and priority.
 *
 * @see woocommerce_default_product_tabs()
 */
$product_tabs = apply_filters( 'woocommerce_product_tabs', array() );


if ( ! empty( $product_tabs ) ) : ?>

    <div class="col-md-12 product-description-tabs">
		<ul class="nav">
            <?php $i = 0; ?>
			<?php foreach ( $product_tabs as $key => $product_tab ) : ?>
				<li class="test <?php if ( $i == 0 ) : ?>active <?php endif ?>">
					<a data-toggle="tab" href="#<?php echo esc_attr( $key ); ?>">
						<?php echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
					</a>
				</li>
                <?php $i++; ?>
			<?php endforeach; ?>
		</ul>

        <div class="tab-content">

            <?php foreach ( $product_tabs as $key => $product_tab ) : ?>
                <?php
                if ( isset( $product_tab['callback'] ) ) {
                    call_user_func( $product_tab['callback'], $key, $product_tab );
                }
                ?>
            <?php endforeach; ?>

        </div>
            <?php do_action( 'woocommerce_product_after_tabs' ); ?>
    </div>

<?php endif; ?>


<!--
<ul class="nav">
    <li class="active"><a data-toggle="tab" href="#tab_description">Description</a></li>
    <li><a data-toggle="tab" href="#tab_information">Additional information</a></li>
    <li><a data-toggle="tab" href="#tab_reviews">Review (2)</a></li>
</ul>
<div class="tab-content">
    <div id="tab_description" class="tab-pane fade in active">
        In a urna a ipsum lacinia fermentum id nec est. Ut eleifend neque at rutrum malesuada. Aenean dignissim rhoncus felis, sed varius eros elementum vitae. Donec vitae molestie tellus. Mauris mollis vestibulum condimentum. Curabitur eu nibh vitae ante rhoncus auctor tincidunt vitae ligula. Morbi tempus sit amet risus a scelerisque. Duis eget condimentum nibh, sit amet tincidunt lacus. Quisque vel diam suscipit neque bibendum viverra in eu nisi.
        <p>
            In a urna a ipsum lacinia fermentum id nec est. Ut eleifend neque at rutrum malesuada. Aenean dignissim rhoncus felis, sed varius eros elementum vitae. Donec vitae molestie tellus. Mauris mollis vestibulum condimentum. Curabitur eu nibh vitae ante rhoncus auctor tincidunt vitae ligula. Morbi tempus sit amet risus a scelerisque. Duis eget condimentum nibh, sit amet tincidunt lacus. Quisque vel diam suscipit neque bibendum viverra in eu nisi.
        </p>
        <p>
            In a urna a ipsum lacinia fermentum id nec est. Ut eleifend neque at rutrum malesuada. Aenean dignissim rhoncus felis, sed varius eros elementum vitae. Donec vitae molestie tellus. Mauris mollis vestibulum condimentum. Curabitur eu nibh vitae ante rhoncus auctor tincidunt vitae ligula. Morbi tempus sit amet risus a scelerisque. Duis eget condimentum nibh, sit amet tincidunt lacus. Quisque vel diam suscipit neque bibendum viverra in eu nisi.
        </p>

    </div>
    <div id="tab_information" class="tab-pane fade">
        In a urna a ipsum lacinia fermentum id nec est. Ut eleifend neque at rutrum malesuada. Aenean dignissim rhoncus felis, sed varius eros elementum vitae. Donec vitae molestie tellus. Mauris mollis vestibulum condimentum. Curabitur eu nibh vitae ante rhoncus auctor tincidunt vitae ligula. Morbi tempus sit amet risus a scelerisque. Duis eget condimentum nibh, sit amet tincidunt lacus. Quisque vel diam suscipit neque bibendum viverra in eu nisi.
        In a urna a ipsum lacinia fermentum id nec est. Ut eleifend neque at rutrum malesuada. Aenean dignissim rhoncus felis, sed varius eros elementum vitae. Donec vitae molestie tellus. Mauris mollis vestibulum condimentum. Curabitur eu nibh vitae ante rhoncus auctor tincidunt vitae ligula. Morbi tempus sit amet risus a scelerisque. Duis eget condimentum nibh, sit amet tincidunt lacus. Quisque vel diam suscipit neque bibendum viverra in eu nisi.
    </div>
    <div id="tab_reviews" class="tab-pane fade">
        <div class="rattings-wrapper">
            <div class="review-ratting">
                <div class="star-author-all">
                    <div class="ratting-author">
                        <h3>Jane Watson</h3>
                        <span>12:24</span>
                        <span>9 March 2018</span>
                    </div>
                    <div class="ratting-star">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span>(5)</span>
                    </div>
                </div>

                <div class="reviews_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</div>
            </div>
            <div class="review-ratting">
                <div class="star-author-all">
                    <div class="ratting-author">
                        <h3>Emma Doe</h3>
                        <span>12:24</span>
                        <span>9 March 2018</span>
                    </div>
                    <div class="ratting-star">
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span class="fa fa-star" aria-hidden="true"></span>
                        <span>(5)</span>
                    </div>
                </div>

                <div class="reviews_content clearfix">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost rud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Utenim ad minim veniam, quis nost.</div>
            </div>
        </div>
        <form class="form-product-review" action="do_action" method="post">
            <h5>ADD YOUR REVIEW</h5>
            <div class="form-group">
                <label class="control-label">Your Rating</label>
                <p class="ratting-star">
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                    <span class="fa fa-star" aria-hidden="true"></span>
                </p>
            </div>
            <div class="form-group">
                <label class="control-label" for="comment">Your Review</label>
                <textarea id="comment" class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
            </div>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="author" class="control-label">Name
                        <span class="required">*</span>
                    </label>
                    <input id="author" class="form-control" name="author" type="text" value="" size="30" aria-required="true">
                </div>
                <div class="form-group col-md-6">
                    <label for="email" class="control-label">Email
                        <span class="required">*</span>
                    </label>
                    <input id="email" class="form-control" name="email" type="text" value="" size="30" aria-required="true">
                </div>
                <div class="form-submit col-md-12">
                    <input name="submit" type="submit" id="submit" class="btn btn-primary" value="Send">
                    <input type="hidden" name="comment_post_ID" value="" id="comment_post_ID">
                    <input type="hidden" name="comment_parent" id="comment_parent" value="">
                </div>
            </div>
        </form>
    </div>
</div>-->





<!--    --><?php //if ( ! empty( $product_tabs ) ) : ?>
<!---->
<!--    <div class="woocommerce-tabs wc-tabs-wrapper">-->
<!--        <ul class="tabs wc-tabs" role="tablist">-->
<!--            --><?php //foreach ( $product_tabs as $key => $product_tab ) : ?>
<!--                <li class="--><?php //echo esc_attr( $key ); ?><!--_tab" id="tab-title---><?php //echo esc_attr( $key ); ?><!--" role="tab" aria-controls="tab---><?php //echo esc_attr( $key ); ?><!--">-->
<!--                    <a href="#tab---><?php //echo esc_attr( $key ); ?><!--">-->
<!--                        --><?php //echo wp_kses_post( apply_filters( 'woocommerce_product_' . $key . '_tab_title', $product_tab['title'], $key ) ); ?>
<!--                    </a>-->
<!--                </li>-->
<!--            --><?php //endforeach; ?>
<!--        </ul>-->
<!--        --><?php //foreach ( $product_tabs as $key => $product_tab ) : ?>
<!--            <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel----><?php //echo esc_attr( $key ); ?><!-- panel entry-content wc-tab" id="tab---><?php //echo esc_attr( $key ); ?><!--" role="tabpanel" aria-labelledby="tab-title---><?php //echo esc_attr( $key ); ?><!--">-->
<!--                --><?php
//                if ( isset( $product_tab['callback'] ) ) {
//                    call_user_func( $product_tab['callback'], $key, $product_tab );
//                }
//                ?>
<!--            </div>-->
<!--        --><?php //endforeach; ?>
<!---->
<!--        --><?php //do_action( 'woocommerce_product_after_tabs' ); ?>
<!--    </div>-->
<!---->
<?php //endif; ?>