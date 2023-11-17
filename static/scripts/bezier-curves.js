class Point {
    constructor(x, y) {
        this.x = x;
        this.y = y;
    }

    add(a) {
        return new Point(this.x + a.x, this.y + a.y);
    }

    subtract(a) {
        return new Point(this.x - a.x, this.y - a.y);
    }

    multiply(a) {
        return new Point(this.x * a, this.y * a);
    }

    equals(a) {
        return (this.x == a.x) && (this.y == a.y);
    }
}

function factorial(n) {
    if (n == 0) {
        return 1;
    }

    return n * factorial(n-1);
}

function nCr(n, r) {
    return factorial(n) / (factorial(r) * factorial(n-r));
}

function B(t, P) {
    var interpolated_points = [];

    for (var i = 0; i < P.length - 1; i++) {
        var v = P[i].add(P[i+1].subtract(P[i]).multiply(t));

        interpolated_points.push(v);
    }

    if (interpolated_points.length == 1) {
        return interpolated_points[0];
    }
    else {
        return B(t, interpolated_points);
    }
}

function bezier_curve(points, steps, canvas) {
    const ctx = canvas.getContext("2d");
    ctx.lineWidth = 5;
    ctx.strokeStyle = "black";
    ctx.beginPath();
    ctx.moveTo(points[0].x, points[0].y);

    for (var t = 0; t <= 1; t += (1 / steps)) {
        var v = B(t, points);
        ctx.lineTo(v.x, v.y);
        ctx.stroke();
    }

    ctx.closePath();
}


const canvas = document.getElementById("curve-canvas");
const style = getComputedStyle(canvas);
canvas.width = parseInt(style.width.slice(0, -2));
canvas.height = parseInt(style.height.slice(0, -2));
