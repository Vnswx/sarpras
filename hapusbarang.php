<?php
include 'koneksi.php';

if (isset($_GET ['no'])) {
    $no = $_GET ['no'];

$sql = "DELETE FROM barang WHERE no='$no'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: barang1.php');
}else{
    header('Location: filehapusbarang.php?status=gagal');
}
}
?>