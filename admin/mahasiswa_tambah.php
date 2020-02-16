<?php include "head.php"; ?>
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

			<!-- Right labels -->
			<form class="form-horizontal" action="mahasiswa_tambah.php" method="post" role="form">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title">Calon Penerima Beasiswa</h6></div>
                    <div class="panel-body">

                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">NIK:</label>
                            <div class="col-sm-10">
                                <input type="text" name="id_mhs" class="form-control" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label text-right">Nama Calon Beasiswa:</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_mhs" required class="form-control">
                            </div>
                        </div>
						
						 <div class="form-group">
                            <label class="col-sm-2 control-label text-right">Jenis Kelamin:</label>
                            <div class="col-sm-10">
                                <input type="text" name="jenis_kelamin" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Tempat Lahir:</label>
                            <div class="col-sm-10">
                                <input type="text" name="tempat_lahir" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Tanggal Lahir:</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Perguruan Tinggi:</label>
                            <div class="col-sm-10">
                                <input type="text" name="perguruan_tinggi" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Alamat:</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" required class="form-control">
                            </div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Nagari:</label>
									<div class="col-sm-10">
										<select class="form-control" id="nagari" name="nagari">
											<option value='Kapar'>Kapar</option>
											<option value='Koto Baru'>Koto Baru</option>
											<option value='Sungai Aur'>Sungai Aur</option>
											<option value='Rabi Jonggor'>Rabi Jonggor</option>
											<option value='Parit'>Parit</option>
											<option value='Lingkua Aua'>Lingkua Aua</option>
											<option value='Ujuang Gading'>Ujuang Gading</option>
											<option value='Sasak'>Sasak</option>
											<option value='Aia Gadang'>Aia Gadang</option>
											<option value='Muaro Kiawai'>Muaro Kiawai</option>
											<option value='Kinali'>Kinali</option>
											<option value='Ranah Batahan'>Ranah Batahan</option>
											<option value='Desa Baru'>Desa Baru</option>
											<option value='Batahan'>Batahan</option>
											<option value='Kajai'>Kajai</option>
											<option value='Katiangan'>Katiangan</option>
											<option value='Aia Bangih'>Aia Bangih</option>
											<option value='Aua Kuniang'>Aua Kuniang</option>
											
										</select>
									</div>
                        </div>
						
						<div class="form-group">
                            <label class="col-sm-2 control-label text-right">Kecamatan:</label>
									<div class="col-sm-10">
										<select class="form-control" id="kecamatan" name="kecamatan">
											<option value='Luhak Nan Duo'>Luhak Nan Duo</option>
											<option value='Sungai Aur'>Sungai Aur</option>
											<option value='Gunung Tuleh'>Gunung Tuleh</option>
											<option value='Koto balingka'>Koto balingka</option>
											<option value='Sungai Baremas'>Sungai Baremas</option>
											<option value='Ranah Batahan'>Ranah Batahan</option>
											<option value='Lembah Melintang'>Lembah Melintang</option>
											<option value='Pasaman'>Pasaman</option>
											<option value='Kinali'>Kinali</option>
											<option value='Talamau'>Talamau</option>
											<option value='Sasak Ranah Pasisie'>Sasak Ranah Pasisie</option>
										</select>
									</div>
                        </div>
						
                        <div class="form-actions text-right">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
							<input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-default">
                        </div>

                    </div>
                </div>
            </form>
<?php
if(isset($_POST['simpan'])){
	$id_mhs	= $_POST['id_mhs'];
	$nama_mhs	= $_POST['nama_mhs'];
	$jenis_kelamin	= $_POST['jenis_kelamin'];
	$tempat_lahir	= $_POST['tempat_lahir'];
	$tanggal_lahir	= $_POST['tanggal_lahir'];
	$perguruan_tinggi	= $_POST['perguruan_tinggi'];
	$alamat		= $_POST['alamat'];
	$nagari		= $_POST['nagari'];
	$kecamatan	= $_POST['kecamatan'];

	$sql="insert into calonbeasiswa values
	('$id_mhs','$nama_mhs','$jenis_kelamin','$tempat_lahir','$tanggal_lahir','$perguruan_tinggi','$alamat','$nagari','$kecamatan')";
	$query= mysql_query($sql) or die(mysql_error());
	if($query) {
	echo "<script>window.alert('Calon Beasiswa berhasil ditambah');
            window.location=(href='mahasiswa.php')</script>";
	}}
?>			
            <!-- /right labels -->
<?php include "footer.php";?>