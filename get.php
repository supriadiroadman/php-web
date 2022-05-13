<?php
// http://localhost:8080/get.php?name=supriadi
// http://localhost:8080/get.php?name=<script>alert('Anda di Hack')</script>

$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>