<!DOCTYPE html>
<html>
    <head>
        <title>JavaScript Clock</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../static/styles/common.css">
        <link rel="stylesheet" href="../static/styles/clock.css">
        <script type="text/javascript"
            src="https://www.maths.nottingham.ac.uk/plp/pmadw/LaTeXMathML.js">
        </script>
        <script src="../static/scripts/circle.js"></script>
    </head>

    <body>
        <?php include("../header.php"); ?>
            
        <div class="container-fluid">
            <div class="row" style="padding-top: 20px;">
                <div class="col-md-6">
                    <div class="row align-items-center- justify-content-center">
                        <div class="clock-container" style="width: 25vw; height: 25vw;">
                            <canvas class="back-clock-canvas"></canvas>
                            <canvas class="clock-canvas"></canvas>
                        </div>
                    </div>
                </div>

		        <div class="col-md-6">
		            <h2>JavaScript Clock</h2>
                    <p>
                        This is pretty cool right? It uses the HTML canvas element along with some JavaScript to process the current time and draw the clock hands.
                    </p>
                    <p>
                        Technically it is two canvases, one which the blue background and hour markings are drawn onto, and another which the hands are drawn onto.
                        When the script is loaded, it draws the background, and then starts a loop which continuously retrieves the current date, and then obtains
                        the time, and calculates the positions of the hands like so.
                    </p>

                    <p>
                        $\displaystyle{ C\left( \theta, r, \vec{c}\right) = \left( \begin{array}{c} r\times cos(\theta ) + \vec{c}_x \\ r\times sin(\theta ) + \vec{c}_y \end{array} \right) }$
                    </p>

		            <p>
                        The function $C\left( \theta, r, \vec{c}\right)$ gives the coordinates of a point around a circle, given the angle of the point, and the radius
		                and centre of the circle. The location of each hand can then be given by
                    </p>

                    <p>
		                $\displaystyle{ \begin{array}{l}
                            \vec{hours} = C\left( \frac{h\pi}{6} - \frac{\pi}{2}, r_h, \vec{c} \right) \\
                            \vec{minutes} = C\left( \frac{m\pi}{30} - \frac{\pi}{2}, r_m, \vec{c} \right) \\
                            \vec{seconds} = C\left( \frac{s\pi}{30} - \frac{\pi}{2}, r_s, \vec{c} \right)
                            \end{array}
                        }$
                    </p>

		            <p>
                        The script performs these calculations and then draws the hands onto the clock based on the results. Pretty neat right? :)
                    </p>
		        </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <h2>Digital clock</h2>
                    <p>
                        This is a fairly similar concept to the analog clock above, although the maths behind the drawing is significantly less complex,
                        and in fact the only "complex" maths involved here is determining the exact pixel positions to draw on.
                    </p>

                    <p>
                        I used a number of map structures which map individual digits in the time to segments in the drawing of each digit on the clock.
                        The time is effectively translated into an array of 28 booleans through these maps, which tell the program which segments to colour in red (true), or
                        grey (false).
                    </p>
                </div>

                <div class="col-md-6">
                    <div class="row align-items-center justify-content-center">
                        <div class="clock-container" style="width: 30vw; height: 10vw;">
                            <canvas class="digital-back-clock-canvas"></canvas>
                            <canvas class="digital-clock-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row align-items-center justify-content-center">
                        <div style="position: relative; width: 30vw; height: 40vw;">
                            <canvas id="big-clock-back-canvas"></canvas>

                            <div class="clock-container" style="margin: 0px; position: absolute; top: 0; left: 0; width: 30vw; height: 30vw;">
                                <canvas class="back-clock-canvas"></canvas>
                                <canvas class="clock-canvas"></canvas>
                            </div>

                            <div class="clock-container" style="margin: 0px; position: absolute; top: 30vw; left: 0; width: 30vw; height: 10vw;">
                                <canvas class="digital-back-clock-canvas"></canvas>
                                <canvas class="digital-clock-canvas"></canvas>
                            </div>
                        </div>

                        <script>
                            function draw_bcb_background(event) {
                                const bcb_canvas = document.getElementById("big-clock-back-canvas");
                                const bcb_parentStyle = getComputedStyle(bcb_canvas.parentElement);
                                bcb_canvas.width = parseInt(bcb_parentStyle.width.slice(0, -2));
                                bcb_canvas.height = parseInt(bcb_parentStyle.height.slice(0, -2));
                                const bcb_ctx = bcb_canvas.getContext("2d");

                                bcb_ctx.fillStyle = "blue";
                                bcb_ctx.fillRect(0, 0, bcb_canvas.width, bcb_canvas.height);
                            }

                            draw_bcb_background(null);

                            window.addEventListener("resize", draw_bcb_background);
                        </script>
                    </div>
                </div>

                <div class="col-md-6">
                    <h2>Combinations of clocks</h2>
                    <p>
                        The way I have written both of the scripts which control the two types of clocks means that they can control multiple clocks
                        on the same page, provided that the canvas elements use the same dimensions and have the same class names, so that the scripts
                        can find them in the page.
                    </p>

                    <p>
                        This is an example of this, addmittedly, using some extra JavaScript to fill out the square blue background, but you can clearly
                        see that the clock scripts themselves are able to draw the time onto all the clocks in the page, and properly update them.
                    </p>

                    <p>
                        Another feature of the digital clock which I have implemented in this script is an alarm, try setting an alarm below!
                    </p>

                    <div class="row align-items-center justify-content-center set-alarm-entry">
                        <input type="number" id="clock-1-alarm-hour" min="0" max="24" value="0">
                        <input type="number" id="clock-1-alarm-minute" min="0" max="59" value="0">
                        
                        <div class="options justify-content-center">
                            <span onclick="set_alarm(1)">Set alarm</span>
                            <span onclick="remove_alarm(1)">Remove alarm</span>
                        </div>
                    </div>

                    <p>
                        You should receive an alert at the top of the page when your alarm goes off, pretty neat right??
                    </p>

                    <h2>Resizability</h2>
                    <p>
                        After lab session 4, I realised it would probably be a good idea to try and make the clocks resizable, because they weren't at the time,
                        and attempting to display them in smaller dimensions led to a truly horrifying page display that made me deeply, deeply sad.
                    </p>

                    <p>
                        It was at this point that I started to curse myself for doing this in pure JavaScript. The lab session had used CSS animations, which would
                        likely have been easier to implement resizing with, but since my implementation is in JavaScript, I had to do some rather interesting maths
                        to determine the positions and scaling of each drawn element of the clock.
                    </p>

                    <p>
                        Interestingly, the analogue clock was a lot easier to implement this on than the digital clock, but I managed it on both nonetheless. As
                        you can probably tell from the fact that this page is displaying relatively nicely, and doesn't have the text and clocks overlapping each other.
                    </p>

                    <p>
                        The digital clock in particular does get a bit sketchy when it gets VERY small, but isn't really noticable. The clocks are scaled in terms of the width of the page,
                        and not the height. The height doesn't really have any particular effect in this way, only the width was causing scaling issues when I was testing it.
                    </p>
                </div>
            </div>
        </div>

        <script src="../static/scripts/clock.js"></script>
        <script src="../static/scripts/digital_clock.js"></script>

        <?php include("../footer.php"); ?>
    </body>
</html>