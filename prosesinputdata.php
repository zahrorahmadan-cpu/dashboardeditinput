
<?php
include 'pages/koneksi.php';

$nama = $_POST['nama'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = mysqli_query($dbconnect, "INSERT INTO produk (nama_barang, harga, stok) VALUES ('$nama', '$harga', '$stok')");

header('location: index.php?pages=products');
exit;
?>
