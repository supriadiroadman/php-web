<?php

// Jika mengirim query paramater di url dengan key password == rahasia
// http://localhost:8080/download/download.php?password=rahasia

if (isset($_GET['password']) && $_GET['password'] == 'rahasia') {
    // echo "Sukses mengirim key";
    // Untuk download
    header('Content-Disposition: attachment; filename="gambar.jpg"');
    // Optional
    header('Content-Type: image/jpeg');
    // Baca file
    readfile(__DIR__ . '/../uploads/files/profile.jpg');
    exit();
} else {
    echo "Gagal mengirim key";
}
