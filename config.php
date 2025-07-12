<?php
// Konfigurasi database
$host = 'localhost';
$user = 'root';
$pass = 'root'; // atau kosongkan jika password MySQL kamu kosong: ''
$db   = 'topupku';

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// Konfigurasi tambahan
date_default_timezone_set('Asia/Jakarta');
?>
