var slideshow_images = {
    0: {
        url: "static\\images\\florian-olivo-4hbJ-eymZ1o-unsplash.jpg",
        meta: "Photo by Florian Olivo on Unsplash"
    },
    1: {
        url: "static\\images\\joshua-hoehne-3044jR8D8Wo-unsplash.jpg",
        meta: "Photo by Joshua Hoehne on Unsplash"
    },
    2: {
        url: "static\\images\\me.jpg",
        meta: ""
    },
    3: {
        url: "static\\images\\20230923_115058.jpg",
        meta: ""
    }
}

var slideshow_current_index = 0;
const slideshow_length = 4;

function slideshow_onNextClicked() {
    slideshow_current_index = (slideshow_current_index + 1) % slideshow_length;
    
    $(".slideshow #img-A").animate({
        "left": "105vw"
    },
    {
        start: function() {
            $(".slideshow #img-B").css("left", "-105vw");
            $(".slideshow #img-B").attr("src", slideshow_images[slideshow_current_index].url);
            $(".slideshow #img-B").animate({
                "left": "0"
            }, {
                start: function() {},
                done: function() {
                    $(".slideshow #img-A").attr("src", slideshow_images[slideshow_current_index].url);
                    $(".slideshow #img-B").css("left", "-105vw");
                }
            });
        },
        done: function() {
            $(".slideshow #img-A").css("left", "0");
            $(".slideshow #img-A").attr("title", slideshow_images[slideshow_current_index].meta)
        }
    });
}

function slideshow_onPrevClicked() {
    slideshow_current_index--;
    if (slideshow_current_index < 0) slideshow_current_index = slideshow_length - 1;

    $(".slideshow #img-A").animate({
        "left": "-105vw"
    },
    {
        start: function() {
            $(".slideshow #img-B").css("left", "105vw");
            $(".slideshow #img-B").attr("src", slideshow_images[slideshow_current_index].url);
            $(".slideshow #img-B").animate({
                "left": "0"
            }, {
                start: function() {},
                done: function() {
                    $(".slideshow #img-A").attr("src", slideshow_images[slideshow_current_index].url);
                    $(".slideshow #img-B").css("left", "-105vw");
                }
            });
        },
        done: function() {
            $(".slideshow #img-A").css("left", "0");
            $(".slideshow #img-A").attr("title", slideshow_images[slideshow_current_index].meta)
        }
    });
}