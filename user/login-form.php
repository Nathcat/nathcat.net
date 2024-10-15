<?php $_SESSION["login-originator"] = dirname($_SERVER["PHP_SELF"]); ?>

<form class="column" method="POST" action="try-login.php">
    <input type="text" name="username" placeholder="Enter username..." />
    <input type="password" name="password" placeholder="Enter password..." />
    <input type="submit" value="Login" />
</form>