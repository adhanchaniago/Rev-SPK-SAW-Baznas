<?php
include '../config/config/koneksi.php';
?>
<!DOCTYPE html>

<head>
  <title>Laporan Mahasiswa</title>
  <style>
    html,
    body {
      background: #eee;
      margin: 0;
      font-family: 'Open Sans', sans-serif;
    }


    .container {
      width: 1200px;
      margin: 25px auto;
      /* padding-left: 100px; */
    }

    /*design table 1*/
    table {
      border-collapse: collapse;
      width: 100%;
      font-family: sans-serif;
      color: #232323;
      border-collapse: collapse;
    }

    table,
    th,
    td {
      border: 1px solid black;

      border: 1px solid #999;
      padding: 8px 20px;
    }

    .contoh-link:hover {
      background: #16A085;
    }
  </style>
</head>

<body>
  <div class="container">
    <center>
      <h1>BADAN AMIL ZAKAT NASIONAL</h1>
      <h5>Lingkuang Aua, Pasaman, Kabupaten Pasaman Barat, Sumatera Barat 26566</h5>
      <h5>No Tlp. : 0852-7121-1216</h5>
      <hr style="display: block; height: 1px;border: 0; border-top: 1px solid #ccc;margin: 1em 0; padding: 0;">
    </center>

    <br>
    <h3 align="center"><u>LAPORAN DATA MAHASISWA</u></h3>
    <br>
    <br>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nik Mahasiswa</th>
          <th>Nama Mahasiswa</th>
          <th>Jenis Kelamin</th>
          <th>Tmp/Tgl Lahir</th>
          <th>Perguruan Tinggi</th>
          <th>Alamat</th>
          <th>Nagari </th>
          <th>Kecamatan</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $ambil = (mysql_query("SELECT * FROM calonbeasiswa"));
        while ($sql = mysql_fetch_array($ambil)) {
          // var_dump($sql);
        ?>
          <tr>
            <td><?php echo ++$no ?></td>
            <td><?php echo $sql['nik_mhs'] ?></td>
            <td><?php echo $sql['nama_mhs'] ?></td>
            <td><?php echo $sql['jenis_kelamin'] ?></td>
            <td><?php echo $sql['tempat_lahir'] . " / " . $sql['tanggal_lahir'] ?></td>
            <td><?php echo $sql['perguruan_tinggi'] ?></td>
            <td><?php echo $sql['alamat'] ?></td>
            <td><?php echo $sql['nagari'] ?></td>
            <td><?php echo $sql['kecamatan'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

    <br>
    <br>
    <br>

    <p style="margin-left: 950px">
      Pasaman Barat, <?php echo date('d-m-Y') ?><br>
    </p>
    <p style="margin-left: 1000px">
      Pimpinan
    </p>
    <br>
    <br>
    <br>
    <p style="margin-left: 1000px">
      ...........................
    </p>

  </div>

  <!-- <script>
    window.print();
  </script> -->
</body>

</html>