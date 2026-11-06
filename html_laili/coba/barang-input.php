<!DOCTYPE html>
<html>

<head>
  <title>Input Data Barang</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-data">

  <div class="aksi-table">
    <h2>Input Data Barang</h2>

    <form action="barang-input-aksi.php" method="post">
      <table>
        <tr>
          <td>Id Barang</td>
          <td><input type="text" name="id_barang"></td>
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td><input type="text" name="nama_barang"></td>
        </tr>
        <tr>
          <td>Harga Barang</td>
          <td><input type="number" name="harga"></td>
        </tr>
        <tr>
          <td>Stok</td>
          <td><input type="number" name="stok"></td>
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