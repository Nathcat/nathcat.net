function draw_function(canvas, viewport, f, lineColour) {
    const ctx = canvas.getContext("2d");
    ctx.strokeStyle = lineColour;
    ctx.lineWidth = 2;

    ctx.beginPath();
    ctx.moveTo(0, f((canvas.height / 2) - (-(viewport.width / 2)) * (canvas.height / viewport.height)));
    for (let i = 0; i < canvas.width; i++) {
        let prop = i / canvas.width;
        let x = (viewport.width * prop) - (viewport.width / 2);
        let y = f(x);

        let j = (canvas.height / 2) - (y * (canvas.height / viewport.height));
        
        console.log(i, j);
        ctx.lineTo(i, j);
        ctx.stroke();
    }

    ctx.closePath();
}

function draw_axis(canvas, viewport) {
    const ctx = canvas.getContext("2d");


    ctx.strokeStyle = "#000000";
    ctx.lineWidth = 2;
    ctx.font = "1em Arial";
    ctx.beginPath();

    ctx.moveTo(canvas.width / 2, canvas.height / 2);
    ctx.lineTo(canvas.width, canvas.height / 2);
    ctx.stroke();

    ctx.moveTo(canvas.width / 2, canvas.height / 2);
    ctx.lineTo(0, canvas.width / 2);
    ctx.stroke();

    ctx.moveTo(canvas.width / 2, canvas.height / 2);
    ctx.lineTo(canvas.width / 2, 0);
    ctx.stroke();

    ctx.moveTo(canvas.width / 2, canvas.height / 2);
    ctx.lineTo(canvas.width / 2, canvas.height);
    ctx.stroke();

    ctx.closePath();

    ctx.fillText("-" + (viewport.width / 2).toString(), 0, canvas.height / 2);
    ctx.textAlign = "right";
    ctx.fillText((viewport.width / 2).toString(), canvas.width, canvas.height / 2);
    ctx.textAlign = "left";
    ctx.fillText((viewport.height / 2).toString(), canvas.width / 2, 15);
    ctx.textAlign = "right";
    ctx.fillText("-" + (viewport.height / 2).toString(), canvas.width / 2, canvas.height);
    
    ctx.strokeStyle = "#c1c1c1";
    ctx.lineWidth = 1;
    for (let i = 0; i < canvas.width; i += (canvas.width / viewport.width)) {
        if (i == (canvas.width / 2)) continue;
        
        ctx.beginPath();
        ctx.moveTo(i, 0);
        ctx.lineTo(i, canvas.height);
        ctx.stroke();
        ctx.closePath();
    }

    for (let i = 0; i < canvas.height; i += (canvas.height / viewport.height)) {
        if (i == (canvas.height / 2)) continue;
        
        ctx.beginPath();
        ctx.moveTo(0, i);
        ctx.lineTo(canvas.width, i);
        ctx.stroke();
        ctx.closePath();
    }
}