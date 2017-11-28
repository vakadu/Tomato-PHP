$(document).ready(function() {
    "use strict";

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

    /////// Isotope
    $("nav.primary ul a").click(function() {
        var selector = $(this).attr("data-filter");
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: false,
            }
        });
        return false;
    });
    var $optionSets = $("nav.primary ul"),
        $optionLinks = $optionSets.find("a");
    $optionLinks.click(function() {
        //alert( $optionLinks);
        var $this = $(this);
        // don"t proceed if already selected
        if ($this.hasClass("selected")) {
            return false;
        }
        var $optionSet = $this.parents("nav.primary ul");
        $optionSet.find(".selected").removeClass("selected");
        $this.addClass("selected");
    });
});
