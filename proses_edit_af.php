<?php
    include "koneksi.php";
    $id = $_POST['id'];
    $nama = $_POST['Nama'];
    $harga = $_POST['Harga'];
    $ket = $_POST['Keterangan'];
    $edit = mysqli_query($koneksi, "UPDATE af SET nama = '$nama', harga = '$harga', keterangan = '$ket' WHERE id = '$id'");
    if($edit){
        header("location:af.php");
    }
?>
