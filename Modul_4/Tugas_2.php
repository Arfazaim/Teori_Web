<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemesanan Seblak</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Pemesanan Seblak</h2>
        <form action="process_order.php" method="POST">
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea id="alamat" name="alamat" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="jumlah">Jumlah Porsi:</label>
                <input type="number" id="jumlah" name="jumlah" min="1" required>
            </div>
            
            <div class="form-group">
                <label for="topping">Topping:</label>
                <select id="topping" name="topping">
                    <option value="keju">Keju</option>
                    <option value="telur">Telur</option>
                    <option value="sosis">Sosis</option>
                    <option value="kerupuk">Kerupuk</option>
                </select>
            </div>
            
            <div class="form-group">
                <label for="level">Level Pedas:</label>
                <div class="radio-group">
                    <input type="radio" id="level1" name="level" value="1" checked>
                    <label for="level1">1</label>
                    <input type="radio" id="level2" name="level" value="2">
                    <label for="level2">2</label>
                    <input type="radio" id="level3" name="level" value="3">
                    <label for="level3">3</label>
                </div>
            </div>
            
            <input type="submit" value="Pesan">
        </form>
    </div>
</body>
</html>