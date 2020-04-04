<?php
    if ( ! defined( 'ABSPATH' ) ) {
        exit; // Exit if accessed directly
    }


//if ( ! is_active_sidebar( 'sidebar-1' ) ) {
//	return;
//}
?>

<aside class="sidebar product-filter">
    <!-- Search -->
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
    <!-- /Search -->

    <!-- Categories -->
    <?php dynamic_sidebar( 'sidebar_categories' ); ?>
<!--    <section class="widget section-categories">-->
<!--        <h3 class="widget-title">Categories</h3>-->
<!--        <div class="widget-content">-->
<!--            <ul class="list-categories list-widget">-->
<!--                <li class="list-widget__item">-->
<!--                    <a class="list-widget__link active" href="#">All Products</a>-->
<!--                </li>-->
<!--                <li class="list-widget__item">-->
<!--                    <a class="list-widget__link" href="#">Climbing</a>-->
<!--                </li>-->
<!--                <li class="list-widget__item">-->
<!--                    <a class="list-widget__link" href="#">Camping and Hiking</a>-->
<!--                </li>-->
<!--                <li class="list-widget__item">-->
<!--                    <a class="list-widget__link" href="#">Snowsports</a>-->
<!--                </li>-->
<!--                <li class="list-widget__item">-->
<!--                    <a class="list-widget__link" href="#">Travel</a>-->
<!--                </li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </section>-->
    <!-- /Categories -->

    <!-- tag -->



    <?php dynamic_sidebar( 'sidebar_tags_cloud' ); ?>


<!--    <section class="widget section-tags">-->
<!--        <h3 class="widget-title">tags</h3>-->
<!--        <div class="widget-content">-->
<!--            <div class="tagcloud">-->
<!---->
<!--                <a href="" class="tag-cloud-link">Angmar</a>-->
<!--                <a href="" class="tag-cloud-link">Single</a>-->
<!--                <a href="" class="tag-cloud-link">Products</a>-->
<!--                <a href="" class="tag-cloud-link">Apple</a>-->
<!--                <a href="" class="tag-cloud-link">Fashion</a>-->
<!--                <a href="" class="tag-cloud-link">Timescape</a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->


    <!-- /tag -->


    <!-- Brand -->
<!--    <section class="widget section-brand">-->
<!--        <h3 class="widget-title">by Brand</h3>-->
<!--        <div class="widget-content">-->
<!--            <ul class="list-checked">-->
<!--                <li><a href="#">Alchemy Equipment</a></li>-->
<!--                <li><a href="#">Arc'teryx</a></li>-->
<!--                <li class="current"><a href="#">Black Diamond</a></li>-->
<!--                <li><a href="#">Canada Goose</a></li>-->
<!--                <li class="current"><a href="#">Craft</a></li>-->
<!--                <li><a href="#">Mountain Hardwear</a></li>-->
<!--                <li><a href="#">The North Face</a></li>-->
<!--                <li><a href="#">Arc'teryx</a></li>-->
<!--                <li><a href="#">The North Face</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </section>-->
    <!-- /Brand -->

    <!-- Price -->
<!--    <section class="widget section-price widget_filter">-->
<!--        <h3 class="widget-title">Price range</h3>-->
<!--        <div class="widget-content">-->
<!--            <div class="ps-slider" data-default-min="0" data-default-max="500" data-max="1000" data-step="100" data-unit="$"></div>-->
<!--            <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min"></span>-<span class="ps-slider__value ps-slider__max"></span></p>-->
<!--        </div>-->
<!--    </section>-->
    <!--/Price -->

    <!-- Size -->
<!--    <section class="widget section-size">-->
<!--        <h3 class="widget-title">refine by Size</h3>-->
<!--        <div class="widget-content">-->
<!--            <ul class="list-checked list-two">-->
<!--                <li><a href="#">XS</a></li>-->
<!--                <li class="current"><a href="#">XL</a></li>-->
<!--                <li class="current"><a href="#">S</a></li>-->
<!--                <li><a href="#">2XL</a></li>-->
<!--                <li><a href="#">M</a></li>-->
<!--                <li><a href="#">3XL</a></li>-->
<!--                <li><a href="#">L</a></li>-->
<!--                <li><a href="#">2XL</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </section>-->
    <!-- /Size -->

    <!-- Color -->
<!--    <section class="widget section-color">-->
<!--        <h3 class="widget-title">by Color</h3>-->
<!--        <div class="widget-content">-->
<!--            <ul class="list-checked list-two">-->
<!--                <li><a href="#">Black</a></li>-->
<!--                <li class="current"><a href="#">Pink</a></li>-->
<!--                <li class="current"><a href="#">Blue</a></li>-->
<!--                <li><a href="#">Purple</a></li>-->
<!--                <li><a href="#">Brown</a></li>-->
<!--                <li><a href="#">Red</a></li>-->
<!--                <li><a href="#">Green</a></li>-->
<!--                <li><a href="#">Yellow</a></li>-->
<!--                <li><a href="#">Grey</a></li>-->
<!--                <li><a href="#">White</a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--    </section>-->
    <!--/Color -->
</aside>


