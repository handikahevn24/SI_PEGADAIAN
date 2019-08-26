<?php
include'database.php';

// $db = Database::getInstance();
// $mysqli = Database::getInstance()->getConnection();
// $query = "SELECT * FROM supplier";
// $result = $mysqli->query($query);

$func = $_GET['func'];

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

// Fungsi Tambah Nasabah

function tambahNasabah($noidnasabah, $namanasabah, $jeniskelaminnasabah, $tempatlahirnasabah, $tanggallahirnasabah, $agamanasabah, $pendidikannasabah, $tanggalpendaftaran ){
    $query = "INSERT INTO nasabah (noidnasabah, namanasabah, jeniskelaminnasabah, tempatlahirnasabah, tanggallahirnasabah, agamanasabah, pendidikannasabah, tanggalpendaftaran) values($noidnasabah, $namanasabah, $jeniskelaminnasabah, $tempatlahirnasabah, $tanggallahirnasabah, $agamanasabah, $pendidikannasabah, $tanggalpendaftaran)" or die(mysql_error());
}

//Fungsi Tambah Pengajuan
function tambahPengajuan($idpengajuan, $nopinjaman, $tujuanpengajuan, $besarpengajuan, $jangkawaktupengajuan, $tanggalpengajuan){
    $query = "INSERT INTO pengajuan_pinjaman (idpengajuan, nopinjaman, tujuanpengajuan, besarpengajuan, jangkawaktupengajuan, tanggalpengajuan) values($idpengajuan, $nopinjaman, $tujuanpengajuan, $besarpengajuan, $jangkawaktupengajuan, $tanggalpengajuan)";

}

//Fungsi Tambah Pinjaman
function tambahPinjaman($nopinjaman, $besarpinjaman, $barangjaminan, $tanggalpinjaman, $tanggalberakhir){
    $query = "INSERT INTO pinjaman (nopinjaman, besarpinjaman, barangjaminan, tanggalpinjaman, tanggalberakhir) values($nopinjaman, $besarpinjaman, $barangjaminan, $tanggalpinjaman, $tanggalberakhir)";

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
    tambahNasabah($_POST['noidnasabah'], $_POST['namanasabah'], $_POST['jeniskelaminnasabah'], $_POST['tempatlahirnasabah'], $_POST['tanggallahirnasabah'], $_POST['agamanasabah'], $_POST['pendidikannasabah'], $_POST['tanggalpendaftaran']);
}
?>