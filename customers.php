<?php
	include "koneksi.php";
	$query = mysqli_query($koneksi, "SELECT * FROM pembeli");
?>
<html>
    <head>
    <title>Marvel DC</title>
       <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <img id = "image1" src="marvel.jpg" style="float:left" width="100"/><h1>  MARVEL DC UNIVERSITY</h1>
        <ul class="topnave">
            <li><a href="admin.php">Home</a></li>
            <li><a href="comics.php">Comics</a></li>
            <li><a href="dvd.php">DVD</a></li>
            <li><a href="af.php">Action figure</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
        <form name="form5" method="post" action="" id="form5">
            <table rules="none" width="1200" align="left" cellspacing="1" >
                <tr>
					<th align="center" bgcolor="#a9a9a9">Nama</th>
					<th align="center" bgcolor="#a9a9a9">Email</th>
                    <th align="center" bgcolor="#a9a9a9">Alamat</th>
                    <th align="center" bgcolor="#a9a9a9">Provinsi</th>
					<th align="center" bgcolor="#a9a9a9">Kabupaten/Kota</th>
                    <th align="center" bgcolor="#a9a9a9">No Hp</th>
                    <th align="center" bgcolor="#a9a9a9">No Rekening</th>
                    <th align="center" bgcolor="#a9a9a9">Metode Pembayaran</th>
                    <th align="center" bgcolor="#a9a9a9">Kategori</th>
                    <th align="center" bgcolor="#a9a9a9">Nama Barang</th>
					<th align="center" bgcolor="#a9a9a9">Total Pembayaran</th>
                    <th align="center" bgcolor="#a9a9a9"></th>
				</tr>
                <?php
					while($data = mysqli_fetch_array($query)) {
				?>
						<tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><?php echo $data['nama']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['email']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['alamat']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['provinsi']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['kabupaten_kota']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['no_hp']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['rekening']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['metode_pembayaran']?></td>
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['kategori']?></td>	
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo $data['nama_barang']?></td>							
                            <td align="center" bgcolor= "#a9a9a9" width="100"><?php echo "Rp. "; echo $data['bayar']?></td>
						    <td align="center" bgcolor= "#a9a9a9" width="100"><a href="delete_customers.php?id=<?php echo $data['id']; ?>" class="beli">Delete</a></td>
						</tr>
				<?php
					}
                ?>
            </table>
        </form>
    </Body>
</html>
