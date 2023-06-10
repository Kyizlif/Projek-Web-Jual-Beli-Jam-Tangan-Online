<?php include("inc_header.php") ?>
<?php
$namaproduk   = "";
$gambar = "";
$deskripsi     = "";
$error   = "";
$sukse   = "";
?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halaman.php">
        << Kembali ke halaman admin</a>
</div>
<form action="inputprogres.php" method="post">
    <div class="mb-3 row">
        <label for="Judul" class="col-sm-2 col-form-label">Nama produk</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Nama produk" value="<?php echo $namaproduk; ?>" name="NamaProduk">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
        <div class="col-sm-10">
            <input type="url" class="form-control" id="Gambar" value="<?php echo $gambar; ?>" name="Gambar">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
        <div class="col-sm-10">
            <textarea name="Deskripsi" class="form-control" name="Deskripsi"><?php echo $deskripsi; ?></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary">Publish Produk</button>
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>