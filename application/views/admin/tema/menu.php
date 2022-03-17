
<body class="hold-transition skin-blue sidebar-mini wysihtml5-supported fixed">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img class="img img-fluid" src="<?= base_url()?>assets2/logo_cikarang.png">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img class="img img-fluid" src="<?= base_url()?>assets2/logo_cikarang.png"><b>PINTU PTSP</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img class="img user-image" src="<?= site_url('profil/'.$this->session->userdata('foto_pengguna'))?>">
              <span class="hidden-xs"><?= $this->session->userdata('nama_pengguna'); ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img class="img img-circle" style="height: 90px;widows: 90px;" src="<?= site_url('profil/'.$this->session->userdata('foto_pengguna'))?>">

                <p>
                  <?= $this->session->userdata('nama_pengguna'); ?>
                  <small><?= $this->session->userdata('level'); ?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <!-- <li class="user-body">
                <div class="row">
                  <div class="col-xs-4 text-center">
                    <a href="#">Followers</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Sales</a>
                  </div>
                  <div class="col-xs-4 text-center">
                    <a href="#">Friends</a>
                  </div>
                </div>
              </li> -->
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?= site_url('admin/Beranda/profil');?>" class="btn btn-default btn-flat">Akun</a>
                </div>
                <div class="pull-right">
                  <a class="btn btn-default btn-flat" href="<?= site_url('login/logout');?>" onclick="return confirm('Apakah Anda Yakin?')">Logout</a>
                </div>
              </li>
            </ul>
          </li>

        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li <?= $this->session->userdata('menu')=='Beranda' ? 'class="active"' : '';?>>
          <a href="<?= site_url('admin/Beranda'); ?>"><i class="fa fa-home"></i> <span>Beranda</span></a>
        </li>
        <li <?= $this->session->userdata('menu')=='Konsultasi' ? 'class="active"' : '';?>>
          <a href="<?= site_url('admin/Konsultasi'); ?>"><i class="fa fa-list"></i> <span>Konsultasi</span>
            <span class="label label-info pull-right"><?= $this->db->query("SELECT * FROM tbl_konsultasi WHERE status='0'")->num_rows();?></span>
          </a>
        </li>
        <li <?= $this->session->userdata('menu')=='Pengguna' ? 'class="active"' : '';?>>
          <a href="<?= site_url('admin/Pengguna'); ?>"><i class="fa fa-users"></i> <span>Pengguna</span></a>
        </li>

        <li class="treeview <?= $this->session->userdata('menu')=='Cetak Laporan' ? 'active menu-open' : '';?>">
          <a href="#">
            <i class="fa fa-file"></i> <span>Laporan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li <?= $this->session->userdata('menu')=='Cetak Laporan Konsultasi' ? 'class="active"' : '';?>>
              <a href="<?= site_url('admin/Laporan/hal_konsultasi'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Data Konsultasi</span></a>
            </li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
