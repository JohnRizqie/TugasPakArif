<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kasir Toko Jagat Raya</title>
</head>
<body>
    <h2>Program Kasir Toko Jagat Raya</h2>
    <form method="post">
        <label>Total Belanja ( Rp )</label><br>
        <input type="number" name="totalBelanja" required><br><br>

        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $totalBelanja = $_POST['totalBelanja'];

        if ($totalBelanja >= 500000) {
            $diskon = 15;
        } elseif ($totalBelanja >= 200000) {
            $diskon = 5;
        } else {
            $diskon = 0;
        }

        $potongan = ($diskon / 100) * $totalBelanja;
        $totalBayar = $totalBelanja - $potongan;

        echo "<hr>";
        echo "<h3>Hasil Perhitungan</h3>";
        echo "Total Belanja : Rp " . number_format($totalBelanja, 0, ',', '.') . "<br>";
        echo "Diskon : $diskon %<br>";
        echo "Potongan Harga : Rp " .  number_format($potongan, 0, ',', '.') . "<br>";
        echo "Total Bayar : Rp " . number_format($totalBayar, 0, ',', '.');
    }
    ?>
</body>
</html>