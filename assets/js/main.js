WebFont.load({
  google: {
    families: ['Raleway:400,500,600', 'Lato:700,900']
  }
});

if($('#slider-shop-fullwidth').length > 0) {
  $('#slider-shop-fullwidth').revolution({
    disableProgressBar: 'on',
    delay: 4000,
    navigation: {
      onHoverStop: "off",
      arrows: {enable: true},
      touch: {
        touchenabled: "on",
        swipe_threshold: 75,
        swipe_min_touches: 1,
        swipe_direction: "horizontal",
        drag_block_vertical: false
      },
    },
  });
}

$('.product-images-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.product-images-nav'

});
$('.product-images-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.product-images-for',
  dots: true,
  centerMode: true,
  focusOnSelect: true,
  arrows: false,
  responsive: [
  {
    breakpoint: 1024,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: true
    }
  },
  {
    breakpoint: 600,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
    }
  },
  {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,  
    }
  }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });


$('.single-item').slick({
  arrows: false,
  dots: true,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
  infinite: true,
  pauseOnHover: false
});

$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open')
  })
})

$(function () {
  'use strict'

  $('.nav-link__mobile').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
  })
})

$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.nav-link').addClass('fixed-color');
    $('body').css('overflow', 'hidden ');
  } else {
    $(this).removeClass("is-active")
    $('body').css('overflow', 'scroll');
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $('.nav-link').removeClass('fixed-color');

    }
  }
});