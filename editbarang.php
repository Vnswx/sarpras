<?php
include 'koneksi.php';

$no = $_GET['no'];
$sql = "SELECT * FROM barang WHERE no ='$no'";
$query = mysqli_query($connect, $sql);
$r2 = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) <1){
    die ("gagal");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
    <?php
    include "ctr.css";
    ?>
    
    </style>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
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
        <div class="sl">
        <form action="formbarang.php" method="post">
            <h1>Edit Data barang</h1>
            <table class="oiu">
                <tr>
                    <td><label class="ok">No : </label></td>
                    <td><input value="<?php echo $r2['no']?>" class="input" required="required" type="number" name="no"></td>
                </tr>
                <tr>
                    <td><label class="ok">Nama Peminjam : </label></td>
                    <td><input value="<?php echo $r2['nama_peminjam']?>" class="input" required="required" type="text" name="nama_peminjam"></td>
                </tr>
                <tr>
                    <td><label class="ok">Stock Barang : </label></td>
                    <td><input required="required" value="<?php echo $r2['stock_barang']?>" class="input" name="stock_barang" type="number"></td>
                </tr>
                <tr>
                    <td><label class="ok">Nama Barang : </label></td>
                    <td><input value="<?php echo $r2['nama_barang']?>" class="input" required="required" type="text" name="nama_barang"></td>
                </tr>
                <tr>
                    <td><label class="ok">Jenis Barang : </label></td>
                    <td><input value="<?php echo $r2['jenis_barang']?>" class="input" required="required" type="text" name="jenis_barang"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="simpan" value="simpan" class="oj"></td>
                </tr>
            </table>
        </form>
        </div>
    </div>
</body>
</html>