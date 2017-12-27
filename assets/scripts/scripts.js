$(document).ready(function() {
    "use strict";

    /* ================================================
     Background Image
     ================================================ */

    $(".bg-image").css("background", function () {
        var a = "url(" + $(this).data("image-src") + ") no-repeat center center";
        return a
    }), $(".bg-image").css("background-size", "cover");

    /* ================================================
     Headrom
     ================================================ */

    // grab an element
    var myElement = document.querySelector('#header');
    // construct an instance of Headroom, passing the element
    var headroom = new Headroom(myElement, {
        // vertical offset in px before element is first unpinned
        offset: 80, // scroll tolerance in px before state changes
        tolerance: 40, // if you need other CSS classes, to apply these options.
        classes: {
            initial: "animated",
            pinned: "fadeInDown",
            unpinned: "fadeOutUp"
        }
    });
    // initialise
    headroom.init();

    /* ================================================
     Wow Animation
     ================================================ */

    var scrollAnim = $('body').data('scroll-animation');

    if (scrollAnim) {
        //Wowjs
        new WOW().init();
    }

    /* ================================================
     Contact Form Validation
     ================================================ */

    if ($("#contact-form").length){
        $("#contact-form").validate({
            rules: {
                name: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            }
        });
    }

    /* ================================================
     Button Ripple Effect
     ================================================ */
    var $btnRipple = $('.btn--ripple'),
        $btnRippleInk, btnRippleH, btnRippleX, btnRippleY;

    $btnRipple.on('mouseenter', function (e) {
        var $t = $(this);

        if( $t.find(".btn--ripple-ink").length === 0) {
            $t.prepend("<span class='btn--ripple-ink'></span>");
        }

        $btnRippleInk = $t.find(".btn--ripple-ink");
        $btnRippleInk.removeClass("btn--ripple-animate");

        if( !$btnRippleInk.height() && !$btnRippleInk.width() ) {
            btnRippleH = Math.max($t.outerWidth(), $t.outerHeight());
            $btnRippleInk.css({height: btnRippleH, width: btnRippleH});
        }

        btnRippleX = e.pageX - $t.offset().left - $btnRippleInk.width() / 2;
        btnRippleY = e.pageY - $t.offset().top - $btnRippleInk.height() / 2;

        $btnRippleInk.css({top: btnRippleY + 'px', left: btnRippleX + 'px'}).addClass("btn--ripple-animate");
    });
});

$(window).on('load', function() {
    preloader();
});

/* ================================================
 Preloader
 ================================================ */

function preloader() {
    // if ($('.preloader').length){
    //     // $('.preloader').delay(200).fadeOut(500);
    //     $('.preloader');
    // }
    var $preloader = $('.preloader');
    $preloader.delay(200).fadeOut(500);
}
