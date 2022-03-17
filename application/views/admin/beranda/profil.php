<?php
foreach ($pengguna->result() as $data):
  $id_pengguna = $data->id_pengguna;
  $nama_pengguna = $data->nama_pengguna;
  $username = $data->username;
  $password = $data->password;
  $level = $data->level;
  $foto_pengguna = $data->foto_pengguna;
endforeach;
?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-4">

            <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
              <h3 class="widget-user-username"><?= $nama_pengguna;?></h3>
              <h5 class="widget-user-desc"><?= $level;?></h5>
            </div>
            <div class="widget-user-image">
              <img class="img img-circle" style="height: 90px;widows: 90px;" src="<?= site_url('profil/'.$foto_pengguna)?>" alt="<?= $nama_pengguna;?>">
            </div>
            <div class="box-footer">
              <div class="row">
                <div class="col-sm-4 border-right">
                  <div class="description-block">
                    <br><br>
                  </div>
                  <!-- /.description-block -->
                </div>
              </div>
              <!-- /.row -->
            </div>
          </div>

          </div>
          <!-- /.col -->
          <div class="col-md-6">
            <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">AKUN</h3>
            </div>
            <div class="box-body">
              <form role="form" onsubmit="return formValidasi()" enctype="multipart/form-data" action="<?= site_url('admin/beranda/ubah_proses');?>" method="post">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group row">
                      <label for="nama_pengguna" class="col-sm-4 col-form-label">Nama Pengguna</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="nama_pengguna" value="<?= $nama_pengguna; ?>" required="" placeholder="Masukan Nama Pengguna . . .">
                        <input type="text" hidden="" name="id_pengguna" value="<?= $id_pengguna; ?>" required="" placeholder="Masukan Nama Pengguna . . .">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="username" class="col-sm-4 col-form-label">Username</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" name="username" value="<?= $username; ?>" required="" placeholder="Masukan Username Pengguna . . .">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-sm-4 col-form-label">Password Baru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="password" name="password" value="" required="" placeholder="Masukan Password Baru . . .">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="password" class="col-sm-4 col-form-label">Konfirmasi Password Baru</label>
                      <div class="col-sm-8">
                        <input type="text" class="form-control" id="password2" name="password2" value="" required="" placeholder="Masukan Konfirmasi Password Baru . . .">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="foto_pengguna" class="col-sm-4 col-form-label">Foto Pengguna</label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control-file" id="image-source" onchange="previewImage();" name="foto_pengguna"  placeholder="Masukan Foto Pengguna . . .">
                        <img id="image-preview" src="<?= site_url();?>profil/<?= $foto_pengguna; ?>" class="img img-thumbnail" style="height: 100px; width: 100px;">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="" class="col-sm-4"></label>
                      <div class="col-sm-2 m-1">
                        <button type="submit" name="simpan" class="btn btn-info btn-sm btn-block" >Update</button>
                      </div>
                      <div class="col-sm-2 m-1">
                        <button type="reset" name="reset" class="btn btn-danger btn-sm btn-block">Batal</button>
                      </div>
                    </div>
                  </div>

                </div>
              </form>

            </div>
            <!-- /.box-body -->
          </div>

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<script type="text/javascript">
  function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
    oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

<script type="text/javascript">
    function formValidasi() {
      var get_password_baru = document.getElementById('password').value;
      var get_kon_password_baru = document.getElementById('password2').value;
      if (get_password_baru!=get_kon_password_baru) {
        alert('Konfirmasi Password Tidak Sesuai!');
        return false;
      }
    }
  </script>