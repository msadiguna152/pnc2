<body class="bg">
  <div class="preloader">
    <div class="loading">
      <img src="<?= base_url()?>assets2/loading.gif" width="80">
      <p>Harap Tunggu</p>
    </div>
  </div>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-2 col-lg-2">
      </div>

      <div class="col-xl-8 col-lg-8 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-4">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="p-3">
                  <div class="text-center">
                    <div class="row">
                      <div class="col-12">
                        <marquee><label class="h4  text-success mb-1"><b><?= strtoupper("PINTU PTSP (Permintaan Informasi Tatap Muka Pelayanan Terpadu Satu Pintu) Pengadilan Negeri Cikarang");?></b></label></marquee>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-xl-2 col-lg-2">
      </div>
    </div>

    <div class="row justify-content-center">

      <div class="col-xl-8 col-lg-8 col-md-12">

        <div class="card o-hidden border-0 shadow-lg my-1">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="p-5">
                  <div class="text-center">
                    <div class="row">
                      <div class="col-12">
                        <img class="img img-fluid" style="height: 150px;" src="<?= base_url()?>assets2/logo_cikarang.png">
                      </div>
                    </div>
                    <div class="row ">
                      <div class="col-12 mt-3">
                        <h1 class="h4 text-gray-900 mb-4"><b><?= strtoupper('Silahkan Login');?></b></h1>
                      </div>
                    </div>
                  </div>
                  <div class="text-center">
                    <div class="row">
                      <div class="col-xl-12 col-md-12 mt-3">
                        <form class="user" action="<?= site_url('Login/proses_login')?>" method="post">
                          <div class="form-group">
                            <input type="text" class="form-control" name="username" require placeholder="Masukan Username">
                          </div>

                          <div class="form-group">
                            <input type="password" class="form-control" name="password" require placeholder="Masukan Password">
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-6"><button type="submit" class="btn btn-outline-info btn-block">Login</button></div>
                              <div class="col-6"><button type="reset" onclick="history.back(-1)" class="btn btn-outline-warning btn-block">Kembali</button></div>
                            </div>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>