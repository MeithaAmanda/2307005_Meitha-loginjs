<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$cek_user = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

if (mysqli_num_rows($cek_user) > 0) {

    echo "<script>
            alert('Username sudah terpakai! Silahkan pilih yang lain.');
            window.location.href='register.php';
          </script>";
} else {

    $password_hash = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password_hash')";
    
    if (mysqli_query($conn, $query)) {
        header("location:login.php?pesan=registered");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
?>