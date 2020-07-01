/**
 * Created by Oleg on 30.05.2020.
 */
$(document).ready(function() {

    /*-------------------------------------------------------
     slick slider
     -------------------------------*/

    function slickHeight() {
        var winWidth = $(window).width();
        if (winWidth > 767) {
            var sliderHeight = $('.slick-slider').height();
            $('#slick-pager .slick-pager').css('height', sliderHeight - 60);
        }
    }


    $( window ).resize(function() {
        slickHeight();
    });


    $(".owl-carousel").each( function(){

        var slidesToShow    =     $(this).data('items');


        if ($(this).data('large')) {
            var desktop = $(this).data('large');
        } else {
            var desktop = slidesToShow;
        }
        if ($(this).data('medium')) {
            var medium = $(this).data('medium');
        } else {
            var medium = slidesToShow;
        }
        if ($(this).data('smallmedium')) {
            var smallmedium = $(this).data('smallmedium');
        } else {
            var smallmedium = slidesToShow;
        }
        if ($(this).data('extrasmall')) {
            var extrasmall = $(this).data('extrasmall');
        } else {
            var extrasmall = 2;
        }
        if ($(this).data('verysmall')) {
            var verysmall = $(this).data('verysmall');
        } else {
            var verysmall = 2;
        }


        var _config = [];

        _config.dots             = $(this).data( 'pagination' );
        _config.arrows           = $(this).data( 'nav' );
        _config.infinite         = true;
        _config.speed            = 500;
        _config.autoplay         = $(this).data('autoplay');
        _config.cssEase          = 'linear';
        _config.slidesToShow     = slidesToShow;
        _config.slidesToScroll   = 1;
        _config.mobileFirst      = true;
        _config.vertical         = false;


        _config.responsive       = [
            {
                breakpoint: 1500,
                settings: {
                    slidesToShow: slidesToShow,
                    slidesToScroll: slidesToShow,
                }
            },
            {
                breakpoint: 1280,
                settings: {
                    slidesToShow: desktop,
                    slidesToScroll: desktop,
                }
            },
            {
                breakpoint: 980,
                settings: {
                    slidesToShow: medium,
                    slidesToScroll: medium,
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow:smallmedium,
                    slidesToScroll: smallmedium,
                    infinite: false,
                }
            },
            {
                breakpoint: 479,
                settings: {
                    slidesToShow:extrasmall,
                    slidesToScroll: extrasmall,
                    infinite: false,
                    unslick: true,
                },
            },
            {
                breakpoint: 0,
                settings: {
                    slidesToShow:verysmall,
                    slidesToScroll: verysmall,
                    infinite: false,
                },
            }
        ];

        $(this).slick( _config );
    });

    $('.featuredPostSlider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: false,
        adaptiveHeight: true,
        asNavFor: '.slick-pager'
    });
    $('.slick-pager').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: $('.pagerNavigation .bottom'),
        prevArrow: $('.pagerNavigation .top'),
        asNavFor: '.featuredPostSlider',
        focusOnSelect: true,
        vertical: true,
        responsive: [{
            breakpoint: 767,
            settings: {
                vertical: false
            }
        }]
    });

    slickHeight();



})