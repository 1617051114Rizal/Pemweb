<?php
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT * FROM dvd");
?>
<html>
    <head>
    <title>Marvel DC</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <img id = "image" src="marvel.jpg" style="float:left" width="100"/><h1>  MARVEL DC UNIVERSITY</h1>
        <ul class="topnav">
            <li><a href="pembeli.php">Home</a></li>
            <li><a href="comics_customer.php">Comics</a></li>
            <li><a href="dvd_customer.php">DVD</a></li>
            <li><a href="figure_customer.php">Action figure</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <form name="form1" method="post" action="" id="form3">
            <img id = "image2" src="marvel_vs_dc.jpg"/>
        </form>
    </Body>
</html>
