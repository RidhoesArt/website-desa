<?php

require_once "../config/config.php";

    $id = $_GET['id'];

    $query = mysqli_query($con, "DELETE FROM tbl_kependudukan WHERE id='$id'");

    if($query){
        echo"<script>alert('Data Berhasil Dihapus')</script>";
        echo"<script>window.location.href='index.php?page=data-penduduk'</script>";
    }
?>