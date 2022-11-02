<?php
    session_start();
    require "../CRUD/Koneksi.php";
    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $akun = $_POST['akun'];
        $password = $_POST['password'];
        $query = mysqli_query($conn, "SELECT * FROM akun_kapal WHERE username = '$user' or email = '$user' and Jenis_akun = '$akun'");
        $result = mysqli_fetch_assoc($query);
        $username = $result['username'];
        if (password_verify($password, $result['password'])){
            $_SESSION['username'] = $user;
            $_SESSION['priv'] = $akun;
            echo "
            <script>
                alert('Selamat Datang $username');
                document.location.href='../'
            </script>
            ";
        }else{
            echo "
            <script>
                alert('Username atau Password Salah');
            </script>
            ";
        }
    }
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PBp</title>
    <link rel="stylesheet" type="text/CSS" href="Login.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
            <form action="" method="POST" class="login-email">
                <label>Username</label><br>
                <input type="text" placeholder="Username or Email" name="user" value="" require><br>
                <label>Password</label><br>
                <input type="password" placeholder="Password" name="password" value="" require><br>
                <select class="custom_select" name="akun" require>
                <option selected>Jenis Akun Anda</option>
                <option value = "member">Member</option>
                <option value = "admin">Admin</option>
                </select>
                <button name="submit">Log in</button>
            </form>
        <p>apakah anda belum mempunyai akun? <a href="Register.php" style="text-decoration:none">Daftar</a></p>    
    </div>
</body>
</html>