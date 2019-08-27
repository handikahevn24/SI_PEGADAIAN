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
    case 'pengajuan_pinjaman':
        # code...
        header("location:pengajuan_pinjaman.php");
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