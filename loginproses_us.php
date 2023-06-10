<?php
include('koneksi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$insert_sql = mysqli_query($conn, "INSERT INTO `pengguna`(`id_user`, `Username`, `Password`) VALUES (' ','$username','$password')");
header ("location: loginuser.php");

?>