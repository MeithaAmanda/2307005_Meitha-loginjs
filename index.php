<?php
include 'cek_login.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_SESSION['username']; ?>!</h1>
    <p>Anda berhasil login ke halaman rahasia ini.</p>
    
    <hr>
    
    <a href="logout.php">LOGOUT</a>
</body>
</html>