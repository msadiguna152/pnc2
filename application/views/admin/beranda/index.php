
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

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Date picker</h3>
            </div>
            <div class="box-body">


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
  