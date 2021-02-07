(function($) {
    "use strict"; // Start of use strict

    // jQuery for page scrolling feature - requires jQuery Easing plugin
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($anchor.attr('href')).offset().top - 50)
        }, 100, 'swing');
        event.preventDefault();
    });

    // Closes the Responsive Menu on Menu Item Click
    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    // Offset for Main Navigation
    $('#mainNav').affix({
        offset: {
            top: 100
        }
     
    });    


})(jQuery);
// lazyYT
$( document ).ready(function() {
    new WOW().init();
       $('.modal').on('hidden.bs.modal', function(e)
    { 
        $(this).removeData();
    }) ;
            
                // Reviews slider
            $(".reviews .owl-carousel").owlCarousel({
                loop: true,
                margin: 35,
                nav: true,
                center: true,
                autoplay: true,
                navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    750: {
                        items: 2
                    },
                    1000: {
                        items: 3
                    }
                }
            });
            
            });



// form
