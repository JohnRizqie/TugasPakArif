<?php

$namaKaryawan = "Ucup";
$jumlahPenjualan = 55;

if ($jumlahPenjualan >= 70) {
    $bonus = 700000;
} elseif ($jumlahPenjualan >= 20) {
    $bonus = 300000;
} else {
    $bonus = 0;
}

echo "<h2>Program Bonus Karyawan</h2>";
echo "Nama Karyawan : $namaKaryawan <br>";
echo "Jumlah Penjualan : $jumlahPenjualan Unit <br>";
echo "Bonus Bulanan : Rp " . number_format($bonus, 0, ',', '.');

?>