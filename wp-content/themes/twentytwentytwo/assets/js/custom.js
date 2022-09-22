// Nav Fixed
var nav = jQuery('.wc-primary-nav');
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 95) {
        nav.addClass("fixed-nav");
    } else {
        nav.removeClass("fixed-nav");
    }
});