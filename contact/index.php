<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="../static/css/new-common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    
        <style>
            .main {
                display: grid;
                grid-template-columns: 1fr 10fr 1fr;
                grid-template-rows: 1fr;
                grid-template-areas: "l content r";
            }    
        </style>
    </head>

    <body>
        <div class="content">
            <?php include("../header.php"); ?>

            <div class="main"><div style="grid-area: content;">
                <div class="content-card">
                    <h2>Contact me</h2>
                    <p>
                        My social media accounts can be found at the bottom of every page (including this one), but if you want to contact me directly
                        you may email me at <a href="mailto:nathan.baines@nathcat.net">nathan.baines@nathcat.net</a>.
                    </p>
                </div>
            </div></div>

            <?php include("../footer.php"); ?>`
        </div>
    </body>
</html>