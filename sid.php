<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nisn = $_POST['nisn'];
    $nama_siswa = $_POST['nama_siswa'];
    $tanggal = $_POST['tanggal'];
    $barang_yang_dipinjam = $_POST['barang_yang_dipinjam'];

    $sql = "INSERT INTO sarpras(no, nisn, nama_siswa, tanggal, barang_yang_dipinjam) VALUES('$no', '$nisn', '$nama_siswa', '$tanggal', '$barang_yang_dipinjam')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: new.php');
    }else{
        header('Location: simpan.php?status=gagal');
    }
}
?>