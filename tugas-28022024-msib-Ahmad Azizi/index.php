<?php

require_once 'ProdukMakanan.php';
require_once 'Snack.php';
require_once 'Minuman.php';

// Objek Snack dan Minuman
$snack = new Snack('Keripik', 10000, 150);
$minuman = new Minuman('Soda', 5000, 500);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Pembayaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        h1, h2 {
            text-align: center;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Struk Pembayaran</h1>

    <h2>Detail Snack:</h2>
    <p><?php echo $snack->tampilkan(); ?></p>

    <h2>Detail Minuman:</h2>
    <p><?php echo $minuman->tampilkan(); ?></p>

    <hr>

    <h2>Total Pembayaran:</h2>
    <p>Total: <?php echo number_format($snack->getHarga() + $minuman->getHarga(), 2); ?></p>

    <p>Terima kasih atas pembelian Anda!</p>
</body>
</html>
