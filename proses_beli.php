<?php
    include "koneksi.php";
    $harga = $_POST['Bayar'];
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $alamat = $_POST['Alamat'];
    $provinsi = $_POST['Provinsi'];
    $kabupaten = $_POST['Kabkot'];
    $pembayaran = $_POST['Bank'];
    $rekening = $_POST['Rekening'];
    $hp = $_POST['Hp'];
    $kategori = $_POST['Kategori'];
    $nambar = $_POST['Nambar'];
    $input = mysqli_query($koneksi, "INSERT INTO pembeli (nama, email, alamat, provinsi, kabupaten_kota, no_hp, metode_pembayaran, rekening, bayar, kategori, nama_barang) 
    VALUES('$nama', '$email', '$alamat', '$provinsi', '$kabupaten', '$hp', '$pembayaran', '$rekening', '$harga', '$kategori', '$nambar')");
    header("location:index_customer.php");
?>
