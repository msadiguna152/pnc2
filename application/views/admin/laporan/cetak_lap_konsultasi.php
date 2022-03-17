<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>CETAK LAPORAN</title>
  <style>

  p {
    line-height: 1;
  }

  table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    table-layout:fixed;
    width: 100%;
  }

  @page { 
    margin-right: 2cm;
    margin-left: 2cm;
    margin-bottom: 2cm;
    margin-top: 1cm; 
  }
</style>
</head>

<body>
  <p><center><img height="100px" src="<?= site_url('assets/kop1.png');?>"></center></p>
  <hr>
  <p><center><b style="font-size: 20px;">LAPORAN DATA KONSULTASI</b></center></p><br>
  <table cellpadding="5px" cellspacing="0px" border="1">
    <thead>
      <tr align="center">
        <th>No</th>
        <th>Waktu Dibuat</th>
        <th>Nama Pemohon</th>
        <th>Nomor Whatapps</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody style="text-align: left; vertical-align: top;">
      <?php $no=1; foreach ($laporan->result() as $data) : 
      ?>
      <tr>
        <td style="text-align: center; vertical-align: middle;"><?= $no;?></td>
        <td><?= format_indo($data->waktu_pengajuan);?></td>
        <td><?= $data->nama_pemohon;?></td>
        <td><?= $data->no_pemohon;?></td>
        <td><?= $data->status;?></td>
      </tr>
      <?php $no++; endforeach;?>
    </tbody>
  </table>
  <br>
  <table cellpadding="0px" cellspacing="0px" border="0">
    <tr>
      <td width="850px"> </td>
      <td>Kandangan, <?= format_indo(date('Y-m-d')); ?></td>
    </tr>
    <tr>
      <td></td>
      <td>Kepala Dinas Peradilan Negeri Cikarang,</td>
    </tr>
    <tr>
      <td></td>
      <td><br><br><br><br><br><br></td>
    </tr>
    <tr>
      <td></td>
      <td><u><b>Ir. XXX</b></u></td>
    </tr>

    <tr>
      <td></td>
      <td>NIP. XXX</td>
    </tr>
  </table>
</body>
</html>