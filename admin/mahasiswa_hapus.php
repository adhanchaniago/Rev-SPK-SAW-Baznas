<?php
include '../inc/koneksi.php';

$nik_mhs = $_GET['nik_mhs'];
$query = mysql_query("delete from calonbeasiswa where nik_mhs='$nik_mhs'") or die(mysql_error());
$q = mysql_query("DELETE FROM klasifikasi WHERE nik_mhs='$nik_mhs'") or die(mysql_error());
if ($query) {
?>
	<script language="JavaScript">
		alert('Data calon Beasiswa berhasil di hapus');
		document.location = 'mahasiswa.php';
	</script>
<?php
}
?>