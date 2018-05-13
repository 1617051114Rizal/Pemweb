<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM dvd WHERE id = '$id'");
    if($delete){
        header("location:dvd.php");
    }
?>
