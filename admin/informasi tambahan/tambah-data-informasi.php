<div class="row">
	<div class="col-lg-10 m-auto">
		<div class="card card-primary">
			<div class="card-header">
				<h5>Form <?= $_GET['page'] ?></h5>
			</div>
			<div class="card-body">
				<form method="POST" action="" enctype="multipart/form-data">
					<input type="hidden" name="id" id="id">
					<div class="row">
						<div class="col-lg-6">
							<input type="text" name="nama" placeholder="Masukkan Nama" class="form-control">
						</div>
						<div class="col-lg-6">
							<input type="text" name="jabatan" placeholder="Masukkan Jabatan" class="form-control">
						</div>
						<div class="col-lg-6 mt-3">
							<input type="file" name="file" class="form-control">
							<p class="text-danger mt-1" style="font-size: 12px;">Ekstensi File yang di perbolehkan : jpg, png max. 2MB</p>
							<input type="hidden" name="tanggal" value="<?php echo date("Y-m-d"); ?>">
						</div>
						<div class="col-lg-12 mt-3">
							<button name="submit" class="btn btn-primary btn-block">Tambah</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<?php 

	if(isset($_POST['submit'])) {
		$nama = strtoupper($_POST['nama']);
		$jabatan = ucwords($_POST['jabatan']);
		$date = $_POST['tanggal'];
		// Set Upload Gambar
		$ekstensi_boleh = array('png', 'jpg');
		$gambar = $_FILES['file']['name'];
		$ex = explode('.', $gambar);
		$ekstensi = strtolower(end($ex));
		$ukuran = $_FILES['file']['size'];
		$file_tmp = $_FILES['file']['tmp_name'];

			if(in_array($ekstensi, $ekstensi_boleh) === true) {
				if($ukuran < 2000000) {
					move_uploaded_file($file_tmp, '../assets/file/aparatur/'. $gambar);
					$sql = mysqli_query($con, "INSERT INTO tb_aparatur_desa VALUES ('', '$nama', '$jabatan', '$gambar', '$date')");
					echo "<script>alert('Data Berhasil Ditambahkan!')</script>";
					echo "<script>window.location.href='index.php?page=tampil-beranda'</script>";
				} else {
					echo "<script>alert('Ukuran tidak boleh > 2MB')</script>";
				}
			} else {
				echo "<script>alert('Ekstensi tidak sesuai')</script>";
			}
	}

 ?>