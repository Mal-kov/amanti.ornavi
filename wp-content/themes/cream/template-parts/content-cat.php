<?php
defined( 'ABSPATH' ) || exit;

//global $product;

?>
<!-- Вывод одиночной записи о товаре на главной странице-->
<div class="gallery text-center row started-section-wrapper">

    <?php
    $productQuery = new WP_Query( [
        'product_cat' => $args,
        'post_type' => 'product',
        'posts_per_page'=> 6
    ] );

    if ( $productQuery->have_posts() ) {
        while ( $productQuery->have_posts() ) {
            $productQuery->the_post();

            wc_get_template('template-parts/content-item.php');
        }
    } else {
        // Постов не найдено
    }
    // Возвращаем оригинальные данные поста. Сбрасываем $post.
    wp_reset_postdata();
    ?>
</div>