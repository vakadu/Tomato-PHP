$(document).ready(function() {
    "use strict";

    $(".bg-image").css("background", function () {
        var a = "url(" + $(this).data("image-src") + ") no-repeat center center";
        return a
    }), $(".bg-image").css("background-size", "cover");

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

    new WOW().init();
});
