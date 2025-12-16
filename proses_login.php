<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $username);

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");

$cek = mysqli_num_rows($query);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($query);

    if (password_verify($password, $data['password'])) {

        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        header("location:index.php");

    } else {
        header("location:login.php?pesan=gagal");
    }
} else {
    header("location:login.php?pesan=gagal");
}
?>