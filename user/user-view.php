<h1>Welcome, <?php echo $_SESSION["user"]["fullName"] ?>.</h1>

<div class="content-card">
    <h2>User information</h2>
    <p>Username: <?php echo $_SESSION["user"]["username"] ?></h1></p>
    <p>Email: <?php echo $_SESSION["user"]["email"] ?></h1></p>
</div>

<button onclick="var xhr = new XMLHttpRequest(); xhr.onload = function() { location.reload(); }; xhr.open('GET', 'logout.php', true); xhr.send();">Logout</button>