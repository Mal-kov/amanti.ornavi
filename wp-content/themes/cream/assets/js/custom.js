/*
-Preloader
-Slider-pro
-Back-to-top
-Counter
-add class headingbox
-Search
-FilterSlider
-Slick-slider
-color_product
*/


$(document).ready(function() {

    "use strict";

      /*-----------------------------
          Preloader
      -------------------------------*/
      $(window).on('load', function() {
        $("#preloader").delay(200).fadeOut();
      });

     /*-----------------------------
          Slider-pro
      -------------------------------*/
      if ($('.my-slider').length > 0) {
          var sliderWidth = $("#my-slider-1").data("slider-width");
          var sliderHeigth = $("#my-slider-1").data("slider-height");

          $( '#my-slider-1' ).sliderPro({
              width:  sliderWidth,
              height: sliderHeigth,
              fade: true,
              arrows: true,
              buttons: false,
              waitForLayers: false,
              thumbnailPointer: false,
              touchSwipe: false,
              autoplay: true,
              autoScaleLayers: true
          });
      }

      /*-----------------------------
          Back-to-top
      -------------------------------*/
      // $(window).on('scroll', function (e) {
      //     e.preventDefault();
      //   if ($(this).scrollTop() > 100) $('#back-to-top').fadeIn();
      //    else $('#back-to-top').fadeOut();
      //   });
      //   $('#back-to-top').on('click', function(e) {
      //     e.preventDefault();
      //     $('body,html').animate({scrollTop: 0}, 'slow');
      // });


    $(window).scroll(function(){
        if ($(this).scrollTop() > 300) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });

    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });













      /*-----------------------------
          Counter
      -------------------------------*/
      $('.counter').counterUp({
          delay: 10,
          time: 1000
      });
      
      /*-----------------------------
          Waypoint transition
      -------------------------------*/
      $(".features-heading").waypoint(function(){
        $(this).addClass("heading-box");
      }, { offset: '100%'});


      /*-----------------------------
          Search
      -------------------------------*/
      function search() {
        var searchOpen = $('.ps-search-btn'),
            searchClose = $('.ps-search__close'),
            searchbox = $('.ps-search');
        searchOpen.on('click', function(e) {
            e.preventDefault();
            searchbox.addClass('open');
        });
        searchClose.on('click', function(e) {
            e.preventDefault();
            searchbox.removeClass('open');
        });
      }

      /*-----------------------------
          FilterSlider
      -------------------------------*/
      function filterSlider() {
        var el = $('.ps-slider');
        var min = el.siblings().find('.ps-slider__min');
        var max = el.siblings().find('.ps-slider__max');
        var defaultMinValue = el.data('default-min');
        var defaultMaxValue = el.data('default-max');
        var maxValue = el.data('max');
        var step = el.data('step');
        if (el.length > 0) {
            el.slider({
                min: 0,
                max: maxValue,
                step: step,
                range: true,
                values: [defaultMinValue, defaultMaxValue],
                slide: function(event, ui) {
                    var values = ui.values;
                    min.text('$' + values[0]);
                    max.text('$' + values[1]);
                }
            });
            var values = el.slider("option", "values");
            console.log(values[1]);
            min.text('$' + values[0]);
            max.text('$' + values[1]);
        }
        else {
            // return false;
        }
    }
    $(function() {
       search();
       filterSlider();
    });  







    /*-----------------------------
        color product_1
    -------------------------------*/
    $( ".product_1 .color_selector > .swatch-color" ).on('click', function(e) {
      e.preventDefault();
     var color = $(this).data('value');
      if(color == 'blue'){
        $( ".product_1 .swatch-blue").addClass( "selected" );
         $ ('.product_1 .product-featured-image').attr('src','assets/images/product/product_12.jpg');
      }
      else {
        $( ".product_1 .swatch-blue").removeClass( "selected" );
      }
     
     if(color == 'orange'){
        $( ".product_1 .swatch-orange").addClass( "selected" );
        $('.product_1 .product-featured-image').attr('src','assets/images/product/product_2.jpg');
      }
      else {
        $( ".product_1 .swatch-orange").removeClass( "selected" );
      }

     if(color == 'purple'){
      $( ".product_1 .swatch-purple").addClass( "selected" );
      $('.product_1 .product-featured-image').attr('src','assets/images/product/product_9.jpg');
     }
     else {
        $( ".product_1 .swatch-purple").removeClass( "selected" );
      }
     
     if(color == 'red'){
      $( ".product_1 .swatch-red").addClass( "selected" );
      $('.product_1 .product-featured-image').attr('src','assets/images/product/product_5.jpg');
     }
     else {
        $( ".product_1 .swatch-red").removeClass( "selected" );
      }

   });

    /*-----------------------------
        color product_2
    -------------------------------*/
    $( ".product_2 .color_selector > .swatch-color" ).on('click', function(e){
      e.preventDefault();
     var color = $(this).data('value');
      if(color == 'blue'){
        $( ".product_2 .swatch-blue").addClass( "selected" );
        $('.product_2 .product-featured-image').attr('src','assets/images/product/product_8.jpg');
      }
      else {
        $( ".product_2 .swatch-blue").removeClass( "selected" );
      }
     
     if(color == 'green'){
        $( ".product_2 .swatch-green").addClass( "selected" );
        $('.product_2 .product-featured-image').attr('src','assets/images/product/product_4.jpg');
     }
      else {
        $( ".product_2 .swatch-green").removeClass( "selected" );
      }
     if(color == 'purple'){
        $( ".product_2 .swatch-purple").addClass( "selected" );
        $('.product_2 .product-featured-image').attr('src','assets/images/product/product_7.jpg');
     }
      else {
        $( ".product_2 .swatch-purple").removeClass( "selected" );
      }
      if(color == 'red'){
        $( ".product_2 .swatch-red").addClass( "selected" );
        $('.product_2 .product-featured-image').attr('src','assets/images/product/product_5.jpg');
     }
      else {
        $( ".product_2 .swatch-red").removeClass( "selected" );
      }
    });

   


    // color_selector product-single
    $( ".product-info .color_selector > .swatch-color" ).on('click', function(e) {
      e.preventDefault();
     var color = $(this).data('value');
     if(color == 'blue'){
        $( ".product-info .swatch-blue").addClass( "selected" );
      $('.product_selector_1').attr('src','assets/images/product_single/product_single_6.jpg');
     }
      else {
        $( ".product-info .swatch-blue").removeClass( "selected" );
      }
     
     if(color == 'green'){
       $( ".product-info .swatch-green").addClass( "selected" );
      $('.product_selector_1').attr('src','assets/images/product_single/product_single_2.jpg');
     }
     else {
        $( ".product-info .swatch-green").removeClass( "selected" );
      }
     if(color == 'purple'){
      $( ".product-info .swatch-purple").addClass( "selected" );
      $('.product_selector_1').attr('src','assets/images/product_single/product_single_3.jpg');
     }
     else {
        $( ".product-info .swatch-purple").removeClass( "selected" );
      }
      if(color == 'orange'){
      $( ".product-info .swatch-orange").addClass( "selected" );
      $('.product_selector_1').attr('src','assets/images/product_single/product_single_5.jpg');
     }
     else {
        $( ".product-info .swatch-orange").removeClass( "selected" );
      }
     
     if(color == 'red'){
      $( ".product-info .swatch-red").addClass( "selected" );
      $('.product_selector_1').attr('src','assets/images/product_single/product_single_4.jpg');
     }
     else {
        $( ".product-info .swatch-red").removeClass( "selected" );
      }
     console.log(color);
   });

    // size_selector  product-single
    $( ".product-info #size_selector > .swatch-label" ).on('click', function(e){
      e.preventDefault();
      var size = $(this).data('value');
      if(size == 'l'){
        $( ".product-info .swatch-l").addClass( "selected" );
        $('.product_selector_1').attr('src','assets/images/product_single/product_single_2.jpg');
      }
      else {
        $( ".product-info .swatch-l").removeClass( "selected" );
      }

      if(size == 'm'){
        $( ".product-info .swatch-m").addClass( "selected" );
        $('.product_selector_1').attr('src','assets/images/product_single/product_single_3.jpg');
      }
      else {
        $( ".product-info .swatch-m").removeClass( "selected" );
      }

      if(size == 's'){
        $( ".product-info .swatch-s").addClass( "selected" );
        $('.product_selector_1').attr('src','assets/images/product_single/product_single_4.jpg');
      }
      else {
        $( ".product-info .swatch-s").removeClass( "selected" );
      }
      if(size == 'xl'){
        $( ".product-info .swatch-xl").addClass( "selected" );
        $('product_selector_1').attr('src','assets/images/product_single/product_single_5.jpg');
      }
      else {
        $( ".product-info .swatch-xl").removeClass( "selected" );
      }
       if(size == 'xxl'){
        $( ".product-info .swatch-xxl").addClass( "selected" );
        $('product_selector_1').attr('src','assets/images/product_single/product_single_6.jpg');
      }
      else {
        $( ".product-info .swatch-xxl").removeClass( "selected" );
      }
       console.log(size);
   });
   
   
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






    baguetteBox.run('.gallery', {
    // animation: 'fadeIn',
        noScrollbars: true
    });


});




