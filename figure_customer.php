<?php
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT * FROM af");
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
        <form name="form1" method="post" action="" id="form4">
            <table rules="none" width="700" align="left" cellspacing="1" >
                <tr>
					<th align="center" bgcolor="#a9a9a9">Nama Action Figure</th>
					<th align="center" bgcolor="#a9a9a9">Harga</th>
					<th align="center" bgcolor="#a9a9a9">Keterangan</th>
					<th align="center" bgcolor="#a9a9a9"></th>
				</tr>
                <?php
					while($data = mysqli_fetch_array($query)) {
				?>
						<tr>
                            <td align="center" bgcolor= "#a9a9a9"  height="50px"><?php echo $data['nama']?></td>								
                            <td align="center" bgcolor= "#a9a9a9" ><?php echo "Rp. "; echo $data['harga']?></td>
							<td align="center" bgcolor= "#a9a9a9" ><?php echo $data['keterangan']?></td>
							<td align="center" bgcolor= "#a9a9a9" ><a href="beli_figure.php?id=<?php echo $data['id']; ?>" class="beli">Beli</a></td>
						</tr>
				<?php
					}
                ?>
            </table>
        </form>
    </Body>
</html>
