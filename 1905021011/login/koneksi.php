<?php
$conn= mysqli_connect("localhost","root","","artikel");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows [] = $row;
    }
    return $rows;
}

function registrasi($data) {
    global $conn;

    $username = stripslashes($data["username"]);
    $password = $data["password"];
    $password2 = $data["password2"];

    if ($password !== $password2) {
        echo " 
                <script>
                    alert('konfirmasi yang anda masukkan salah!');
                </script>
            ";
        return false;
    }
    $password = password_hash($password, PASSWORD_DEFAULT);

    mysqli_query($conn, "INSERT INTO users VALUES ('', '$username','$password')");

    return mysqli_affected_rows($conn);
}


?>