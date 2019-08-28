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

  <title>SI Pegadaian - Pengajuan</title>

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
        <a class="nav-link" href="controller.php?hal=pengajuan_pinjaman">
          <i class="fas fa-fw fa-table"></i>
          <span>Pengajuan</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=pinjaman">
          <i class="fas fa-fw fa-edit"></i>
          <span>Pinjaman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=laporan_nasabah" target="_blank">
          <i class="fas fa-fw fa-list"></i>
          <span>Laporan Nasabah</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=laporan_pengajuan_pinjaman" target="_blank">
          <i class="fas fa-fw fa-list"></i>
          <span>Laporan Pengajuan Pinjaman</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="controller.php?hal=laporan_pinjaman" target="_blank">
          <i class="fas fa-fw fa-list"></i>
          <span>Laporan Pinjaman</span></a>
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
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
            <h1 class="h3 mb-0 text-gray-800">Pengajuan</h1>
          </div>

          <div class="row">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahPengajuan">Tambah Pengajuan
          </button>
            <table id="pengajuan" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>No ID Pengajuan</th>
                      <th>No Pinjaman</th>
                      <th>Tujuan Pengajuan</th>
                      <th>Besar Pengajuan</th>
                      <th>Jangka Waktu</th>
                      <th>Tanggal Pengajuan</th>
                      <th>Aksi</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
              if (cekData("pengajuan_pinjaman") == true) {
                // echo "tidak ada data";
              }else {
                // echo "ada datanya";
                $no = 1;
                foreach (tampilData("pengajuan_pinjaman") as $d) {
                  ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['idpengajuan']; ?></td>
                        <td><?= $d['nopinjaman']; ?></td>
                        <td><?= $d['tujuanpengajuan']; ?></td>
                        <td><?= $d['besarpengajuan']; ?></td>
                        <td><?= $d['jangkawaktupengajuan']; ?></td>
                        <td><?= $d['tanggalpengajuan']; ?></td>
                        <td><a href="pengajuan_pinjaman.php?func=editPengajuan&tabel=pengajuan_pinjaman&key=idpengajuan&idpengajuan=<?=$d['idpengajuan']; ?>" type="button" class="fa fa-edit" id="edit">Edit</a> | <a href="pengajuan_pinjaman.php?func=hapusDataPengajuan&tabel=pengajuan_pinjaman&key=idpengajuan&idpengajuan=<?=$d['idpengajuan']; ?>" class="fa fa-trash">Hapus</a></td>
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
<div class="modal" id="tambahPengajuan">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tambah Pengajuan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="../function.php?func=tambahPengajuan" method="GET">
          <div class="form-group">
            <label for="idpengajuan">No Id pengajuan </label>
            <input type="text" class="form-control" name="idpengajuan">
          </div>
          <div class="form-group">
            <label for="nopinjaman">No Pinjaman</label>
            <input type="text" class="form-control" name="nopinjaman">
          </div>
          <div class="form-group">
            <label for="tujuanpengajuan">Tujuan Pengajuan</label>
            <input class="form-control" name="tujuanpengajuan" id="tujuanpengajuan">
          </div>
          <div class="form-group">
            <label for="besarpengajuan">Besar Pengajuan</label>
            <input type="text" class="form-control" name="besarpengajuan">
          </div>
          <div class="form-group">
            <label for="jangkawaktupengajuan">Jangka Waktu Pengajuan</label>
            <input type="input" class="form-control" name="jangkawaktupengajuan">
            <label for="jangkawaktupengajuan">Bulan</label>
          </div>
          <div class="form-group">
            <label for="tanggalpengajuan">Tanggal Pengajuan</label>
            <input type="date" class="form-control" name="tanggalpengajuan" value="<?php echo date('d/m/y');?>">
          </div>
          <button type="submit" class="btn btn-primary" name="func" value="tambahPengajuan">Tambah Pengajuan</button>
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

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Edit pengajuan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="../function.php?func=updatePengajuan" method="GET">
        <?php
        foreach (ambilData($_GET['tabel'],$_GET['key'],$_GET['idpengajuan']) as $data) {
                  ?>
                <?php
                  }
                ?>
          <div class="form-group">
            <label for="idpengajuan">No Id pengajuan </label>
            <input type="text" class="form-control" name="idpengajuan" value="<?= $data['idpengajuan'];?>" readonly>
          </div>
          <div class="form-group">
            <label for="nopinjaman">No Pinjaman</label>
            <input type="text" class="form-control" name="nopinjaman" value="<?= $data['nopinjaman'];?>">
          </div>
          <div class="form-group">
            <label for="tujuanpengajuan">Tujuan Pengajuan</label>
            <input class="form-control" name="tujuanpengajuan" id="tujuanpengajuan" value="<?= $data['tujuanpengajuan'];?>">
          </div>
          <div class="form-group">
            <label for="besarpengajuan">Besar Pengajuan</label>
            <input type="text" class="form-control" name="besarpengajuan" value="<?= $data['besarpengajuan'];?>">
          </div>
          <div class="form-group">
            <label for="jangkawaktupengajuan">Jangka Waktu Pengajuan</label>
            <input type="input" class="form-control" name="jangkawaktupengajuan" value="<?= $data['jangkawaktupengajuan'];?>">
            <label for="jangkawaktupengajuan">Bulan</label>
          </div>
          <div class="form-group">
            <label for="tanggalpengajuan">Tanggal Pengajuan</label>
            <input type="date" class="form-control" name="tanggalpengajuan" value="<?= $data['tanggalpengajuan'];?>">
          </div>
          <button type="submit" class="btn btn-primary" name="func" value="updatePengajuan">Update pengajuan</button>
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
      $('#pengajuan').DataTable();

      $.urlParam = function(name){
      var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
      return results[1] || 0;
    }
    if($.urlParam('idpengajuan') != null);  
    $("#myModal").modal("show");
    } );
    
  </script>
</body>

</html>
