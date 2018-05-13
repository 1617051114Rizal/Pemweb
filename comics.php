<?php
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT * FROM komik");
?>
<html>
    <head>
    <title>Marvel DC</title>
        <link rel="stylesheet" type="text/css" href="style.css">
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
        <form name="form1" method="post" action="" id="form4">
            <table rules="none" width="700" align="left" cellspacing="1" >
                <tr>
					<th align="center" bgcolor="#a9a9a9">Nama</th>
					<th align="center" bgcolor="#a9a9a9">Harga</th>
					<th align="center" bgcolor="#a9a9a9">Keterangan</th>
                    <th align="center" bgcolor="#a9a9a9"></th>
                    <th align="center" bgcolor="#a9a9a9"></th>
				</tr>
                <?php
					while($data = mysqli_fetch_array($query)) {
				?>
						<tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><?php echo $data['nama']?></td>								
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo "Rp. "; echo $data['harga']?></td>
							<td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['keterangan']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><a href="edit_komik.php?id=<?php echo $data['id']; ?>" class="beli">Edit</a></td>
						    <td align="center" bgcolor= "#a9a9a9" width="100"><a href="delete_komik.php?id=<?php echo $data['id']; ?>" class="beli">Delete</a></td>
						</tr>
				<?php
					}
                ?>
            </table>
        </form>
    </Body>
</html>