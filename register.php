<!DOCTYPE html>
<html lang="id">
<head>
    <title>Halaman Registrasi</title>
    <style>
        body { font-family: sans-serif; display: flex; justify-content: center; padding-top: 50px; }
        form { border: 1px solid #ccc; padding: 20px; border-radius: 5px; width: 300px; }
        input { display: block; margin-bottom: 10px; width: 100%; padding: 8px; box-sizing: border-box;}
        button { background-color: green; color: white; padding: 10px; border: none; width: 100%; cursor: pointer;}
        button:hover { background-color: darkgreen; }
    </style>
</head>
<body>
    <form action="proses_register.php" method="POST">
        <h3>Daftar Akun Baru</h3>
        
        <label>Username</label>
        <input type="text" name="username" placeholder="Buat username baru" required>

        <label>Password</label>
        <input type="password" name="password" placeholder="Buat password baru" required>

        <button type="submit">Daftar Sekarang</button>
        
        <p style="text-align: center; font-size: 14px;">
            Sudah punya akun? <a href="login.php">Login disini</a>
        </p>
    </form>
</body>
</html>