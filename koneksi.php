<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_login_sederhana_js";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>