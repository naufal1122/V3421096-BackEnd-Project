<?php
include('./include/config.php');

$database = new Database();
$get_one_warga = $database->get_one($_GET['id']);
$selected_warga = $get_one_warga->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>AdminLTE 3 | Edit Penduduk </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css" />
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark">>
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Contact</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="#" class="nav-link">Pemrograman Backend CRUD Penduduk</a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->
        <li class="nav-item">
          <a class="nav-link" data-widget="navbar-search" href="#" role="button">
            <i class="fas fa-search"></i>
          </a>
          <div class="navbar-search-block">
            <form class="form-inline">
              <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search" />
                <div class="input-group-append">
                  <button class="btn btn-navbar" type="submit">
                    <i class="fas fa-search"></i>
                  </button>
                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </li>

        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comments"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Brad Diesel
                    <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">Call me whenever you can...</p>
                  <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    John Pierce
                    <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">I got your message bro</p>
                  <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <!-- Message Start -->
              <div class="media">
                <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3" />
                <div class="media-body">
                  <h3 class="dropdown-item-title">
                    Nora Silvester
                    <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                  </h3>
                  <p class="text-sm">The subject goes here</p>
                  <p class="text-sm text-muted">
                    <i class="far fa-clock mr-1"></i> 4 Hours Ago
                  </p>
                </div>
              </div>
              <!-- Message End -->
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
          </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-bell"></i>
            <span class="badge badge-warning navbar-badge">15</span>
          </a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">15 Notifications</span>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-envelope mr-2"></i> 4 new messages
              <span class="float-right text-muted text-sm">3 mins</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-users mr-2"></i> 8 friend requests
              <span class="float-right text-muted text-sm">12 hours</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item">
              <i class="fas fa-file mr-2"></i> 3 new reports
              <span class="float-right text-muted text-sm">2 days</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="fullscreen" href="#" role="button">
            <i class="fas fa-expand-arrows-alt"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
            <i class="fas fa-th-large"></i>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">AdminLTE 3</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
          <a href="#" class="d-block">Dewantoro Naufal</a>
          </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search" />
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Dashboard</p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="form-input.php" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>Input Penduduk</p>
              </a>
            </li>

            <li class="nav-item ">
              <a href="data-table.php" class="nav-link active">
                <i class="nav-icon fas fa-table"></i>
                <p>Tabel Penduduk</p>
              </a>
            </li>
          </ul>


        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard v3</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              </ol>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Masukkan data warga</h3>
          </div>
          <form action="" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="nik">NIK</label>
                <input type="text" class="form-control" name="nik" id="nik" value="<?php echo $selected_warga['nik'] ?>" placeholder="Masukkan NIK warga">
                <small id="NIKHelp" class="form-text text-muted">Kosongi jika tidak ada</small>
              </div>
              <input required type="text" class="form-control" name="id" id="nama" hidden value="<?php echo $selected_warga['id'] ?>">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input required value="<?php echo $selected_warga['nama'] ?>" type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama warga">
              </div>
              <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select required id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                  <option value="Laki-laki" <?php if ($selected_warga['jenis_kelamin'] == 'Laki-laki') echo 'selected' ?>>Laki-laki</option>
                  <option value="Perempuan" <?php if ($selected_warga['jenis_kelamin'] == 'Perempuan') echo 'selected' ?>>Perempuan</option>
                </select>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input required type="text" class="form-control" value="<?php echo $selected_warga['alamat'] ?>" name="alamat" id="alamat" placeholder="Masukkan alamat warga">
              </div>
              <div class="form-group">
                <label for="status">Status Perkawinan</label>
                <select name="status" id="status" class="form-control">
                  <option <?php if ($selected_warga['status'] == 'Menikah') echo 'selected' ?> value="Menikah">Menikah</option>
                  <option <?php if ($selected_warga['status'] == 'Lajang') echo 'selected' ?> value="Lajang">Lajang</option>
                  <option <?php if ($selected_warga['status'] == 'Duda') echo 'selected' ?> value="Duda">Duda</option>
                  <option <?php if ($selected_warga['status'] == 'Janda') echo 'selected' ?> value="Janda">Janda</option>
                </select>
              </div>
              <div class="form-group">
                <label for="pekerjaan">Pekerjaan</label>
                <input required type="text" value="<?php echo $selected_warga['pekerjaan'] ?>" class="form-control" name="pekerjaan" id="pekerjaan" placeholder="Masukkan pekerjaan warga">
              </div>
              <div class="form-group">
                <label for="kewarganegaraan">Kewarganegaraan</label>
                <select name="kewarganegaraan" id="kewarganegaraan" class="form-control">
                  <option value="WNI" <?php if ($selected_warga['kewarganegaraan'] == 'WNI') echo 'selected' ?>>WNI</option>
                  <option value="WNA" <?php if ($selected_warga['kewarganegaraan'] == 'WNA') echo 'selected' ?>>WNA</option>
                </select>
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input required type="text" value="<?php echo $selected_warga['tempat_lahir'] ?>" class="form-control" name="tempat_lahir" id="tempat_lahir" placeholder="Masukkan tempat lahir warga">
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <div required class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="date" value="<?php echo $selected_warga['tanggal_lahir'] ?>" name="tanggal_lahir" class="form-control datetimepicker-input" data-target="#reservationdate" />
                </div>
              </div>
              <div class="form-group">
                <label for="golongan_darah">Golongan Darah</label>
                <select name="golongan_darah" id="golongan_darah" class="form-control">
                  <option value="A" <?php if ($selected_warga['golongan_darah'] == 'A') echo 'selected' ?>>A</option>
                  <option value="B" <?php if ($selected_warga['golongan_darah'] == 'B') echo 'selected' ?>>B</option>
                  <option value="AB" <?php if ($selected_warga['golongan_darah'] == 'AB') echo 'selected' ?>>AB</option>
                  <option value="O" <?php if ($selected_warga['golongan_darah'] == 'O') echo 'selected' ?>>O</option>
                </select>
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" name="submit_edit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021
        <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0
      </div>
    </footer>
  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE -->
  <script src="dist/js/adminlte.js"></script>

  <!-- OPTIONAL SCRIPTS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard3.js"></script>
</body>

</html>