<?php 
if (!array_key_exists("v", $_GET)) {
    http_response_code(400);
    exit();
}

$v = intval($_GET["v"]);

header("Content-Type: text/plain");

if ($v < 2) {
    echo "New version available!";
}
else {
    echo "N/A"
}

?>