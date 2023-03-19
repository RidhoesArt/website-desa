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
	<div id="last" class="last text-center col-md-8 bg-dark" style="
    padding:0;
    width: 150vmin;
    height: 80vmin;
    overflow: hidden;
	border:3px solid #ffffff;
    border-radius:5px;
	box-shadow: 1px 1px 10px rgba(0,0,0,0.3);">
    <div class="wrapper" style="
    width: 100%;
    display: flex;
    animation: slide 20s infinite;">
    <?php foreach($query as $data) :?>
      <img src="assets/file/post/<?=$data['img']; ?>" style="width:100%;position:cover;display:block;" alt="">
    <?php endforeach;?>
    </div>
  </div>
  
  <div class="row d-flex text-center justify-content-center" style="margin-top:3px;background-color:blue;color:#ffffff;border-radius:4px;width:84.3%;">
	<h5 class="align-items-center" style="font-family:'Roboto', 'sans-serif';padding:7px;margin:0;width:auto;">Artikel Terkini</h5>
  </div>

  <div class="row kartu justify-content-center mt-1" style="gap:30px;">
	<?php foreach($query as $data): ?>
		<div class="col-md-5 card" style="border:0;padding-bottom:5px;padding-top:0;padding:10px;border-radius:4px;box-shadow: 1px 1px 10px rgba(0,0,0,0.3);">
			<img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail border-0" style="width:100%;border-radius:4px 4px 0 0;padding:0;">
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