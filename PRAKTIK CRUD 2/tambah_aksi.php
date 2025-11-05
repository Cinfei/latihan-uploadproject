<?php
include "koneksi.php";

$Kode_Mahasiswa = $_POST['Kode_Mahasiswa'];
$Nama_Mahasiswa = $_POST['Nama_Mahasiswa'];
$NIM = $_POST['NIM'];
$JURUSAN = $_POST['JURUSAN'];
$ALAMAT = $_POST['ALAMAT'];
$OPSI = $_POST['OPSI'];


$query = mysqli_query($koneksi, "INSERT INTO maha (Kode_Mahasiswa, Nama_Mahasiswa, NIM, JURUSAN, ALAMAT, OPSI)
VALUES ('$Kode_Mahasiswa', '$Nama_Mahasiswa', '$NIM', '$JURUSAN', '$ALAMAT', '$OPSI')");


if ($query) {
   
    header("Location: index.php");
    exit;
} else {
    
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
}
?>


