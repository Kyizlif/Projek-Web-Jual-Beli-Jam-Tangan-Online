<?php 
    include 'koneksi.php';

if(isset($_GET['Hapus'])){
    $ID = $_GET['Hapus'];
    $query = "DELETE FROM produk WHERE ID = '$ID';";
    $sql = mysqli_query($conn, $query);

    if($sql){
        header("location: halaman.php");
    }else{
        echo $query;
    }
}

?>