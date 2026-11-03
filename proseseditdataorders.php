<?php
include 'pages/koneksiorders.php';

$id_order = $_POST['id_order'];
$id_produk = $_POST['id_produk'];
$harga = $_POST['harga'];
$date = $_POST['date'];

mysqli_query($dbconnect, "UPDATE orders SET id_produk = '$id_produk', harga = '$harga', `date` = '$date' WHERE id_order = $id_order");

header('location: index.php?pages=orders');
exit;
?>
