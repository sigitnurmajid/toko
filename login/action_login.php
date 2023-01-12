<?php

session_start();

include '../modules/database.php';

$username = $_POST['username'];
$password = $_POST['password'];

$user = $database->prepare("SELECT nama,status FROM user WHERE username = ? AND password = ?");
$user->bind_param("ss", $username, $password);
$user->execute();
$user->store_result();

if ($user->num_rows() > 0) {
    $user->bind_result($resultName, $resultStatus);
    $user->fetch();

    $_SESSION['nama'] = $resultName;
    $_SESSION['status'] = $resultStatus;
    header("location:../barang.php");

} else {
    header("location:../login.php?message=failed");
}
