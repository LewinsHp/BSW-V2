(function ($) {
    "use strict";

    // Sticky Menu
    $(window).scroll(function () {
        var height = $(".top-header").innerHeight();
        if ($("header").offset().top > 10) {
            $(".top-header").addClass("hide");
            $(".navigation").css("margin-top", "-" + height + "px");
        } else {
            $(".top-header").removeClass("hide");
            $(".navigation").css("margin-top", "-" + 0 + "px");
        }
    });


    // venobox popup
    $(document).ready(function () {
        $(".venobox").venobox();
    });

    // Slide Berita
    $(".owl-slide-3").owlCarousel({
        center: false,
        items: 1,
        loop: true,
        stagePadding: 10,
        margin: 10,
        autoplay: true,
        smartSpeed: 500,
        nav: true,
        dots: true,
        navText: [
            '<span class="fas fa-angle-left">',
            '<span class="fas fa-angle-right">',
        ],
        responsive: {
            600: {
                items: 2,
            },
            1000: {
                items: 2,
            },
            1200: {
                items: 3,
            },
        },
    });

    $('.carousel-testimony').owlCarousel({
        autoplay: true,
        center: true,
        loop: true,
        items: 1,
        margin: 30,
        stagePadding: 0,
        nav: false,
        navText: ['<span class="fas fa-angle-left">', '<span class="fas fa-angle-right">'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    //Hero Slider
    $(".hero-slider").slick({
        autoplay: true,
        autoplaySpeed: 7500,
        pauseOnFocus: false,
        pauseOnHover: false,
        infinite: true,
        arrows: true,
        fade: true,
        prevArrow: "<button type='button' class='prevArrow'><i class='fas fa-angle-left'></i></button>",
        nextArrow: "<button type='button' class='nextArrow'><i class='fas fa-angle-right'></i></button>",
        dots: true,
    });
    $(".hero-slider").slickAnimation();

    // Background-images
    $("[data-background]").each(function () {
        $(this).css({
            "background-image": "url(" + $(this).data("background") + ")",
        });
    });

    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: false,
            mirror: false
        })
    });


})(jQuery);
