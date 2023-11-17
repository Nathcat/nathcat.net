var grabbed_point = null;
var points = [
    new Point(200, 0),
    new Point(0, 0),
    new Point(0, 500),
    new Point(250, 500),
    new Point(500, 500),
    new Point(500, 0),
    new Point(300, 0)
];

points.forEach((p, i) => {
    $("<div id='point-" + i + "' onclick='grab_point(\"#point-" + i + "\")' class='draggable-point' style='top: " + p.y + "px; left: " + p.x + "px;'></div>").appendTo(".bezier-container");
});

bezier_curve(points, 128, canvas);

function update_points() {
    $(".bezier-container .draggable-point").each((_, elem) => {
        var i = parseInt($(elem).attr("id").split("-")[1]);
        points[i].x = $(elem).position().left;
        points[i].y = $(elem).position().top;
    });
}

function grab_point(id) {
    if (grabbed_point == null) {
        grabbed_point = id;
        $(id).css("pointer-events", "none");
    }
}

window.addEventListener("mousemove", (event) => {
    if (grabbed_point == null) return;

    $(grabbed_point).css("top", event.clientY - $(".bezier-container").position().top).css("left", event.clientX - $(".bezier-container").position().left);
    update_points();
    canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);
    bezier_curve(points, 128, canvas);
});

window.addEventListener("mousedown", (event) => {
    if (grabbed_point == null) return;

    if (event.buttons == 1) {
        $(grabbed_point).css("pointer-events", "auto");
        grabbed_point = null;
    }
});
