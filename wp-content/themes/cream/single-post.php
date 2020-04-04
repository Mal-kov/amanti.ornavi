<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

get_header(); ?>

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

    <!-- =====================================
        ==== Start blog-single -->
    <div class="blog-single">
        <!-- container -->
        <div class="container">
            <!-- Row -->
            <div class="row">

                <div class="col-md-3">
                    <aside class="sidebar">
                        <!-- Categories -->
                        <section class="widget section-categories">
                            <h3 class="widget-title">Blog Categories</h3>
                            <div class="widget-content">
                                <ul class="list-categories list-widget">
                                    <li class="list-widget__item">
                                        <a class="list-widget__link active" href="#">All Products</a>
                                    </li>
                                    <li class="list-widget__item">
                                        <a class="list-widget__link" href="#">Climbing</a>
                                    </li>
                                    <li class="list-widget__item">
                                        <a class="list-widget__link" href="#">Camping and Hiking</a>
                                    </li>
                                    <li class="list-widget__item">
                                        <a class="list-widget__link" href="#">Snowsports</a>
                                    </li>
                                    <li class="list-widget__item">
                                        <a class="list-widget__link" href="#">Travel</a>
                                    </li>
                                </ul>
                            </div>
                        </section>
                        <!-- /Categories -->

                        <!-- Related Posts -->
                        <section class="widget section-related-posts">
                            <h3 class="widget-title">Related Posts</h3>
                            <div class="widget-content">
                                <ul class="list-posts">
                                    <li class="post-widget">
                                        <span class="post-date">May 25, 2018</span>
                                        <h3 class="post-title"><a href="#">Molestie at elementum eu facilisis sed odio</a></h3>
                                    </li>
                                    <li class="post-widget">
                                        <span class="post-date">May 25, 2018</span>
                                        <h3 class="post-title"><a href="#">4 Steps to An Even Better Upper Body
                                                Workout</a></h3>
                                    </li>
                                    <li class="post-widget">
                                        <span class="post-date">May 25, 2018</span>
                                        <h3 class="post-title"><a href="#">Molestie at elementum eu facilisis sed odio</a></h3>
                                    </li>
                                    <li class="post-widget">
                                        <span class="post-date">May 25, 2018</span>
                                        <h3 class="post-title"><a href="#">4 Steps to An Even Better Upper Body
                                                Workout</a></h3>
                                    </li>

                                </ul>
                            </div>
                        </section>
                        <!-- /Related Posts -->
                        <section class="widget section-instagram">
                            <h3 class="widget-title">Follow Our Instagram</h3>
                            <div class="widget-content instagramm-feed">
                                <a href="#"><img src="assets/images/blog/blog1.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog2.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog3.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog4.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog5.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog6.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog7.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog8.jpg" alt=""></a>
                                <a href="#"><img src="assets/images/blog/blog9.jpg" alt=""></a>
                            </div>
                        </section>
                        <!-- /instagram -->

                        <!-- tag -->
                        <section class="widget section-tags">
                            <h3 class="widget-title">tags</h3>
                            <div class="widget-content">
                                <div class="tagcloud">
                                    <a href="" class="tag-cloud-link">Angmar</a>
                                    <a href="" class="tag-cloud-link">Single</a>
                                    <a href="" class="tag-cloud-link">Products</a>
                                    <a href="" class="tag-cloud-link">Apple</a>
                                    <a href="" class="tag-cloud-link">Fashion</a>
                                    <a href="" class="tag-cloud-link">Timescape</a>
                                </div>
                            </div>
                        </section>
                        <!-- /tag -->
                    </aside>
                </div>

                <div class="col-md-9">
                    <div class="post-single">

                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('blog-thumb' ); ?>
<!--                            <img src="assets/images/blog/blog_single1.jpg" alt="">-->
                        </div>

                        <div class="entry-meta">
                            <span class="author pull-left">Автор: <a href="#"><?php the_author(); ?></a></span>
                            <span class="pull-right">
								<span class="comment"><a href="#">0</a>comments</span>
								<span class="like">
									<i class="fa fa-heart-o" aria-hidden="true"></i>
									Likes<a href="#">2</a></span>
								</span>
                        </div>
                        <div class="entry-content">
                            <h3 class="entry-subtitle"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
<!--                            <p>Beautiful and easy to use UI, professional animations and drag & drop feature. As they experiment, mix colors, or draw from imagination, their brain synapses start firing away. So, never ignore what arts can give to your kids. You may invite their friends to make the activity more fulfilling.-->
<!--                            </p>-->
<!--                            <div class="row pt-20 pb-30 hidden-xs hidden-sm">-->
<!--                                <div class="col-md-4">-->
<!--                                    <img src="assets/images/blog/blog_single2.jpg" alt="">-->
<!--                                </div>-->
<!--                                <div class="col-md-8">-->
<!--                                    <img src="assets/images/blog/blog_single3.jpg" alt="">-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <p>When you have a bad impression about art as a parent, it is important to understand that it is an activity in which children employ all their senses. As they experiment, mix colors, or draw from imagination, their brain synapses start firing away. So, never ignore what arts can give to your kids. You may invite their friends to make the activity more fulfilling.-->
<!--                            </p>-->
<!--                            <p class="blockquote">-->
<!--                                When you have a bad impression about art as a parent, it is important to understand that it is an activity in which children employ all their senses. As they experiment, mix colors, or draw from imagination, their brain synapses start firing away. So, never ignore what arts can give to your kids. You may invite their friends to make the activity more fulfilling.-->
<!--                            </p>-->
                        </div>
                        <div class="single-post-meta">
                            <div class="social-sharing">
                                <h6 class="text-uppercase">Share:</h6>
                                <a class="facebook social-icon" href="#"><i class="fa fa-facebook"></i></a>
                                <a class="twitter social-icon" href="#"><i class="fa fa-twitter"></i></a>
                                <a class="pinterest social-icon" href="#"><i class="fa fa-pinterest"></i></a>
                                <a class="gplus social-icon" href="#"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin social-icon" href="#"><i class="fa fa-linkedin"></i></a>
                            </div>
                            <div class="tagcloud">
                                <a href="" class="tag-cloud-link">Angmar</a>
                                <a href="" class="tag-cloud-link">Single</a>
                                <a href="" class="tag-cloud-link">Products</a>
                                <a href="" class="tag-cloud-link">Apple</a>
                            </div>
                        </div>
                        <div class="author-info">
                            <div class="avatar">
                                <img src="assets/images/image_author.png" alt="admin">
                            </div>
                            <div class="description">
                                <h5 class="author-title"> <a href="#">Admin - Bercu Sensio</a></h5>
                                <span class="author-meta">Professional athlete</span>
                                <div class="author-description">
                                    When I stand before God at the end of my life, I would hope that I would not have a single bit of talent left and could say, I used everything you gave me.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- /Row -->
        </div>
        <!-- /container -->
    </div>
    <!-- =====================================
    ==== End blog-single -->





<?php endwhile; // end of the loop. ?>

<?php wc_get_template_part( 'template-parts/related-posts' ); ?>

<?php get_footer(); ?>

