
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">KONFIRMASI DATA PERMOHONAN <?=  strtoupper($this->session->userdata('menu')); ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" name="myform" role="form" action="<?= site_url('admin/Konsultasi/update_proses');?>" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Nama Pemohon</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="nama_pemohon" value="<?= $data['nama_pemohon'];?>" placeholder="Masukan Kode Pendaftar..." required="">
                    <input type="text" name="id_konsultasi" hidden value="<?= $data['id_konsultasi'];?>">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Rincian Masalah</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="masalah" placeholder="Masukan Rincian Masalah..." required=""><?= $data['masalah'];?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">No. HP (Aktif Whatapps)</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="no_pemohon" value="<?= $data['no_pemohon'];?>" placeholder="Masukan No. HP..." required="">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Alamat Pemohon</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="alamat_pemohon" placeholder="Alamat Pemohon..." required=""><?= $data['alamat_pemohon'];?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Konfirmasi</label>
                  <div class="col-sm-8">
                    <select class="form-control" id="konfir" onchange="enabledisabletext()" name="status" data-placeholder="Pilih Status Konfirmasi" required="">
                      <option value="">Pilih Status Konfirmasi</option>
                      <option <?= $data['status']=="0"?'selected':'';?> value="0">Menunggu Konfirmasi</option>
                      <option <?= $data['status']=="Diterima"?'selected':'';?> value="Diterima">Diterima</option>
                      <option <?= $data['status']=="Ditolak"?'selected':'';?> value="Ditolak">Ditolak</option>
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Tanggal</label>
                  <div class="col-sm-8">
                    <input type="date" class="form-control" disabled id="tanggal" name="tanggal" value="<?= $data['tanggal'];?>" placeholder="Masukan Tanggal...">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Jam</label>
                  <div class="col-sm-8">
                    <input type="time" class="form-control" disabled id="jam" name="jam" value="<?= $data['jam'];?>" placeholder="Masukan Jam...">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Link Konsultasi</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" disabled id="link_konsultasi" name="link_konsultasi" value="<?= $data['link_konsultasi'];?>"  placeholder="Masukan Link Konsultasi...">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Alasan Ditolak</label>
                  <div class="col-sm-8">
                    <textarea class="form-control" name="alasan" disabled id="alasan" placeholder="Masukan Alasan Ditolak..."><?= $data['alasan'];?></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Waktu Pengajuan</label>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="waktu_pengajuan" value="<?= format_indo($data['waktu_pengajuan']);?>" readonly="">
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
  
  <script language="javascript">
    function enabledisabletext()
    {
      if(document.myform.konfir.value=='Diterima') {

        document.myform.tanggal.disabled=false;
        document.myform.jam.disabled=false;
        document.myform.link_konsultasi.disabled=false;
        document.myform.alasan.disabled=true;

        document.myform.tanggal.required=true;
        document.myform.jam.required=true;
        document.myform.link_konsultasi.required=true;
        document.myform.alasan.required=false;

        document.myform.tanggal.value="";
        document.myform.jam.value="";
        document.myform.link_konsultasi.value="";
        document.myform.alasan.value="";

      } else if (document.myform.konfir.value=='Ditolak') {

        document.myform.tanggal.disabled=true;
        document.myform.jam.disabled=true;
        document.myform.link_konsultasi.disabled=true;
        document.myform.alasan.disabled=false;

        document.myform.tanggal.required=false;
        document.myform.jam.required=false;
        document.myform.link_konsultasi.required=false;
        document.myform.alasan.required=true;

        document.myform.tanggal.value="";
        document.myform.jam.value="";
        document.myform.link_konsultasi.value="";
        document.myform.alasan.value="";

      } else {

        document.myform.tanggal.disabled=true;
        document.myform.jam.disabled=true;
        document.myform.link_konsultasi.disabled=true;
        document.myform.alasan.disabled=true;
        document.myform.tanggal.value="";
        document.myform.jam.value="";
        document.myform.link_konsultasi.value="";
        document.myform.alasan.value="";

      }
    }
  </script>