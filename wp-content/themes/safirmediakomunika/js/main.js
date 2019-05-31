jQuery(document).ready(function($) { 
    
	if ($('#main-nav-bar .navigation-box .sub-menu').length) {
        var subMenu = $('#main-nav-bar .sub-menu');
        subMenu.parent('li').children('a').append(function() {
            return '<button class="sub-nav-toggler"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>';
        });
        var mainNavToggler = $('.header-navigation .menu-toggler');
        var subNavToggler = $('#main-nav-bar .sub-nav-toggler');
        mainNavToggler.on('click', function() {
            var Self = $(this);
            var menu = Self.data('target');
            console.log(menu);
            $(menu).slideToggle();
            $(menu).toggleClass('showen');
            return false;
        });
        subNavToggler.on('click', function() {
            var Self = $(this);
            Self.parent().parent().children('.sub-menu').slideToggle();
            return false;
        });
    }
	    $(window).on('scroll', function() {
        if ($('.stricky').length || $('.scroll-to-top').length) {
            // var headerScrollPos = $('.header').next().offset().top;
            var strickyScrollPos = 100;
            var stricky = $('.stricky');
            if ($(window).scrollTop() > strickyScrollPos) {
                stricky.removeClass('slideIn animated');
                stricky.addClass('stricky-fixed slideInDown animated');
                $('.scroll-to-top').fadeIn(500);
            } else if ($(this).scrollTop() <= strickyScrollPos) {
                stricky.removeClass('stricky-fixed slideInDown animated');
                stricky.addClass('slideIn animated');
                $('.scroll-to-top').fadeOut(500);
            }
        };
    });
    /* slider active */
    $('.slider-active').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        autoplayTimeout: 7000,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        item: 1,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    })
	/* ----------------------------------------------------------- */
	/*  Popup
	/* ----------------------------------------------------------- */

    if ($('.gallery-popup').length > 0) {
        $('.gallery-popup').magnificPopup({
            type: 'image',
            mainClass: 'mfp-with-zoom',
            zoom: {
                enabled: true, // By default it's false, so don't forget to enable it

                duration: 300, // duration of the effect, in milliseconds
                easing: 'ease-in-out', // CSS transition easing function

                opener: function (openerElement) {
                    return openerElement.is('img') ? openerElement : openerElement.find('img');
                }
            }
        });
    }

    /*======================== 
        featured post  
   ==========================*/
    if ($('#featured-slider').length > 0) {
        $('#featured-slider').owlCarousel({
            loop: true,
            items: 1,
            dots: false,
            nav: true,
            autoplayTimeout: 5000,
            autoplay: true,
            animateOut: 'slideOutLeft',
            autoplayHoverPause: true,
            mouseDrag: false,
            touchDrag:false,
            navText: ["<i class='ane-chevron-left'></i>", "<i class='ane-chevron-right'></i>"],
            responsiveClass: true
        });
    }
	   /*======================== 
        featured slider 2 
   ==========================*/
    if ($('#featured-slider-2').length > 0) {
        $('#featured-slider-2').owlCarousel({
            loop: true,
            items: 1,
            dots: true,
            nav: false,
			autoplay: true,
            responsiveClass: true,
            animateOut: 'slideOutLeft',

        });
    }
        /*======================== 
        most populer  
   ==========================*/
    if ($('.most-populers').length > 0) {
        $('.most-populers').owlCarousel({
            items: 3,
            dots: false,
            loop: true,
            nav: true,
            margin: 30,
            navText: ["<i class='ane-chevron-left'></i>", "<i class='ane-chevron-right'></i>"],
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                // breakpoint from 480 up
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 2,
                },
                // breakpoint from 768 up
                1200: {
                    items: 3,
                }
            }
        });
    }
	/*======================== 
        Gallery 
   ==========================*/
    if ($('#hot-topics-slider').length > 0) {
        $('#hot-topics-slider').owlCarousel({
            nav: false,
            items: 4,
            margin: 30,
            reponsiveClass: true,
            dots: true,
            responsive: {
                // breakpoint from 0 up
                0: {
                    items: 1,
                },
                // breakpoint from 480 up
                480: {
                    items: 2,
                },
                // breakpoint from 768 up
                768: {
                    items: 2,
                },
                // breakpoint from 768 up
                1200: {
                    items: 4,
                }
            }
        });
    }
      // scroll body to 0px on click
    $('#back-to-top').on('click', function () {
         $('#back-to-top').tooltip('hide');
         $('body,html').animate({
              scrollTop: 0
         }, 800);
         return false;
    });
    
    $('#back-to-top').tooltip('hide');
   /* jQuery MeanMenu */
    $('#mobile-menu-active').meanmenu({
        meanScreenWidth: "991",
        meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });
    
    $('.commrnt-toggle a').on('click', function(e) {
        e.preventDefault();
        $('.blog-comment-content-wrap').slideToggle(1000);
    });  
    
});