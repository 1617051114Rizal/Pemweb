<?php
    include "koneksi.php";
    $nama = $_POST['Nama'];
    $harga = $_POST['Harga'];
    $ket = $_POST['Keterangan'];
    $input = mysqli_query($koneksi, "INSERT INTO komik (nama, harga, keterangan) VALUES('$nama', '$harga', '$ket')");
    if($input){
        header("location:index.php");
    }
?>
