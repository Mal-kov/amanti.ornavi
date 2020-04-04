<?php
defined( 'ABSPATH' ) || exit;
?>


<div class="col-md-4  price-item started-item">
    <div class="content">
        <div class="content-image">
        <?php the_post_thumbnail(); ?>
            <div class="work-caption">
                <a href="<?php the_permalink(); ?>" data-lightbox="ourWork">
                <i class="fa fa-eye"></i>
                </a>
            </div>
        </div>
        <div class="content-text text-left">
            <h4><?php the_title(); ?></h4>
            <p><?php the_excerpt(); ?></p>
        </div>
    </div>
</div>