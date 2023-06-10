<?php
include('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];
$no_hp = $_POST['NoHP'];
$alamat = $_POST['Alamat'];

$insert_sql = mysqli_query($conn, "INSERT INTO `user`(`id`, `username`, `no_hp`, `alamat`, `password`) VALUES ('','$username','$no_hp','$alamat','$password')");
header ("location: loginpage.php");

?>