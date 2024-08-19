function update() {
    let element = $(".header-collapsible");
    element.click(toggle_collapsed);
    if (window.innerWidth < 1000) {
        element.find(".collapsed").css("display", "block");
        element.find(".content").css("display", "none");
    }
    else {
        element.find(".collapsed").css("display", "none");
        element.find(".content").css("display", "grid");
    }
}

function toggle_collapsed() {
    let element = $(".header-collapsible");
    if (element.find(".content").css("display") == "none") {
        element.find(".content").css("display", "grid");
    }
    else {
        element.find(".content").css("display", "none");
    }
}

window.onresize = update;
window.onload = update;