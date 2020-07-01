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

<footer>
    <div class="ornavi-footer">
        <div class="container">
            <div class="col-md-4 col-sm-6 col-xs-12 footer-block pb-30">
                <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_left_light.png" alt="">
<!--                <p class="address pt-30">Office: 972 Sylvan Street South Angelina, NL S0B2V9<br/>-->
<!--                    Phone: (633) 497-1888 / (062) 109-9222<br/>-->
<!--                    Email: example.com-->
<!--                </p>-->
                <ul class="social pt-30">
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
            <div class="col-md-4 col-sm-6 col-xs-12 footer-block pb-30">
<!--                <h3 class="widget-title">Разделы магазина</h3>-->

                <ul>
                    <li><a href="../about.html">About Us</a></li>
                    <li><a href="../contact.html">Contact Us</a></li>
                    <li><a href="../blog.html">News</a></li>
                    <li><a href="../account.html">My Account</a></li>
                    <li><a href="../faq.html">FAQ</a></li>
                    <li><a href="../account.html">Register</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footer-block pb-30">
<!--                <h3 class="widget-title">CONNECT WITH US</h3>-->
                <div class="features skin1">
                    <div class="features_list">
                        <div class="features-images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_mail.png" alt="">
                        </div>
                        <div class="features-description">
                            <h4>Пишите</h4>
                            <a href="emailto:<?php echo get_option('mainEmail');?>"><?php echo get_option('mainEmail');?></a>

                        </div>
                    </div>
                    <div class="features_list">
                        <div class="features-images">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/icon_phone.png" alt="">
                        </div>
                        <div class="features-description">
                            <h4>Звоните</h4>
                            <a href="tel:<?php echo get_option('mainPhone');?>"><?php echo get_option('mainPhone');?></a>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

    <div class="site-footer__copyright">
        <div class="container">
            <div class="copyright_item">
                © 2011 - <?php echo date('Y'); ?> AMANTI ORNAVI
            </div>
            <div class="copyright_item">
                <a href="#">Политика конфидециальности</a>
            </div>
        </div>
    </div>


</footer>





<!--<footer class="site-footer site-footer-3 clearfix">-->
<!--    <div class="site-footer__main section-bg" style="background-image:url(../assets/images/bg_footer.jpg)">-->
<!--        <div class="container">-->
<!--            -->
<!--            -->
<!---->
<!--            -->
<!--            -->
<!--        </div>-->
<!--    </div>-->
<!--   -->
<!--</footer>-->
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




