$(window).on('load', function() {
    "use strict";

    var fadeIn = {
        p: { //p for properties
            opacity: 1
        },
        o: { //o for options
            duration: 750,
        }
    };

    //Home section
    var homeInSequence = [{
        e: $('.home__logo'),
        p: fadeIn.p,
        o: fadeIn.o
    }, {
        e: $('.home__text'),
        p: fadeIn.p,
        o: fadeIn.o
    }, {
        e: $('.form__search'),
        p: fadeIn.p,
        o: fadeIn.o
    }];

    $(".home__logo").css("opacity", "0");
    $(".home__text").css("opacity", "0");
    $(".form__search").css("opacity", "0");

    setTimeout(function() {
        $.Velocity.RunSequence(homeInSequence); //home page loads in
    }, 750);

});
