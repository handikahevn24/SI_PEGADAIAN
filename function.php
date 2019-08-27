<?php
include'database.php';

// $db = Database::getInstance();
// $mysqli = Database::getInstance()->getConnection();
// $query = "SELECT * FROM supplier";
// $result = $mysqli->query($query);

$func = $_GET['func'] ?? '';
$tabel = $_GET['tabel'] ?? '';
$key = $_GET['key'] ?? '';
$noidnasabah = $_GET['noidnasabah'] ?? '';

/***
* Kumpulan Fungsi Proses
***/

// Fungsi Login

function login($username, $password){
$query = "SELECT * FROM user where username ='$username' and password = '$password'";
$mysqli = Database::getInstance()->getConnection();
$result = $mysqli->query($query);
    if($result->num_rows > 0){
        // header("location:admin/controller.php?hal=dashboard");
        session_start();
        $_SESSION['username'] = $username;
        echo "<script>alert('Login Berhasil.'); window.location = 'admin/nasabah.php'</script>";
    }else{
        header("location:index.php");
    }
}

//Fungsi Tampil nasabah

function tampilData($tabel){
    $query = "SELECT * FROM $tabel";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    while($d=mysqli_fetch_array($result)){
        $data[] =$d;
    }
    return $data ?? '';
}

//Fungsi cek nasabah
function cekData($tabel){
    $query = "SELECT * FROM $tabel";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if ($result->num_rows == 0) {
        return true;
    }else {
        return false;
    }
}

// Fungsi Tambah Nasabah

function tambahNasabah($noidnasabah, $namanasabah, $jeniskelaminnasabah, $tempatlahirnasabah, $tanggallahirnasabah, $agamanasabah, $pendidikannasabah, $tanggalpendaftaran ){
    $query = "INSERT INTO `nasabah` (`noidnasabah`, `namanasabah`, `jeniskelaminnasabah`, `tempatlahirnasabah`, `tanggallahirnasabah`, `agamanasabah`, `pendidikannasabah`, `tanggalpendaftaran`) VALUES ('$noidnasabah', '$namanasabah', '$jeniskelaminnasabah', '$tempatlahirnasabah', '$tanggallahirnasabah', '$agamanasabah', '$pendidikannasabah', '$tanggalpendaftaran')" or die(mysql_error());
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Menambahkan.'); window.location = 'admin/nasabah.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        header("location:admin/nasabah.php");
    }
}

//Fungsi Tambah Pengajuan
function tambahPengajuan($idpengajuan, $nopinjaman, $tujuanpengajuan, $besarpengajuan, $jangkawaktupengajuan, $tanggalpengajuan){
    $query = "INSERT INTO pengajuan_pinjaman (idpengajuan, nopinjaman, tujuanpengajuan, besarpengajuan, jangkawaktupengajuan, tanggalpengajuan) values('$idpengajuan', '$nopinjaman', '$tujuanpengajuan', '$besarpengajuan', '$jangkawaktupengajuan', '$tanggalpengajuan')";

}

//Fungsi Tambah Pinjaman
function tambahPinjaman($nopinjaman, $besarpinjaman, $barangjaminan, $tanggalpinjaman, $tanggalberakhir){
    $query = "INSERT INTO pinjaman (nopinjaman, besarpinjaman, barangjaminan, tanggalpinjaman, tanggalberakhir) values($nopinjaman, $besarpinjaman, $barangjaminan, $tanggalpinjaman, $tanggalberakhir)";

}

//Fungsi Hapus Nasabah
function hapusData($tabel,$key,$id){
    $query = "DELETE from $tabel where $key = '$id'" or die(mysql_error());
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
       echo "<script>alert('Berhasil Menghapus Data.'); window.location = '$tabel.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        echo "<script>alert('Gagal Hapus Data.'); window.history.back();</script>";
    }
}

/**
 * Kumpulan Func
 */

//Func Login
if($func == "login"){
    login($_POST['username'], $_POST['password']);
}

//Func Tambah Nasabah
if($func == "tambahNasabah"){
    tambahNasabah($_GET['noidnasabah'], $_GET['namanasabah'], $_GET['jeniskelaminnasabah'], $_GET['tempatlahirnasabah'], $_GET['tanggallahirnasabah'], $_GET['agamanasabah'], $_GET['pendidikannasabah'], $_GET['tanggalpendaftaran']);
}

if ($func == "hapusData") {
    hapusData($_GET['tabel'],$_GET['key'],$_GET['noidnasabah']);
}
?>