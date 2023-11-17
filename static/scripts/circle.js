/**
 * Find the coordinates of a point around a circle
 * @param {} angle The angle around the circle of the desired point
 * @param {*} radius The radius of the circle
 * @param {*} centre The coordinates of the centre of the circle
 * @returns The coordinates of the desired point
 */
 function circle_coords(angle, radius, centre) {
    return {
        "x": (Math.cos(angle) * radius) + centre.x,
        "y": (Math.sin(angle) * radius) + centre.y
    };
}

/**
 * Draw a filled circle onto the given canvas
 * @param {*} ctx Canvas context
 * @param {*} radius The radius of the circle
 * @param {*} centre The centre of the circle
 * @param {*} vertex_count The number of vertices to draw on the circle
 */
function draw_circle_filled(ctx, radius, centre, vertex_count) {
    const angle_inc = (Math.PI * 2) / vertex_count;
    var angle = angle_inc;

    ctx.beginPath();
    var start = circle_coords(0, radius, centre);

    ctx.moveTo(start.x, start.y);

    while (angle < (Math.PI * 2)) {
        var next = circle_coords(angle, radius, centre);
        ctx.lineTo(next.x, next.y);
        angle += angle_inc;
    }

    ctx.fill();
    ctx.closePath();
}

/**
 * Draw a filled circle onto the given canvas
 * @param {*} ctx Canvas context
 * @param {*} radius The radius of the circle
 * @param {*} centre The centre of the circle
 * @param {*} vertex_count The number of vertices to draw on the circle
 */
 function draw_circle_hollow(ctx, radius, centre, vertex_count) {
    const angle_inc = (Math.PI * 2) / vertex_count;
    var angle = angle_inc;

    ctx.beginPath();
    var start = circle_coords(0, radius, centre);

    ctx.moveTo(start.x, start.y);

    while (angle < (Math.PI * 2)) {
        var next = circle_coords(angle, radius, centre);
        ctx.lineTo(next.x, next.y);
        ctx.stroke();
        angle += angle_inc;
    }

    ctx.closePath();
}