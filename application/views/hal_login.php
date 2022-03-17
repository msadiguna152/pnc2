<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>PINTU PTSP (Permintaan Informasi Tatap Muka Pelayanan Terpadu Satu Pintu) Pengadilan Negeri Cikarang</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url()?>assets2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.2.1.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="<?= base_url()?>assets2/css/sb-admin-2.min.css" rel="stylesheet">

  <style type="text/css">
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
    }
  </style>
  <script>
    $(document).ready(function(){
      $(".preloader").fadeOut();
    })
  </script>
  <script>
    $(document).ready(function(){
      $(".masuk").fadeIn();
    })
  </script>
  <style type="text/css">
    .bg {
      background: url(<?= site_url('assets/bg.jpeg');?>);
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    .codinglanPelangi {
      background: linear-gradient(45deg, #f22666, #f89606, #26a60b, #5866ec, #f54e86, #f7ca16, #d2626f);
      background-size: 500% 500%;
      -webkit-animation: codinglanGradient 12s ease infinite;
      -moz-animation: codinglanGradient 12s ease infinite;
      animation: codinglanGradient 12s ease infinite;
    }
    @-webkit-keyframes codinglanGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
    }
    @-moz-keyframes codinglanGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
    }
    @keyframes codinglanGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
    }.codinglanPelangi {
      background: linear-gradient(45deg, #f22613, #f89406, #26a65b, #5868ec, #f54e80, #f7ca18, #d2527f);
      background-size: 500% 500%;
      -webkit-animation: codinglanGradient 12s ease infinite;
      -moz-animation: codinglanGradient 12s ease infinite;
      animation: codinglanGradient 12s ease infinite;
    }
    @-webkit-keyframes codinglanGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
    }
    @-moz-keyframes codinglanGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
    }
    @keyframes codinglanGradient {
      0%{background-position:0% 50%}
      50%{background-position:100% 50%}
      100%{background-position:0% 50%}
    </style>

</head>

<body class="codinglanPelangi ">
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
          </div>
        </div>
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url()?>assets2/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url()?>assets2/js/sb-admin-2.min.js"></script>

</body>

</html>
