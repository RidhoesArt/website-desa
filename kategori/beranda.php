<?php 

	include "config/config.php";

	$query = mysqli_query($con, "SELECT * FROM tbl_posts ORDER BY date desc");
	
 ?>


<!-- body
<div class="div body-beranda">

</div>
 -->
 
<div class="container d-flex" style=flex-direction:column;>
 <div class="row p-0 justify-content-center" style="gap:5px; border:0;">
	<div id="last" class="last text-center col-md-8 bg-dark" style="">
    <div class="wrapper" style="">
    <?php foreach($query as $data) :?>
      <img src="assets/file/post/<?=$data['img']; ?>" style="" alt="">
    <?php endforeach;?>
    </div>
  </div>

  	<!-- <div class="z-index-2 border-top" style="width:84.3%; padding:0; margin:0;">
			<button class="btn btn-link text-white p-0 bg-primary" style="width:100%;box-shadow:none;text-decoration:none;font-weight:bold;" data-toggle="collapse" data-target="#jadwal_shalat" aria-expanded="true" aria-controls="jadwal_shalat">
				<div class="card-header font-weight-bold" id="headshalat" style="font-family: 'Roboto', sans-serif;">JADWAL IMSAK & SHALAT <i class="bi bi-chevron-down"></i></div>
			</button>
			<div id="jadwal_shalat" class="collapse bg-white" aria-labelledby="headshalat" data-parent="#shalat">
				<div class="container-fluid">
					<section id="jadwal-shalat" class="py-0 bg-white" style="margin:0;padding:0;width:auto;">
						<div class="container-fluid mt-2 main-container bg-white card-body content-color-secondary px-0" style="font-weight:bold;">
								Jumat, 24 Maret 2023
								<div class="row mt-2">
									<div class="card border-0" style="width: 11rem;background-image:url(assets/img/masjid.jpg);background-position: center;
									background-size: cover;
									">
									<p style="color:black;font-weight:bold;">IMSAK</p>
									<H5 class="" style="font-weight:bold;color:#ffffff;font-family:'Roboto'">04:50</H5>
									</div>
								</div>
						</div>
					</section>
				</div>
			</div>
	</div> -->

    <div class="jadwal-shalat card mb-1 mt-1">
		<button class="btn trigger text-white font-weight-bold p-0 bg-primary" data-toggle="collapse" data-target="#collapsestatistikPenduduk" aria-expanded="false" aria-controls="collapsestatistikPenduduk">
			<div class="card-header text-white" style="font-weight:bold;" id="headingstatistikPenduduk">
				<span style="font-family: 'Roboto', sans-serif;">JADWAL IMSAK & SHALAT</span>
				&nbsp;<i class="bi bi-chevron-down"></i>
			</div>
		</button>
		<div id="collapsestatistikPenduduk" class="collapse bg-white" aria-labelledby="headingstatistikPenduduk">
			<div class="buka container-fluid mt-2 main-container card-body content-color-secondary px-0" style="">
				Jumat, 24 Maret 2023
				<div class="row" style="width:auto;margin:0;padding:0;">
				<div class="col item" style="">
					<div class="card border-0 satu" style="">
						<p style="color:black;font-weight:bold;">Imsak</p>
						<H5 class="imsak" style="font-weight:bold;color:#ffffff;font-family:'Roboto'"></H5>
					</div>
					<div class="card border-0 dua" style="">
						<p style="color:black;font-weight:bold;">Subuh</p>
						<H5 class="subuh" style="font-weight:bold;color:#ffffff;font-family:'Roboto'"></H5>
					</div>
					<div class="card border-0 tiga" style="">
						<p style="color:black;font-weight:bold;">Dzuhur</p>
						<H5 class="dzuhur" style="font-weight:bold;color:#ffffff;font-family:'Roboto'"></H5>
					</div>
					<div class="card border-0 empat" style="">
						<p style="color:black;font-weight:bold;">Ashar</p>
						<H5 class="ashar" style="font-weight:bold;color:#ffffff;font-family:'Roboto'"></H5>
					</div>
					<div class="card border-0 lima" style="">
						<p style="color:black;font-weight:bold;">Maghrib</p>
						<H5 class="maghrib" style="font-weight:bold;color:#ffffff;font-family:'Roboto'"></H5>
					</div>
					<div class="card border-0 enam" style="">
						<p style="color:black;font-weight:bold;">Isya</p>
						<H5 class="isya" style="font-weight:bold;color:#ffffff;font-family:'Roboto'"></H5>
					</div>
				</div>
				</div>
			</div>
		</div>
    </div>


  <div class="artikel-terkini row d-flex text-center justify-content-center">
	<h5 class="align-items-center" style="font-family:'Roboto', 'sans-serif';padding:7px;margin:0;width:auto;">Artikel Terkini</h5>
  </div>

  <div class="row kartu justify-content-center mt-1" style="gap:30px;">
	<?php foreach($query as $data): ?>
		<div class="col-md-5 card" style="border:0;padding-bottom:5px;padding-top:0;padding:10px;border-radius:4px;box-shadow: 1px 1px 10px rgba(0,0,0,0.3);">
			<img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail border-0" style="width:100%;border-radius:4px 4px 0 0;padding:0;margin-bottom:10px;">
			<a href="index.php?page=detail&id=<?= $data['id_post'] ?>" style="text-decoration:none;">
				<h5 class="text-primary"><?= $data['judul'] ?></h5>
			</a>
			<div>
				<i class="ion-calendar">&nbsp; <?= $data['date'] ?> &nbsp; / &nbsp;</i>
				<i class="ion-person">&nbsp; <?= $data['author'] ?></i>
			</div>
			<p class="article-text">
				<?= substr($data['artikel'], 0, 100) ?>
			</p>
		</div>
		<?php endforeach; ?>
	</div>
	</div>
</div>

<!-- Pagination -->
		<!-- <div class="d-flex justify-content-center">
			<nav aria-label="..." class="mt-5">
			  <ul class="pagination">
			    <li class="page-item">
			      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
			    </li>
			    <li class="page-item active"><a class="page-link" href="#">1</a></li>
			    <li class="page-item" aria-current="page">
			      <a class="page-link" href="#">2</a>
			    </li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item">
			      <a class="page-link" href="#">Next</a>
			    </li>
			  </ul>
			</nav>
		</div> -->
	<!-- </div>
</div> -->