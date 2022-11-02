<?php
session_start();
if (isset($_SESSION['username'])) {
    header("Location: ../");
}

$nama = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['InputEmail'];
?>

<script>if ( window.history.replaceState ) {
 window.history.replaceState( null, null, window.location.href );
}
</script>

<!DOCTYPE html>
<html lang="en">
<head>
<!-- meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 
<!-- costum css -->
<link rel="stylesheet" type="text/CSS" href="Regis.css">
</head>
  
<body>
    <section class="container-fluid">
        <!-- justify-content-center untuk mengatur posisi form agar berada di tengah-tengah -->
        <section class="row justify-content-center">
        <section class="col-12 col-sm-6 col-md-4">
            <form action="Hasil_Regis.php" method="POST" class="form-container" >
                <h4 class="text-center font-weight-bold"> Sign-Up </h4>
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input class="form-control" name="nama" value="<?php echo $nama?>" readonly>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Alamat Email</label>
                    <input class="form-control" name="InputEmail" value="<?php echo $email?>" readonly>
                </div>
                <div class="form-group">
                    <label for="name">Username</label>
                    <input class="form-control" name="username" value="<?php echo $username?>" readonly>
                </div>
                <button name="submit" class="btn btn-primary btn-block">Regist Now</button>
        <?php
            if (isset($_POST['submit'])) {
                $_SESSION["username"] = $_POST['username'];
                $_SESSION["priv"] = 'user'; 
                $_SESSION["nama"] = $_POST['nama'];
                header("Location: ../");
            }
            if (isset($_SESSION['username'])){
                header("Location: ../");
            }
        ?>
            </form>
        </section>
        </section>
    </section>
 
    <!-- Bootstrap requirement jQuery pada posisi pertama, kemudian Popper.js, danyang terakhit Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>