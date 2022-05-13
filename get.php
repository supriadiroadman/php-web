<?php
// http://localhost:8080/get.php?name=supriadi

$say = "Hello " . $_GET['name'];
?>
<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>