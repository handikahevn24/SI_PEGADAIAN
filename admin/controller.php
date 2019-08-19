<?php
$hal = $_GET['hal'];

switch ($hal) {
    case 'pinjaman':
        # code...
        header("location:pinjaman.php");
        break;
    case 'nasabah':
        # code...
        header("location:nasabah.php");
        break;
    case 'pengajuan':
        # code...
        header("location:pengajuan.php");
        break;
    case 'dashboard':
        # code...
        header("location:dashboard.php");
        break;
    
    default:
        # code...
        break;
}

?>