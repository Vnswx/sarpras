<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $no = $_POST['no'];
    $nama_peminjam = $_POST['nama_peminjam'];
    $stock_barang = $_POST['stock_barang'];
    $nama_barang = $_POST['nama_barang'];
    $jenis_barang = $_POST['jenis_barang'];

    $sql = "INSERT INTO barang(no, nama_peminjam, stock_barang, nama_barang, jenis_barang) VALUES('$no', '$nama_peminjam', '$stock_barang', '$nama_barang', '$jenis_barang')";

    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: barang1.php');
    }else{
        header('Location: barangtambah.php?status=gagal');
    }
}
?>