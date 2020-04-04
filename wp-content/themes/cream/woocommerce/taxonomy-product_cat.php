<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
get_header();
?>


    <!-- =====================================
        ==== Start breadcrumb -->

<?php remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 ); ?>
<?php do_action( 'woocommerce_before_main_content' ); ?>


<!--    <div class="breadcrumb">-->
        <!-- container -->
<!--        <div class="container">-->
<!--            <h1>Products</h1>-->
<!--            <ol class="item-breadcrumb">-->
<!--                <li><a href="woocommerce/index.html">Home</a></li>-->
<!--                <li>Category 3</li>-->
<!--            </ol>-->
<!--        </div>-->
        <!-- /container -->
<!--    </div>-->

    <!-- =====================================
    	==== End breadcrumb -->


    <!-- =====================================
        ==== Start archive-product-sidebar -->
    <div class="archive-product">
        <!-- Container -->
        <div class="container">
            <!-- Row -->
            <div class="row">

                <div class="col-md-3">
                    <div class="search_page_404">
                        <form method="get" class="searchform" action="#">
                            <div class="wiget-search input-group">
                                <input name="s" maxlength="40" class="form-control input-search" type="text" size="20" placeholder="Searching everything...">
                                <span class="input-group-addon input-large btn-search">
								 	<span class="fa fa-search"></span>
								 	<input type="submit" class="fa" value="">
								 </span>
                            </div>
                        </form>
                    </div>
                    <?php get_sidebar(); ?>
                </div>


                <div class="col-md-9">
                    <!-- product-shorting -->
                    <div class="product-shorting d-flex align-items-center justify-content-between">

                        <div class="grid-list-view">
                            <ul class="nav tabs-area">
                                <li class="active">
                                    <a data-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#list-view" class=""><i class="fa fa-list-ul"></i></a>
                                </li>
                            </ul>
<!--                            <span class="show-items">Showing 1 to 9</span>-->
                        </div>

                        <div class="pages">
                            <div class="limiter visible-desktop">
                                <label>Показать:</label>
                                <select id="pagination-posts">
                                    <option <?php if ( isset( $_GET['ppp'] ) && $_GET['ppp'] == 1 ) :?> selected="selected" <?php endif; ?> value="1" >1</option>
                                    <option <?php if ( isset( $_GET['ppp'] ) && $_GET['ppp'] == 3 ) :?> selected="selected" <?php endif; ?> value="3" >3</option>
                                    <option <?php if ( !isset( $_GET['ppp'] ) || $_GET['ppp'] == 6 ) :?> selected="selected" <?php endif; ?> value="6" >6</option>
                                </select> per page
                            </div>
                        </div> <!-- /Блок отображения кол-ва товаров на странице -->


                        <?php do_action('woocommerce_before_shop_loop'); ?>

<!--                        <div class="toolbar-sorter">-->
<!--                            <select name="orderby" class="orderby">-->
<!--                                <option value="menu_order" selected="selected">Default sorting</option>-->
<!--                                <option value="popularity">Sort by popularity</option>-->
<!--                                <option value="rating">Sort by average rating</option>-->
<!--                                <option value="date">Sort by newness</option>-->
<!--                                <option value="price">Sort by price: low to high</option>-->
<!--                                <option value="price-desc">Sort by price: high to low</option>-->
<!--                            </select>-->
<!--                        </div>-->

                    </div>
                    <!--/product-shorting -->

                    <!-- tab-content -->
                    <div class="tab-content">

                        <div id="grid-view" class="tab-pane fade in active">
                            <div class="product products-grid">
                                <div class="row row-products">

                                <?php if ( have_posts() ):?>
                                    <?php while ( have_posts() ) : the_post(); ?>
                                        <?php wc_get_template_part('content', 'product_cat_grid');?>
                                    <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php wc_get_template('loop/no-products-found.php'); ?>
                                <?php endif; ?>

                                </div>
                            </div>
                        </div>

                        <div id="list-view" class="tab-pane fade">
                            <div class="product products-list">
                                <div class="row row-products">

                                    <?php if ( have_posts() ):?>
                                        <?php while ( have_posts() ) : the_post(); ?>
                                            <?php wc_get_template_part('content', 'product_cat_view');?>
                                        <?php endwhile; ?>
                                    <?php else: ?>
                                        <?php wc_get_template('loop/no-products-found.php'); ?>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /tab-content -->

                    <!-- pagination -->
                    <?php do_action('woocommerce_after_shop_loop'); ?>
                    <!-- /pagination -->
                </div>
            </div>
        </div>
    </div>
    <!-- End archive-product-sidebar -->


<?php get_footer(); ?>