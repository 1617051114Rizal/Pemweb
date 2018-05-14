<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM af WHERE id = '$id'");
    if($delete){
        header("location:af.php");
    }
?>
