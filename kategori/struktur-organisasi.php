<?php 

	include "config/config.php";

	$sql = mysqli_query($con, "SELECT * FROM tbl_organisasi");
	$data = mysqli_fetch_array($sql);

 ?>
<h5 style="font-weight:bold;">Struktur Organisasi</h5>
	<img src="assets/img/STRUKTUR-DESA.png" alt="struktur-desa">
<!-- <embed type="application/pdf" src="assets/file/pdf/struktur/<?= $data['pdf'] ?>" style="width: 100%; height: 100vh;"></embed> -->