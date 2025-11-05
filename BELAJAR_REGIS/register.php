<?php
include 'koneksi.php';
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $nama = $_POST['nama_lengkap'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, nama_lengkap, password) VALUES ('$username', '$nama', '$password')";
    $result = mysqli_query($koneksi, $query);

    if($result){
        echo "<script>alert('Registrasi berhasil! Silahkan login.');
        window.location='login.php';</script>";
    } else {
        echo "Gagal mendaftar!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="conlog">
        <h2>Form Registrasi</h2>
        <form method="POST">
            <fieldset>
                <table>
                    <tr>  
                        <td><label for="nama_lengkap">Masukkan Nama</label></td>
                        <td><label>:</label></td>
                        <td><input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required></td>
                    </tr>
                    <tr>
                        <td><label for="username">Masukkan Username</label></td>
                        <td><label>:</label></td>
                        <td><input type="text" name="username" placeholder="Username" required></td>
                    </tr>
                    <tr>    
                        <td><label for="password">Masukkan Password</label></td>
                        <td><label>:</label></td>
                        <td><input type="password" name="password" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            <button type="submit" name="register">Daftar</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <!-- Diletakkan DI LUAR fieldset -->
        <p style="text-align:center; margin-top: 10px;">
            Sudah Punya Akun? ┃ <a href="login.php">Login di sini</a>
        </p>
    </div>
</body>
</html>
