<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="../static/css/new-common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://data.nathcat.net/sso/js/sso.js"></script>
    </head>

    <body>
        <div class="content">
            <?php include("../header.php"); ?>

            <div class="main align-center">
                <div class="content-card">
                    <h2>User Accounts</h2>
                    <p>
                        To help people using my projects I have created a centralised user account system, here is an example of its' implementation,
                        or alternatively you can go to <a href="https://data.nathcat.net/sso">AuthCat</a> to manage your account directly.
                    </p>
                    <p>
                        Any of my projects which have a user account system will use this system to login, so you can use the same credentials
                        for all of my projects.
                    </p>
                </div>
                
                <?php 
                $session_name = session_name("AuthCat-SSO");
                session_set_cookie_params(0, '/', '*.nathcat.net');
                session_start();

                if (array_key_exists("login-error", $_SESSION)) {
                    echo "<div class='error-card'><h2>Login failed</h2><p>" . $_SESSION["login-error"] . "</p></div>";
                }

                if (array_key_exists("user", $_SESSION)) { 
                    include("user-view.php"); 
                } 
                else { 
                    if (!array_key_exists("newUser", $_GET)) { 
                        include("login-form.php"); 
                    } 
                    else {
                        include("new-user-form.php");
                    }
                }
                ?>
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>