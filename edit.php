<?php
include 'koneksi.php';

$no = $_GET['no'];
$sql = "SELECT * FROM sarpras WHERE no ='$no'";
$query = mysqli_query($connect, $sql);
$r = mysqli_fetch_assoc($query);

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
        <form action="formedit.php" method="post">
            <h1>Edit Data Siswa</h1>
            <table class="oiu">
                <tr>
                    <td><label class="ok">No : </label></td>
                    <td><input value="<?php echo $r['no']?>" class="input" required="required" type="number" name="no"></td>
                </tr>
                <tr>
                    <td><label class="ok">NISN : </label></td>
                    <td><input value="<?php echo $r['nisn']?>" class="input" required="required" type="number" name="nisn"></td>
                </tr>
                <tr>
                    <td><label class="ok">Nama Siswa : </label></td>
                    <td><input required="required" value="<?php echo $r['nama_siswa']?>" class="input" name="nama_siswa"></td>
                </tr>
                <tr>
                    <td><label class="ok">Tanggal : </label></td>
                    <td><input value="<?php echo $r['tanggal']?>" class="input" required="required" type="date" name="tanggal"></td>
                </tr>
                <tr>
                    <td><label class="ok">Barang yang dipinjam : </label></td>
                    <td><input value="<?php echo $r['barang_yang_dipinjam']?>" class="input" required="required" type="text" name="barang_yang_dipinjam"></td>
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