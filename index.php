<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selamat Datang | Keude Krueng Geukuh</title>

	<link rel="stylesheet" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" href="assets/css/bootstrap-utilities.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/ionicons.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/style2.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Open+Sans:wght@300&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

	<style>
		body{
			background-color: #eaeaea;
		}

		@keyframes slide{
			0%{
				transform: translateX(0);
			}
			25%{
				transform: translateX(0);
			}
			30%{
				transform: translateX(-100%);
			}
			50%{
				transform: translateX(-100%);
			}
			55%{
				transform: translateX(-200%);
			}
			75%{
				transform: translateX(-200%);
			}
			80%{
				transform: translateX(-300%);
			}
			100%{
				transform: translateX(-300%);
			}
		}
	</style>

</head>
<body>
	<div class="navbar2 navbar-expand-lg navbar" id="navbar2">
		<div class="judul">
			<div class="logo">
				<a class="navbar-brand align-items-center" href="admin/index.php?page=home">
					<img src="assets/img/logo.PNG" height="50px" style="padding:0;width:auto;">
				</a>
			</div>
			<div class="keterangan" id="navbarScroll" style="margin:0;padding:0;">
				<a class="text nav-link active" style="padding:0;list-style:none;color:black;" id="beranda" aria-current="page" href="index.php?page=beranda"><b class="excerpt1" style="font-family:'Roboto', sans-serif;font-weight:500;font-size:18px;">Website Resmi</b><b class="excerpt2" style="font-family:'Roboto', sans-serif;font-weight:500;font-size:18px;"> Desa Keude Krueng Geukueh</b>
				<br>
				<small>Kecamatan Dewantara</small><small class="kabupaten">Kabupaten Aceh Utara</small>
				</a>
			</div>
		</div>
	  	<div class="media">
	  		<a href="https://twitter.com/ArtRidhoes" title="Twitter" rel="noopener noreferrer" target="_blank">
			<img src="http://pedekik.desa.id/assets/front/twt.png" alt="Twitter"></figure>
			</a>
			<a href="https://www.instagram.com/lm_ridhoes/" title="Instagram" rel="noopener noreferrer" target="_blank">
			<img src="http://pedekik.desa.id/assets/front/ins.png" alt="Instagram"></figure>
			</a>
	  	</div>
	</div>

	<header id="header" class="header">
		<div class="jumbotron d-flex bg-dark">
					<div class="logo col-md-auto" style="padding:0; margin-top:0;width:20%;">
						<img src="assets/img/logo.PNG" class="img-fluid" style="width:100%;"> 
					</div>
					<div class="space">
					<div class="identitas">
						<div class="alamat" style="">
							<h3 class="h5" style="">Desa Kuede Krueng Geukueh</h3>
							<p>Jl. Aman Rt 008 Rw 004 <br> Kecamatan Dewantara, Kabupaten Aceh Utara, Provinsi Aceh <br> Kode Pos 24313</p>
						</div>
						<div class="hub">
							<p><i class="bi bi-telephone"></i> <small>082350965378</small> | <i class="bi bi-envelope"></i> <small>krunggukuh@gmail.com</small></p>
						</div>
					</div>
					<div class="social-media" style="">
						<a class="btn btn-sm btn-success success-gradient ml-2" style="height:20%;" href="https://api.whatsapp.com/send?l=id&text=https://pedekik.desa.id/%0A%0A" rel='noopener noreferrer' target='_blank' title='WhatsApp'><i class="bi bi-whatsapp"></i> WhatsApp
						</a>
						<a class="btn btn-sm btn-primary success-gradient ml-2" style="height:20%;" href="https://api.whatsapp.com/send?l=id&text=https://pedekik.desa.id/%0A%0A" rel='noopener noreferrer' target='_blank' title='WhatsApp'><i class="bi bi-facebook"></i> Facebook
						</a>
					</div>
					</div>
		</div>
	</header>
	<nav class="navbar navbar-expand-lg bg-body-tertiary bg-primary">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon bg-primary" style=""></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="index.php?page=beranda">Beranda</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Profile Desa
			</a>
			<ul class="dropdown-menu bg-primary">
				<li><a class="dropdown-item" href="index.php?page=Visi-Misi">Visi Misi</a></li>
				<li><a class="dropdown-item" href="index.php?page=sejarah">Sejarah Desa</a></li>
				<li><a class="dropdown-item" href="#">Gambaran umum</a></li>
				<li><a class="dropdown-item" href="index.php?page=struktur-organisasi">Struktur Organisasi</a></li>
				<li><a class="dropdown-item" href="index.php?page=galeri">Galeri</a></li>
			</ul>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				Data Desa
			</a>
			<ul class="dropdown-menu bg-primary">
				<li><a class="dropdown-item" href="index.php?page=data-wilayah">Data Wilayah Administratif</a></li>
				<li><a class="dropdown-item" href="index.php?page=sejarah">RPJM</a></li>
				<li><a class="dropdown-item" href="#"></a></li>
				<li><a class="dropdown-item" href="index.php?page=struktur-organisasi">Struktur Organisasi</a></li>
				<li><a class="dropdown-item" href="index.php?page=galeri">Galeri</a></li>
			</ul>
			</li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=kebijakan">Kebijakan</a>
	        </li>
		</ul>
		</div>
	</div>
	</nav>

	<!-- <nav class="navbar navbar-expand-lg navbar-light bg-dark p-2" style="z-index:98; width:100%;">
	  <div class="container-fluid">
	    <div class="collapse navbar-collapse" id="navbarScroll" style="margin-left:4%;">
	      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
	        <li class="nav-item">
	          <a class="nav-link active" id="beranda" aria-current="page" href="index.php?page=beranda">Beranda</a>
	        </li>
			<div class="dropdown">
			<button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="">
				Profile Desa
			</button>
				<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
			</div>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=berita">Berita Desa</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=penduduk">Penduduk</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=kebijakan">Kebijakan</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=galeri">Galeri</a>
	        </li>
	        <li class="nav-item">
	          <a class="nav-link" href="index.php?page=struktur-organisasi">Struktur Organisasi</a>
	        </li>
			 <li class="nav-item">
	          <a class="nav-link" href="index.php?page=sejarah">Sejarah</a>
	        </li>	
	      </ul>
	    </div>
	  </div>
	</nav> -->

	<section id="sec-article" class="mt-3" style="">
		

		<div class="container">

			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li> 
				<?php if(isset($_GET['page'])) :?>
				<li class="breadcrumb-item active" aria-current="page"><?=$_GET['page']; ?></i>
				<?php endif; ?>
			  </ol>
			</nav>
			<div class="row1 row mt-3 justify-content-center">
			<?php
				if(isset($_GET['page'])) {
					$page = $_GET['page'];

					switch ($page) {
						case 'beranda':
							include "kategori/beranda.php";
							break;

						case 'Visi-Misi':
							include "kategori/profile_desa/visiMisi.php";
							break;

						case 'detail':
							include "kategori/detail-post.php";
							break;

						case 'kebijakan':
							include "kategori/kebijakan.php";
							break;

						case 'peraturan':
							include "kategori/peraturan.php";
							break;

						case 'galeri':
							include "kategori/galeri.php";
							break;

						case 'struktur-organisasi':
							include "kategori/struktur-organisasi.php";
							break;

						case 'sejarah':
							include "kategori/profile_desa/sejarah.php";
							break;

						case 'data-wilayah':
							include "kategori/data_desa/data-wilayah.php";
							break;

						case 'pendidikan-ditempuh':
							include "kategori/data_desa/pendidikan-ditempuh.php";
							break;

						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				} else {
					include "kategori/beranda.php";	
				}
			 ?>
			 </div>
		</div>
	</section>


	<footer id="footer" class="bg-primary">
		<div class="footer2">
			<div class="tentang-desa">
				<h4>TENTANG WEB DESA</h4>
				<P style="">Web desa ini dibuat sebagai sarana informasi dan transformasi di Desa Keude Krueng Geukueh. Update informasi, layanan dan informasi penting lainnya.</P>
			</div>
			<div class="categories">
				<h4>CATEGORIES</h4>
				<a href="index.php?page=berita" class="text-white" style="text-decoration:none;"><p>BERITA DESA</p></a>
				<a href="index.php?page=beranda" class="text-white" style="text-decoration:none;"><p>INFO DESA</p></a>
			</div>
			<div class="recent">
				<h4>RECENT POSTS</h4>
				<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo distinctio enim laborum asperiores eveniet omnis, unde suscipit quo deleniti praesentium delectus ducimus, iure dolorem consequatur blanditiis facere temporibus eum molestias? Omnis beatae laborum enim unde accusamus provident, laudantium voluptatem repellendus dolore alias. Sit consequatur fuga molestias obcaecati error molestiae illum?</p>
			</div>
		</div>
 
		<div class="copy-right">
			<div>&copy;&nbsp;Open Desa 2023</div><div>KKNT 12 - Mahasiswa IT</div>
		</div>
	</footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/script.js"></script>
	<script src="assets/js/jquery.js"></script>

	

</body>
</html>
