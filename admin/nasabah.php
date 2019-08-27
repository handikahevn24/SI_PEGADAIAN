<?php
include '../function.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SI Pegadaian - Nasabah</title>

  <!-- Custom fonts for this template-->
  <link href="../assets/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI Pegadaian</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="controller.php?hal=dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Menu Interface
      </div>
    
      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li> -->

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=nasabah">
          <i class="fas fa-fw fa-users"></i>
          <span>Nasabah</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=pengajuan">
          <i class="fas fa-fw fa-table"></i>
          <span>Pengajuan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=pinjaman">
          <i class="fas fa-fw fa-edit"></i>
          <span>Pinjaman</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Nasabah</h1>
          </div>

          <div class="row">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahNasabah">Tambah Nasabah
          </button>
            <table id="nasabah" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>NoID</th>
                      <th>Nama Nasabah</th>
                      <th>Jenis Kelamin</th>
                      <th>Tempat Lahir</th>
                      <th>Tanggal Lahir</th>
                      <th>Agama</th>
                      <th>Pendidikan</th>
                      <th>Tanggal Pendaftaran</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
              if (cekData("nasabah") == true) {
                // echo "tidak ada data";
              }else {
                // echo "ada datanya";
                $no = 1;
                foreach (tampilData("nasabah") as $d) {
                  ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['namanasabah']; ?></td>
                        <td><?= $d['jeniskelaminnasabah']; ?></td>
                        <td><?= $d['tempatlahirnasabah']; ?></td>
                        <td><?= $d['tanggallahirnasabah']; ?></td>
                        <td><?= $d['agamanasabah']; ?></td>
                        <td><?= $d['agamanasabah']; ?></td>
                        <td><?= $d['tanggalpendaftaran']; ?></td>
                        <td><a href="nasabah.php?func=hapus" class="fa fa-edit">Edit</a> | <a href="nasabah.php?func=hapusData&tabel=nasabah&key=noidnasabah&noidnasabah=<?=$d['noidnasabah']; ?>" class="fa fa-trash">Hapus</a></td>
                    </tr>
                <?php
  
                  }
                ?>
              <?php
              }
              ?>
                
              </tbody>
            </table>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Si Pegadaian 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

<!-- The Modal -->
<div class="modal" id="tambahNasabah">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Nasabah</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="../function.php?func=tambahNasabah" method="GET">
          <div class="form-group">
            <label for="noidnasabah">No Id Nasabah</label>
            <input type="text" class="form-control" name="noidnasabah">
          </div>
          <div class="form-group">
            <label for="namanasabah">Nama Nasabah</label>
            <input type="text" class="form-control" name="namanasabah">
          </div>
          <div class="form-group">
            <label for="jeniskelaminnasabah">Jenis Kelamin</label>
            <select class="form-control" name="jeniskelaminnasabah" id="jeniskelaminnasabah">
              <option value="Laki - Laki">Laki - Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tempatlahirnasabah">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempatlahirnasabah">
          </div>
          <div class="form-group">
            <label for="tanggallahirnasabah">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggallahirnasabah">
          </div>
          <div class="form-group">
            <label for="agamanasabah">Agama</label>
            <select class="form-control" name="agamanasabah" id="agamanasabah">
              <option value="Islam">Islam</option>
              <option value="Kristen">Kristen</option>
              <option value="Hindu">Hindu</option>
              <option value="Budha">Budha</option>
            </select>
          </div>
          <div class="form-group">
            <label for="pendidikannasabah">Pendidikan</label>
            <select class="form-control" name="pendidikannasabah" id="pendidikannasabah">
              <option value="S2">S2</option>
              <option value="S1">S1</option>
              <option value="DIII">DIII</option>
              <option value="SMA/K">SMA/K</option>
              <option value="SMP">SMP</option>
            </select>
          </div>
          <div class="form-group">
            <label for="tanggalpendaftaran">Tanggal Pendaftaran</label>
            <input type="date" class="form-control" name="tanggalpendaftaran" value="<?php echo date('d/m/y');?>">
          </div>
          <button type="submit" class="btn btn-primary" name="func" value="tambahNasabah">Tambah Nasabah</button>
        </form>
      </div>

    </div>
  </div>
</div>
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../assets/js/jquery.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../assets/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../assets/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../assets/js/demo/chart-area-demo.js"></script>
  <script src="../assets/js/demo/chart-pie-demo.js"></script>
  <script src="../assets/js/datatables.js"></script>
  <script src="../assets/js/datatables-bootstrap4.js"></script>

  <script>
    $(document).ready(function() {
      $('#nasabah').DataTable();
    } );
  </script>
</body>

</html>
