<?php
require "koneksi.php";

if (isset($_GET['id'])) {
    $namaproduk = $_GET['namaproduk'];
    $query = "SELECT * FROM pengguna WHERE namaproduk = '$namaproduk'";
    $result = mysqli_query($db, $query);
    $tampil = mysqli_fetch_assoc($result);
}

if (isset($_POST['update'])) {
    $namaproduk = $_POST['namaproduk'];
    $gambar = $_POST['gambar'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE produk SET
                gambar = '$gambar',
                deskripsi = '$deskripsi',
              WHERE namaproduk = '$namaproduk'";

    if (mysqli_query($db, $query)) {
        echo "Data produk telah diperbarui";
        echo "<script>window.location='halaman.php';</script>";
    } else {
        echo "Terjadi kesalahan: " . mysqli_error($db);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Pengguna</title>
</head>
<body>
    <h1>Edit Data Pengguna</h1>
    <form action="" method="post">
        <label for="namaproduk">Nama Produk:</label><br>
        <input type="text" name="nama" id="namaproduk" autocomplete="off" value="<?php echo $tampil;['namaproduk']; ?>"><br>

        <label for="gambar">Gambar:</label><br>
        <input type="url" name="username" id="gambar" autocomplete="off" value="<?php echo $tampil;['gambar']; ?>"><br>

        <label for="deskripsi">Deskripsi:</label><br>
        <input type="text" name="password" id="deskripsi" autocomplete="off" value="<?php echo $tampil;['deskripsi']; ?>"><br>

        <button type="submit" name="update">Update Data</button>
    </form>
</body>
</html>