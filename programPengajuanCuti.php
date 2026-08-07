<?php

$namaKaryawan = "Ucok";
$lamaKerja = 10;
$sisaCuti = 2;

$minimalBulan = 6;
$minimalSisaJatah = 0;

echo "<h2>Program Pengajuan Cuti</h2>";
echo "Nama Karyawan : $namaKaryawan <br>";
echo "Masa Kerja : $lamaKerja Bulan <br>";
echo "Sisa Cuti : $sisaCuti Hari <br><br>";

if ($lamaKerja >= $minimalBulan && $sisaCuti > $minimalSisaJatah) {
    echo "Status : Pengajuan Cuti Disetujui";
} else {
    echo "Status : Pengajuan Cuti Ditolak <br>";
    echo "Alasan : <br>";

    if ($lamaKerja < $minimalBulan) {
        echo "- Masa kerja belum mencapai 6 bulan <br>";
    }

    if ($sisaCuti <= $minimalSisaJatah) {
        echo "- Sisa jatah cuti sudah habis <br>";
    }
}
?>