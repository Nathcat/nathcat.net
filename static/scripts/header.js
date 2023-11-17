$("#portfolio-dropdown").on({
    mouseenter: function() {
        $("#portfolio-dropdown-content").css("display", "flex");
        $("#portfolio-dropdown-content").animate({
            "opacity": "1"
        },
        {
            start: function() {},
            done: function() {}
        });
    },
    mouseleave: function() {
        $("#portfolio-dropdown-content").animate({
            "opacity": "0"
        },
        {
            start: function() {},
            done: function() { $("#portfolio-dropdown-content").css("display", "none"); }
        });
    }
});
