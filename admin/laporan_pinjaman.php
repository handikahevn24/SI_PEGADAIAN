<?php
include '../function.php';

?>
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
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Laporan Pinjaman</h1>
          </div>

          <div class="row">
            <table id="pinjaman" class="table table-striped table-bordered" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>No Pinjaman</th>
                      <th>Besar Pinjaman</th>
                      <th>Barang Jaminan</th>
                      <th>Tanggal Pinjaman</th>
                      <th>Tanggal Berakhir</th>
                  </tr>
              </thead>
              <tbody>
              <?php 
              if (cekData("pinjaman") == true) {
                // echo "tidak ada data";
              }else {
                // echo "ada datanya";
                $no = 1;
                foreach (tampilData("pinjaman") as $d) {
                  ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $d['nopinjaman']; ?></td>
                        <td><?= $d['besarpinjaman']; ?></td>
                        <td><?= $d['barangjaminan']; ?></td>
                        <td><?= $d['tanggalpinjaman']; ?></td>
                        <td><?= $d['tanggalberakhir']; ?></td>
                    </tr>
                <?php
  
                  }
                ?>
                 <tr>
                  <td colspan="2"><strong>Jumlah</strong></td>
                  <?php
                  foreach (total("pinjaman","besarpinjaman") as $data) {
                  ?>
                  <td colspan="4"><strong><?= $data[0]; ?></strong></td>
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