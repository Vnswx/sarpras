<?php
include 'koneksi.php';

if (isset($_GET ['no'])) {
    $no = $_GET ['no'];

$sql = "DELETE FROM sarpras WHERE no='$no'";
$query = mysqli_query($connect, $sql);

if ($query) {
    header('Location: new.php');
}else{
    header('Location: filehapus.php?status=gagal');
}
}
?>