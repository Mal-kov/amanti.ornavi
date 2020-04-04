<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cream
 */

?>


<!-- =====================================
   ==== Start footer -->
<footer class="site-footer site-footer-3 clearfix">
    <div class="site-footer__main section-bg" style="background-image:url(../assets/images/bg_footer.jpg)">
        <div class="container">
            <div class="col-md-5 col-sm-6 col-xs-12 footer-block pb-30">
                <img src="<?php bloginfo('template_url'); ?>/assets/images/logo.png" alt="">
                <p class="address pt-30">Office: 972 Sylvan Street South Angelina, NL S0B2V9<br/>
                    Phone: (633) 497-1888 / (062) 109-9222<br/>
                    Email: example.com
                </p>
                <ul class="social pt-10">
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 footer-block pb-30">
                <h3 class="widget-title">Quick Links</h3>
                <ul>
                    <li><a href="../about.html">About Us</a></li>
                    <li><a href="../contact.html">Contact Us</a></li>
                    <li><a href="../blog.html">News</a></li>
                    <li><a href="../account.html">My Account</a></li>
                    <li><a href="../faq.html">FAQ</a></li>
                    <li><a href="../account.html">Register</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-6 col-xs-12 footer-block pb-30">
                <h3 class="widget-title">Merchant Central</h3>
                <ul>
                    <li><a href="../product_sidebar.html">Cleansers & Toners</a></li>
                    <li><a href="../product_sidebar.html">Serums & Boosters</a></li>
                    <li><a href="../product_sidebar.html">Day Care</a></li>
                    <li><a href="../product_sidebar.html">Night Care</a></li>
                    <li><a href="../product_sidebar.html">Eye Care</a></li>
                    <li><a href="../product_sidebar.html">Sun Protection</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 footer-block pb-30">
                <h3 class="widget-title">CONNECT WITH US</h3>
                <div class="features skin1">
                    <div class="features_list">
                        <div class="features-images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon_mail.png" alt="">
                        </div>
                        <div class="features-description">
                            <h4>Do you have any question?</h4>
                            <p>
                                email.example@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="features_list">
                        <div class="features-images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/images/icon_phone.png" alt="">
                        </div>
                        <div class="features-description">
                            <h4>1800-1314-1009</h4>
                            <p>
                                1800-1314-1009
                            </p>
                        </div>
                    </div>
                </div>
                <div class="payment pt-20">
                    <img src="<?php bloginfo('template_url'); ?>/assets/images/payment.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="site-footer__copyright">
        <div class="container">
            <div class="copyright pull-left">
                © 2018. All rights reserved.<a href="#" target="_blank">Enercos</a>
            </div>
        </div>
    </div>
</footer>
<!-- =====================================
    ==== End footer -->

<!-- back-to-top-->
<button class="scrollToTop">
    <div class="scrollTopArrow">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/backToTop.png" alt="">
        <!--<i class="fas fa-angle-up"></i>-->
    </div>
</button>
<!-- back-to-top -->


<!-- =====================================
    ====Start preloader -->
<!--<div id="preloader">-->
<!--    <div class="preloader">-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--        <span></span>-->
<!--    </div>-->
<!--</div>-->
<!-- =====================================
    ==== End preloader -->

<!-- =====================================
   ====Start all js here -->


<!-- =====================================
    ==== End all js herej -->


<?php wp_footer(); ?>
</body>
</html>

<script>
    jQuery(function ($) {
        $('#pagination-posts').on('change', function () {
            var countPage = $('#pagination-posts').val();
            var args = {};
            var query = window.location.search.substring(1);
            var parts = query.split('&');

            for ( var i = 0; i < parts.length; ++i ) {
                var pos = parts[i].indexOf('=');
                if (pos == -1) {
                    continue;
                }
                var name = parts[i].substring(0, pos);
                var value = parts[i].substring(pos + 1);
                args[name] = value;
            }
            args['ppp'] = countPage;
            window.location.href = '?' + $.param(args);
        });
    })
</script>



<!--	</div><!-- #content -->

<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'cream' ) ); ?><!--">-->
<!--				--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'cream' ), 'WordPress' );
//				?>
<!--			</a>-->
<!--			<span class="sep"> | </span>-->
<!--				--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'cream' ), 'cream', '<a href="http://underscores.me/">Underscores.me</a>' );
//				?>
<!--		</div><!-- .site-info -->
<!--	</footer><!-- #colophon -->
<!--</div><!-- #page -->


