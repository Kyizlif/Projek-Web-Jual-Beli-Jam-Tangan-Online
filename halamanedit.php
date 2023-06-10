<?php include("inc_header.php") ?>
<?php
    session_start();
    include "koneksi.php";
    $ID=$_GET['kode'];
    $sql=mysqli_query($conn,"SELECT * FROM produk WHERE ID=$ID");
    $data=mysqli_fetch_array($sql);

    if(isset($_POST['simpan'])){
        $namaproduk = $_POST['NamaProduk'];
        $gambar = $_POST['Gambar'];
        $deskripsi = $_POST['Deskripsi'];

        $query = "UPDATE `produk` SET `namaproduk`='$namaproduk',`gambar`='$gambar',`deskripsi`='$deskripsi' WHERE ID = $ID";
        $update = mysqli_query($conn, $query);
        if($update){
            echo "<script>
            alert('TRUE');
            window.location.href = 'halaman.php';
            </script>";

        }
    }
    
?>
<h1>Halaman Admin Edit Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali ke halaman admin</a>
</div>
<form action="" method="post">
    <div class="mb-3 row">
        <label for="namaproduk" class="col-sm-2 col-form-label">Nama produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Nama produk" value="<?php echo $data['namaproduk']; ?>" name="NamaProduk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <input type="url" class="form-control" id="Gambar" value="<?php echo $data['gambar']; ?>" name="Gambar">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <textarea name="Deskripsi" class="form-control" name="Deskripsi"><?php echo $data['deskripsi']; ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary">Simpan Pengubahan Produk</button>
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>

