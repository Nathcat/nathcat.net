<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-32">
        <title>Hey :)</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="static/styles/common.css">
    </head>

    <body>
        <?php include("header.php"); ?>

        <div class="slideshow">
            <img id="img-A" title="Photo by Florian Olivo on Unsplash" src="static\images\florian-olivo-4hbJ-eymZ1o-unsplash.jpg">
            <img id="img-B" src="">

            <div class="scroll-button prev" onclick="slideshow_onPrevClicked()"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-arrow-left" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/></svg></div>
            <div class="scroll-button next" onclick="slideshow_onNextClicked()"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/></svg></div>
            <div class="text"><h1>Nathan Baines</h1><div class="row align-content-center justify-content-center"><p>Programmer</p><p>Speedcuber</p></div></div>
        </div>

        <script src="static/scripts/slideshow.js"></script>

        <div class="container-fluid" style="padding-top: 50px">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Hello everyone!</h2>
                        <p>
                            This is my personal website created for my Introduction to Multimedia coursework during October / November of 2023.
                            While I have you here I would like to note that I had a perfectly good design for this website before I re-read the
                            specification given in the coursework and found out that we have to use Bootstrap CSS. As a result I have spent the
                            better part of the last two hours re-writing my CSS and HTML layout to accomodate for this! So I suppose the lesson
                            learned here is to not get ahead of myself when creating projects such as this.
                        </p>

                        <p>
                            Tha purpose of this website I suppose is to give you brief introduction into who I am. Although of course there are
                            many more levels to the human mind than what they spend most of their time doing, in my case Programming. Here you
                            will find some of my greatest achievements in this field showcased, using all of the knowledge I have about HTML,
                            CSS, and JavaScript.
                        </p>

                        <p>
                            I hope you enjoy!
                        </p>

                        <p>
                            Best wishes, Nathan :)
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <?php include("footer.php"); ?>
    </body>
</html>