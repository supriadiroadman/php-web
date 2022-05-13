<?php
// Mengirim header.
// gunakan postman di tab header
// header akan menambahkan prefix HTTP_
// Jadi, dari postman cukup krirm key nya Client_Name dan Value Supriadi
header('Application: Belajar PHP Web');
header('Author: Supriadi Roadman');

$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello $client";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";