<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    <?php
    include "new.css";
    ?>
    </style>
    <title>Tambah Data</title>
</head>
<body>
    <div class="sidebar">
        <img src="sad.jpg" alt="swd">
            <div class="nav">
                <h1>Kswdx</h1>
                <a href="new.php"><b>Data Siswa</b></a>
                <br><br>
                <br>
                <a href="barang1.php"><b>Data Barang</b></a>
            </div>
            <div class="new">
        <form action="sid.php" method="post">
            <table class="oiu">
                <tr>
                    <td><label class="ok">No : </label></td>
                    <td><input class="input" required="required" type="number" name="no"></td>
                </tr>
                <tr>
                    <td><label class="ok">NISN : </label></td>
                    <td><input class="input" required="required" type="number" name="nisn"></td>
                </tr>
                <tr>
                    <td><label class="ok">Nama Siswa : </label></td>
                    <td><input required="required" class="input" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td><label class="ok">Tanggal : </label></td>
                    <td><input class="input" required="required" type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td><label class="ok">Barang yang dipinjam : </label></td>
                    <td><input class="input" required="required" type="text" name="barang_yang_dipinjam"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="simpan" class="oj"></td>
                </tr>
            </table>
    </div>    
</body>
</html>