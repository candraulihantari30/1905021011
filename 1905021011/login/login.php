<?php 
    require 'koneksi.php';

    if ( isset($_POST["login"])){

        $usename = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$usename'" );
        if ( mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_assoc($result);
            if ( password_verify($usename, $row["password"]) ) {
                header("Location: welcome.php");
                exit;
            }
        }

        $error = true;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<?php if( isset($error)) :  ?>
<p>username / password salah</p>
<?php endif ?>
<form action="" method="post">
    <label for="username">Username : </label>
    <input type="text" id="username" name="username" placeholder="username"><br>
    <label for="pass">Password : </label>
    <input type="password" name="password" placeholder="password"><br>
    <button type="submit" name="login">Login</button>
</form>
</body>
</html>