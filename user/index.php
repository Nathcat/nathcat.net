<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="../static/css/new-common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="content">
            <?php include("../header.php"); ?>

            <div class="main align-center">
                <?php 
                session_start();

                if (array_key_exists("login-error", $_SESSION)) {
                    echo "<div class='error-card'><h2>Login failed</h2><p>" . $_SESSION["login-error"] . "</p></div>";
                }

                if (array_key_exists("user", $_SESSION)) { include("user-view.php"); } else { include("login-form.php"); } 
                ?>
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>