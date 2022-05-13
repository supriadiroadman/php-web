<?php
//http://localhost:8080/get_multiple.php?first_name=Supriadi&last_name=Roadman

$say = "Hello ". $_GET['first_name']." ".$_GET['last_name'];
?>

<html>
<body>
<h1><?= $say ?></h1>
</body>
</html>
