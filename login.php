<!DOCTYPE html>
<html lang="id">
<head>
    <title>Halaman Login</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; }
        form { border: 1px solid #ccc; padding: 20px; border-radius: 5px; width: 300px; }
        input { display: block; margin-bottom: 10px; width: 100%; padding: 8px; box-sizing: border-box; }
        button { background-color: blue; color: white; padding: 10px; border: none; width: 100%; cursor: pointer;}
        button:hover { background-color: darkblue; }
    </style>
</head>
<body>
    <form action="proses_login.php" method="POST">
        <h3>Silahkan Login</h3>
        
        <?php 
        if(isset($_GET['pesan'])){
            if($_GET['pesan'] == "gagal"){
                echo "<p style='color:red'>Login gagal! Username/Password salah.</p>";
            } else if($_GET['pesan'] == "belum_login"){
                echo "<p style='color:orange'>Anda harus login dulu.</p>";
            } else if($_GET['pesan'] == "logout"){
                echo "<p style='color:green'>Anda berhasil logout.</p>";
            } else if($_GET['pesan'] == "registered"){
                echo "<p style='color:blue'>Pendaftaran berhasil! Silahkan login.</p>";
            }
        }
        ?>

        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan username" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan password" required>

        <button type="submit">Login</button>
        
        <p style="text-align: center; font-size: 14px;">
            Belum punya akun? <a href="register.php">Daftar disini</a>
        </p>
        
    </form>
</body>
</html>