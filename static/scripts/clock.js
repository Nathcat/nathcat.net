/**
 * Must include circle.js before this script
 */

// Setup the canvas'
const canvas = document.getElementsByClassName("clock-canvas");
const back_canvas = document.getElementsByClassName("back-clock-canvas");

function clock_resize_callback(event) {
    for (var i = 0; i < back_canvas.length; i++) {
        const parentStyle = getComputedStyle(canvas[i].parentElement);
    
        // Set the width and height of the canvas' based on their parent elements
        canvas[i].width = parseInt(parentStyle.width.slice(0, -2));
        back_canvas[i].width = parseInt(parentStyle.width.slice(0, -2));
        canvas[i].height = parseInt(parentStyle.height.slice(0, -2));
        back_canvas[i].height = parseInt(parentStyle.height.slice(0, -2));
    
        const back_ctx = back_canvas[i].getContext("2d");
        const width = back_canvas[i].width;
        const height = back_canvas[i].height;
    
        // Draw the clock background
        back_ctx.clearRect(0, 0, width, height);
        back_ctx.fillStyle = "blue";
        back_ctx.beginPath();
        back_ctx.moveTo(width / 2, 0);
        var angle = 0;
        var angleIncrement = Math.PI / 180;
        const radius = width / 2;
        const centre = {"x": width / 2, "y": height / 2};
        while (angle <= (2 * Math.PI)) {
            angle += angleIncrement;
            const coord = circle_coords(angle, radius, centre);
            back_ctx.lineTo(coord.x, coord.y);
        }
        back_ctx.fill();
        back_ctx.closePath();
    
        // Draw the hour markings
        angle = 0;
        angleIncrement = (2 * Math.PI) / 12;
    
        back_ctx.strokeStyle = "white";
        back_ctx.lineWidth = Math.round(radius * 0.04);
    
        while (angle <= (2 * Math.PI)) {
            const start = circle_coords(angle, Math.round(radius * 0.6), centre);
            const end = circle_coords(angle, Math.round(radius * 0.96), centre);
            back_ctx.beginPath();
            back_ctx.moveTo(start.x, start.y);
            back_ctx.lineTo(end.x, end.y);
            back_ctx.stroke();
            back_ctx.closePath();
            angle += angleIncrement;
        }
    }
}

window.addEventListener("resize", clock_resize_callback, true);

clock_resize_callback(null);

function clock() {
    // Get the current time
    const date = new Date();
    const seconds = date.getSeconds();
    const minutes = date.getMinutes() + (seconds / 60);
    const hours = (date.getHours() % 12) + (minutes / 60);

    for (var i = 0; i < canvas.length; i++) {
        const ctx = canvas[i].getContext("2d");
        const width = canvas[i].width;
        const height = canvas[i].height;
        const radius = width / 2;
        const centre = {"x": width / 2, "y": height / 2};

        // Determine the position of the hands
        const hourHandCoord = circle_coords(Math.PI * (hours / 6) - (Math.PI / 2), Math.round(radius * 0.6), centre);
        const minutesHandCoord = circle_coords(Math.PI * (minutes / 30) - (Math.PI / 2), Math.round(radius * 0.8), centre);
        const secondsHandCoord = circle_coords(Math.PI * (seconds / 30) - (Math.PI / 2), Math.round(radius * 0.8), centre);


        // Clear the canvas
        ctx.clearRect(0, 0, width, height);

        // Draw the hands onto the clock
        ctx.lineWidth = Math.round(radius * 0.04);
        ctx.beginPath()
        ctx.moveTo(centre.x, centre.y);
        ctx.lineTo(hourHandCoord.x, hourHandCoord.y);
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();

        ctx.beginPath()
        ctx.moveTo(centre.x, centre.y);
        ctx.lineTo(minutesHandCoord.x, minutesHandCoord.y);
        ctx.strokeStyle = "black";
        ctx.stroke();
        ctx.closePath();

        ctx.lineWidth = Math.round(radius * 0.02);
        ctx.beginPath()
        ctx.moveTo(centre.x, centre.y);
        ctx.lineTo(secondsHandCoord.x, secondsHandCoord.y);
        ctx.strokeStyle = "red";
        ctx.stroke();
        ctx.closePath();

        // Draw the centre circle
        ctx.fillStyle = "black";
        ctx.beginPath();
        ctx.moveTo(centre.x, Math.round(centre.y * 0.92));
        angle = 0;
        angleIncrement = Math.PI / 180;
        while (angle <= (2 * Math.PI)) {
            angle += angleIncrement;
            const coord = circle_coords(angle, Math.round(radius * 0.04), centre);
            ctx.lineTo(coord.x, coord.y);
        }
        ctx.fill();
        ctx.closePath();
    }

    setTimeout(clock, 1000);
}

clock();