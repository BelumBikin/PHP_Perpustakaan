<?php
if($_POST){
    $nama_siswa=$_POST['Nama_Siswa'];
    $tanggal_lahir=$_POST['Tanggal_Lahir'];
    $alamat=$_POST['Alamat'];
    $gender=$_POST['Gender'];
    $username=$_POST['Username'];
    $password= $_POST['Password'];
    $id_kelas=$_POST['ID_Kelas'];
    $id_jurusan=$_POST['ID_Jurusan'];

    if(empty($nama_siswa)){
        echo "<script>alert('nama siswa tidak boleh kosong');location.href='tambah_siswa.php';</script>";

    } elseif(empty($username)){
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_siswa.php';</script>";
    } else {
        include "koneksi.php";
        $insert=mysqli_query($conn,"insert into siswa (Nama_Siswa, Tanggal_Lahir, Gender, Alamat, Username, Password, ID_Kelas, ID_Jurusan) value ('".$nama_siswa."','".$tanggal_lahir."','".$gender."','".$alamat."','".$username."','".md5($password)."','".$id_kelas."','".$id_jurusan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan siswa');location.href='tambah_siswa.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_siswa.php';</script>";
        }
    }
}
?>