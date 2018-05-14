<?php
  //memanggil db_con.php untuk melakukan koneksi ke database
	include "db_con.php";
?>
<html>
	<head>
		<title>Laporan Penjualan</title>
	</head>
	<body>
		<h1>Laporan Penjualan</h1>
		<table border="1">
			<tr>
				<td width="100px">ID Barang</td>
				<td width="150px">Nama Barang</td>
				<td width="100px">View</td>
			</tr>
			<?php
				//melakukan query untuk mendapatkan data dari database penjualan
				$query = "select * from penjualan";
				$hasil = mysql_query($query);
				
				if ($hasil === FALSE) {
					die(mysql_error());
				}
				while ($baris=mysql_fetch_array($hasil)) {
			?>
			<tr>
				<!--
				Menampilkan Hasil query dalam tabel
				-->
				<td><?php echo $baris['id_barang'] ?></td>
				<td><?php echo $baris['nama_barang'] ?></td>
				<!--
				Mengirimkan infomasi berupa id barang untuk menampilkan chart secara spesifik menggunakan metode get
				-->
				<td><a href="chart.php?id_barang=<?php echo $baris['id_barang'] ?>">Chart !</a></td>
				<?php } ?>
			</tr>
		</table>
	</body>
</html>
