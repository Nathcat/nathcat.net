<!DOCTYPE html>
<html>
    <head>
        <title>Lab classes</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="../../static/styles/common.css">
    </head>

    <body>
        <?php include("../../header.php"); ?>

        <div class="container-fluid">
            <div class="col-md-12" style="padding-top: 20px;">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Intro to Multimedia Lab class 2</h2>
                        <p>
                            This lab class was an introduction to basic HTML and CSS concepts. Having had a reasonable amount of experience
                            in this area already, the tasks laid out were not too much difficulty for me. In order to make this a better
                            challenge for myself I decided to take the final task and make it slightly more difficult, namely by using flex
                            containers to make the page responsive to resizing.
                        </p>

                        <p>
                            Below is what I managed to accomplish with my given task, I am happy with the result compared to what the original
                            task was asking for.
                        </p>

                        <iframe src="https://users.sussex.ac.uk/nb535/portfolio/lab2/content" width="100%" height=500></iframe>

                        <p>
                            It is good to have as much experience as possible, especially in areas like this, there is a certain niche to it I think,
                            something which should be practiced regularly in order to maintain. So despite the relative simplicity of this task I did
                            enjoy it.
                        </p>

                        <div class="row align-items-center justify-content-center">
                            <div>
                                <h2>HTML</h2>
<pre class="code"><span>&lt</span><span class="tag-name">!DOCTYPE</span> <span class="property-name">html</span><span>&gt</span>
<span>&lt</span><span class="tag-name">html</span><span>&gt</span>
<span>    </span><span>&lt</span><span class="tag-name">head</span><span>&gt</span>
<span>        </span><span>&lt</span><span class="tag-name">title</span><span>&gt</span><span>LMAO</span><span>&lt</span><span class="tag-name">/title</span><span>&gt</span>
<span>        </span><span>&lt</span><span class="tag-name">meta</span> <span class="property-name">charset</span><span>=</span><span class="literal">"utf-8"</span><span class="property-name"></span><span>&gt</span>
<span>        </span><span>&lt</span><span class="tag-name">link</span> <span class="property-name">rel</span><span>=</span><span class="literal">"stylesheet"</span><span class="property-name"> href</span><span>=</span><span class="literal">"style.css"</span><span class="property-name"></span><span>&gt</span>
<span>    </span><span>&lt</span><span class="tag-name">/head</span><span>&gt</span>

<span>    </span><span>&lt</span><span class="tag-name">body</span><span>&gt</span>
<span>        </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"page-content"</span><span class="property-name"> class</span><span>=</span><span class="literal">"flex-column align-items-center"</span><span class="property-name"></span><span>&gt</span>
<span>            </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"title"</span><span class="property-name"></span><span>&gt</span>
<span>                </span><span>&lt</span><span class="tag-name">h1</span><span>&gt</span><span> My</span><span>Webpage</span><span>&lt</span><span class="tag-name">/h1</span><span>&gt</span>
<span>            </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>

<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"navbar"</span><span class="property-name"> class</span><span>=</span><span class="literal">"flex-row justify-content-center"</span><span class="property-name"></span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">a</span><span>&gt</span><span>A</span><span>&lt</span><span class="tag-name">/a</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">a</span><span>&gt</span><span>B</span><span>&lt</span><span class="tag-name">/a</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">a</span><span>&gt</span><span>C</span><span>&lt</span><span class="tag-name">/a</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">a</span><span>&gt</span><span>D</span><span>&lt</span><span class="tag-name">/a</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">a</span><span>&gt</span><span>E</span><span>&lt</span><span class="tag-name">/a</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">a</span><span>&gt</span><span>F</span><span>&lt</span><span class="tag-name">/a</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>

<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"main-content"</span><span class="property-name"> class</span><span>=</span><span class="literal">"flex-row justify-content-center"</span><span class="property-name"></span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"main-content-1"</span><span class="property-name"></span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">h2</span><span>&gt</span><span> Main</span><span>Content</span><span>&lt</span><span class="tag-name">/h2</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">p</span><span>&gt</span><span> This</span><span> is</span><span> the</span><span> main</span><span> content</span><span> of</span><span> the</span><span>page.</span><span>&lt</span><span class="tag-name">/p</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>

<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"main-content-2"</span><span class="property-name"></span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">h2</span><span>&gt</span><span> Right</span><span>Sidebar</span><span>&lt</span><span class="tag-name">/h2</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">p</span><span>&gt</span><span> This</span><span> is</span><span> the</span><span> right-hand</span><span> sidebar</span><span> of</span><span> the</span><span>page.</span><span>&lt</span><span class="tag-name">/p</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">ul</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">li</span><span>&gt</span><span>A</span><span>&lt</span><span class="tag-name">/li</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">li</span><span>&gt</span><span>B</span><span>&lt</span><span class="tag-name">/li</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/ul</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>

<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">div</span> <span class="property-name">id</span><span>=</span><span class="literal">"footer"</span><span class="property-name"> class</span><span>=</span><span class="literal">"flex-column align-items-center"</span><span class="property-name"></span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">p</span><span>&gt</span><span>Footer</span><span>&lt</span><span class="tag-name">/p</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/div</span><span>&gt</span>
<span> </span><span> </span><span> </span><span> </span><span>&lt</span><span class="tag-name">/body</span><span>&gt</span>
<span>&lt</span><span class="tag-name">/html</span><span>&gt</span>
                        </pre></div>

                        <div class="offset-md-1">
                            <h2>CSS</h2>
<pre class="code"><span>.flex-column {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
}

.flex-row {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
}

.align-items-center {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}

.justify-content-center {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
}

#page-content {
    background-color: aliceblue;
}

#title {
    background-color: #0088fe;
    text-align: center;
    border-radius: 5px;
    width: 100%;
}

#navbar {
    background-color: lightgreen;
    border-radius: 5px;
    width: 95%;
    margin: 10px;
}

#navbar a {
    margin: 5px;
    padding: 10px;
    color: blue;
}

#navbar a:hover {
    background-color: rgb(200, 233, 200);
}

#main-content div {
    border-radius: 5px;
    border: 2px solid black;
    padding: 10px;
    margin: 10px;
}

#main-content-1 {
    background-color: cyan;
}

#main-content-2 {
    background-color: purple;
    color: white;
}

#footer {
    width: 100%;
    background-color: lightsalmon;
    border-radius: 5px;
}</span></pre></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include("../../footer.php"); ?>
    </body>
</html>