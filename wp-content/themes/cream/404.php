<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package cream
 */

get_header();
?>

    <!-- =====================================
        ====Start page-404  -->
    <div class="page-404 section-bg" style="background-image:url(assets/images/bg_404.jpg)">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="content-404">
                        <h3 class="title_404"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cream' ); ?></h3>
                        <div class="error-description pt-30 pb-30">
                            We are sorry. But the page you are looking for is not available.<br/>
                            Perhaps you can try a new searching.
                        </div>
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
                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cream' ); ?></p>

                            <?php
                            get_search_form();

                            the_widget( 'WP_Widget_Recent_Posts' );
                            ?>

<!--                            <div class="widget widget_categories">-->
<!--                                <h2 class="widget-title">--><?php //esc_html_e( 'Most Used Categories', 'cream' ); ?><!--</h2>-->
<!--                                <ul>-->
<!--                                    --><?php
//                                    wp_list_categories( array(
//                                        'orderby'    => 'count',
//                                        'order'      => 'DESC',
//                                        'show_count' => 1,
//                                        'title_li'   => '',
//                                        'number'     => 10,
//                                    ) );
//                                    ?>
<!--                                </ul>-->
<!--                            </div><!-- .widget -->

                            <?php
                            /* translators: %1$s: smiley */
                            $cream_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cream' ), convert_smilies( ':)' ) ) . '</p>';
                            the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$cream_archive_content" );

                            the_widget( 'WP_Widget_Tag_Cloud' );
                            ?>

                        </div><!-- .page-content -->
                        <a href="woocommerce/index.html" class="btn btn-primary back-home">Back homepage <i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- =====================================
    ==== End page-404 -->







<!--	<div id="primary" class="content-area">-->
<!--		<main id="main" class="site-main">-->
<!---->
<!--			<section class="error-404 not-found">-->
<!--				<header class="page-header">-->
<!--					<h1 class="page-title">--><?php //esc_html_e( 'Oops! That page can&rsquo;t be found.', 'cream' ); ?><!--</h1>-->
<!--				</header><!-- .page-header -->
<!---->
<!--				<div class="page-content">-->
<!--					<p>--><?php //esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'cream' ); ?><!--</p>-->
<!---->
<!--					--><?php
//					get_search_form();
//
//					the_widget( 'WP_Widget_Recent_Posts' );
//					?>
<!---->
<!--					<div class="widget widget_categories">-->
<!--						<h2 class="widget-title">--><?php //esc_html_e( 'Most Used Categories', 'cream' ); ?><!--</h2>-->
<!--						<ul>-->
<!--							--><?php
//							wp_list_categories( array(
//								'orderby'    => 'count',
//								'order'      => 'DESC',
//								'show_count' => 1,
//								'title_li'   => '',
//								'number'     => 10,
//							) );
//							?>
<!--						</ul>-->
<!--					</div><!-- .widget -->
<!---->
<!--					--><?php
//					/* translators: %1$s: smiley */
//					$cream_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'cream' ), convert_smilies( ':)' ) ) . '</p>';
//					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$cream_archive_content" );
//
//					the_widget( 'WP_Widget_Tag_Cloud' );
//					?>
<!---->
<!--				</div><!-- .page-content -->
<!--			</section><!-- .error-404 -->
<!---->
<!--		</main><!-- #main -->
<!--	</div><!-- #primary -->

<?php
get_footer();
