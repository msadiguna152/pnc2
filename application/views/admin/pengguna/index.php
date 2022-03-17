
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">

    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">
            LIHAT DATA <?= $this->session->userdata('menu'); ?>
          </h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>

        <div class="box-header with-border">
          <h3 class="box-title">
            <a href="<?= site_url('admin/Pengguna/insert')?>" class="btn btn-flat btn-primary btn-sm">Tambah Data</a>
          </h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="table-responsive">
            <table id="example2" width="100%" class="table table-bordered table-hover">
              <thead>
                <tr>
                  <th style="text-align:center;">No</th>
                  <th style="text-align:center;">Nama Pengguna</th>
                  <th style="text-align:center;">Username</th>
                  <th style="text-align:center;">Level</th>
                  <th style="text-align:center;">Foto Profil</th>
                  <th style="text-align:center;width: 60px;">Opsi</th>
                </tr>
              </thead>
              <tbody style="text-align: left; vertical-align: top;">
                <?php $no=1; foreach ($pengguna->result() as $data) : ?>
                <tr>
                  <td style="text-align: center; vertical-align: middle;"><?= $no;?></td>
                  <td><?= $data->nama_pengguna;?></td>
                  <td><?= $data->username;?></td>
                  <td><?= $data->level;?></td>
                  <td>
                    <img width="100px" height="120px" class="img img-fluid img-thumbnail" src="<?= site_url();?>profil/<?= $data->foto_pengguna;?>">
                  </td>
                  <td align="center">
                    <a class="btn btn-sm btn-primary btn-block" href="<?= site_url('admin/Pengguna/update');?>/<?= $data->id_pengguna;?>">
                      Ubah
                    </a>
                    <a class="btn btn-sm btn-danger btn-block" onclick="return confirm('Hapus Data?')" href="<?= site_url('admin/Pengguna/delete');?>/<?= $data->id_pengguna;?>">
                      Hapus
                    </a>
                  </td>
                </tr>
                <?php $no++; endforeach;?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  