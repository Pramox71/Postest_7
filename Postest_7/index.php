<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBP</title>
    <link rel="stylesheet" type="text/CSS" href="CSS/style.css">
    <link rel="stylesheet" type="text/CSS" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <?php
            if (!isset($_SESSION['username'])) {
                $_SESSION['priv'] ='default';
            }
        ?>
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
                <li class="active"><a href="index.php">HOME</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="service.php">SERVICE</a></li>
                <li><?php
                if (isset($_SESSION['username'])) {
                    echo("<a href='Login/Logout.php'>LOGOUT</a>");
                    
                } else {
                    echo("<a href='Login/Login.php'>LOGIN</a>");}
                    ?></li>
                <li>
                <?php
                if ($_SESSION['priv'] == 'admin') {
                    echo("<a href='CRUD/CRUD.PHP'>DATA</a>");
                }else if($_SESSION['priv'] == 'member'){
                    echo("<a href='#'>USER</a>");
                }
                ?></li>
                <?php 
                if ($_SESSION['priv'] == 'admin') {
                    echo "<li><a href='Login/Akun.php'>AKUN</a></li>";
                }
                ?>
            </ul>
        </div>
    </header>
    <!-- Background Belakang -->
    <div class="banner">
        <h2>SELAMAT DATANG DI WEB PELABUHAN BALIKPAPAN</h2>
            <p>Anda ingin menyebrang ke pelabuhan Penajam?, tapi tak mau mengantri.<br/>
                sekarang anda dapat memesan tiket kapal tanpa harus mengantri lagi.<br/>
                dengan menekan "Pesan sekarang" anda dapat memesan tiket secara ONLINE.
            </p>
            <a href="Pesan/Form_Pesan.php" class="button"><b>Pesan sekarang!</b></a>
    </div>

    <!-- ABOUT Footer -->
    <section class="about">
        <div class="container">
            <h3>ABOUT</h3>
            <p>Halo Perkenalkan Nama saya Dhimas Pramudya Tridharma panggil saja saya Bagas,
                Saya Mahasiswa Informatika dari Universitas Mulawarman. Saya sangat menyukai hal yang
                berhubungan dengan komputer. Website ini merupakan salah satu tugas yang saya kerjakan.
                semoga saya dapat lebih berkembang lagi kedepannya.
            </p>
        </div>
    </section>
    
    <!--Section Footer-->
    <section class="service">
        <div class="container">
            <h3>SERVICE</h3>
            <div class="box">
                <div class="col-4"><a href="https://wa.me/+6281549014175">
                    <div class="icon"><i class="fa-brands fa-whatsapp"></i></a></div>
                        <H4>Call Center</H4>
                </div>
                <div class="col-4"><a href="mailto:dhimas.pramudya.71@gmail.com">
                    <div class="icon"><i class="fa-solid fa-envelope"></i></a></div>
                        <H4>Email</H4>
                    
                </div>
                <div class="col-4"><a href="">
                    <div class="icon"><i class="fa-solid fa-headset"></i></a></div>
                        <H4>Contact Service</H4>
                    
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <small>@Copyright 2022 - Pramox71 - Made with HTML - CSS</small>
        </div>
    </footer>
    <script>
        var tombol = document.getElementById("tombol");
        tombol.onclick = function(){
            document.body.classList.toggle("black-mode");
        }
    </script>
</body>
</html>