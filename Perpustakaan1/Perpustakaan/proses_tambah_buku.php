<?php
if($_POST){
    $nama_buku=$_POST['nama_buku'];
    $penerbit=$_POST['penerbit'];
    $penulis=$_POST['penulis'];
    
    if(empty($nama_buku)){
        echo "<script>alert('Nama Buku tidak boleh kosong..');location.href='tambah_buku.php';</script>";
 
    } elseif(empty($penulis)){
        echo "<script>alert('Penulis tidak boleh kosong.');location.href='tambah_buku.php';</script>";

    } elseif(empty($penerbit)){
        echo "<script>alert('Penerbit tidak boleh kosong.');location.href='tambah_buku.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into buku (judul_buku, penulis, penerbit) value ('".$nama_buku."','".$penulis."','".$penerbit."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan kelas.');location.href='tambah_buku.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan kelas.');location.href='tambah_buku.php';</script>";
        }
    }
}
?>
