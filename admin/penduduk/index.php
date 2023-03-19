<?php 

	$sql = mysqli_query($con, "SELECT * FROM tbl_kependudukan");

 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h5>Data Postingan Penduduk</h5>
			</div>
			<div class="card-body">
				<table class="table table-striped">
					<thead>
						<tr class="text-center">
							<th>No</th>
							<th>Nama Dusun</th>
							<th>Jumlah KK</th>
							<th>L+K</th>
							<th>Laki-Laki</th>
							<th>Perempuan</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<?php $no = 1; foreach($sql as $data): ?>
					<tbody>
					<tr class="text-center">
						<td><?= $no++; ?></td>
						<td><?= $data['nama_dusun'] ?></td>
						<td><?= $data['jumlah_kk'] ?></td>
						<td><?= $data['lakiperempuan'] ?></td>
						<td><?= $data['laki_laki'] ?></td>
						<td><?= $data['perempuan'] ?></td>
						<td class="text-center">
							<div class="d-flex justify-content-center" style="gap: 4px;">
								<a class="btn btn-danger" href="index.php?page=hapus-data-penduduk&id=<?=$data['id']; ?>">
									<i class="fas fa-trash"></i>
								</a>
							<a href="" class="btn btn-warning text-white">
								<i class="fas fa-edit"></i>
							</a>
							</div>
						</td>
					</tr>
					<?php endforeach; ?>
					</tbody>
					<tfoot class="text-center bg-primary" style="">
						<tr>
							<td>Total</td>
							<td></td>
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
							<td></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>