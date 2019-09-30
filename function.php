<?php
include'database.php';

// $db = Database::getInstance();
// $mysqli = Database::getInstance()->getConnection();
// $query = "SELECT * FROM supplier";
// $result = $mysqli->query($query);

$func = $_GET['func'] ?? '';

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

function tampilData($tabel, $key = null){
    if (!$key == null) {
        $query = "SELECT *, sum($key) as total FROM $tabel";
        $mysqli = Database::getInstance()->getConnection();
        $result = $mysqli->query($query);
        while($d=mysqli_fetch_array($result)){
            $data[] =$d;
        }
    }else{

        $query = "SELECT * FROM $tabel";
        $mysqli = Database::getInstance()->getConnection();
        $result = $mysqli->query($query);
        while($d=mysqli_fetch_array($result)){
            $data[] =$d;
        }
    }
    return $data ?? '';
}

function tampilDataPengajuan(){
    $query = "SELECT * FROM pengajuan_pinjaman,nasabah where pengajuan_pinjaman.noidnasabah = nasabah.noidnasabah";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    while($d=mysqli_fetch_array($result)){
        $data[] =$d;
    }
    return $data ?? '';   
}
function tampilDataPinjaman(){
    $query = "SELECT * FROM pengajuan_pinjaman,pinjaman WHERE pinjaman.nopinjaman = pengajuan_pinjaman.nopinjaman";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    while($d=mysqli_fetch_array($result)){
        $data[] =$d;
    }
    return $data ?? '';   
}


function total($tabel,$key){
    $query = "SELECT sum($key) FROM $tabel";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    while($d=mysqli_fetch_array($result)){
        $data[] =$d;
    }
    return $data ?? '';
}

function ambilData($tabel,$key,$id){
    $query = "SELECT * FROM $tabel where $key = '$id'";
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
function updateNasabah($noidnasabah, $namanasabah, $jeniskelaminnasabah, $tempatlahirnasabah, $tanggallahirnasabah, $agamanasabah, $pendidikannasabah, $tanggalpendaftaran ){
    $query = "UPDATE  nasabah SET `noidnasabah` = '$noidnasabah', `namanasabah` = '$namanasabah', `jeniskelaminnasabah` = '$jeniskelaminnasabah', `tempatlahirnasabah` = '$tempatlahirnasabah', `tanggallahirnasabah` = '$tanggallahirnasabah', `agamanasabah` = '$agamanasabah', `pendidikannasabah` = '$pendidikannasabah', `tanggalpendaftaran` = '$tanggalpendaftaran' where noidnasabah = '$noidnasabah'" or die(mysql_error());
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Merubah Data.'); window.location = 'admin/nasabah.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        //header("location:admin/nasabah.php");
    }
}


//Fungsi Tambah Pengajuan
function tambahPengajuan($idpengajuan, $nopinjaman, $tujuanpengajuan, $besarpengajuan, $jangkawaktupengajuan, $tanggalpengajuan, $nasabah, $barangjaminan){
    $query = "INSERT INTO pengajuan_pinjaman (idpengajuan, nopinjaman, tujuanpengajuan, besarpengajuan, jangkawaktupengajuan, tanggalpengajuan, noidnasabah, barangjaminan) values('$idpengajuan', '$nopinjaman', '$tujuanpengajuan', '$besarpengajuan', '$jangkawaktupengajuan', '$tanggalpengajuan', '$nasabah', '$barangjaminan')";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Menambahkan.'); window.location = 'admin/pengajuan_pinjaman.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        header("location:admin/pengajuan_pinjaman.php");
    }

}


function updatePengajuan($idpengajuan, $nopinjaman, $tujuanpengajuan, $besarpengajuan, $jangkawaktupengajuan, $tanggalpengajuan){
    $query = "UPDATE  pengajuan_pinjaman SET `idpengajuan` = '$idpengajuan', `nopinjaman` = '$nopinjaman', `tujuanpengajuan` = '$tujuanpengajuan', `besarpengajuan` = '$besarpengajuan', `jangkawaktupengajuan` = '$jangkawaktupengajuan', `tanggalpengajuan` = '$tanggalpengajuan' where idpengajuan = '$idpengajuan'" or die(mysql_error());
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Merubah Data.'); window.location = 'admin/pengajuan_pinjaman.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        //header("location:admin/nasabah.php");
    }
}

