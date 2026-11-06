<html>

<head>
  <title> tabel pegawai</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-data">
  <div class="konten-bpt">
  <h2>TABEL PEGAWAI</h2>
  
    <div class="aksi-tabel">
      <a href="pegawai-input.php" class="btn-input">
        + Input Data Pegawai
      </a>
    </div>

  <table class="tabel-bpt">
    <tr>
      <th>NIP</th>
      <th>Nama Pegawai</th>
      <th>Alamat</th>
      <th>Username</th>
      <th>Password</th>
    </tr>
    <?php
    include "koneksi.php";
    $data = mysqli_query($koneksi, "SELECT * FROM pegawai");
    while ($tampil = mysqli_fetch_array($data)) {
      ?>
      <tr>
        <td><?php echo $tampil['nip']; ?></td>
        <td><?php echo $tampil['nama']; ?></td>
        <td><?php echo $tampil['alamat']; ?></td>
        <td><?php echo $tampil['username']; ?></td>
        <td><?php echo $tampil['password']; ?></td>
      </tr>
      <?php
    }
    ?>
  </table>
  </div>
</body>

</html>