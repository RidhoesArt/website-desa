<?php
	require_once 'config/config.php';

	$query = mysqli_query($con, "SELECT * FROM tbl_kependudukan");
?>

<section class="data-administratif">

    <?php 
        require_once 'menu/menu-tambahan.php';
    ?>

	<div class="main">
		<div class="card mb-1 fullscreen has-background-img ">
		<div class="card-header border-bottom">
			<div class="media">
				<div class="icon-circle icon-40 bg-light-primary mr-3" style="background-color:#e0e5ff;padding:2%;border-radius:100%;">
					<i class="bi bi-distribute-vertical"></i>
				</div>
				<div class="media-body">
					<h6 class="my-0 content-color-primary">Tabel Populasi Per Wilayah</h6>
					<p class="small mb-0">
						<i class="bi bi-tag-fill"></i> Demografi Desa Pedekik						</p>
				</div>
			</div>
		</div>

		<div class="card-body">
			<div class="mb-0 content-color-secondary">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr class="pink-gradient">
								<th class="padat">No</th>
								<th colspan="8">Wilayah</th>
								<th style='text-align:center'>KK</th>
								<th style='text-align:center'>L+P</th>
								<th style='text-align:center'>L</th>
								<th style='text-align:center'>P</th>
							</tr>
						</thead>
						<?php $no = 1; ?>
						<?php foreach($query as $data) :?>
						<tbody class="text-center">
							<tr>
								<td align="left"><?= $no++; ?></td>
								<td align="left" colspan="8"><?= $data['nama_dusun'] ?></td>
								<td><?= $data['jumlah_kk'] ?></td>
								<td><?= $data['lakiperempuan'] ?></td>
								<td><?= $data['laki_laki'] ?></td>
								<td><?= $data['perempuan'] ?></td>
							</tr>
						</tbody>
						<?php endforeach; ?>
						<tfoot class="text-center bg-primary text-white" style="font-weight:bold;">
							<tr class="pink-gradient">
								<td colspan="9" align="left">TOTAL</td>
								<td>
							<?php
								$jumlahKkTotal = mysqli_fetch_array(mysqli_query($con,"select sum(jumlah_kk) 
								as total from tbl_kependudukan"));
								echo number_format ($jumlahKkTotal['total'],0,',','.');
							?>
							</td>
							<td>
							<?php
								$lakiperempuanTotal = mysqli_fetch_array(mysqli_query($con,"select sum(lakiperempuan) 
								as total from tbl_kependudukan"));
								echo number_format ($lakiperempuanTotal['total'],0,',','.');
							?>
							</td>
							<td>
							<?php
								$laki_laki = mysqli_fetch_array(mysqli_query($con,"select sum(laki_laki) 
								as total from tbl_kependudukan"));
								echo number_format ($laki_laki['total'],0,',','.');	
							?>
							</td>
							<td>
								<?php $perempuan = mysqli_fetch_array(mysqli_query($con,"select sum(perempuan) as total from tbl_kependudukan"));
								echo number_format ($perempuan['total'],0,',','.');?>
							</td>
							</tr>
						</tfoot>
					</table>
				</div>
			</div>
		</div>
	</div>

</section>