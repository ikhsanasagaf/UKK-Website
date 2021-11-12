<?php
    include "db.php";
    $id = $_GET['id_buku'];
    $ambildata = mysqli_query($koneksi, "DELETE FROM buku WHERE id_buku = '$id'");
    
    echo "<meta http-equiv='refresh' content='1; url=http://localhost/webukk/databuku.php'>";
?>
