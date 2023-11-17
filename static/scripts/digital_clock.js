/**
 * Must include circle.js first!
 */

/**
 * Draws the alarm icon at the specified position
 * @param {*} ctx Context to draw on
 * @param {*} position The position of the icon
 */
function draw_alarm_icon(ctx, position) {
    ctx.strokeStyle = "red";
    ctx.fillStyle = "red";
    ctx.lineWidth = 2;

    draw_circle_hollow(ctx, 10, position, 360);
    draw_circle_filled(ctx, 2, position, 360);

    ctx.beginPath();
    ctx.moveTo(position.x, position.y);
    ctx.lineTo(position.x, position.y - 10);
    ctx.stroke();
    ctx.moveTo(position.x, position.y);
    ctx.lineTo(position.x + 7, position.y);
    ctx.stroke();
    ctx.closePath();
}

// This array contains the start and end coordinates for each drawing segment in a single digit on the clock.
// There are 7 segments in total, and so there are seven objects in this array, one for each segment.
// In order to make the clock resizable, I will use a system of "normalised" coordinates. This is not true
// normalisation since the coordnates will not have a magnitude of 1 in some cases, but the idea is that it makes
// the clock much easier to scale when the values are defined in this way.
const SEGMENT_DRAWINFO = [
    {  // Top
        "x1": 0.05,
        "y1": 0.05,
        "x2": 0.95,
        "y2": 0.05,
    },
    {  // Top right
        "x1": 0.95,
        "y1": 0.05,
        "x2": 0.95,
        "y2": 0.5,
    },
    {  // Bottom right
        "x1": 0.95,
        "y1": 0.5,
        "x2": 0.95,
        "y2": 0.95,
    },
    {  // Bottom
        "x1": 0.05,
        "y1": 0.96,
        "x2": 0.96,
        "y2": 0.96,
    },
    {  // Bottom left
        "x1": 0.05,
        "y1": 0.95,
        "x2": 0.05,
        "y2": 0.5,
    },
    {  // Top left
        "x1": 0.05,
        "y1": 0.5,
        "x2": 0.05,
        "y2": 0.05,
    },
    {  // Middle
        "x1": 0.05,
        "y1": 0.5,
        "x2": 0.95,
        "y2": 0.5,
    },
];

const INTEGER_TO_SEGMENTS = [
    [true, true, true, true, true, true, false],      // 0
    [false, true, true, false, false, false, false],  // 1
    [true, true, false, true, true, false, true],     // 2
    [true, true, true, true, false, false, true],     // 3
    [false, true, true, false, false, true, true],    // 4
    [true, false, true, true, false, true, true],     // 5
    [true, false, true, true, true, true, true],      // 6
    [true, true, true, false, false, false, false],   // 7
    [true, true, true, true, true, true, true],       // 8
    [true, true, true, false, false, true, true]      // 9
];

const ON_COLOUR = "red";
const OFF_COLOUR = "#111111";

// Get the canvas' and their contexts
const digital_back_canvas = document.getElementsByClassName("digital-back-clock-canvas");
const digital_canvas = document.getElementsByClassName("digital-clock-canvas");
var colon_counter = 0;
var colons = true;
var alarms = [];

function digital_clock_resize_callback(event) {
    for (var i = 0; i < digital_back_canvas.length; i++) {
        const parentStyle = getComputedStyle(digital_canvas[i].parentElement);
    
        // Set the width and height of the canvas' based on their parent elements
        digital_canvas[i].width = parseInt(parentStyle.width.slice(0, -2));
        digital_back_canvas[i].width = parseInt(parentStyle.width.slice(0, -2));
        digital_canvas[i].height = parseInt(parentStyle.height.slice(0, -2));
        digital_back_canvas[i].height = parseInt(parentStyle.height.slice(0, -2));
    
        const width = digital_back_canvas[i].width;
        const height = digital_back_canvas[i].height;
    
        const digital_back_ctx = digital_back_canvas[i].getContext("2d");
        
        // Draw on the back canvas
        digital_back_ctx.fillStyle = "black";
        digital_back_ctx.clearRect(0, 0, width, height);
        digital_back_ctx.fillRect(0, 0, width, height);
    }
}

digital_clock_resize_callback(null);

for (var i = 0; i < digital_back_canvas.length; i++) {
    alarms.push({
        "set": false,
        "time": null
    });
}

