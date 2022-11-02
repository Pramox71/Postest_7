<?php
    $conn = mysqli_connect("localhost", "root", "","website_postest");

    if (!$conn) {
        die("Gagal Terhubung dengan Data base" . mysqli_connect_error());
    }

?>