//Fungsi Tambah Pinjaman
// function tambahPinjaman($nopinjaman, $besarpinjaman, $barangjaminan, $tanggalpinjaman, $tanggalberakhir){
//     $query = "INSERT INTO pinjaman (nopinjaman, besarpinjaman, barangjaminan, tanggalpinjaman, tanggalberakhir) values('$nopinjaman', '$besarpinjaman', '$barangjaminan', '$tanggalpinjaman', '$tanggalberakhir')";
//     $mysqli = Database::getInstance()->getConnection();
//     $result = $mysqli->query($query);
//     if($result){
//         // header("location:admin/controller.php?hal=dashboard");
//         echo "<script>alert('Berhasil Menambahkan.'); window.location = 'admin/pinjaman.php'</script>";
//     }else{
//         echo mysqli_error($mysqli);
//         header("location:admin/pinjaman.php");
//     }
// }
function tambahPinjaman($nopinjaman, $tanggalpinjaman, $tanggalberakhir){
    $query = "INSERT INTO pinjaman (nopinjaman, tanggalpinjaman, tanggalberakhir) values('$nopinjaman', '$tanggalpinjaman', '$tanggalberakhir')";
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Menambahkan.'); window.location = 'admin/pinjaman.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        header("location:admin/pinjaman.php");
    }
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

//Fungsi Update Pinjaman
function updatePinjaman($nopinjaman, $besarpinjaman, $barangjaminan, $tanggalpinjaman, $tanggalberakhir){
    $query = "UPDATE  pinjaman SET `nopinjaman` = '$nopinjaman', `besarpinjaman` = '$besarpinjaman', `barangjaminan` = '$barangjaminan', `tanggalpinjaman` = '$tanggalpinjaman', `tanggalberakhir` = '$tanggalberakhir' where nopinjaman = '$nopinjaman'" or die(mysql_error());
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Merubah Data.'); window.location = 'admin/pengajuan_pinjaman.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        //header("location:admin/nasabah.php");
    }
}
function updateTafsir($idpengajuan, $hargasetelahtafsir){
    $query = "UPDATE  pengajuan_pinjaman SET `hargasetelahtafsir` = '$hargasetelahtafsir' where idpengajuan = '$idpengajuan'" or die(mysql_error());
    $mysqli = Database::getInstance()->getConnection();
    $result = $mysqli->query($query);
    if($result){
        // header("location:admin/controller.php?hal=dashboard");
        echo "<script>alert('Berhasil Merubah Data.'); window.location = 'admin/pengajuan_pinjaman.php'</script>";
    }else{
        echo mysqli_error($mysqli);
        //header("location:admin/nasabah.php");
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

if($func == "updateNasabah"){
    updateNasabah($_GET['noidnasabah'], $_GET['namanasabah'], $_GET['jeniskelaminnasabah'], $_GET['tempatlahirnasabah'], $_GET['tanggallahirnasabah'], $_GET['agamanasabah'], $_GET['pendidikannasabah'], $_GET['tanggalpendaftaran']);
}

if ($func == "hapusData") {
    hapusData($_GET['tabel'],$_GET['key'],$_GET['noidnasabah']);
}

if ($func == "hapusDataPengajuan") {
    hapusData($_GET['tabel'],$_GET['key'],$_GET['idpengajuan']);
}

if ($func == "hapusDataPinjaman") {
    hapusData($_GET['tabel'],$_GET['key'],$_GET['nopinjaman']);
}

if($func == "tambahPengajuan"){
    tambahPengajuan($_GET['idpengajuan'], $_GET['nopinjaman'], $_GET['tujuanpengajuan'], $_GET['besarpengajuan'], $_GET['jangkawaktupengajuan'], $_GET['tanggalpengajuan'], $_GET['nasabah'], $_GET['barangjaminan']);
    $date = new DateTime($_GET['tanggalpengajuan']);
    $date->modify('+'.$_GET['jangkawaktupengajuan'].' month');
    $tanggalakhir = $date->format('Y-m-d');
    tambahPinjaman($_GET['nopinjaman'],$_GET['tanggalpengajuan'],$tanggalakhir);
}

if($func == "tambahPinjaman"){
    tambahPinjaman($_GET['nopinjaman'], $_GET['besarpinjaman'], $_GET['barangjaminan'], $_GET['tanggalpinjaman'], $_GET['tanggalberakhir']);
}

if($func == "updatePengajuan"){
    updatePengajuan($_GET['idpengajuan'], $_GET['nopinjaman'], $_GET['tujuanpengajuan'], $_GET['besarpengajuan'], $_GET['jangkawaktupengajuan'], $_GET['tanggalpengajuan']);
}

if($func == "updatePinjaman"){
    updatePinjaman($_GET['nopinjaman'], $_GET['besarpinjaman'], $_GET['barangjaminan'], $_GET['tanggalpinjaman'], $_GET['tanggalberakhir']);
}
if($func == "updateTafsir"){
    updateTafsir($_GET['idpengajuan'], $_GET['hargasetelahtafsir']);
}
?>