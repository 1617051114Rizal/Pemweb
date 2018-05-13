<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $delete = mysqli_query($koneksi, "DELETE FROM pembeli WHERE id = '$id'");
    if($delete){
        header("location:customers.php");
    }
?>
