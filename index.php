<?php
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT * FROM komik");
?>
<html>
    <head>
    <title>Marvel DC</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <img id = "image" src="marvel.jpg" style="float:left" width="100"/><h1>  MARVEL DC UNIVERSITY</h1>
        <ul class="topnav">
            <li><a href="index.php">Home</a></li>
            <li><a href="comics.php">Comics</a></li>
            <li><a href="dvd.php">DVD</a></li>
            <li><a href="af.php">Action figure</a></li>
            <li><a href="customers.php">Customers</a></li>
        </ul>
        <form  name="form1" method="post" action="" id = "form3">
            <br><br>
            <a href="input_komik.php" class="beli1">Tambah Data Komik</a>
            <a href="input_af.php" class="beli1">Tambah Data Action Figure</a>
            <a href="input_dvd.php" class="beli1">Tambah Data DVD</a>
        </form>
    </Body>
</html>