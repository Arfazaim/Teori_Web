<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Pemesanan</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Terima Kasih!</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jumlah = $_POST['jumlah'];
            $topping = $_POST['topping'];
            $level = $_POST['level'];

            echo "<p>Terima kasih atas pemesanan Anda, $nama!</p>";
            echo "<p>Alamat pengiriman: $alamat</p>";
            echo "<p>Jumlah porsi: $jumlah</p>";
            echo "<p>Topping: $topping</p>";
            echo "<p>Level pedas: $level</p>";
            echo "<p>Terima kasih telah memesan seblak.</p>";
        } else {
            echo "<p>Error: Metode tidak diizinkan.</p>";
        }
        ?>
    </div>
</body>
</html>