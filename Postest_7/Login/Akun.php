<?php 
    session_start();
    require "../CRUD/Koneksi.php";
?>
<script>if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Akun</title>
</head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBP</title>
    <link rel="stylesheet" type="text/CSS" href="Akun.css">
    <link rel="stylesheet" type="text/CSS" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <!-- Bagian Header -->
    <div class="Medsos">
        <ul>
            <li><a href="https://www.instagram.com/d.pram71/"><i class="fa-brands fa-instagram"></i></a></li>
            <li><a href="https://github.com/Pramox71"><i class="fa-brands fa-github"></i></i></a></li>
            <li><a href="https://www.linkedin.com/in/dhimas-pramudya-tridharma-120a51249/"><i class="fa-brands fa-linkedin"></i></a></li>
        </ul>
        <label>
            <input type="checkbox" class="checkbox" id="tombol">
            <span class="check"></span>
        </label>
    </div> 
    <header>
        <div class="container">
            <h1><a href="index.php">PBp</a><br>
                <p class="Mini-text">PELABUHAN BALIKPAPAN</p>
            </h1>
            <ul>
                <li><a href="../index.php">HOME</a></li>
                <li><a href="../about.php">ABOUT</a></li>
                <li><a href="../service.php">SERVICE</a></li>
                <li><?php
                if (isset($_SESSION['username'])) {
                    echo("<a href='Login/Logout.php'>LOGOUT</a>");
                    
                } else {
                    echo("<a href='Login/Login.php'>LOGIN</a>");}
                    ?></li>
                <li>
                <?php
                if ($_SESSION['priv'] == 'admin') {
                    echo("<a href='../CRUD/CRUD.PHP'>DATA</a>");
                }else if($_SESSION['priv'] == 'member'){
                    echo("<a href='#'>USER</a>");
                }
                    ?>
                </li>
                <?php 
                if ($_SESSION['priv'] == 'admin') {
                    echo "<li  class='active' ><a href='../Login/Akun.php'>AKUN</a></li>";
                }
                ?>
            </ul>
        </div>
    </header>
    <!--Label WEB-->
    <section class="label">
		<div class="container">
			<p>Home / Data kapal</p>
		</div>
	</section>
    <section>
    <div class="searching">
            <form action="" method="get">
                <input type="text" name="search" placeholder="Cari Username . . ." class="search">
                <input type="submit" name="submit" value="cari" class="cari">
            </form>
        </div>
    <table class="container" border=1px>
        <center><a  href="Register.php"><button class="tambah">Registrasi Akun</button></a></center>
        <tr>
            <th>NO</th>
            <th>Username</th>
            <th>Email</th>
            <th>Jenis Akun</th>
        </tr>
        <?php
            if (isset($_GET['submit'])){
                $search = $_GET['search'];
                $no = 1;
                $query = mysqli_query($conn, "SELECT * FROM akun_kapal WHERE username LIKE '%$search%'");
                while($baris = mysqli_fetch_assoc ($query)){
                    echo "
            <tr>
                <td><center>$no</center></td>
                <td><center>$baris[username]</center></td>
                <td><center>$baris[email]</center></td>
                <td><center>$baris[Jenis_akun]</center></td>
            </tr>";
                $no++;}
            }else{
            $query = mysqli_query($conn, "SELECT * FROM akun_kapal ");
            $no = 1;
            while($baris = mysqli_fetch_assoc ($query)){
                echo "
        <tr>
            <td><center>$no</center></td>
            <td><center>$baris[username]</center></td>
            <td><center>$baris[email]</center></td>
            <td><center>$baris[Jenis_akun]</center></td>
        </tr>";
            $no++;}
            }
        ?>
    </table>
    </section>
 
    <footer>
        <div class="container">
            <small>@Copyright 2022 - Pramox71 - Made with HTML - CSS</small>
        </div>
    </footer>
    <script src="main.js"></script>
    <script>
        var tombol = document.getElementById("tombol");
        tombol.onclick = function(){
            document.body.classList.toggle("black-mode");
        }
    </script>
</body>
</html>