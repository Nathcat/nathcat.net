<!DOCTYPE html>
<html>
    <head>
        <title>Nathan Baines</title>

        <link rel="stylesheet" href="../static/css/new-common.css">
        <link rel="stylesheet" href="../static/css/about.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    </head>

    <body>
        <div class="content">
            <?php include("../header.php"); ?>

            <div class="main"><div style="grid-area: content;">

                <div class="content-card justify-center align-center">
                    <h2>Who am I?</h2>
                
                    <p>
                        I have been programming for eight years now, since I started learning Python in Maths lessons every two weeks. While the
                        rest of my class hated it, something about it stuck with me, and from the first program I ran, I was hooked.
                    </p>

                    <p>
                        After those lessons stopped, I continued learning Python on my own, and thats how it stayed for two years. My school at time
                        didn't have any provision for Computer Science or Programming. Eventually however, they started offering Computer Science as a 
                        GCSE subject, and of course I took it.
                    </p>

                    <p>
                        My GCSE Computer Science teacher really helped me grow and develop my skills, he pushed me to improve in every aspect of my education,
                        and those are lessons that I kept with me over the years. Once he discovered my programming, he suggested to me that I learn Java,
                        and even gave me a book that he used to learn Java.
                    </p>

                    <p>
                        It was around this time that the Covid pandemic hit. Over the lockdowns I was able to develop my programming even more, every free minute
                        I had between live lessons was spent typing away into an IDE, or testing code I had written before that lesson. All this work culminated in my
                        GCSE coursework project, which is actually available as an archive on my GitHub. Of course, this project does not compare to some of the projects
                        I have produced since then.
                    </p>
                    
                    <p>
                        Over A-Levels I continued this kind of work ethic. Almost every free minute I had was spent programming and developing my skills. I started to
                        compete in competitions and getting good results, I started releasing some of my work publically. To finish off those two years, I created my biggest
                        completed project to date, MessageCat, for my A-Level coursework. There are of course many flaws in it, but I have been working on improving, and
                        I am always learning new things from each project I take on.
                    </p>

                    <p>
                        For me programming is more than just a means to solve a problem, it is a part of who I am. There is something about it that just, works
                        in my head, it's like I was made for programming, and I plan to use that passion throughout my career.
                    </p>

                    <div class="row align-center">
                        <img class="circle-photo" src="../static/images/me.jpg">
                        <h3 style="margin-left: 15px;">Nathan Baines - <i>Programming with Passion</i></h3>
                    </div>
                </div>

                <div class="content-card column justify-center align-center">
                    <div>
                        <h2 id="l-and-f">Languages and Frameworks</h2>
                        <p>This is a list of some of the programming languages and frameworks I am familiar with.</p>
                        <p>
                            I've had experience in using all of these frameworks (and a few more not listed here) in my own personal projects,
                            and feel secure in my understanding of them.
                        </p>
                    </div>
 
                    <div class="frameworks-gallery">
                        <img style="grid-area: a;" src="../static/images/python-4.svg">
                        <img style="grid-area: b;" src="../static/images/java-4.svg">
                        <img style="grid-area: c;" src="../static/images/c.svg">
                        <img style="grid-area: d;" src="../static/images/c++.svg">
                        <img style="grid-area: e;" src="../static/images/cs.svg">

                        <img style="grid-area: f;" src="../static/images/html.svg">
                        <img style="grid-area: g;" src="../static/images/css.svg">
                        <img style="grid-area: h;" src="../static/images/logo-javascript.svg">
                        <img style="grid-area: i;" src="../static/images/typescript.svg">
                        <img style="grid-area: j;" src="../static/images/unity-69.svg">
                    </div>
                </div>

                <div class="content-card column justify-center align-center">
                    <h2 id="education">Education</h2>
                    
                    <div class="sub-content-card" style="width: 100%">
                        <h2>GCSEs</h2>
                        <h3>The Malling School 2016 - 2021</h3>
                        <p>
                            9 GCSEs at grade 8 or higher, including English, Maths, Computer Science, and Psychology.
                        </p>
                    </div>

                    <div class="sub-content-card" style="width: 100%">
                        <h2>A Levels</h2>
                        <h3>Mascalls Academy 2021 - 2023</h3>
                        <ul>
                            <li>Computer Science (OCR) - A</li>
                            <li>Mathematics (Edexcel) - A</li>
                            <li>Physics (Edexcel) - B</li>
                        </ul>
                    </div>

                    <div class="sub-content-card" style="width: 100%">
                        <h2>Higher education</h2>
                        <h3>University of Sussex 2023 - ongoing</h3>
                        <p>
                            Currently studying for a Bsc in Computer Science, some of the modules I have studied
                            so far as part of this course are:
                        </p>

                        <ul>
                            <li>Further Programming</li>
                            <li>Mathematical Concepts</li>
                            <li>Programming Concepts</li>
                            <li>Data Structures and Algorithms</li>
                            <li>Introduction to Multimedia</li>
                        </ul>
                    </div>
                </div>

            </div></div>

            <?php include("../footer.php"); ?>
        </div>
    </body>
</html>