<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $db = "penjualan";
    $koneksi = mysqli_connect($host,$username,$password) or die("Koneksi Gagal");
    mysqli_select_db($koneksi,$db) or die("Database Tidak Tersedia");
?>
