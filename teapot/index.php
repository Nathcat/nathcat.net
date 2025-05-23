<?php
if (array_key_exists("finished", $_GET)) {
    http_response_code(418);
    exit(0);
}
    ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="/static/css/new-common.css">
        <link rel="stylesheet" href="/static/css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="content">
            <?php include("../header.php"); ?>

            <div class="main align-center">
                <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/3YLW1U4MLKNWQdFAl41sPI?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <script>
                  setTimeout(() => { window.location = "/teapot?finished"}, 70000);
                </script>  
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>
