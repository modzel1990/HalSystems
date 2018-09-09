$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[767,1],
        pagination:false,
        // transitionStyle:"fade",
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        nav:true,
        navText:["",""],
        autoplay:true,
        autoplayHoverPause:true,
        loop:true
    });
});