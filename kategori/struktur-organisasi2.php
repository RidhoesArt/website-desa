
<div class="row">
	<div class="col-md-8 col-lg-8">
	<div class="card fullscreen has-background-img ">
	<div id="printableArea">
		<div class="card-header border-bottom">
			<div class="media">
				<div class="icon-circle icon-40 bg-light-primary mr-3">
					<i class="material-icons">fingerprint</i>
				</div>
				<div class="media-body">
					<h5 class="my-0 content-color-primary">Perangkat Desa Pedekik</h5>
					<p class="small mb-0">
						<i class="fa fa-calendar" aria-hidden="true"></i> 27 Ags 2019  09:44:04						<i class="fa fa-heart" aria-hidden="true"></i> 28.515 Kali					</p>
				</div>
			</div>
		</div>
		<div class="card-body">
			<div class="mb-0 content-color-secondary">
												<div class="fb-like" data-href="http://pedekik.desa.id/artikel/2019/8/27/perangkat-desa-pedekik" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="true"></div>
				<style>.text-responsive img {max-width:100%;height: auto;}</style>
				<div class="text-responsive content-color-primary mt-1"><p style="text-align: center;"> </p>
		<p style="text-align: center;"><strong>STRUKTUR PEMERINTAH DESA PEDEKIK</strong></p>
		<p style="text-align: center;"><strong>KECAMATAN BENGKALIS</strong></p>
		<p style="text-align: center;"><link rel="stylesheet" href="http://pedekik.desa.id/assets/css/bagan.css">

		<div class="content-wrapper">
			<section class="content">
				<div class="row">
					<div class="col-md-12">
						<div class="box-body">
							<figure class="highcharts-figure">
							<div id="container"></div>
							<p class="highcharts-description">
							</p>
							</figure>
						</div>
					</div>
				</div>
			</section>
		</div>

		<script type="text/javascript">
			sonsole.log('hallo');

			Highcharts.chart('container', {
				chart: {
					height: 600,
					width: 800,
					inverted: true
				},

				title: {
					text: 'Struktur Organisasi Pemerintahan Desa Pedekik'
				},

				accessibility: {
					point: {
						descriptionFormatter: function (point) {
							var nodeName = point.toNode.name,
								nodeId = point.toNode.id,
								nodeDesc = nodeName === nodeId ? nodeName : nodeName + ', ' + nodeId,
								parentDesc = point.fromNode.id;
							return point.index + '. ' + nodeDesc + ', reports to ' + parentDesc + '.';
						}
					}
				},

				series: [{
					type: 'organization',
					name: "Desa Pedekik",
					keys: ['from', 'to'],
					data: [
						['BPD','LPM'],
						[14,20],
						[20,22],
						[20,23],
						[14,25],
						[14,26],
						[14,28],
						[14,29],
						[14,30],
						[23,31],
						[28,32],
						[14,33],
						[14,34],
						[28,35],
						[22,36],
						[20,37],
						[20,38],
						[23,39],
					],
					levels: [{
						level: 0,
						color: 'gold',
						dataLabels: {
							color: 'black'
						},
						height: 25
					}, {
						level: 1,
						color: 'MediumTurquoise',
						dataLabels: {
							color: 'white'
						},
						height: 25
					}, {
						level: 2,
						color: '#980104',
						dataLabels: {
							color: 'white'
						},
						height: 25
					}, {
						level: 4,
						color: '#359154',
						dataLabels: {
							color: 'white'
						},
						height: 25
					}],

					linkColor: "#ccc",
					linkLineWidth: 2,
					linkRadius: 0,

					nodes: [
										{
							id: 'BPD',
							color: 'gold',
							column: 0,
							offset: '-150'
							},
							{
							id: 'LPM',
							color: 'gold',
							column: 0,
							dataLabels: {
								color: 'black'
							},
							offset: '150'
							},
													{
								id: 14,
								title: 'Kepala Desa',
								name: 'SYAIFULLAH',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828790683.jpg',
																											},
										{
								id: 20,
								title: 'Sekretaris Desa',
								name: 'MASKUR',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828803065.jpg',
														column: 1,
																			offset: '100%',
																			layout: 'hanging',
																	},
										{
								id: 22,
								title: 'Kaur Tata Usaha',
								name: 'YANTI SETIA WATI',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828551848.jpg',
														column: 2,
																			offset: '100%',
																						},
										{
								id: 23,
								title: 'Kaur Keuangan',
								name: 'SARWIN',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828730160.jpg',
														column: 2,
																			offset: '100%',
																						},
										{
								id: 25,
								title: 'Kasi Pelayanan',
								name: 'SRI MULYANA',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828588011.jpg',
														column: 3,
																			offset: '-50%',
																						},
										{
								id: 26,
								title: 'Kasi Kesejahteraan',
								name: 'FINRA AFRIANTO',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828928540.jpg',
														column: 3,
																			offset: '-50%',
																						},
										{
								id: 28,
								title: 'Kasi Pemerintahan',
								name: 'AHMAD MIRWAN',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828278798.jpg',
														column: 3,
																			offset: '-50%',
																						},
										{
								id: 29,
								title: 'Kadus I',
								name: 'MUKHLIS',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828821840.jpg',
														column: 6,
																											},
										{
								id: 30,
								title: 'Kadus II',
								name: 'AHMAD SAFII',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828427479.jpg',
														column: 6,
																											},
										{
								id: 31,
								title: 'Staff',
								name: 'NUR AFRIANI',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828177137.jpg',
														column: 4,
																											},
										{
								id: 32,
								title: 'Staff',
								name: 'EKA GUSNAINI',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828590718.jpg',
														column: 4,
																											},
										{
								id: 33,
								title: 'Kadus III',
								name: 'SODIKIN',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828372438.jpg',
														column: 6,
																											},
										{
								id: 34,
								title: 'Kadus IV',
								name: 'HARIYONO',
								image: 'http://pedekik.desa.id/assets/images/pengguna/kuser.png',
														column: 6,
																											},
										{
								id: 35,
								title: 'Staff Operator',
								name: 'SYAIFUDIN',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828897453.jpg',
														column: 5,
																											},
										{
								id: 36,
								title: 'Staff',
								name: 'MUHAMMAD SAPAWI',
								image: 'http://pedekik.desa.id/assets/images/pengguna/kuser.png',
														column: 4,
																											},
										{
								id: 37,
								title: 'Staff Kebersihan',
								name: 'RIKI RINALDI',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828523123.jpg',
														column: 5,
																											},
										{
								id: 38,
								title: 'Staff Kebersihan',
								name: 'SURBAINI',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828208832.jpg',
														column: 5,
																											},
										{
								id: 39,
								title: 'Staff',
								name: 'GUFRON',
								image: 'http://pedekik.desa.id/desa/upload/user_pict/kecil_1674616828155427.jpg',
														column: 4,
																											},
								],
					colorByPoint: false,
					color: '#007ad0',
					dataLabels: {
						color: 'white'
					},
					shadow: {
					color: '#ccc',
					width: 10,
					offsetX: 0,
					offsetY: 0
					},
					borderColor: 'white',
					nodeWidth: 75
				}],
				tooltip: {
					outside: true
				},
				exporting: {
					allowHTML: true,
					sourceWidth: 800,
					sourceHeight: 600
				}

			});

		</script>

	</div>
	</div>
	</div>
</div>