<?php session_start();
    if ($_SESSION['priv'] != 'admin') {
        header("Location: ../");
        
    }
    require 'Koneksi.php';
    $result = mysqli_query($conn, "SELECT * FROM data_kapal");

    $data_kapal = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $data_kapal[] = $row;
    }

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
    <title>PBP</title>
    <link rel="stylesheet" type="text/CSS" href="Data.css">
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
                    echo("<a href='../Login/Logout.php'>LOGOUT</a>");
                    
                } else {
                    echo("<a href='Login/Login.php'>LOGIN</a>");}
                    ?></li>
                <li class="active">
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
                    echo "<li><a href='../Login/Akun.php'>AKUN</a></li>";
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
    
    <table class="container" border=1px>
        <center><button class="tambah"><a href="Tambah.php">Tambah data</a></button></center>
        <tr>
            <th>NO</th>
            <th>Nama kapal</th>
            <th>Jenis kapal</th>
            <th>Total ABK</th>
            <th>Foto Kapal</th>
            <th>Tahun Masuk</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; foreach ($data_kapal as $kapal):?>
        <tr>
            <td><center><?php echo $i ;?></center></td>
            <td><center><?php echo $kapal['Nama_Kapal']; ?></center></td>
            <td><center><?php echo $kapal['Jenis']; ?></center></td>
            <td><center><?php echo $kapal['Jumlah_ABK'];?></center></td>
            <td><center><?php echo "<img src='img/$kapal[Foto_kapal]' width ='100' height = '80'>";?></center></td>
            <td><center><?php echo $kapal['Tahun_Masuk']; ?></center></td>
            <td><center><a href="Update.php?ID= <?php echo $kapal['ID']; ?>"><i class="fa-solid fa-pen-to-square"></i></a> ||
             <a href="Hapus.php?ID= <?php echo $kapal['ID']; ?>"><i class="fa-solid fa-trash"></i></a></center></td>
        </tr>
        <?php $i++; endforeach; ?>
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

