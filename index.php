<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="static/css/new-common.css">
        <link rel="stylesheet" href="static/css/home.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="content">
            <?php include("header.php"); ?>

            <div class="main align-center">
                
                <img class="large-circle-photo" src="static/images/me.jpg">
                
                <h2><i>Programming with Passion</i></h2>

                <div class="content-card github-gallery">
                    <h2 style="grid-area: title;">My GitHub</h2>
                    
                    <img style="grid-area: a;" src="https://github-readme-stats.vercel.app/api?username=Nathcat&show_icons=true&theme=radical&hide_border=true">
                    <img style="grid-area: b;" src="http://github-profile-summary-cards.vercel.app/api/cards/profile-details?username=Nathcat&theme=radical&hide_border=true">
                    <img style="grid-area: c;" src="http://github-profile-summary-cards.vercel.app/api/cards/repos-per-language?username=Nathcat&theme=radical&hide_border=true">
                    <img style="grid-area: d;" src="http://github-profile-summary-cards.vercel.app/api/cards/most-commit-language?username=Nathcat&theme=radical&hide_border=true">
                    <img style="grid-area: e;" src="http://github-profile-summary-cards.vercel.app/api/cards/stats?username=Nathcat&theme=radical&hide_border=true">
                    <img style="grid-area: f;" src="http://github-profile-summary-cards.vercel.app/api/cards/productive-time?username=Nathcat&theme=radical&hide_border=true">  
                </div>
            </div>

            <?php include("footer.php"); ?>
        </div>
    </body>
</html>