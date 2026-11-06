<html>

<head>
  <title> tabel transaksi</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-data">
  <div class="konten-bpt">
  <h2>TABEL TRANSAKSI</h2>
    <div class="aksi-tabel">
      <a href="transaksi-input.php" class="btn-input">
        + Input Data Transaksi
      </a>
    </div>
  <table class="tabel-bpt">
    <tr>
      <th>ID Transaksi</th>
      <th>ID Barang</th>
      <th>Quantity</th>
      <th>Harga Total</th>
      <th>NIP</th>
    </tr>
    <?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM transaksi");
    while ($tampil = mysqli_fetch_array($data)) {
      ?>
      <tr>
        <td><?php echo $tampil['id_transaksi']; ?></td>
        <td><?php echo $tampil['id_barang']; ?></td>
        <td><?php echo $tampil['qty']; ?></td>
        <td><?php echo $tampil['harga_total']; ?></td>
        <td><?php echo $tampil['nip']; ?></td>
      </tr>
      <?php
    }
    ?>
  </table>
  </div>
</body>

</html>