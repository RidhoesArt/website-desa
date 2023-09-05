
<?php
    require_once 'config/config.php';
?>


<?php
	$perempuan = mysqli_fetch_array(mysqli_query($con,"select sum(perempuan) as total from tbl_kependudukan"));
	var_dump($perempuan);
	$laki_laki = mysqli_fetch_array(mysqli_query($con,"select sum(laki_laki) as total from tbl_kependudukan"));
	var_dump($laki_laki);

	$query = "SELECT * FROM tbl_kependudukan";
	$result = mysqli_query($con, $query);

?>


<section class="data-administratif bg-primary" >
	<?php
		require_once 'menu/menu-tambahan.php';
	?>

	<div class="main bg-white" style="width:auto;display:grid;justify-content:center;align-items:center;">
		<div id="piechart" style="width:100%;"></div>
	</div>

	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
		  ['Laki-Laki', <?= $laki_laki['total'];?>],
		  ['Perempuan', <?= $perempuan['total'];?>],
		  
			// <?php
			// 	while($chart = mysqli_fetch_assoc($result)){
			// 		echo "['".$jenis_kelamin."', ".$chart['perempuan']."],";
			// 	}
			
			// ?>


        ]);

        var options = {
          title: 'My Daily Activities'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>



	<!-- <div class="main">
			<div class="card mb-1">
				<div id="accordiongrafik">
					<div class="card">
						<button class="btn btn-link text-white p-0" style="text-decoration:none;" data-toggle="collapse" data-target="#collapseFourgrafik" aria-expanded="true" aria-controls="collapseFourgrafik">
							<div class="card-header bg-primary text-white" style="text-align:left;font-weight:bold;" id="headingFourgrafik">Sembunyikan Grafik&nbsp;&nbsp;<i class="bi bi-chevron-down text-white"></i></div>
						</button>
						<div id="collapseFourgrafik" class="collapse show" aria-labelledby="headingFourgrafik" data-parent="#accordiongrafik">
						<div class="card-header border-bottom">
							<div class="media">
								<div class="icon-circle icon-40 bg-light-primary mr-3">
									<i class="material-icons">assessment</i>
								</div>
								<div class="media-body">
									<h6 class="my-0 content-color-primary">Grafik Pendidikan Sedang Ditempuh</h6>
									<p class="small mb-0">
										<i class="material-icons icon-sm">local_offer</i> Desa Pedekik								</p>
								</div>
								<a class="btn btn-primary btn-xs text-white" onclick="switchType();">Ubah Grafik</a>
							</div>
						</div>
						<div class="card-body">
							<div class="mb-0 content-color-secondary">
								<div id="container"></div>
								<div id="contentpane">
									<div class="ui-layout-north panel top"></div>
								</div>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>

	</div> -->
</section>