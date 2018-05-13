<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $query = mysqli_query($koneksi, "SELECT * FROM dvd WHERE id = '$id'");
    $data = mysqli_fetch_array($query)
?>
        <html>
            <head>
            <title>Marvel DC</title>
                <link href="style.css" rel="stylesheet">
            </head>
            <body>
                <form action = "proses_edit_dvd.php" method = "post" id = "form1">
                    <input type = "hidden" name = "id" value = "<?php echo $data['id'];?>">
                    <h3 align = "center">Form Mengubah Data DVD</h3>
                    <table rules="none" width="500" align="left" cellspacing="1" >
                        <tr>
                            <td align="center" width="100" height="50px"><label for="Nama">Nama</label></td>
                            <td align="center" width="400" height="50px"><input type = "text" name = "Nama" id = "input" value = "<?php echo $data['nama'];?>"></td>
                        </tr>
                        <tr>
                            <td align="center" width="100" height="50px"><label for="Harga">Harga</label></td>
                            <td align="center" width="400" height="50px"><input type = "number" name = "Harga" id = "input" value = "<?php echo $data['harga'];?>"> </td>
                        </tr>
                        <tr>
                            <td align="center" width="100" height="50px"><label for="Keterangan">Keterangan</label></td>
                            <td align="center" width="400" height="50px"><input type = "text" name = "Keterangan" id = "input" value = "<?php echo $data['keterangan'];?>"></td>
                        </tr>
                        <tr>
                            <td align = "center" width="250"><a href="comics.php" class="beli">Kembali</a></td>
                            <td align = "center" width="250"><input type = "submit" value = "Update" id = "beli"></td>
                        </tr>
                    </table>
                </form>
            </body>
        </html>
