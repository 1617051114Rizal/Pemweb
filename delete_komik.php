<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM komik WHERE id = '$id'");
    if($delete){
        header("location:comics.php");
    }
?>
