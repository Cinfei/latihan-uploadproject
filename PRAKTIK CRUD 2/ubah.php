<?php
include 'koneksi.php';

$Kode_Mahasiswa = $_POST['Kode_Mahasiswa'];
$Nama_Mahasiswa = $_POST['Nama_Mahasiswa'];
$NIM = $_POST['NIM'];
$JURUSAN = $_POST['JURUSAN'];
$ALAMAT = $_POST['ALAMAT'];
$OPSI = $_POST['OPSI'];

mysqli_query($koneksi, "update maha set Kode_Mahasiswa='$Kode_Mahasiswa', Nama_Mahasiswa='$Nama_Mahasiswa', NIM='$NIM', JURUSAN='$JURUSAN', ALAMAT='$ALAMAT' where Kode_Mahasiswa='$Kode_Mahasiswa'");
header('location:index.php');
?>
