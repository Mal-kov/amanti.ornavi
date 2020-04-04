<?php
/**
 * cream functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cream
 */

include 'inc/CreamWalkerNavMenu.php';



if ( ! function_exists( 'cream_setup' ) ) :

    add_theme_support( 'woocommerce' );
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cream_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on cream, use a find and replace
		 * to change 'cream' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cream', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-header' => esc_html__( 'Primary-menu', 'cream' ),
			'menu-footer' => esc_html__( 'Footer-menu', 'cream' ),
			'menu-works' => esc_html__( 'Works-menu', 'cream' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cream_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cream_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cream_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'cream_content_width', 640 );
}
add_action( 'after_setup_theme', 'cream_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cream_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cream' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cream' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    /**
     * Сайдбар в header - миникарзина товаров
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Header_mini_cart', 'cream' ),
        'id'            => 'header_mini_cart',
        'description'   => esc_html__( 'Add widgets here.', 'cream' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    /**
     * Сайдбар в разделе категории - список категорий товаров
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar_categories', 'cream' ),
        'id'            => 'sidebar_categories',
        'description'   => esc_html__( 'Add widgets here.', 'cream' ),
        'before_widget' => '<section class="widget section-categories">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    /**
     * Сайдбар в разделе категории - облако тегов
     */
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar_Tags_Cloud', 'cream' ),
        'id'            => 'sidebar_tags_cloud',
        'description'   => esc_html__( 'Add widgets here.', 'cream' ),
        'before_widget' => '<section class="widget section-tags">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

}
add_action( 'widgets_init', 'cream_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cream_scripts() {
	wp_enqueue_style( 'cream-style', get_stylesheet_uri() );

//    <!-- Favicon --> <link rel="shortcut icon" type="image/x-icon" href="">
    wp_enqueue_style( 'cream-favicon', get_template_directory_uri() . '../assets/images/favicon.png' );
//    <!-- font-awesome CSS -->
    wp_enqueue_style( 'cream-font-awesome', get_template_directory_uri() . '../assets/css/font-awesome.css' );
//    wp_enqueue_style( 'cream-owl_main_style', get_template_directory_uri() . '../assets/css/owl.carousel.min.css' );
//
//    <!-- preloader CSS -->
    wp_enqueue_style( 'cream-preloader', get_template_directory_uri() . '../assets/css/preloader.css' );
//    <!-- slider-pro CSS -->
    wp_enqueue_style( 'cream-slider-pro', get_template_directory_uri() . '../assets/css/slider-pro.css' );
//    <!-- slick CSS -->
    wp_enqueue_style( 'cream-slick', get_template_directory_uri() . '../assets/css/slick.css' );//    <!-- slick CSS -->


    wp_enqueue_style( 'cream-baguetteBox_style', get_template_directory_uri() . '../assets/css/baguetteBox.min.css' );

//    <!-- main CSS -->
    wp_enqueue_style( 'cream-main', get_template_directory_uri() . '../assets/css/style.css' );
    if ( is_front_page() ){
        wp_enqueue_style( 'cream-bootstrap-style', get_template_directory_uri() . '../assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'cream-owl_main_style', get_template_directory_uri() . '../assets/css/owl.carousel.min.css' );//    <!-- slick CSS -->
        wp_enqueue_style( 'cream-owl_default_style', get_template_directory_uri() . '../assets/css/owl.theme.default.min.css' );

    }


//    <!-- main CSS anati -->
    wp_enqueue_style( 'cream-main-amanti', get_template_directory_uri() . '../assets/css/style-amanti.css' );
//    <!-- google font CSS -->
    wp_enqueue_style( 'cream-google-font',  'https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet' );

//    <!-- jquery js-->
    wp_enqueue_script( 'cream-jQuery', get_template_directory_uri() . '../assets/js/jquery.js', array(), '20191215', true );
//	wp_enqueue_script( 'jQuery');

//    <!-- bootstrap js-->
	wp_enqueue_script( 'cream-bootstrap_js', get_template_directory_uri() . '../assets/js/bootstrap.min.js', array(), '20191215', true );
//    <!-- slick js-->
	wp_enqueue_script( 'cream-slick-js', get_template_directory_uri() . '../assets/js/slick.min.js', array(), '20151215', true );
//    <!-- spritespin js-->
	wp_enqueue_script( 'cream-spritespin-js', get_template_directory_uri() . '../assets/js/jquery-ui.min.js', array(), '20151215', true );
//    <!-- sliderPro js-->
	wp_enqueue_script( 'cream-sliderPro-js', get_template_directory_uri() . '../assets/js/jquery.sliderPro.min.js', array(), '20151215', true );
//    <!-- waypoints js-->
	wp_enqueue_script( 'cream-waypoints-js', get_template_directory_uri() . '../assets/js/jquery.waypoints.js', array(), '20151215', true );
//    <!-- counterup js-->
	wp_enqueue_script( 'cream-counterup-js', get_template_directory_uri() . '../assets/js/jquery.counterup.min.js', array(), '20151215', true );
	wp_enqueue_script( 'cream-baguetteBox_js', get_template_directory_uri() . '../assets/js/baguetteBox.min.js', array(), '20151215', true );
	wp_enqueue_script( 'cream-owlCarousel_js', get_template_directory_uri() . '../assets/js/owl.carousel.min.js', array(), '20151215', true );
//    <!-- custom js-->
    wp_enqueue_script( 'cream-custom-js', get_template_directory_uri() . '../assets/js/custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'cream_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 *
 */
//if ( !is_shop() ){
//    remove_action('woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open');
//    add_action( 'woocommerce_before_shop_loop_item', 'amanti_woocommerce_template_loop_product_link_open', 10 );
//}
//
//function amanti_woocommerce_template_loop_product_link_open() {
//
//}

/**
 * Вывод изображения товара на странице категорий
 */
function woocommerce_template_loop_product_thumbnail() {

    if ( !is_shop() ) { ?>

        <div class="product-thumbnail">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <?php echo amanti_get_product_thumbnail();?>
<!--                <img class="product-featured-image" src="assets/images/product/product_4.jpg" alt="">-->
            </a>
        </div>


<!--        --><?php //echo '<div class="mask"><div class="info">Подробнее</div></div>';

    }
//    else {
//        echo woocommerce_get_product_thumbnail();
//        echo '</a><div class="mask"><a href="'. get_the_permalink() .'">Подробней</a></div>';
//    }
}

if ( ! function_exists( 'amanti_get_product_thumbnail' ) ) {

    function amanti_get_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0)
    {
        global $post;

        $image_size = apply_filters('single_product_archive_thumbnail_size', $size);


        if (has_post_thumbnail()) {
            $props = wc_get_product_attachment_props(get_post_thumbnail_id(), $post);
            return get_the_post_thumbnail($post->ID, $image_size, array(
                'class' => 'product-featured-image',
                'alt' => $props['alt'],
            ));
        } elseif (wc_placeholder_img_src()) {
            return wc_placeholder_img($image_size);

            //return $product ? $product->get_image( $image_size ) : '';
        }
    }
}

/**
 * Переопределение массива данных формирования Хлебных крошек
 */
add_filter('woocommerce_breadcrumb_defaults', 'amanti_change_breadcrumb_args');
function amanti_change_breadcrumb_args() {
    return array(
        'delimiter'   => '&nbsp;&#47;&nbsp;',
        'wrap_before' => '<div class="breadcrumb"><div class="container"><h1>' . get_the_title() . '</h1><ol class="item-breadcrumb">',
        'wrap_after'  => '</ol>',
        'before'      => '<li>',
        'after'       => '</li>',
        'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
    );
}


/**
 * Вывод заголовка товара на странице категорий
 */
function woocommerce_template_loop_product_title() {
    if ( !is_shop() ) {
        echo '<h4 class="product-name"><a href="' . get_the_permalink() .'">' . get_the_title() . '</a></h4>';
    }
}
/**
 * Вывод Quick view на странице категорий - на товаре
 */
function amanti_quick_view_product() {
    if ( !is_shop() ) {
        echo '<a href="'. get_the_permalink() . '" data-id="" class="btn product-quick-view btn-quickview" title="'. __( 'Quick view', 'cream' ) .'"><i class="fa fa-eye"></i></a>';
    }
}

/**
 *
 */
/**
 *  Особенности страницы - Карточка товара (отвязываем вызов рейтинга)
 */
add_action('get_header', 'product_page_one');

function product_page_one() {
    if ( is_product() ) {

        // Отвязываем функцию
        remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );

        // Отвязываем функцию отображения категории Апселов и сопутствующих товаров для переопределения в другом событии
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_upsell_display', 15 );
        remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );

        // Отвязываем функцию выводящую закрывающие тэги
        remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

        // Привязываем на это событие функции вывода Upsell  и сопутствующих товаров
        add_action( 'woocommerce_after_main_content', 'woocommerce_upsell_display', 15 );
        add_action( 'woocommerce_after_main_content', 'woocommerce_output_related_products', 20 );
    }
}




/**
 * Вывод рейтинга товара на странице категорий
 */
function amanti_woocommerce_template_loop_rating() {
    wc_get_template( 'loop/rating.php' );
}
/**
 * Вывод цены товара на странице категорий
 */
function amanti_woocommerce_template_loop_price() {
    wc_get_template( 'loop/price.php' );
}
/**
 *  изменение настроек для вывода пагинации
 */
add_filter('loop_shop_per_page', 'new_loop_shop_per_page');
function new_loop_shop_per_page( $cols ) {
    $cols = 9;
    $ppp = false;
    if ( isset( $_GET['ppp'] ) ) {
        $ppp = $_GET['ppp'];
    }
    if ( $ppp ) {
        return $ppp;
    }
    return $cols;
}

/**
 * @param $attachment_id
 *
 * @param bool $main_image
 * @return string
 */
function amanti_wc_get_gallery_image_html( $attachment_id, $main_image = false ) {
    $flexslider        = (bool) apply_filters( 'woocommerce_single_product_flexslider_enabled', get_theme_support( 'wc-product-gallery-slider' ) );
    $gallery_thumbnail = wc_get_image_size( 'gallery_thumbnail' );
    $thumbnail_size    = apply_filters( 'woocommerce_gallery_thumbnail_size', array( $gallery_thumbnail['width'], $gallery_thumbnail['height'] ) );
    $image_size        = apply_filters( 'woocommerce_gallery_image_size', $flexslider || $main_image ? 'woocommerce_single' : $thumbnail_size );
    $full_size         = apply_filters( 'woocommerce_gallery_full_size', apply_filters( 'woocommerce_product_thumbnails_large_size', 'full' ) );
    $thumbnail_src     = wp_get_attachment_image_src( $attachment_id, $thumbnail_size );
    $full_src          = wp_get_attachment_image_src( $attachment_id, $full_size );
    $alt_text          = trim( wp_strip_all_tags( get_post_meta( $attachment_id, '_wp_attachment_image_alt', true ) ) );
    $image             = wp_get_attachment_image(
        $attachment_id,
        $image_size,
        false,
        apply_filters(
            'woocommerce_gallery_image_html_attachment_image_params',
            array(
                'title'                   => _wp_specialchars( get_post_field( 'post_title', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
                'data-caption'            => _wp_specialchars( get_post_field( 'post_excerpt', $attachment_id ), ENT_QUOTES, 'UTF-8', true ),
                'data-src'                => esc_url( $full_src[0] ),
                'data-large_image'        => esc_url( $full_src[0] ),
                'data-large_image_width'  => esc_attr( $full_src[1] ),
                'data-large_image_height' => esc_attr( $full_src[2] ),
                'class'                   => esc_attr( $main_image ? 'product-featured-image product_selector_1' : 'product-featured-image' ),
//                'class'                   => esc_attr( $main_image ? 'wp-post-image' : 'product-featured-image' ),
            ),
            $attachment_id,
            $image_size,
            $main_image
        )
    );

    if ( $main_image ) {
        //    return '<a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a>';
        return $image ;
    } else {
//      <li>
//		     <img class="product-featured-image product_selector_1" src="assets/images/product_single/product_single_4.jpg" alt="">
//		</li>
//        return '<li ><a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></li>';
        return  $image ;
//        return '<div data-thumb="' . esc_url( $thumbnail_src[0] ) . '" data-thumb-alt="' . esc_attr( $alt_text ) . '" class="woocommerce-product-gallery__image"><a href="' . esc_url( $full_src[0] ) . '">' . $image . '</a></div>';
    }

}
/**
 * Переопределяем набор атрибутов для вывода раздела сопутствующие товары при отображении карточки товара
 *
 */
add_filter( 'woocommerce_output_related_products_args', 'change_attr_related' );
function change_attr_related($arg) {
    $args = array(
        'posts_per_page' => 20,
        'columns'        => 4,
        'orderby'        => 'rand', // @codingStandardsIgnoreLine.
    );
    return $args;
}