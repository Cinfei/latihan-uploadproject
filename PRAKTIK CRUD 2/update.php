<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <br>
    <a href="index.php">KEMBALI</a>
    <br>
    <br>
    <h3>UPDATE DATA SISWA</h3>

    <?php
        include 'koneksi.php';
        $Kode_Mahasiswa = $_GET['Kode_Mahasiswa'];
        $mahasiswa = mysqli_query($koneksi, "select * from maha where Kode_Mahasiswa='$Kode_Mahasiswa'");
        while($d = mysqli_fetch_array($mahasiswa)){
    ?>
    <form method= "post" action="ubah.php">
        <table>
            <tr>
                <td>Kode_Mahasiswa</td>
                <td><input type= "text" name="Kode_Mahasiswa" value="<?php echo $d['Kode_Mahasiswa']; ?>"></td>
            </tr>
            <tr>
                <td>Nama_Mahasiswa</td>
                <td><input type= "text" name="Nama_Mahasiswa" value="<?php echo $d['Nama_Mahasiswa']; ?>"></td>
            </tr>
            <tr>
                <td>NIM</td>
                <td><input type= "number" name="NIM" value="<?php echo $d['NIM']; ?>"></td>
            </tr>
            <tr>
                <td>JURUSAN</td>
                <td><input type= "text" name="JURUSAN" value="<?php echo $d['JURUSAN']; ?>"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type= "text" name="ALAMAT" value="<?php echo $d['ALAMAT']; ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    <?php 
        }
    ?>
    
</body>
</html>