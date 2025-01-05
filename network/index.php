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
                <h1>The Nathcat Network</h1>

                <h1><a href="https://apps.nathcat.net">Access the network</a></h1>
                
                <div class="content-card">
                    <h2>What is The Nathcat Network?</h2>
                    <p>
                        This is the name I have given to the collection of web
                        applications and services I have created. It is a work
                        in progress but there is a number of them available.
                        Keep reading to find out more about each one!
                    </p>
                </div>

                <div class="content-card">
                    <div class="column justify-center align-center">
                        <img width=100 height=100 src="https://data.nathcat.net/sso/AuthCat.png">

                        <h2>AuthCat</h2>
                    </div>

                    <p>
                        AuthCat is a single-sign-on service I created for other
                        applications and services on the network, and other
                        associated applications.
                    </p>
                    <p>
                        It facilitates authentication, provides basic user data
                        and key management in a secure, reliable, and efficient
                        manner.
                    </p>
                </div>

                <div class="content-card">
                    <div class="column justify-center align-center">
                        <img width=100 height=100 src="https://apps.nathcat.net/static/images/peoplecat-logo.png">

                        <h2>PeopleCat</h2>
                    </div>

                    <p>
                        PeopleCat is a social media network built for simplicity,
                        and ease of use.
                    </p>
                    <p>
                        The origins of PeopleCat actually go back a long way,
                        it started with the development of my A-Level 
                        coursework project and it's prototypes, MessageCat.
                        Although developing MessageCat helped me score very
                        highly in my coursework, it did contain a number of flaws
                        as a genuine production application, and was never fully
                        released. I did start work on a second production ready
                        version of the application but never got round to
                        finishing it properly.
                    </p>
                    <p>
                        PeopleCat was the successor to MessageCat, its'
                        inception coming almost a year after the original version
                        of MessageCat, and has now been almost a year in on-and-off
                        development. Since I started developing this cluster of
                        web applications I have teamed up with <a href="https://github.com/brooke-ec">Brooke Reavell</a>,
                        and together with her work on the front-end web application, and my
                        development of the back-end server we are moving quickly toward
                        a ready application!
                    </p>
                    <p>
                        At the moment, you can access my prototype web client for
                        the basic messaging system in a simple global group chat
                        through the networks <a href="https://apps.nathcat.net">home page</a>
                    </p>
                </div>

                <div class="content-card">
                    <div class="column align-center justify-center">
                        <h2>SudokuCat</h2>
                    </div>

                    <p>
                        SudokuCat is a simple Sudoku puzzle game, not much else to it!
                        It features a leaderboard for total puzzles solved, and the current
                        longest streak.
                    </p>
                </div>

                <div class="content-card">
                    <div class="column align-center justify-center">
                        <h2>BlogCat</h2>
                    </div>

                    <p>
                        BlogCat is a simple blogging application where users can
                        create posts about events on the network, in the world,
                        or just generally share their knowledge.
                    </p>
                </div>

                <div class="content-card">
                    <div class="column align-center justify-center">
                        <h2>CloudCat</h2>
                    </div>

                    <p>
                        CloudCat is a simple cloud storage solution for the network,
                        it allows you to store your files to be accessed anywhere.
                    </p>
                    <p>
                        Other services which make use of cloud storage can also
                        integrate with CloudCat.
                    </p>
                </div>

                <div class="content-card">
                    <div class="column align-center justify-center">
                        <h2>NoteCat</h2>
                    </div>

                    <p>
                        NoteCat is a note-taking app which allows you to
                        efficiently write notes in a dynamically rendered markdown
                        environment.
                    </p>
                    <p>
                        It is also integrated with CloudCat, meaning all your notes
                        will be stored via its cloud storage system and be
                        accessible from anywhere!
                    </p>
                </div>
            </div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>