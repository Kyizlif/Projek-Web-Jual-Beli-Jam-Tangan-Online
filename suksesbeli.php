<?php include("inc_header_us.php") ?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="halamanuser.php">
        << Kembali</a>
</div>
<form action="inputprogres.php" method="post">
    <div class="mb-3 row">
        <label for="Judul" class="col-sm-2 col-form-label">Nama Pembeli</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="Nama produk" value=" ">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="gambar" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <input type="url" class="form-control" id="Gambar" value=" ">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="Deskripsi" class="col-sm-2 col-form-label">No Telepon</label>
        <div class="col-sm-10">
            <textarea name="Deskripsi" class="form-control"></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
            <button type="submit" name="simpan" class="btn btn-primary"> <a href="halamanuser.php" onclick="return confirm('Terimakasih Telah Membeli Produk Ini!')" style="color: #FFFFFF;">Beli Sekarang</button>
        </div>
    </div>
</form>
<?php include("inc_footer.php") ?>