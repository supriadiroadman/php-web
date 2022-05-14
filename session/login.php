<?php
session_start();

// Redirect ke member.php jika sudah login
if (isset($_SESSION['login'])) {
    if ($_SESSION['login'] == true) {
        header('Location: /session/member.php');
        exit();
    }
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if ($_POST['username'] == "admin" && $_POST['password'] == "123") {
        // Sukses login
        $_SESSION['login'] = true;
        $_SESSION['username_login'] = 'admin';
        header('Location: /session/member.php');
        exit();
    } else {
        // Gagal login
        $error = 'Login gagal';
    }
}
?>

<html>
<body>
<form action="/session/login.php" method="post">
    <?php if ($error != ""): ?>
    <h2><?= $error ?></h2>
    <?php endif; ?>
    <label>
        Username:
        <input type="text" name="username">
    </label>
    <br>
    <label>
        Password:
        <input type="password" name="password">
    </label>
    <br>
    <input type="submit" value="Login">
</form>
</body>
</html>