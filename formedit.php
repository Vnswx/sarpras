<?php
include 'koneksi.php';

if (isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal = $_POST['tanggal'];
    $barang_yang_dipinjam = $_POST['barang_yang_dipinjam'];

    $sql = "UPDATE sarpras SET nisn='$nisn', nama_siswa='$nama_siswa', tanggal='$tanggal', barang_yang_dipinjam='$barang_yang_dipinjam' WHERE no='$no'";
    $query = mysqli_query($connect, $sql);
    if($query) {
        header('Location: new.php');
    }else{
        header('Location: formedit.php?status=gagal');
    }
}
?>