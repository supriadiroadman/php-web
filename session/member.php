<?php
session_start();

// Redirect ke login.php jika belum login
if ($_SESSION['login'] != true) {
    header('Location: /session/login.php');
    exit();
}

$say = "Hello ". $_SESSION['username_login'];
?>

<html>
<body>
<h1><?= $say ?></h1>
<a href="/session/logout.php">Logout</a>
</body>
</html>
