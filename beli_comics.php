<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM komik WHERE id = '$id'");
    $data = mysqli_fetch_array($query)
?>
        <html>
            <head>
                <title>Marvel DC</title>
                <link href="style.css" rel="stylesheet">
            </head>
            <body>
                <form action = "proses_beli.php" method = "post" id = "form6">
                    <h3 align = "center">Form Pengiriman</h3>
                    <input type = "hidden" name = "id" value = "<?php echo $data['id'];?>"> <br>
                    <table rules="none" width="500" align="left" cellspacing="1" >
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Alamat Email</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Email" id = "input"></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Nama Lengkap</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Nama" id = "input"</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Alamat</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Alamat" id = "input"</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Provinsi</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Provinsi" id = "input"</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Kabupaten/Kota</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Kabkot" id = "input"</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">No Hp</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Hp" id = "input"</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Metode Pembayaran</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Bank" id = "input" readonly value = "Transfer Bank"</td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Nomor Rekening</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Rekening" id = "input"></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Jumlah Bayar</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Kategori" id = "input" readonly value = "Komik"></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Nama Barang</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Nambar" id = "input" readonly value = "<?php echo $data['nama'];?>"></td>
                        </tr>
                        <tr>
                            <td align="center" bgcolor= "#a9a9a9" width="100" height="50px"><label for="Nama">Jumlah Bayar</label></td>
                            <td align="center" bgcolor= "#a9a9a9" width="400" height="50px"><input type = "text" name = "Bayar" id = "input" readonly value = "<?php echo $data['harga'];?>"></td>
                        </tr>
                        <tr>
                            <td align = "center" width="250"><a href="comics_customer.php" class="beli">Kembali</a></td>
                            <td align = "center"><input type = "submit" value = "Bayar" id = "beli"></td>
                        </tr>
                </form>
            </body>
        </html>
