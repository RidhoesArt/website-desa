<?php 

include "config/config.php";


	$query = mysqli_query($con, "SELECT * FROM tbl_posts WHERE kategori='berita' AND author=author ORDER BY date DESC");
	
 ?>

<div class="grid-container">
  <div class="item1">
    <?php foreach($query as $data) :?>
      <div class="row" style="margin-bottom:5%;">
        <img src="assets/file/post/<?=$data['img']; ?>" alt="">
      </div>
    <?php endforeach; ?>
  </div>

  <div class="item2">
    <div class="row" style="gap:30px;">
    <?php foreach($query as $data): ?>
      <div class="col-md-12 card" style="border:0;padding:0;">
        <img src="assets/file/post/<?= $data['img'] ?>" alt="" class="img-thumbnail border-0" style="width:100%;padding:0;border-radius:0;">
          <div class="row" style="padding:10px;">
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
          <a class="btn btn-danger" style="width:auto;border-radius:0;margin-left:3%;">Read More</a>
          </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>

<div class="item3" style="
      width:100%;
      background-color:black;
      overflow: hidden;
      box-shadow: 10px 25px 30px rgba(0,0,0,0.3);
      ">
  <?php foreach($query as $data) :?>
    <div class="row" style="
      display:flex;
      width:100%;
      animation: slide 16s infinite;
      ">
      <img src="assets/file/post/<?=$data['img']; ?>" alt="" style="width:100%;">
    </div>
  <?php endforeach; ?>
</div>