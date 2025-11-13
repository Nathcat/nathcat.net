<?php 
if (!array_key_exists("v", $_GET)) {
    http_response_code(400);
    exit();
}

$v = intval($_GET["v"]);

headers("Content-Type: text/plain");

if ($v < 5) {
    echo "New version available!";
}

?>