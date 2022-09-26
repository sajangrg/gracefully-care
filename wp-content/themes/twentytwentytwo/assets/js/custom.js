// Nav Fixed
var nav = jQuery('.wc-primary-nav');
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 95) {
        nav.addClass("fixed-nav");
    } else {
        nav.removeClass("fixed-nav");
    }
});

$(document).ready(function(){
  $(".stories-carousel").owlCarousel({
    responsiveClass:true,
    radio: '16x9',
    responsive:{
      0:{
          items:1,
          nav:true
      },
      600:{
          items:1,
          nav:true
      },
      1000:{
          items:1,
          nav:true
      }
    }
  });

  $('.venobox').venobox()
});