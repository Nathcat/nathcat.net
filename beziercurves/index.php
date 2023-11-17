<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-32">
        <title>Bezier Curves</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../static/styles/common.css">
        <link rel="stylesheet" href="../static/styles/bezier.css">
    </head>

    <body>
        <?php include("../header.php"); ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Bezier Curve Spider</h2>

                    <p>
                        While not one of my best looking creations, the foundations to this little creation were very fun to implement. So, while I'm not sure I'm happy
                        with the look of it, I enjoyed programming it.
                    </p>

                    <p>
                        The mathematics behind calculating and drawing the Bezier curves that form the legs of the spider was particularly interesting. That is why
                        I do these small projects, because I learn something new everytime, from now on I will know how to implement a Bezier curve algorithm
                        into a Computer Graphics application, which is a skill I may need in the future.
                    </p>

                    <p>
                        So while these small projects may appear generally pointless, they help you learn and improve your skills, which is certainly worth
                        the time, effort, and headaches some of them may take.
                    </p>

                    <div class="bezier-curve-spider-new-points-button" onclick="points = new_points();">Generate new points</div>
                </div>
            </div>
        </div>

        <div class="bezier-container">
            <canvas id="curve-canvas"></canvas>

            <div class="spider-centre"></div>
        </div>

        <script src="../static/scripts/circle.js"></script>
        <script src="../static/scripts/bezier-curves.js"></script>
        <script src="../static/scripts/bezier-spider.js"></script>

        <?php include("../footer.php"); ?>
    </body>
</html>