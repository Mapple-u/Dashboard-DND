<!DOCTYPE html>
<html>
<head>
    <title>Input Data Transaksi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-data">

    <div class="aksi-table">
        <h2>Input Data Transaksi</h2>

        <form action="transaksi-input-aksi.php" method="post">
            <table>
                <tr>
                    <td>ID Transaksi</td>
                    <td><input type="text" name="ID_Transaksi"></td>
                </tr>
                <tr>
                    <td>ID Barang</td>
                    <td><input type="text" name="ID_Barang"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="Harga"></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="text" name="qty"></td>
                </tr>
                <tr>
                    <td>Harga Total</td>
                    <td><input type="text" name="harga_total"></td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td><input type="text" name="NIP"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>