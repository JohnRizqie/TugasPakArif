<?php
$voucherDb = [
    [
        "kode" => "RPLJUARA", 
        "potongan" => 50000, 
        "min_belanja" => 150000, 
        "kuota" => 10
    ],
    [
        "kode" => "HEMATTERUS", 
        "potongan" => 20000, 
        "min_belanja" => 50000, 
        "kuota" => 0 // <-- Perhatikan, kuota habis!
    ],
    [
        "kode" => "KILAT", 
        "potongan" => 10000, 
        "min_belanja" => 20000, 
        "kuota" => 50
    ]
];
$pesan = "";
$warna = "";
$totalBayar = "";

if (isset($_POST['cek_voucher'])) {
    // MENERIMA INPUT DARI FORM HTML
    $inputUser = strtoupper($_POST['kode_input']);
    $totalBelanja = $_POST['total_belanja'];
    // VARIABEL BENDERA (Boolean Flag)
    $ketemu = false; 
    // 2. LOOPING: Pencarian Linear
    foreach ($voucherDb as $voucher) {
        if ($inputUser == $voucher["kode"]) {
            $ketemu = true;

            if ($voucher["kuota"] > 0) {
                if ($totalBelanja >= $voucher["min_belanja"]) {
                    $totalBayar = $totalBelanja - $voucher["potongan"];
                    if ($totalBayar < 0) {
                        $totalBayar = 0;
                    }
                    $pesan = "Hore, Voucher valid!, Total Bayar Akhir: Rp" . number_format($totalBayar, 0, ',', '.');
                    $warna = "green";
                } else {
                    $pesan = "Minimal belanja tidak terpenuhi.";
                    $warna = "red";
                }
            } else {
                $pesan = "Maaf, kuota voucher habis.";
                $warna = "red";
            }

            break;
        }
    }

    if ($ketemu == false) {
        $pesan = "Voucher tidak valid.";
        $warna = "red";
    }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo Web 2.0</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; }
        input { padding: 10px; text-transform: uppercase; }
        button { padding: 10px; background: blue; color: white; border: no }
    </style>
</head>
<body>
    <h2>Masukkan Kode Voucher</h2>
    <form method="POST">
        <input type="text" name="kode_input" required>
        <input type="number" name="total_belanja" required>
        <button type="submit" name="cek_voucher">Check Voucher</button>
    </form>
    <h3 style="color: <?php echo $warna; ?>;"><?php echo $pesan; ?></h3>
</body>
</html>