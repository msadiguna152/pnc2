
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?=  strtoupper($this->session->userdata('menu')); ?>
      </h1>
    </section>


      <?php echo $this->session->flashdata('hasil'); ?>
    
    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-times"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><marquee>Permohonan Ditolak</marquee></span>
              <span class="info-box-number">
                <?= $this->db->query("SELECT * FROM tbl_konsultasi WHERE status='Ditolak'")->num_rows(); ?> Pengajuan
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><marquee>Permohonan Diterima</marquee></span>
              <span class="info-box-number">
                <?= $this->db->query("SELECT * FROM tbl_konsultasi WHERE status='Diterima'")->num_rows(); ?> Pengajuan
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="fa fa-warning"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><marquee>Menunggu Konfirmasi</marquee></span>
              <span class="info-box-number">
                <?= $this->db->query("SELECT * FROM tbl_konsultasi WHERE status='0'")->num_rows(); ?> Pengajuan
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text"><marquee>Total Pemohonan</marquee></span>
              <span class="info-box-number">
                <?= $this->db->query("SELECT * FROM tbl_konsultasi")->num_rows(); ?> Pengajuan         
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      <div class="row">

        <div class="col-md-12 col-xl-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">JADWAL KONSULTASI HARI INI</h3>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" width="100%" class="table table-bordered table-hover">
                  <thead align="center">
                    <tr>
                      <th>No</th>
                      <th>Waktu Pengajuan</th>
                      <th>Nama Pemohon</th>
                      <th>Tanggal</th>
                      <th>Jam</th>
                      <th>Link</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: left; vertical-align: top;">
                    <?php $no=1; foreach ($sekarang->result() as $data) : ?>
                    <tr>
                      <td style="text-align: center; vertical-align: middle;"><?= $no;?></td>
                      <td><?= format_indo($data->waktu_pengajuan);?></td>
                      <td><?= $data->nama_pemohon;?></td>
                      <td><?= format_indo($data->tanggal);?></td>
                      <td><?= $data->jam;?></td>
                      <td><a target="_BLANK" href="<?= $data->link_konsultasi;?>">Klik Link Konsultasi</a></td>

                    </tr>
                    <?php $no++; endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <!-- /.col (right) -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  