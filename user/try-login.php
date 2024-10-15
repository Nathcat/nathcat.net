<?php
session_start();

if (!(array_key_exists("username", $_POST) && array_key_exists("password", $_POST))) {
    die("Invalid request");
}
else if ($_POST["username"] == "" || $_POST["password"] == "") {
    $_SESSION["login-error"] = "Please provide both username and password.";
    header("location:" . $_SESSION["login-originator"]);
}

$DB_server = "data.nathcat.net:3306";
$DB_user = "sso";
$DB_pass = "sso";
$DB_schema = "Users";

$conn = new mysqli($DB_server, $DB_user, $DB_pass, $DB_schema);

if ($conn->connect_error) {
    die("Connection to data server failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("SELECT * FROM Users WHERE username LIKE ?");
$stmt->bind_param("s", $_POST["username"]);
$stmt->execute();
$result = $stmt->get_result();

$pass_hash = hash("sha256", $_POST["password"]);
$DB_r = $result->fetch_assoc();

if ($DB_r["password"] == $pass_hash) {
    $_SESSION["user"] = $DB_r;
    unset($_SESSION["login-error"]);
}
else {
    $_SESSION["login-error"] = "Incorrect username / password combination.";
}

$conn->close();
header("location:" . $_SESSION["login-originator"]);
?>