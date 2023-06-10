<?php include("inc_header_us.php") ?>
<?php
$katakunci = (isset($_GET['katakunci'])) ? $_GET['katakunci'] : ""; 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Catalog</h1>
<form class="row g-2" methode="get">
    <div class="col-auto">
        <input type="text" class="form-control" placeholder="Masukan Kata Kunci" name="katakunci" value="<?php echo $katakunci ?>" />
    </div>
    <div class="col-auto">
        <input type="submit" name="cari" value="Cari Produk" class="btn btn-secondary" />
    </div>
</form>
<table class="table table-striped"><br>
        <tr>
            <th class="col-1">ID</th>
            <th>Nama Produk</th>
            <th style="width: 50px;" >Gambar</th>
            <th>Deskripsi</th>
            <th>Aksi</th>
        </tr>

        <?php
        include "koneksi.php";
            $no = 1;
            $ambildata = mysqli_query($conn,"SELECT * from produk");
            while ($tampil = mysqli_fetch_array($ambildata)){ ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $tampil['namaproduk']; ?></td>
                    <td style="width: 50px; padding: 50px" ><img src="<?php echo $tampil['gambar']; ?>" width="240px" ></td>
                    <td><?php echo $tampil['deskripsi']; ?></td>
                    <td><button type="button" class="btn btn-primary" value="Beli"><a href="suksesbeli.php" style="color: #FFFFFF;">Beli</a></button></td>
                </tr>

            <?php $no++;
            }
                ?>
                
</table>
<?php include("inc_footer.php") ?>
</body>
</html>
