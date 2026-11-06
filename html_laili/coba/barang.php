<!DOCTYPE html>
<html>
<head>
  <title>Tabel Barang</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-data">
  <div class="konten-bpt">
    <h2>TABEL BARANG</h2>

    <div class="aksi-tabel">
      <a href="barang-input.php" class="btn-input">
        + Input Data Barang
      </a>
    </div>

    <table class="tabel-bpt">
      <tr>
        <th>Id barang</th>
        <th>Nama barang</th>
        <th>Harga</th>
        <th>Stok</th>
        <th>Aksi</th>
      </tr>

      <?php
      include "koneksi.php";
      $data = mysqli_query($koneksi, "SELECT * FROM barang");

      while ($tampil = mysqli_fetch_array($data)) {
      ?>
        <tr>
          <td><?php echo $tampil['id_barang']; ?></td>
          <td><?php echo $tampil['nama_barang']; ?></td>
          <td><?php echo $tampil['harga']; ?></td>
          <td><?php echo $tampil['stok']; ?></td>

        <td>
            <a href="barang-edit.php?id=<?php echo $tampil['id_barang']; ?>">
                Edit
            </a>

            <a href="barang-hapus.php?id_barang=<?php echo $tampil['id_barang']; ?>"
              onclick="return confirm('Yakin ingin menghapus barang ini?')">
                Delete
            </a>
            </a>
        </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
</body>

</html>
