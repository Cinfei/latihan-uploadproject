<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <title>Data Mahasiswa</title>
    <style>
        body {
            background-color: #edc89a;
            font-family: Georgia, serif;
            text-align: center;
        }
        table {
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #edc89a;
        }
        th, td {
            border: 1px solid black;
            padding: 8px 15px;
        }
        th {
            background-color: #f1d2a9;
        }
        a {
            color: purple;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <br/>
    <a href="tambah.php">+ TAMBAH SISWA</a>
    <br/>
    <table border='1'>
        <tr>
            <th>Kode Mahasiswa</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>
            <th>OPSI</th>
        </tr>

        <?php
         include 'koneksi.php';
         $mahasiswa = mysqli_query($koneksi, 'select * from maha');
         while($d = mysqli_fetch_array($mahasiswa)){
        ?>
            <tr>
                <td><?php echo $d['Kode_Mahasiswa']; ?></td>
                <td><?php echo $d['Nama_Mahasiswa']; ?></td>
                <td><?php echo $d['NIM']; ?></td>
                <td><?php echo $d['JURUSAN']; ?></td>
                <td><?php echo $d['ALAMAT']; ?></td>
                <td>
                    <a href="update.php?Kode_Mahasiswa=<?php echo $d['Kode_Mahasiswa']; ?>">UPDATE</a>
                    <a href="delete.php?Kode_Mahasiswa=<?php echo $d['Kode_Mahasiswa']; ?>">DELETE</a>
                </td>
            </tr>
        <?php
        }   
        ?>
        

    </table>
</body>
</html>