<?php
include 'pages/koneksiorders.php';
$id_produk = $_POST['id_produk'];
$harga = $_POST['harga'];
$date = $_POST['date'];

mysqli_query($dbconnect, "INSERT INTO orders (id_produk, harga, `date`) VALUES ('$id_produk', '$harga', '$date')");

header('location: index.php?pages=orders');
exit;
?>
