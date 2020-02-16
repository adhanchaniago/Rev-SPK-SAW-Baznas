<?php
include "head.php";
?>

<!-- Body -->

<!-- Link Menu -->
<?php include "menu.php"; ?>

</div>
<br />

<div id="content">
	<!-- Page title -->
	<div class="page-title">
		<h5><i class="fa fa-desktop"></i> Halaman Admin</h5>
	</div>
	<!-- /page title -->

	<!-- Hover rows datatable inside panel -->
	<div class="panel panel-default">
		<div class="panel-heading" align="right">
			<h6 class="panel-title"><i class="fa fa-male"></i> Data Mahasiswa</h6>
			<a href="mahasiswa_download.php" class="btn btn-primary" target="_blank">Download</a>

		</div>
		<div class="datatable">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nik Mahasiswa</th>
						<th>Nama Mahasiswa</th>
						<th>Jenis Kelamin</th>
						<th>Tmp/Tgl Lahir</th>
						<th>Perguruan Tinggi</th>
						<th>Alamat</th>
						<th>Nagari</th>
						<th>Kecamatan</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$nomor = 0;
					$hasil = mysql_query("select * from calonbeasiswa");
					while ($dataku = mysql_fetch_array($hasil)) {
						// var_dump($dataku);
					?>
						<tr>
							<td><?php echo $nomor = $nomor + 1; ?></td>
							<td><?php echo $dataku['nik_mhs']; ?></td>
							<td><?php echo $dataku['nama_mhs']; ?></td>
							<td><?php echo $dataku['jenis_kelamin']; ?></td>
							<td><?php echo $dataku['tempat_lahir'] . " / " . tgl_indo($dataku['tanggal_lahir']); ?></td>
							<td><?php echo $dataku['perguruan_tinggi']; ?></td>
							<td><?php echo $dataku['alamat']; ?></td>
							<td><?php echo $dataku['nagari']; ?></td>
							<td><?php echo $dataku['kecamatan']; ?></td>

						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>

		<br />
		<br />


		<!-- Footer -->
		<?php include "footer.php"; ?>