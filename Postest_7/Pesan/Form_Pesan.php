<?php session_start(); ?>
<script>
        alert("Fitur Pesan Masih Tahap 'BETA', dan akan di kembangkan lebih Lanjut lagi");
</script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PBP</title>
    <link rel="stylesheet" type="text/CSS" href="Form.css">
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
            <h1><a href="../index.php">PBp</a><br>
                <p class="Mini-text">PELABUHAN BALIKPAPAN</p>
            </h1>
            <ul>
                <li class="active"><a href="../index.php">HOME</a></li>
                <li><a href="../about.php">ABOUT</a></li>
                <li><a href="../service.php">SERVICE</a></li>
                <li><?php
                if (isset($_SESSION['username'])) {
                    echo("<a href='../Login/Logout.php'>LOGOUT</a>");
                    
                } else {
                    echo("<a href='../Login/Login.php'>LOGIN</a>");}
                    ?></li>
            </ul>
        </div>
    </header>
    <!--Label WEB-->
    <section class="label">
		<div class="container">
			<p>Home / Form</p>
		</div>
	</section>
<section>
    <!-- Form Site -->
    <div class="Formulir">
    <form>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" autofocus autocomplete="off" />
        <label for="destinasi">Destinasi:</label>
        <input type="text" id="destinasi" list="pilihanDestinasi" autocomplete="off" />
        <datalist id="pilihanDestinasi">
                <option value="Balikpapan">Balikpapan</option>
                <option value="Penajam">Penajam</option>
        </datalist>
        <label for="status">Status:</label>
        <input type="text" id="status" list="pilihanStatus" autocomplete="off" />
        <datalist id="pilihanStatus">
                <option value="Dewasa">Dewasa</option>
                <option value="Anak-anak">Anak-anak</option>
        </datalist>
        <label for="jumlah">Jumlah Tiket:</label>
        <input type="number" id="jumlah" />
        <label for="subtotal">Subtotal:</label>
        <input type="number" id="subtotal" disabled />
        <label for="diskon">Diskon:</label>
        <input type="number" id="diskon" disabled />
        <label for="total">Total:</label>
        <input type="number" id="total" disabled />

        <div class="tombol">
                <input type="submit" value="Pesan" id="pesan" />
                <input type="button" value="Hapus" id="hapus" />
        </div>
    </form>

      <!-- Jika berhasil pesan akan menampilkan berkas output nya -->
      <div class="output">
        <h2>TICKET PAYMENT</h2>
        <p>Nama: <span id="namaOutput"></span></p>
        <p>Destinasi: <span id="destinasiOutput"></span></p>
        <p>Status: <span id="statusOutput"></span></p>
        <p>Jumlah Tiket: <span id="jumlahOutput"></span></p>
        <p>Subtotal: <span id="subtotalOutput"></span></p>
        <p>Diskon: <span id="diskonOutput"></span></p>
        <p>Total: <span id="totalOutput"></span></p>
        <p><sup>*</sup>Harga 1 tiket: <span id="hargaTiket"></span></p>
      </div>
    </div>

    <div class="informasi">
      <span>Catatan:</span>
      <span><sup>*</sup>Destinasi hanya terdapat 2 kota: Balikpapan atau Penajam <span class="">(Perhatikan huruf kecil dan besar nya)</span></span>
      <span><sup>*</sup>Status hanya terdapat 2: Dewasa dan Anak-anak <span>(Perhatikan huruf kecil dan besar nya)</span></span>
      <span><sup>*</sup>Jika membeli Jumlah Tiket lebih dari 5 bisa mendapat diskon 15% <span>(Tidak lebih dari 5 maka tidak dapat diskon)</span></span>
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
    <script src="../JavaScript/pesan.js"></script>
</body>
</html>