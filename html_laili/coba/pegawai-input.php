<!DOCTYPE html>
<html>

<head>
  <title>Input Data Pegawai</title>
  <link rel="stylesheet" href="style.css">
</head>

<body class="halaman-data">

  <div class="aksi-table">
    <h2>Input Data Pegawai</h2>

    <form action="pegawai-input-aksi.php" method="post">
      <table>
        <tr>
          <td>NIP</td>
          <td><input type="text" name="NIP"></td>
        </tr>
        <tr>
          <td>Nama Pegawai</td>
          <td><input type="text" name="Nama"></td>
        </tr>
        <tr>
          <td>Alamat</td>
          <td><input type="text" name="Alamat"></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="Username"></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="password" name="password"></td>
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