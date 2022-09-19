<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ong.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="nav">
                <h1>Kswdx</h1>
                <a href="#"><b>Data Siswa</b></a>
                <br><br>
                <br>
                <a href="#"><b>Data Guru</b></a>
            </div>
        </div>
        
        <div class="new">
            <h1>Data Sarpras</h1>
            <h4><a href="#">[+] Tambah Baru</a></h4>
            <table cellspacing='0'>
                <tr>
                    <th>No</th>
                    <th>Barang</th>
                    <th>ID Siswa</th>
                    <th>Nama Siswa</th>
                    <th>Aksi</th>
                </tr>
                <?php
                $d = "SELECT * FROM sarpras";
                $f = mysqli_query($connect, $d);
                while($r = mysqli_fetch_array ($f)){
                    echo"
                    <tr>
                        <td>$r[no]</td>
                        <td>$r[barang]</td>
                        <td>$r[id_siswa]</td>
                        <td>$r[nama_siswa]</td>
                        <td>
                        <a href='update.php'>update</a>
                        <a href='hapus.php' style='background-color: red;'>hapus</a>
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