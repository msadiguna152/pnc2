
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?= $this->session->userdata('menu'); ?>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Ubah Data</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" role="form" action="<?= site_url('admin/Pengguna/update_proses');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Nama Pengguna</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="nama_pengguna" placeholder="Masukan Nama Pengguna" required="" value="<?= $data['nama_pengguna'] ?>">
                    <input type="text" hidden name="id_pengguna" placeholder="Masukan id Pengguna" required="" value="<?= $data['id_pengguna'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Username</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="username" placeholder="Masukan Username" required="" value="<?= $data['username'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Password</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" id="" name="password" placeholder="Masukan Password" required="" value="<?= $data['password'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Foto Pengguna</label>
                  <div class="col-sm-8">
                    <input type="file" class="form-control" id="" name="foto_pengguna" placeholder="Masukan Foto Pengguna" required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Level</label>
                  <div class="col-sm-8">
                    <select class="form-control select2" style="width: 100%;" id="" name="level" data-placeholder="Pilih Level" required="">
                    <option value="">Pilih Level</option>
                    <option <?= $data['level']=="Admin"?'selected':'';?> value="Admin">Admin</option>
                    <option <?= $data['level']=="Pegawai"?'selected':'';?> value="Pegawai">Pegawai</option>
                    <option <?= $data['level']=="Kepala Dinas"?'selected':'';?> value="Kepala Dinas">Kepala Dinas</option>
                  </select>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" name="simpan" class="btn btn-sm btn-success pull-right" style="margin-left: 5px;">SIMPAN</button>
                <button type="reset" name="reset" class="btn btn-sm btn-danger pull-right" style="margin-left: 5px;">BATAL</button>
                <button type="reset" onclick="history.back(-1)" name="reset" class="btn btn-sm btn-warning pull-right" style="margin-left: 5px;">KEMBALI</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  