<?php
include 'pages/koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($dbconnect, "UPDATE `produk` SET `nama_barang` = '$nama', `harga` = '$harga', `stok` = '$stok' WHERE `produk`.`id` = $id;");

header('location: index.php?pages=products');
exit;
?>
