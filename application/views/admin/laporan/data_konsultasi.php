
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1> 
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-6 col-xl-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><?= $this->session->userdata('submenu'); ?> (PDF)</h3>
            </div>
            <div class="box-body">
              <div class="col-12">
                <form target="_BLANK" enctype="multipart/form-data" action="<?= site_url('admin/Laporan/cetak_lap_pdf')?>" method="post">

                  <div class="form-group row">
                    <label for="dari" class="col-sm-6 col-form-label">Dari Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="dari" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="dari" class="col-sm-6 col-form-label">Sampai Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="sampai" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-sm-6 col-form-label">Status Konfirmasi</label>
                    <div class="col-sm-6">
                      <select id="status" class="form-control" name="status" required>
                        <option value="Semua">Semua</option>
                        <option value="Ditolak">Ditolak</option>
                        <option value="Diterima">Diterima</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-4">
                      <button type="submit" name="cetak" class="btn btn-primary btn-sm btn-block">Cetak</button>
                    </div>
                  </div>

                </form>
              </div>


            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

        <div class="col-md-6 col-xl-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title"><?= $this->session->userdata('submenu'); ?> (EXCEL)</h3>
            </div>
            <div class="box-body">
              <div class="col-12">
                <form target="_BLANK" enctype="multipart/form-data" action="<?= site_url('admin/Laporan/cetak_lap_excel')?>" method="post">

                  <div class="form-group row">
                    <label for="dari" class="col-sm-6 col-form-label">Dari Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="dari" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="dari" class="col-sm-6 col-form-label">Sampai Tanggal</label>
                    <div class="col-sm-6">
                      <input type="date" class="form-control" name="sampai" required>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="status" class="col-sm-6 col-form-label">Status Konfirmasi</label>
                    <div class="col-sm-6">
                      <select id="status" class="form-control" name="status" required>
                        <option value="Semua">Semua</option>
                        <option value="Ditolak">Ditolak</option>
                        <option value="Diterima">Diterima</option>
                      </select>
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-4">
                      <button type="submit" name="cetak" class="btn btn-primary btn-sm btn-block">Cetak</button>
                    </div>
                  </div>

                </form>
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
  