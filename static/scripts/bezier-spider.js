function randomInt(max) {
    return Math.floor(Math.random() * max);
}

function euler_distance(a, b) {
    let d = b.subtract(a);
    return Math.sqrt(Math.pow(d.x, 2), Math.pow(d.y, 2));
}

function draw_points(points) {
    for (let i = 0; i < points.length; i++) {
        canvas.getContext("2d").fillStyle = "black";
        draw_circle_filled(canvas.getContext("2d"), 12.5, points[i], 36);
    }
}

function new_points() {
    let points = [];
    for (let i = 0; i < 10; i++) {
        points.push(
            new Point(
                randomInt($(".bezier-container").width()),
                randomInt($(".bezier-container").height())
            )
        );
    }

    return points;
}

// Create the randomly placed points
var points = new_points();
draw_points(points);

var closest_points = [new Point(0, 0), new Point(0, 0), new Point(0, 0), new Point(0, 0), new Point(0, 0)];
var c_points = [null, null, null, null, null];

window.addEventListener("mousemove", (event) => {
    // Calculate the position of the spider centre, based on the position of the bezier container and the mouse position
    let x = event.clientX - $(".bezier-container").position().left - ($(".spider-centre").width() / 2);
    let y = event.clientY - $(".bezier-container").position().top - ($(".spider-centre").width() / 2);

    // Bound the spider centre to the bezier container
    if (y > $(".bezier-container").height() - $(".spider-centre").height()) y = $(".bezier-container").height() - $(".spider-centre").height();
    if (x > $(".bezier-container").width() - $(".spider-centre").width()) x = $(".bezier-container").width() - $(".spider-centre").width();

    if (y < 0) y = 0;
    if (x < 0) x = 0;

    // Set the position of the spider centre
    $(".spider-centre")
        .css("top", y)
        .css("left", x);

    
    // Find the closest 5 points
    var spider = new Point(x, y);
    canvas.getContext("2d").clearRect(0, 0, canvas.width, canvas.height);
    draw_points(points);

    var temp_points = [...points];

    for (let p = 0; p < closest_points.length; p++) {
        let closest_point = {point: temp_points[0], distance: euler_distance(spider, temp_points[0])};
        let largest_i = 0;

        for (let i = 1; i < temp_points.length; i++) {
            let d = euler_distance(spider, temp_points[i]);
            if (d < closest_point.distance) {
                closest_point = {
                    point: temp_points[i],
                    distance: d
                };

                largest_i = i;
            }
        }

        if (!closest_points[p].equals(closest_point.point)) { closest_points[p] = closest_point.point; c_points[p] = null; }
        if (c_points[p] == null) c_points[p] = points[randomInt(points.length - 1)];

        temp_points.splice(largest_i, 1);

        bezier_curve([spider.add(new Point($(".spider-centre").width() / 2, $(".spider-centre").height() / 2)), c_points[p], closest_points[p]], 128, canvas);
    }
});
