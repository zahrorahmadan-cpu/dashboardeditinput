<?php
include 'pages/koneksi.php';
$id=$_GET['id'];
mysqli_query($dbconnect, "DELETE FROM produk WHERE `produk`.`id` = $id ");

header('location: index.php?pages=products');
?>