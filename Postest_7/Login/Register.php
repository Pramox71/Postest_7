<?php
    session_start();
    require "../CRUD/Koneksi.php";
    if(isset($_POST['submit'])){
        $nama = $_POST['user'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $konfirmasi = $_POST['konfirmasi'];
        $jenis_akun = $_POST['akun'];
        $query = mysqli_query($conn, "SELECT * FROM akun_kapal WHERE username = '$username'");
        if (mysqli_fetch_assoc($query)){
            echo "
            <script>
                alert('Username Telah di gunakan');
            </script>
            ";
        }else{
            if ($konfirmasi == $password){
                $password = password_hash($password, PASSWORD_DEFAULT);
                $query = mysqli_query($conn, "INSERT INTO akun_kapal (username, email, password, Jenis_akun) VALUES ('$nama','$email', '$password', '$jenis_akun') ");
                if ($query){
                    echo "
                    <script>
                        alert('Register Berhasil');
                    </script>
                    ";
                    header("location: Login.php");
                }
            }else{
                "<script>
                    alert('Password dan konfirmasi Password Berbeda');
                </script>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" type="text/CSS" href="Regis.css">
</head>
<body>
<div class="container">
          <h1>Register</h1>
            <form action="" method="POST" class="login-email">
                <label>Username</label>
                <br>
                <input type="text" placeholder="Username" name="user">
                <br>
                <label>Email</label>
                <br>
                <input type="email" placeholder="Email" name="email">
                <br>
                <label>Password</label>
                <br>
                <input type="password" placeholder="Password" name="password">
                <br>
                <label>Cek Password</label>
                <br>
                <input type="password" placeholder="Ketik Ulang Password" name="konfirmasi">
                <select class="custom_select" name="akun" require>
                <option selected>Jenis Akun Anda</option>
                <option value = "member">Member</option>
                <?php 
                if ($_SESSION['priv'] == 'admin') {
                    echo"<option value = 'admin'>Admin</option>";
                }
                ?>
                </select>
                <button name="submit">Register</button>
                <p> Sudah punya akun?
                  <a href="../Login/Login.php">Login di sini</a>
                </p>
            </form>
        </div>
</body>
</html>