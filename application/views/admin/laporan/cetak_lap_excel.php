<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data Konsultasi (Excel)</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Laporan Data Konsultasi.xls");
	?>
 
	<center>
		<h1>LAPORAN DATA KONSULTASI</h1>
	</center>
	<?php
	$dari = $this->input->post('dari');
	$sampai = $this->input->post('sampai');
	echo '<p style="font-size: 20px;font-style: bold;">Tanggal : '.format_indo($dari).' s/d '.format_indo($sampai).'</p>';
	?>
 
	<table cellpadding="5px" cellspacing="0px" border="1">
    <thead>
      <tr align="center">
        <th>No</th>
        <th>Waktu Pengajuan</th>
        <th>Nama Pemohon</th>
        <th>Nomor Whatsapp</th>
        <th>Alamat</th>
        <th>Permasalahan</th>
        <th>Tanggal</th>
        <th>Jam</th>
        <th>Link</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody style="text-align: left; vertical-align: top;">
      <?php $no=1; foreach ($laporan->result() as $data) : 
      ?>
      <tr>
        <td style="text-align: center; vertical-align: middle;"><?= $no;?></td>
        <td><?= "'".format_indo($data->waktu_pengajuan);?></td>
        <td><?= $data->nama_pemohon;?></td>
        <td><?= "'".$data->no_pemohon;?></td>
        <td><?= "'".$data->alamat_pemohon;?></td>
        <td><?= "'".$data->masalah;?></td>
        <td><?= "'".format_indo($data->tanggal);?></td>
        <td><?= "'".$data->jam;?></td>
        <td><?= $data->link_konsultasi;?></td>
        <td><?= $data->status;?></td>
      </tr>
      <?php $no++; endforeach;?>
    </tbody>
  </table>
</body>
</html>