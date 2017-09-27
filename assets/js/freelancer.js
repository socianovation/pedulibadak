// Freelancer Theme JavaScript

(function(jQuery) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    jQuery('.page-scroll a').bind('click', function(event) {
        var jQueryanchor = jQuery(this);
        jQuery('html, body').stop().animate({
            scrollTop: (jQuery(jQueryanchor.attr('href')).offset().top - 50)
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });

    jQuery(".nav a").on("click", function(){
       jQuery(".nav").find(".active").removeClass("active");
       jQuery(this).parent().addClass("active");
    });

    // Highlight the top nav as scrolling occurss
    jQuery('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 51
    });

    // Closes the Responsive Menu on Menu Item Click
    jQuery('.navbar-collapse ul li a').click(function(){ 
            jQuery('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    jQuery('#mainNav').affix({
        offset: {
            top: 100
        }
    })

    // Floating label headings for the contact form
    jQuery(function() {
        jQuery("body").on("input propertychange", ".floating-label-form-group", function(e) {
            jQuery(this).toggleClass("floating-label-form-group-with-value", !!jQuery(e.target).val());
        }).on("focus", ".floating-label-form-group", function() {
            jQuery(this).addClass("floating-label-form-group-with-focus");
        }).on("blur", ".floating-label-form-group", function() {
            jQuery(this).removeClass("floating-label-form-group-with-focus");
        });
    });

})(jQuery); // End of use strict
