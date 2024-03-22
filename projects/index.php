<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="../static/css/common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="../static/scripts/project-slideshow.js"></script>
    </head>

    <body>
        <div class="content">
            <div class="column justify-center align-center">
                <?php include("../header.php"); ?>

                <div class="row justify-center align-center">
                    <div class="content-card">
                        <h2>Projects</h2>
                        <p>
                            I have completed a lot of small projects in my free time, and some larger projects as well.
                        </p>
                        <p>
                            For the sake of keeping this page relatively short, I will include only my most notable projects, those which I am
                            most proud of. If you want to find more of my projects, you may do so on my <a href="https://github.com/Nathcat">Github</a>.
                        </p>
                    </div>
                </div>

                <div class="row justify-center align-center">
                    <span id="slide-button-prev" class="slide-button" onclick="prev()">
                        <svg fill="var(--quad-color)" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m13.789 7.155c.141-.108.3-.157.456-.157.389 0 .755.306.755.749v8.501c0 .445-.367.75-.755.75-.157 0-.316-.05-.457-.159-1.554-1.203-4.199-3.252-5.498-4.258-.184-.142-.29-.36-.29-.592 0-.23.107-.449.291-.591 1.299-1.002 3.945-3.044 5.498-4.243z"/></svg>
                    </span>

                    <div class="project-slideshow">
                        <div id="p_0" class="content-card" style="left: 0;">
                            <div class="row align-center">
                                <img class="circle-photo" src="https://play-lh.googleusercontent.com/GdA_JECSRbmEq5nJuzyv09EYDWYAjz7cRLucQ2ElVWNQnvKzeVHYKCCCmhI_LNDvttk=w480-h960">
                                <h2 style="margin-left: 10px;">Slinger</h2>
                            </div>
                            <p>
                                Slinger is a 2D mobile game I built in Unity, the aim, of the game is to avoid the red for as long as possible.
                                You score more points the longer you stay alive for, and you also gain points whenever a red enemy dies.
                            </p>
                            <p>
                                I originally built this game in the summer of 2022, but didn't actually finish it to a point I could release it
                                until the summer of 2023.
                            </p>
                            <p>
                                Slinger is I think my most production ready application, I spent a long time making sure the game was ready to be
                                released to the public. I did attempt to promote the game using an <a href="https://www.instagram.com/slingergamebynathcat">Instagram account</a>, but despite
                                this it didn't gain much attention. The biggest flaw in most of my work is that I lack the resources to promote
                                it to a wider audience it seems.
                            </p>

                            <a href="https://play.google.com/store/apps/details?id=com.Nathcat.Slinger"><img style="width: 50%;" src="../static/images/google-play-badge-2022-2.svg"></a>
                        
                        </div>

                        <div id="p_1" class="content-card" style="left: 100%;">
                        <div class="row align-center">
                                <img class="circle-photo" src="../static/images/cat_envelope-playstore.png">
                                <h2 style="margin-left: 10px;">MessageCat</h2>
                            </div>
                            <p>
                                MessageCat is the project I developed or my A-Level coursework, for which I scored very highly.
                            </p>
                            <p>
                                The main idea of the project was a lightweight, secure, messaging system. The original version I developed for
                                my coursework had a number of flaws, for example it was only fully functional on Android 12 and below, and
                                the protocol only really allowed for native Java client applications. 
                            </p>
                            <p>
                                Since I completed my A-Levels I have been working on a new version which is significantly more portable to other
                                client platforms, and more efficient. The backbone of the application is complete, I simply have not fully
                                implemented it into the application itself.
                            </p>
                            <p>
                                MessageCat is not publically available, although you may find the original client application's source code
                                on my GitHub page, and you may view the documentation I wrote for it <a href="../static/docs/Nathan Baines - MessageCat.pdf">here</a>.
                            </p>
                        </div>
                    </div>

                    <span id="slide-button-next" class="slide-button" onclick="next()">
                        <svg fill="var(--quad-color)" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m10.211 7.155c-.141-.108-.3-.157-.456-.157-.389 0-.755.306-.755.749v8.501c0 .445.367.75.755.75.157 0 .316-.05.457-.159 1.554-1.203 4.199-3.252 5.498-4.258.184-.142.29-.36.29-.592 0-.23-.107-.449-.291-.591-1.299-1.002-3.945-3.044-5.498-4.243z"/></svg>
                    </span>
                </div>

                <script>buttons();</script>

                <?php include("../footer.php"); ?>
            </div>
        </div>
    </body>
</html>