/*-------------------------------------------------------
 кнопка добавить в корзину - карточка товара
 -------------------------------*/
// jQuery('#purchaseNow').on('click', function (e) {
//     e.preventDefault();
//     jQuery('form.add-to-cart').submit();
// });


/*-------------------------------------------------------
 Секция видео - блоков
 -------------------------------*/

// jQuery is required to run this code
$( document ).ready(function() {
    scaleVideoContainer();

    initBannerVideoSize('.video-container .poster img');
    initBannerVideoSize('.video-container .filter');
    initBannerVideoSize('.video-container video');

    $(window).on('resize', function() {
        scaleVideoContainer();
        scaleBannerVideoSize('.video-container .poster img');
        scaleBannerVideoSize('.video-container .filter');
        scaleBannerVideoSize('.video-container video');
    });
});

function scaleVideoContainer() {
    var height = $(window).height() + 5;
    var unitHeight = parseInt(height) + 'px';
    $('.homepage-hero-module').css('height',unitHeight);
}

function initBannerVideoSize(element){
    $(element).each(function(){
        $(this).data('height', $(this).height());
        $(this).data('width', $(this).width());
    });

    scaleBannerVideoSize(element);
}

function scaleBannerVideoSize(element) {

    var windowWidth = $(window).width(),
        windowHeight = $(window).height() + 5,
        videoWidth,
        videoHeight;

    // console.log(windowHeight);

    $(element).each(function(){
        var videoAspectRatio = $(this).data('height')/$(this).data('width');

        $(this).width(windowWidth);

        if(windowWidth < 1000){
            videoHeight = windowHeight;
            videoWidth = videoHeight / videoAspectRatio;
            $(this).css({'margin-top' : 0, 'margin-left' : -(videoWidth - windowWidth) / 2 + 'px'});

            $(this).width(videoWidth).height(videoHeight);
        }

        $('.homepage-hero-module .video-container video').addClass('fadeIn animated');

    });

}

    $('.owlBooksCarousel').owlCarousel({
        // animateOut: 'slideOutDown',
        // animateIn: 'flipInX',
        autoplay: true,
        dots: false,
        loop: true,
        items: 1,
        margin: 10,
        // merge:true,
        responsiveClass: true,
        nav: false,
        smartSpeed: 950
    });


    // $('.owlFeedbackCarousel').owlCarousel({
    //     animateOut: 'slideOutDown',
    //     animateIn: 'flipInX',
    //     autoplay: true,
    //     dots: false,
    //     loop: true,
    //     items: 1,
    //     margin: 10,
    //     merge:true,
    //     responsiveClass: true,
    //     nav: false,
    //     smartSpeed: 1100
    //
    // });
    //
    // $('.owlProductsFeedbackCarousel').owlCarousel({
    //     animateOut: 'slideOutDown',
    //     animateIn: 'flipInY',
    //     autoplay: true,
    //     dots: false,
    //     loop: true,
    //     items: 1,
    //     margin: 10,
    //     merge:true,
    //     responsiveClass: true,
    //     nav: false,
    //     smartSpeed: 1100
    //
    // });




