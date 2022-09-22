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
            <img src="sad.jpg" alt="swd" class="opo">
            <div class="nav">
                <h1>Kswdx</h1>
                <a href="new.php"><b>Data Siswa</b></a>
                <br><br>
                <br>
                <a href="barang1.php"><b>Data Barang</b></a>
            </div>
        </div>
        
        <div class="new">
            <h1>Data Siswa</h1>
            <h4><a href="siswa.php">[+] Tambah Baru</a></h4>
            <table cellspacing='0'>
                <tr>
                    <th>No</th>
                    <th>NISN</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal</th>
                    <th>Barang Yang Dipinjam</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $d = "SELECT * FROM sarpras";
                $f = mysqli_query($connect, $d);
                while($r = mysqli_fetch_array ($f)){
                    echo"
                    <tr>
                        <td>$r[no]</td>
                        <td>$r[nisn]</td>
                        <td>$r[nama_siswa]</td>
                        <td>$r[tanggal]</td>
                        <td>$r[barang_yang_dipinjam]</td>
                        <td>
                        <a href='edit.php?no=$r[no]'><i class='fa-solid fa-arrow-up-from-bracket' id='aa'></i></a>
                        <a href='hapus.php?no=$r[no]'><i class='fa-solid fa-trash-can' id='ae'></i></a>
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