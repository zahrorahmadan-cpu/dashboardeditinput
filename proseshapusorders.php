<?php
include 'pages/koneksiorders.php';
$id = $_GET['id'];
mysqli_query($dbconnect, "DELETE FROM orders WHERE id_order = $id");
header('location: index.php?pages=orders');

?>
