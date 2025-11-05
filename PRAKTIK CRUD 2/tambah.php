<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah data Mahasiswa</title>
    <style>
        body {
            background-color: #EDC89A;
            font-family: Georgia, serif;
        }

        .container {
            background-color: #edc89a;
            width: 800px;
            height: 500px;
            margin: 50px auto;
            padding-top: 50px;
            text-align: center;
        }

        h2 {
            color: #2e004f;
            font-weight: bold;
            margin-bottom: 30px;
        }

        fieldset {
            width: 400px;
            margin: 0 auto;
            text-align: left;
            border: 1px solid gray;
            padding: 15px;
        }

        legend {
            color: #2e004f;
            font-weight: bold;
        }

        label {
            color: #2e004f;
            font-weight: bold;
            display: inline-block;
            width: 160px;
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 180px;
            height: 20px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin-left: 165px;
            margin-top: 10px;
            padding: 3px 10px;
            background-color: #ffffff;
            border: 1px solid #555;
            cursor: pointer;
        }

        a {
            color: yellow;
            font-weight: bold;
            text-decoration: none;
            display: block;
            margin-top: 20px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah data Mahasiswa</h2>

        <form action="tambah_aksi.php" method="post">
            <fieldset>
                <legend>Form Input</legend>

                <label>Kode Mahasiswa</label>
                <input type="text" name="Kode_Mahasiswa"><br>

                <label>Nama Mahasiswa</label>
                <input type="text" name="Nama_Mahasiswa"><br>

                <label>NIM</label>
                <input type="number" name="NIM"><br>

                <label>JURUSAN</label>
                <input type="text" name="JURUSAN"><br>

                <label>ALAMAT</label>
                <input type="text" name="ALAMAT"><br>
                

                <input type="submit" value="Submit">
            </fieldset>
        </form>

        <a href="index.php">Kembali</a>
    </div>
</body>
</html>
