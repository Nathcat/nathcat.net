<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-32">
        <title>Speedcubing</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../static/styles/common.css">
    </head>

    <body style="position: relative;">
        <?php include("../../header.php"); ?>

        <div class="container-fluid" style="padding: 50px;">
            <div class="col-md-12">
                <h1>Contents</h1>
                <ul>
                    <li><a href="/nb535/hobbies/speedcubing/#intro">Introduction</a></li>
                    <li><a href="/nb535/hobbies/speedcubing/#how_solve">How do I solve the Cube?</a></li>
                    <ul>
                        <li><a href="#cross">Cross</a></li>
                        <li><a href="#f2l">F2L</a></li>
                        <li><a href="#oll">OLL</a></li>
                        <li><a href="#pll">PLL</a></li>
                    </ul>
                </ul>

                <h1 id="intro">Speedcubing</h1>

                <p>
                    Like Programming, Speedcubing holds a special place in my head. I originally starting learning how to solve the cube when I was 14,
                    and over the years have improved, albeit slowly, to average roughly 16 seconds, with my personal best single time being 9.542 seconds.
                </p>

                <p>
                    I have considered entering competitions, while I don't think I would do badly, there aren't a lot of them in the UK and it would not
                    be possible to jusitfy going abroad for one, so I am relatively constrained in how far I am able to take this hobby in this respect.
                </p>

                <p>
                    I say hobby, like Programming I feel like Speedcubing is more than a hobby to me, when I focus only on the cube and just scramble and
                    solve the cube over and over again I feel immensely calm. There was one time during sixth form I wanted to see how many times I could
                    solve the cube in an hour, so I sat in a free period and just solved the cube over and over again, keeping a running count until the
                    hour was up. I think I managed 114 solves in the hour, or thereabouts.
                </p>

                <p>
                    Below is a video of me solving the cube twice, this was taken while I was practicing a lot more than I do now, and as such was really
                    feeling it then, so the solves are pretty good compared to my standard.
                </p>

                <div class="row align-items-center justify-content-center">
                    <video style="width: 50vw;" controls>
                        <source src="../../static/videos/20230130_151004.mp4" type="video/mp4">
                    </video>
                </div>

                <h2 id="how_solve">How do I solve the cube?</h2>

                <p>
                    I use a very common Speedcubing method called <a href="https://en.wikipedia.org/wiki/CFOP_method">CFOP</a>, also known as the Friedrich method,
                    since it was developed by a Speedcuber called <i>Jessica Friedrich</i>
                </p>

                <p>
                    The abbrieviation <i>CFOP</i> comes from the four steps which the method describes in order to solve the cube:
                    <ol>
                        <li><a href="https://www.speedsolving.com/wiki/index.php?title=Cross">Cross</a></li>
                        <li><a href="https://www.speedsolving.com/wiki/index.php?title=First_Two_Layers">First two layers (F2L)</a></li>
                        <li><a href="https://www.speedsolving.com/wiki/index.php/OLL">Orient Last Layer (OLL)</a></li>
                        <li><a href="https://www.speedsolving.com/wiki/index.php/PLL">Permute Last Layer (PLL)</a></li>
                    </ol>
                </p>
                <p>
                    Lets have a look at what is required in each of these stages.
                </p>

                <h3 id="cross">Cross</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            As the name suggests, and as some people may already know, the first step of solving the cube is to solve the <i>white cross</i> (or the cross
                            of any colour if you are solving colour neutral, although that is beyond the scope of this page).
                        </p>

                        <p>
                            By solving the white cross I mean, you want to end up with the cube in the state depicted on the right.
                        </p>

                        <p>
                            There aren't really any algorithms to this step, only small tips which might help improve your intuitive solution to this stage. Generally you
                            should be aiming for less than eight moves for a <i>good</i> solution.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?colored=d/m%20f/m%20FD%20r/m%20RD%20b/m%20BD%20l/m%20LD" scrolling="no"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Use the cube on the right to see an example of a cross solution. We will use the same scramble throughout here.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?alg=R%20U2%20L2%20F%20B%20R%20B2&setupmoves=L%20U%20R'%20D2%20B'%20F%20D2%20F'%20L2%20D2%20L2%20U2%20F%20U%20R%20B%20L2%20D2%20F'%20R'%20R%20U2%20L2%20F%20B%20R%20B2&flags=showalg" scrolling="no"></iframe>
                    </div>
                </div>

                <h3 id="f2l">First Two Layers (F2L)</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            For this stage you must find the white corner pieces and their corresponding middle layer edges, pair them together, and insert them into the correct slot
                            to obtain the cube state seen on the right.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?colored=d%20f/m%20FD%20r/m%20RD%20b/m%20BD%20l/m%20LD%20FL%20FLD%20FR%20FRD%20BL%20BR%20BLD%20BRD" scrolling="no"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            Here is an example, we begin by pairing the green red edge and green red white corner together on move four. We then use the remaining two moves to insert
                            the pair into the correct slot.
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?alg=B%20U2%20B'%20R%20U%20R'&setupmoves=L%20U%20R'%20D2%20B'%20F%20D2%20F'%20L2%20D2%20L2%20U2%20F%20U%20R%20B%20L2%20D2%20F'%20R'%20%20%20%20R%20U2%20L2%20F%20B%20R%20B2%20%20%20%20B%20U2%20B'%20R%20U%20R'&flags=showalg" scrolling="no"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            This process is then repeated for the rest of the pairs, and might look something like this
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?alg=B%20U2%20B'%20R%20U%20R'%20%20L%20U'%20L'%20U%20L'%20U2%20L%20U%20L'%20U'%20L%20%20U'%20B'%20U'%20B%20%20U'%20B%20U%20B'&setupmoves=L%20U%20R'%20D2%20B'%20F%20D2%20F'%20L2%20D2%20L2%20U2%20F%20U%20R%20B%20L2%20D2%20F'%20R'%20%20%20%20R%20U2%20L2%20F%20B%20R%20B2%20%20%20%20B%20U2%20B'%20R%20U%20R'%20%20L%20U'%20L'%20U%20L'%20U2%20L%20U%20L'%20U'%20L%20%20U'%20B'%20U'%20B%20%20U'%20B%20U%20B'&flags=showalg" scrolling="no"></iframe>
                    </div>
                </div>
                
                <p>
                    There are lots of ways to improve the efficiency of the F2L stage, for example two techniques are called Pseudoslotting, which involves pairing and inserting two pairs
                    at the same time, and lookahead, which is a common technique for solving the cube in any sense, and involves watching the effects your moves have on the rest of the cube,
                    and using these observations to plan ahead. This may be used in F2L to find and determine the appropriate algorithm for the next pair.
                </p>

                <p>
                    F2L really rides the line between an algorithmic and intuitive stage, there are I think 42 algorithms you could learn for all of the cases of pairings, but
                    you could also do it intuitively. Although at some stage it does become fairly algorithmic as your intuitive pairing solutions become muscle memory.
                </p>

                <h3 id="oll">Orient Last Layer (OLL)</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            This is the most algorithmically intense stage, there are 57 algorithms you must learn to complete this stage (although there are alternative methods which are slower, but require
                            less algorithms, I must admit to using one such method (2-Look OLL), mixed with full OLL).
                        </p>

                        <p>
                            This stage requires you to perform a single algorithm which gets the cube into the following state:
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?colored=u%20*/m%20FD%20RD%20BD%20LD%20FRD%20FR%20FLD%20FL%20BRD%20BR%20BLD%20BL" scrolling="no"></iframe>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            The case seen in our solve is algorithm #18, which is a Dot case, recognised by the single dot in the centre of the top face, and the bar pattern on the front of the cube,
                            and is performed like so
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?alg=U%20r%20U%20R'%20U%20R%20U2%20r2%20U'%20R%20U'%20R'%20U2%20r&setupmoves=L%20U%20R'%20D2%20B'%20F%20D2%20F'%20L2%20D2%20L2%20U2%20F%20U%20R%20B%20L2%20D2%20F'%20R'%20%20%20%20R%20U2%20L2%20F%20B%20R%20B2%20%20%20%20B%20U2%20B'%20R%20U%20R'%20%20L%20U'%20L'%20U%20L'%20U2%20L%20U%20L'%20U'%20L%20%20U'%20B'%20U'%20B%20%20U'%20B%20U%20B'%20%20%20%20U%20r%20U%20R'%20U%20R%20U2%20r2%20U'%20R%20U'%20R'%20U2%20r&flags=showalg" scrolling="no"></iframe>
                    </div>
                </div>

                <h3 id="pll">Permute Last Layer (PLL)</h3>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            This is also a fairly intense stage algorithmically speaking, but not nearly as bad as OLL, since it only requires 21 algorithms.
                        </p>

                        <p>
                            In this stage you must perform a single algorithm, which leaves the cube in a solved state. The specific case in out solve is the Gc permutaion, recognised
                            by the headlight pattern on the front of the cube, and the small bar behind the left headlight, and is performed like so
                        </p>

                        <p>
                            And with that, the cube is solved!
                        </p>
                    </div>

                    <div class="col-md-6">
                        <iframe width="250" height="380" style="width: 250px; height: 380px; overflow: hidden;" src="https://ruwix.com/widget/3d/?alg=U%20R2%20U'%20R%20U'%20R%20U%20R'%20U%20R2%20U%20D'%20R%20U'%20R'%20D&setupmoves=L%20U%20R'%20D2%20B'%20F%20D2%20F'%20L2%20D2%20L2%20U2%20F%20U%20R%20B%20L2%20D2%20F'%20R'%20%20%20%20R%20U2%20L2%20F%20B%20R%20B2%20%20%20%20B%20U2%20B'%20R%20U%20R'%20%20L%20U'%20L'%20U%20L'%20U2%20L%20U%20L'%20U'%20L%20%20U'%20B'%20U'%20B%20%20U'%20B%20U%20B'%20%20%20%20U%20r%20U%20R'%20U%20R%20U2%20r2%20U'%20R%20U'%20R'%20U2%20r%20%20%20%20U%20R2%20U'%20R%20U'%20R%20U%20R'%20U%20R2%20U%20D'%20R%20U'%20R'%20D&flags=showalg" scrolling="no"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <?php include("../../footer.php"); ?>
    </body>
</html>