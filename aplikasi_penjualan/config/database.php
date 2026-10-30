<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'penjualan';

$koneksi = new mysqli($host, $user, $pass, $db);
if (!$koneksi) {
    die("Koneksi Database gagal: " . mysqli_connect_error());
}
?>