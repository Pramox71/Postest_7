<?php 
require 'koneksi.php';

$id = $_GET['ID'];

$result = mysqli_query($conn, "DELETE FROM data_kapal WHERE ID = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'CRUD.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'hapus.php';
        </script>
    ";
}
?>