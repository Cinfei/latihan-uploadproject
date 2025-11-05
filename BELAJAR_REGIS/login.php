<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="conlog">
        <h2>Login</h2>
        <form method="POST">
            <fieldset>
                <table>
                    <tr>
                        <td>
                            <label for="username">Masukkan Username</label>
                        </td>
                        <td><label>:</label></td>
                        <td>
                            <input type="text" name="username" placeholder="Username" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="password">Masukkan Password</label>
                        </td>
                        <td><label>:</label></td>
                        <td>
                            <input type="password" name="password" placeholder="Password" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" style="text-align: center;">
                            <button type="submit" name="login">Login</button>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>

        <!-- ✅ Diletakkan DI LUAR fieldset -->
        <p style="text-align: center; margin-top: 10px;">
            Create Account ┃ <a href="register.php">Daftar di sini</a>
        </p>
    </div>
</body>
</html>
