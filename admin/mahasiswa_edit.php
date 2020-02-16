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
<?php
$id_mhs = $_GET['id_mhs'];
$query = mysql_query("select * from calonbeasiswa where id_mhs='$id_mhs'");
$dataku = mysql_fetch_array($query);
?>
			<!-- Right labels -->
			<form class="form-horizontal" action="mahasiswa_edit.php" method="post" role="form">
				<div class="panel panel-default">
					<div class="panel-heading"><h6 class="panel-title">Calon Beasiswa</h6></div>
					<div class="panel-body">

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">NIK:</label>
							<div class="col-sm-10">
								<input type="text" name="id_mhs" value="<?php echo $dataku['id_mhs']; ?>" class="form-control" required>
							</div>
						</div>

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Nama Mahasiswa:</label>
							<div class="col-sm-10">
								<input type="text" name="nama_mhs" value="<?php echo $dataku['nama_mhs']; ?>" required class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Jenis Kelamin:</label>
							<div class="col-sm-10">
								<input type="text" name="jenis_kelamin" value="<?php echo $dataku['jenis_kelamin']; ?>" required class="form-control">
							</div>
						</div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Tempat Lahir:</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" value="<?php echo $dataku['tempat_lahir']; ?>" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Tanggal Lahir:</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" value="<?php echo $dataku['tanggal_lahir']; ?>" required class="form-control">
                            </div>
                        </div>
						

						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Perguruan Tinggi:</label>
							<div class="col-sm-10">
								<input type="text" name="perguruan_tinggi" value="<?php echo $dataku['perguruan_tinggi']; ?>" required class="form-control">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-2 control-label text-right">Alamat:</label>
							<div class="col-sm-10">
								<input type="text" name="alamat" value="<?php echo $dataku['alamat']; ?>" required class="form-control">
							</div>
						</div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Nagari:</label>
                            <div class="col-sm-10">
                                <input type="text" name="nagari" value="<?php echo $dataku['nagari']; ?>"required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Kecamatan:</label>
                            <div class="col-sm-10">
                                <input type="text" name="kecamatan" value="<?php echo $dataku['kecamatan']; ?>"required class="form-control">
                            </div>
                        </div>

					<div class="form-action text-right">
						<input type="submit" name="ubah" value="Ubah" class="btn btn-primary">
						<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
					</div>

				</div>
			</div>
			</form>
<?php
if (isset($_POST['ubah'])) {
	$id_mhs = $_POST['id_mhs'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$nama_mhs = $_POST['nama_mhs'];
	$nama_mhs = $_POST['jenis_kelamin'];
	$perguruan_tinggi = $_POST['perguruan_tinggi'];
	$alamat = $_POST['alamat'];
	$nagari = $_POST['nagari'];
	$kecamatan = $_POST['kecamatan'];
	

	$query=mysql_query("UPDATE calonbeasiswa SET nama_mhs='$nama_mhs', jenis_kelamin='$jenis_kelamin', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir',perguruan_tinggi='$perguruan_tinggi',alamat='$alamat',nagari='$nagari',kecamatan='$kecamatan' WHERE id_mhs='$id_mhs'") or die(mysql_error());
	if ($query) {
		echo "<script>window.alert('Calon Penerima Beasiswa berhasil diubah');
				window.location=(href='mahasiswa.php')</script>";
	}}
?>
		<!-- /right labels -->
<?php include "footer.php"; ?>