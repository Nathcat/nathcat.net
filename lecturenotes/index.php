<!DOCTYPE html>
<html>
    <head>
        <title>Lecture Notes</title>
        <link rel="stylesheet" href="../static/css/common.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    </head>

    <body>
        <?php

function contents($path, $filter, $prepend) {
    $dir = scandir($path);
    
    foreach($dir as $name) {
        if ($name == "." || $name == "..") continue;

        if (!preg_match($filter, $name)) {
            if (is_dir($path."/$name")) echo "\n";

            echo "$prepend<a href='$path/$name'";
            if (is_dir($path."/$name")) echo" style='font-size: larger; font-weight: bolder;'";
            echo ">$name</a>\n";
        }

        if (is_dir($path."/$name")) {
            contents($path."/$name", $filter, $prepend."\t");
        }
    }
}

include("../header.php");
?>
        <div class="content-card">
            <h2>Lecture notes</h2>
            <p>
                Here you will find my notes for the lectures I attended while studying at the University of Sussex.
            </p>
            <p>
                I have put them here in case they help someone else understand something in those topics. I write my
                notes in a way that helps me understand the topics they are talking about, this might mean that they
                are written differently to how they are given in the lectures.
            </p>
            <p>
                Hopefully, they will help someone understand something in the same way they helped me understand.
            </p>
        </div>        
<?php
$modules_dir = scandir(".");

echo "<div class='content-card'><h2>Contents</h2><pre>";
contents(".", "/php/", "");
echo "</pre></div>";

include("../footer.php");        
        ?>
    </body>
</html>