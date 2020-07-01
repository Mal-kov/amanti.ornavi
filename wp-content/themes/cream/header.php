<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cream
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- =====================================
    ==== Start header -->
<!-- header-desktop -->
<header class="header">
    <div class="topbar pt-30 pb-30">
        <div class="container d-flex justify-content-between align-items-center">
            <div class="top-bar site-header -icon">

                <!-- acount -->
<!--                <div class="site-header__account">-->
<!--                    <a href="../account.html" class="account-btn">-->
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/icon_account.png" alt="">-->
<!--                    </a>-->
<!--                </div>-->
                <!-- search -->
                <div class="site-header__search">
                    <div class="ps-search-btn">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </div>
                    <div class="ps-search">
                        <div class="ps-search__content">
                            <a class="ps-search__close" href="#"><span></span></a>
                            <h3 class="search_title">Enter your keyword</h3>
                            <form method="get" class="searchform" action="#">
                                <div class="wiget-search input-group">
                                    <input name="s" maxlength="40" class="form-control input-search" type="text" size="20" placeholder="Searching...">

                                    <span class="input-group-addon input-large btn-search">
										 	<span class="fa fa-search"></span>
										 	<input type="submit" class="fa" value="">
										 </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>
            <div class="otf-flex-item"></div>

            <div class="navbar-header">
                <!-- Logo -->
                <div class="navbar-brand">
                    <a class="logo" href="<?php echo home_url('/'); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logo_350.png" alt="">
                    </a>
                </div>
                <!-- /Logo -->
            </div>

            <div class="otf-flex-item"></div>
            <div class="site-header -icon">



                <!-- cart 123-->

<!--                --><?php //dynamic_sidebar( 'header_mini_cart' ); ?>

                <div class="site-header__cart item-dropdown">
                    <a href="/cart" class="site-header__cart-toggle">
                        <span class="cartcount"><?php echo WC()->cart->cart_contents_count; ?></span>
                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                        <span class="cartcost"><span class="money" data-currency-usd=""><?php echo WC()->cart->get_cart_total(); ?></span></span>
                    </a>
                    <div class="widget_shopping_cart_content content-dropdown"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- header-main -->
    <div class="header-main pb-10 pt-10">
        <div class="container">

            <?php wp_nav_menu( array(
                'theme_location'  => 'menu-header',
                'container'       => 'nav',
                'container_class' => 'navbar',
                'container_id'    => 'nav',
                'menu_class'      => 'main-nav nav navbar-nav d-f',
                'walker'          => new CreamWalkerNavMenu()
            ) );
            ?>

        </div>
    </div>
    <!-- /header-main -->
</header>
<!-- /header-desktop -->
<!-- header-mobile -->
<div class="header-mobile">
    <div class="header-mobile-top">
        <div class="top-bar">
            <div class="header-language item-dropdown">
                <a href="#" class="top-bar__item">English
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="content-dropdown">
                    <li class="active"><a href="#">English</a></li>
                    <li><a href="#">French</a></li>
                    <li><a href="#">German</a></li>
                </ul>
            </div>
            <div class="header-currency item-dropdown">
                <a href="#" class="top-bar__item">USD
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="content-dropdown">
                    <li><a href="#"><span class="symbol">€</span>EUR</a></li>
                    <li class="active"><a href="#"><span class="symbol">$</span>USD</a></li>
                    <li><a href="#"><span class="symbol">£</span>GBP</a></li>
                </ul>
            </div>
        </div>
        <div class="site-header -icon">
            <!-- search -->
            <div class="site-header__search">
                <div class="ps-search-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </div>
                <div class="ps-search">
                    <div class="ps-search__content">
                        <a class="ps-search__close" href="#"><span></span></a>
                        <h3 class="search_title">Enter your keyword</h3>
                        <form method="get" class="searchform" action="#">
                            <div class="wiget-search input-group">
                                <input name="s" maxlength="40" class="form-control input-search" type="text" size="20" placeholder="Searching...">

                                <span class="input-group-addon input-large btn-search">
									 	<span class="fa fa-search"></span>
									 	<input type="submit" class="fa" value="">
									 </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--end search -->
        </div>
    </div>

<!--    <nav class="navbar">-->
<!--        <div class="navbar-header">-->
<!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">-->
<!--                <span class="sr-only">Toggle navigation</span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--                <span class="icon-bar"></span>-->
<!--            </button>-->
<!--            <!-- logo -->
<!--            <div class="navbar-brand">-->
<!--                <a class="logo" href="index.html"><img src="--><?php //bloginfo('template_url'); ?><!--/assets/images/logo.png" alt=""> </a>-->
<!--            </div>-->
<!--            <!-- logo -->
<!--        </div>-->
<!---->
<!--        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">-->
<!--            <ul class="nav navbar-nav">-->
<!--                <li class="active dropdown">-->
<!--                    <a href="index.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Home <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="./v2/index.html">Home 2</a></li>-->
<!--                        <li><a href="./v3/index.html">Home 3</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="../product_grid.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product <span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="../product_grid.html">Product grid</a></li>-->
<!--                        <li><a href="../product_list.html">Product list</a></li>-->
<!--                        <li><a href="../product_sidebar.html">Product sidebar</a></li>-->
<!--                        <li><a href="../product_single.html">Product single</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="#l" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Page<span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="../faq.html">FAQ</a></li>-->
<!--                        <li><a href="../404.html">Page 404</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li class="dropdown">-->
<!--                    <a href="../blog.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog<span class="caret"></span></a>-->
<!--                    <ul class="dropdown-menu">-->
<!--                        <li><a href="../blog.html">Blog Grid</a></li>-->
<!--                        <li><a href="../blog_list.html">Blog List</a></li>-->
<!--                        <li><a href="../blog_single.html">Single Blog</a></li>-->
<!--                    </ul>-->
<!--                </li>-->
<!--                <li><a href="../contact.html">Contact</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </nav>-->
</div>
<div class="footer-mobile-bar">
    <ul class="columns-2">
        <li class="my-account">
            <a class="my-accrount-footer" href="../account.html">
                <i class="fa fa-user-o" aria-hidden="true"></i>
            </a>
        </li>
        <li class="cart">
            <a class="footer-cart-contents" href="../cart.html" title="View your shopping cart">
                <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                <span class="count">1</span>
            </a>
        </li>
    </ul>
</div>
<!-- End header ====
    ======================================= -->


















<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#content">--><?php //esc_html_e( 'Skip to content', 'cream' ); ?><!--</a>-->
<!---->
<!--	<header id="masthead" class="site-header">-->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$cream_description = get_bloginfo( 'description', 'display' );
//			if ( $cream_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $cream_description; /* WPCS: xss ok. */ ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div><!-- .site-branding -->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'cream' ); ?><!--</button>-->
<!--			--><?php
//			wp_nav_menu( array(
//				'theme_location' => 'menu-1',
//				'menu_id'        => 'primary-menu',
//			) );
//			?>
<!--		</nav><!-- #site-navigation -->
<!--	</header><!-- #masthead -->
<!---->
<!--	<div id="content" class="site-content">-->
