<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="/static/css/new-common.css">
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
                <?php
                session_name("AuthCat-SSO");
                if ($_SERVER["SERVER_NAME"] != "localhost") session_set_cookie_params(0, "/", ".nathcat.net");
                session_start();

                if (array_key_exists("user", $_SESSION)): ?>

                    <h1>Welcome, <?php echo $_SESSION["user"]["fullName"]; ?></h1>
                    
                    <div class="content-card">
                        <h2>What is the Nathcat network?</h2>
                        <p>
                            The Nathcat network is a collection of services I have created, or have worked with others to create.
                        </p>
                        <p>
                            The network is built around a central user account system, <a href="https://data.nathcat.net/sso">AuthCat</a>.
                        </p>
                    </div>

                    <span class="horizontal-divider"></span>

                    <h2 id="AuthCat"><a href="https://data.nathcat.net/sso">AuthCat</a></h2>
                    <div class="content-card">
                        <h3>A Centralised user account system for the network</h3>
                        <p>
                            AuthCat is a centralised user account system which can be used throughout my network wherever a user account
                            is required. This includes a number of my services.
                        </p>
                    </div>

                    <span class="horizontal-divider"></span>

                    <h2 id="PeopleCat"><a href="https://nathcat.net:8080">PeopleCat</a></h2>
                    <div class="error-card">
                        <h3>In development!</h3>
                        <p>
                            PeopleCat is currently in development, although you can access the development server and help us test the system,
                            your feedback and bug reporting would be very much appreciated and really help us develop the platform.
                        </p>
                        <p>
                            Please feel free to submit any bugs / issues you may find, under our <a href="https://github.com/users/Nathcat/projects/2/views/1?pane=info">GitHub project page</a>.
                        </p>
                    </div>
                    <div class="content-card">
                        <h3>A simple social media network</h3>
                        <p>
                            PeopleCat is a simple social media network built on the AuthCat account system.
                        </p>
                    </div>

                    <div class="content-card">
                        <h3>The history of PeopleCat</h3>
                        <p>
                            PeopleCat as a project has been a dream of mine since late early 2022. It started with the development of an simple
                            project <i>MessageCat</i>. The original version of MessageCat was a simple Angular / TypeScript web application
                            with a Node.js backend, but later in the year I decided to re-imagine the project into something I could use for
                            my A-Level coursework.
                        </p>
                        <p>
                            You can find the version of MessageCat I created for my A-Level coursework here:
                        </p>
                        <ul>
                            <li><a href="https://github.com/Nathcat/MessageCatServer">Server</a></li>
                            <li><a href="https://github.com/Nathcat/MessageCatClient-Android12">Android Client</a></li>
                            <li><a href="/static/docs/Nathan Baines - MessageCat.pdf">Documentation</a></li>
                        </ul>
                        <p>
                            After MessageCat the project stayed fairly quiet until the end of 2023. Around this time I had a lot going on
                            in my life, I had not long started at University and a relationship which was very important to me was breaking down.
                            After it fully ended, I searched for something to take my mind off it, and the idea of PeopleCat sprung to my mind.
                        </p>
                        <p>
                            PeopleCat is based on the original project MessageCat, but is a significant improvement, and has many more features,
                            and because of the way it was conceived, the project really does mean a lot to me.
                        </p>
                    </div>

                    <span class="horizontal-divider"></span>

                    <h2 id="SudokuCat"><a href="https://sudoku.nathcat.net">SudokuCat</a></h2>
                    <div class="error-card">
                        <h2>In development</h2>
                        <p>
                            SudokuCat is currently in development, however it is available to play at the link above.
                        </p>
                    </div>

                <?php elseif (array_key_exists("newUser", $_GET)): include("../user/new-user-form.php"); ?>
                <?php else: include("../user/login-form.php"); endif;?> 
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>