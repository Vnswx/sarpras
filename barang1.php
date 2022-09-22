<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://kit.fontawesome.com/cc2a263139.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        <?php
        include "ong.css";
        ?>
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <img src="sad.jpg" alt="swd">
            <div class="nav">
                <h1>Kswdx</h1>
                <a href="new.php"><b>Data Siswa</b></a>
                <br><br>
                <br>
                <a href="barang1.php"><b>Data Barang</b></a>
            </div>
        </div>
        
        <div class="new">
            <h1>Data Barang</h1>
            <h4><a href="barang.php">[+] Tambah Baru</a></h4>
            <table cellspacing='0'>
                <tr>
                    <th>No</th>
                    <th>Nama Peminjam</th>
                    <th>Stock Barang</th>
                    <th>Nama Barang</th>
                    <th>Jenis Barang</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $d2 = "SELECT * FROM barang";
                $f2 = mysqli_query($connect, $d2);
                while($r2 = mysqli_fetch_array ($f2)){
                    echo"
                    <tr>
                        <td>$r2[no]</td>
                        <td>$r2[nama_peminjam]</td>
                        <td>$r2[stock_barang]</td>
                        <td>$r2[nama_barang]</td>
                        <td>$r2[jenis_barang]</td>
                        <td>
                        <a href='editbarang.php?no=$r2[no]'><i class='fa-solid fa-arrow-up-from-bracket' id='aa'></i></a>
                        <a href='hapusbarang.php?no=$r2[no]'><i class='fa-solid fa-trash-can' id='ae'></i></a>
                        </td>
                    </tr>
                    ";
                };
                ?>
            </table>
        </div>
    </div>
</body>
</html>