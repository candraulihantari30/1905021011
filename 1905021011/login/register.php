<?php 
require 'koneksi.php';
    if( isset($_POST["register"]) ){

        if(registrasi($_POST) > 0) {
            echo " 
                <script>
                    alert('user baru berhasil ditambahkan!');
                </script>
            ";
        } else {
            echo mysqli_error($conn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h1>Register</h1>
    <form action="" method="post">
        <table cellpadding="10">
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" id="username"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td> : </td>
                <td><input type="password" name="password" id="pass"></td>
            </tr>
            <tr>
                <td><label for="compass">Comfirmasi Password</label></td>
                <td> : </td>
                <td><input type="password" name="password2" id="compass"></td>
            </tr>
            <tr>
                <td colspan="3" align="center"><button type="submit" name="register">Register</button></td>
            </tr>
        </table>
    </form>
</body>
</html>