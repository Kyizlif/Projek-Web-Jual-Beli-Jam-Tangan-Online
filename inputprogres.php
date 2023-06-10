<?php
include('koneksi.php');

$namaproduk = $_POST['NamaProduk'];
$gambar = $_POST['Gambar'];
$deskripsi = $_POST['Deskripsi'];

$insert_sql = mysqli_query($conn, "INSERT INTO `produk`(`ID`, `namaproduk`, `gambar`, `deskripsi`) VALUES ('','$namaproduk','$gambar','$deskripsi')");
header ("location: halaman_input.php");

?>