<?php
include "koneksi.php";
$NIP = $_POST['NIP'];
$Nama = $_POST['Nama'];
$Alamat = $_POST['Alamat'];
$Username = $_POST['Username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO pegawai VALUES ('$NIP', '$Nama', '$Alamat', '$Username', '$password')");

header("location:pegawai.php?pesan=input");