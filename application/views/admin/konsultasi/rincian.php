
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
              <h3 class="box-title">RINCIAN DATA PERMOHONAN</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Nama Pemohon</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= $data['nama_pemohon'];?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Rincian Masalah</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= $data['masalah'];?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">No. HP (Aktif Whatapps)</label>
                  <div class="col-sm-8">
                  <label class="control-label text-info" style="text-align: left"><?= $data['no_pemohon'];?></label>

                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Alamat Pemohon</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= $data['alamat_pemohon'];?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Konfirmasi</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left">
                      <?php echo $data['status']=="0"?'Menunggu Konfirmasi': $data['status'] ;?>
                    </label>
                  </div>
                </div>

                <?php if ($data['status']=="Diterima") { ?>
                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Tanggal</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= format_indo($data['tanggal']);?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Jam</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= $data['jam'];?></label>
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Link Konsultasi</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><a target="_BLANK" href="<?= $data['link_konsultasi'];?>">Klik Link Konsultasi</a></label>
                  </div>
                </div>
                <?php }; ?>

                <?php if ($data['status']=="Ditolak") { ?>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Alasan Ditolak</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= $data['alasan'];?></label>
                  </div>
                </div>

                <?php } ?>

                <div class="form-group">
                  <label class="col-sm-4 control-label" style="text-align: left">Waktu Pengajuan</label>
                  <div class="col-sm-8">
                    <label class="control-label text-info" style="text-align: left"><?= format_indo($data['waktu_pengajuan']);?></label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <?php if ($data['status']=="Ditolak") { ?>
                  <a href="<?= site_url('admin/Konsultasi');?>" onclick="KonfirmasiDitolak()" class="btn btn-sm btn-success pull-right" style="margin-left: 5px;">Kirim Konfirmasi Ditolak</a>
                <?php } ?>

                <?php if ($data['status']=="Diterima") { ?>
                  <a href="<?= site_url('admin/Konsultasi');?>" onclick="KonfirmasiDiterima()" class="btn btn-sm btn-success pull-right" style="margin-left: 5px;">Kirim Konfirmasi Diterima</a>
                <?php } ?>
              </div>
              <!-- /.box-footer -->
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    function KonfirmasiDiterima() {
      window.open("https://wa.me/<?= $data['no_pemohon']; ?>?text=*Konfirmasi*%20*PINTU*%20*PTSP*%20(Permintaan%20Informasi%20Tatap%20mUka%20Pelayanan%20Terpadu%20Satu%20Pintu)%20Pengadilan%20Negeri%20Cikarang%0A%0ANama%20Pemohon%20%3A <?= $data['nama_pemohon']; ?>%0AStatus%20Konfirmasi%20%3A <?= $data['status']; ?>%0A%0ATanggal%20%3A <?= format_indo($data['tanggal']); ?>%0AJam%20%3A <?= $data['jam']; ?>%0ALink%20ZOOM%20%3A <?= $data['link_konsultasi']; ?> %0AWaktu%20Pengajuan%20%3A <?= format_indo($data['waktu_pengajuan']); ?>", '_blank');
    }
  </script>

  <script>
    function KonfirmasiDitolak() {
      window.open("https://wa.me/<?= $data['no_pemohon']; ?>?text=*Konfirmasi*%20*PINTU*%20*PTSP*%20(Permintaan%20Informasi%20Tatap%20mUka%20Pelayanan%20Terpadu%20Satu%20Pintu)%20Pengadilan%20Negeri%20Cikarang%0A%0ANama%20Pemohon%20%3A <?= $data['nama_pemohon']; ?>%0AStatus%20Konfirmasi%20%3A <?= $data['status']; ?>%0A%0ACatatan%20%3A <?= $data['alasan']; ?> %0AWaktu%20Pengajuan%20%3A <?= format_indo($data['waktu_pengajuan']); ?>", '_blank');
    }
  </script>
  
  <script language="javascript">
    function enabledisabletext()
    {
      if(document.myform.konfir.value=='Diterima') {

        document.myform.tanggal.disabled=false;
        document.myform.jam.disabled=false;
        document.myform.link_konsultasi.disabled=false;
        document.myform.alasan.disabled=true;
        document.myform.tanggal.value="";
        document.myform.jam.value="";
        document.myform.link_konsultasi.value="";
        document.myform.alasan.value="";

      } else if (document.myform.konfir.value=='Ditolak') {

        document.myform.tanggal.disabled=true;
        document.myform.jam.disabled=true;
        document.myform.link_konsultasi.disabled=true;
        document.myform.alasan.disabled=false;
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