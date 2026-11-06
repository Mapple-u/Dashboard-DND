<?php
include "koneksi.php";

$id_barang = $_GET['id_barang'] ?? '';

if ($id_barang === '') {
    header("Location: barang.php");
    exit;
}

$stmt = mysqli_prepare($koneksi, "DELETE FROM barang WHERE id_barang = ?");

mysqli_stmt_bind_param($stmt, "s", $id_barang);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    header("Location: barang.php");
    exit;
}

mysqli_stmt_close($stmt);
die("Data gagal dihapus. Barang mungkin masih digunakan dalam transaksi.");
?>