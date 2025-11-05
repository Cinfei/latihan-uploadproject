<?php
include 'koneksi.php';

$Kode_Mahasiswa = $_GET['Kode_Mahasiswa'];


mysqli_query($koneksi, "DELETE FROM maha WHERE Kode_Mahasiswa='$Kode_Mahasiswa'");


header("Location: index.php");
?>