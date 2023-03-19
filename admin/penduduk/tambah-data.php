<?php
	require_once '../config/config.php';
?>


<div class="row">
	<div class="col-lg-10 m-auto">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" enctype="multipart/form-data" action="">
					<div class="row">
						<div class="hidden" name="id" id="id"></div>
						<div class="col-lg-12 mt-3">
							<select name="nama_desa" required class="form-control" id="nama_desa">
								<option value="" selected>-- Nama Dusun -- </option>
								<option value="Bujang Salim">Dusun Bujang Salim</option>
								<option value="Cot Trieng">Dusun Cot Trieng</option>
								<option value="Beringin Dua">Dusun Beringin Dua</option>
								<option value="Para Tujoh">Dusun Para Tujoh</option>
								<option value="Batee Timoh">Dusun Batee Timoh</option>
							</select>
						</div>
                        <div class="col-lg-12 mt-3">
							<input type="text" name="jumlah_kk" placeholder="Jumlah Kk" class="form-control" required>
						</div>
                        <div class="col-lg-12">
							<input type="hidden" name="lakiperempuan" id="lakiperempuan" placeholder="Jumlah Laki-Laki dan Perempuan" class="form-control" required>
						</div>
                        <div class="col-lg-12 mt-3">
							<input type="text" name="laki_laki" id="laki_laki" placeholder="Jumlah Laki-laki" class="form-control" required>
						</div>
                        <div class="col-lg-12 mt-3">
							<input type="text" name="perempuan" id="perempuan" placeholder="Jumlah Perempuan" class="form-control" required>
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block" type="submit">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		$nama_desa = $_POST['nama_desa'];
		$jumlah_kk = $_POST['jumlah_kk'];
		$laki_laki = $_POST['laki_laki'];
		$perempuan = $_POST['perempuan'];
		$lakiperempuan = $_POST['lakiperempuan'] = $laki_laki + $perempuan;
		$author = $_SESSION['pengguna'];
		// // Set Upload Gambar
		// $ekstensi_boleh = array('png', 'jpg');
		// $gambar = $_FILES['file']['name'];
		// $ex = explode('.', $gambar);
		// $ekstensi = strtolower(end($ex));
		// $ukuran = $_FILES['file']['size'];
		// $file_tmp = $_FILES['file']['tmp_name'];

			// if(in_array($ekstensi, $ekstensi_boleh) === true) {
			// 	if($ukuran < 2000000) {
			// 		move_uploaded_file($file_tmp, '../assets/file/post/'. $gambar);
			// 		$sql = mysqli_query($con, "INSERT INTO tbl_posts VALUES ('', '$gambar', '$judul', '$artikel', '$date', '$kategori', '$author')");
			// 		echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
			// 		echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
			// 	} else {
			// 		echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
			// 	}
			// } else {
			// 	echo "<script>alert('Ekstensi tidak sesuai')</script>";
			// }

			$query = "INSERT INTO tbl_kependudukan
						VALUES('', '$nama_desa', '$jumlah_kk', '$lakiperempuan', '$laki_laki', '$perempuan')
						";

				$result = mysqli_query($con, $query);
	}

 ?>