window.addEventListener("resize", digital_clock_resize_callback);

/**
 * Draw a character matrix onto the clock
 * @param {*} M boolean array specifying which segments should be turned on (the character matrix)
 */
function draw_matrix(M, colons_on, canvas, draw_alarm) {
    const width = canvas.width;
    const height = canvas.height;
    const segment_width = Math.round(width * 0.16);
    const digit_offset =  Math.round(width * 0.24);
    const colon_seg_width = Math.round(width * 0.11);
    const segment_height = height;
    const ctx = canvas.getContext("2d");
    ctx.lineWidth = 5;

    //console.log(canvas, width, height, segment_width, segment_height, digit_offset, colon_seg_width);
    
    for (var i = 0; i < 28; i++) {
        if (M[i]) {
            ctx.strokeStyle = ON_COLOUR;
        }
        else {
            ctx.strokeStyle = OFF_COLOUR;
        }

        // ... or instead we do some cool math :))
        const segment_info = Object.assign({}, SEGMENT_DRAWINFO[i % 7]);  // Get the unscaled drawing coordinates for the segment
        segment_info.x1 *= segment_width;
        segment_info.x2 *= segment_width;
        segment_info.y1 *= segment_height;
        segment_info.y2 *= segment_height;


        ctx.beginPath();
        ctx.moveTo(segment_info.x1 + (Math.floor(i / 7) * digit_offset) + (Math.floor(i / 14) * colon_seg_width), segment_info.y1);
        ctx.lineTo(segment_info.x2 + (Math.floor(i / 7) * digit_offset) + (Math.floor(i / 14) * colon_seg_width), segment_info.y2);
        ctx.stroke();
        ctx.closePath();
    }

    if (colons_on) {
        ctx.strokeStyle = ON_COLOUR;
    }
    else {
        ctx.strokeStyle = OFF_COLOUR;
    }

    ctx.beginPath();
    ctx.moveTo(Math.round(width / 2), Math.round(height / 5));
    ctx.lineTo(Math.round(width / 2), Math.round(height / 5) * 2);
    ctx.stroke();
    ctx.moveTo(Math.round(width / 2), Math.round(height / 5) * 3);
    ctx.lineTo(Math.round(width / 2), Math.round(height / 5) * 4);
    ctx.stroke();
    ctx.closePath();

    const alarm_x = Math.round(width / 2);
    const alarm_y = Math.round(height * 0.08);
    if (draw_alarm) draw_alarm_icon(ctx, {"x": Math.round(width / 2), "y": Math.round(height * 0.08)});
    else { ctx.fillStyle = "black"; ctx.fillRect(alarm_x - 15, alarm_y - 15, 30, 30); }
}

function show_time() {
    colon_counter++;
    if (colon_counter == 2) {
        colons = !colons;
        colon_counter = 0;
    }

    const time = new Date();
    var m = [
    
    ];
    
    var hrsStr = time.getHours().toString();
    var minStr = time.getMinutes().toString();

    if (hrsStr.length == 1) {
        hrsStr = "0" + hrsStr;
    }

    if (minStr.length == 1) {
        minStr = "0" + minStr;
    }
    
    for (var c = 0; c < hrsStr.length; c++) {
        m = m.concat(INTEGER_TO_SEGMENTS[parseInt(hrsStr.charAt(c))]);
    }
    
    for (var c = 0; c < minStr.length; c++) {
        m = m.concat(INTEGER_TO_SEGMENTS[parseInt(minStr.charAt(c))]);
    }
    
    for (var i = 0; i < digital_back_canvas.length; i++) {
        draw_matrix(m, colons, digital_back_canvas[i], alarms[i].set);

        if (alarms[i].set) {
            if (alarms[i].time.getHours() == time.getHours() && alarms[i].time.getMinutes() == time.getMinutes()) {
                alert("Alarm at " + time.toString() + "!");
                remove_alarm(i);
            }
        }
    }

    setTimeout(show_time, 500);
}

function set_alarm(index) {
    var hour = document.getElementById("clock-" + index + "-alarm-hour").value;
    var minute = document.getElementById("clock-" + index + "-alarm-minute").value;
    var date = new Date();
    date.setHours(hour);
    date.setMinutes(minute);

    alarms[index] = {
        "set": true,
        "time": date
    };
}

function remove_alarm(index) {
    alarms[index].set = false;
}

show_time();