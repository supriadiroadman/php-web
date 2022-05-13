<?php
// Akses query string dengan []
// http://localhost:8080/get_array.php?numbers[]=1&numbers[]=5&numbers[]=200
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
?>

<html>
<body>
<h1><?= $total ?></h1>
</body>
</html>