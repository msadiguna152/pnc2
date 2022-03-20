
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-md-12">
          <div class="box box-default">
            <div class="box-header">
              <h3 class="box-title">DATA <?=  strtoupper($this->session->userdata('menu')); ?></h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="table-responsive">
                <table id="example2" width="100%" class="table table-bordered table-hover">
                  <thead align="center">
                    <tr>
                      <th>No</th>
                      <th>Waktu Pengajuan</th>
                      <th>Nama Pemohon</th>
                      <th>Nomor Whatapps</th>
                      <th>Status</th>
                      <th>Konfirmasi</th>
                      <th>Rincian</th>
                    </tr>
                  </thead>
                  <tbody style="text-align: left; vertical-align: top;">
                    <?php $no=1; foreach ($konsultasi->result() as $data) : ?>
                    <tr>
                      <td style="text-align: center; vertical-align: middle;"><?= $no;?></td>
                      <td><?= format_indo($data->waktu_pengajuan);?></td>
                      <td><?= $data->nama_pemohon;?></td>
                      <td><?= $data->no_pemohon;?></td>
                      <td>
                        <?php
                        if ($data->status!="0") {
                          if ($data->status=="Diterima") {
                            echo '<span class="label label-success">'.$data->status.'</span>';
                          } else {
                            echo '<span class="label label-danger">'.$data->status.'</span>';
                          }
                        } else if ($data->status=="0"){
                          echo '<span class="label label-warning">Menunggu Konfirmasi</span>';
                        }
                        ?>
                      </td>
                      <td align="center">
                        <a ata-toggle="tooltip" title="Kirim Konfirmasi Pemohon <?= $data->nama_pemohon;?>" href="<?= site_url('admin/Konsultasi/ubah');?>/<?= $data->id_konsultasi;?>">
                          <button class="btn btn-sm btn-primary btn-block">Konfirmasi</button>
                        </a>
                      </td>

                      <td align="center">
                        <?php if ($data->status=="0") { ?>
                          <a data-toggle="tooltip" title="Lihat Data Rincian Pemohon <?= $data->nama_pemohon;?>" href="javascript:void(0)">
                            <button class="btn btn-sm btn-info btn-block">Lihat</button>
                          </a>
                        <?php  } else { ?>
                          <a data-toggle="tooltip" title="Lihat Data Rincian Pemohon <?= $data->nama_pemohon;?>" href="<?= site_url('admin/Konsultasi/rincian');?>/<?= $data->id_konsultasi;?>">
                            <button class="btn btn-sm btn-info btn-block">Lihat</button>
                          </a>
                        <?php  } ?>
                        
                      </td>
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
  