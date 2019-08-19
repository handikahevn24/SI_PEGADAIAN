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
        header("location:admin/controller.php?hal=dashboard");
        session_start();
        $_SESSION['username'] = $username;
    }else{
        header("location:index.php");
    }
}


//Kumpulan Func
if($func == "login"){
    login($_POST['username'], $_POST['password']);
}
?>