<?php
// sesuai kan root file mPDF anda
$nama_dokumen='Laporan Data'; //Beri nama file PDF hasil.
define('_MPDF_PATH','../config/config/MPDF60/'); //sesuaikan dengan root folder anda
include(_MPDF_PATH . "mpdf.php"); //includekan ke file mpdf
$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document
//Beginning Buffer to save PHP variables and HTML tags
ob_start();

//Tuliskan file HTML di bawah sini , sesuai File anda .
?>
<!--sekarang Tinggal Codeing seperti biasanya. HTML, CSS, PHP tidak
masalah.-->
<?php

// Koneksi ke database //

error_reporting(0);
include "../config/config/koneksi.php";
include "../config/config/fungsi_indotgl.php";

 
?>

<!--CONTOH Code START-->
<table border='0' align='LEFT'>
<tr>
<th>
<img src="../images/baznas.png"  align="left" style="width:200px;height:200px;" >
</th>
<th width="20">
</th>
<th width="900px" align="left">
<h2> <left> BADAN AMIL ZAKAT NASIONAL<br />
LAPORAN DATA KLASIFIKASI<br> </left>

</th>
</tr>
</table>
<hr style="height:8px;" />

<br>
<h3 style="text-align:center;"> Laporan Klasifikasi </h3>


<table width="736" border="1" cellpadding="5" cellspacing="0">
              <tbody>
				  <thead>
                        <tr>
                        <th>No.</th><th>Kode Mahasiswa</th><th>Nama Mahasiswa</th><th>Jurusan Mahasiswa</th><th>Keterangan Miskin</th><th>Nilai IPK</th><th>Penghasilan Orang Tua</th><th>Semester</th><th>Usia</th>
                      </tr>
                       </thead>
				  <tbody>
                     <?php
                    $tampil=mysql_query("SELECT * FROM 
					klasifikasi a LEFT JOIN calonbeasiswa b ON a.id_mhs=b.id_mhs");
                    $no = 1;
                      while ($r=mysql_fetch_array($tampil)){
                    ?>
                        <tr>
                        <td><?= $no ?></td>
						<td><?= $r['id_mhs'] ?></td>
                        <td><?= $r['nama_mhs'] ?></td>
						<td><?= $r['jurusan'] ?></td>
						<td><?= $r['keterangan_miskin'] ?></td>
                        <td><?= $r['nilai_ipk'] ?></td>
						<td><?= $r['penghasilan_ortu'] ?></td>
						<td><?= $r['semester'] ?></td>
                        <td><?= $r['usia'] ?></td>
					    </tr>

                    <?php
                    $no++;
                    }
                    ?>

							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="9" class="text-left">
                                        Pasaman Barat, <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>________________________________<strong></u><br>
                                        NIP._________________
									             </td>
								</tr>
							</tfoot>
                    
                      </table>
                      



<?php
//Batas file sampe sini
$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
ob_end_clean();
//$stylesheet = file_get_contents('css/zebra.css');
//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
$mpdf->WriteHTML($stylesheet,1);
$mpdf->WriteHTML(utf8_encode($html));
$mpdf->Output($nama_dokumen.".pdf" ,'I');
exit;
?>