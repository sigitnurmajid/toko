<?php
include '../modules/database.php';

$nama = $_POST['nama'];
$jenisKelamin = $_POST['jenis_kelamin'];
$userName = $_POST['username'];
$tanggalLahir = $_POST['tanggal_lahir'];
$password = $_POST['password'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];
$foto = "";

if (isset($_FILES['foto']['tmp_name'])) {
    $file_size = $_FILES['foto']['size'];
    $file_type = $_FILES['foto']['type'];
    if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    }
}

$user = $database->prepare("INSERT INTO user (nama,username,password,foto,jenis_kelamin,tanggal_lahir,alamat,status) VALUES (?,?,?,?,?,?,?,?)");

$user->bind_param('ssssssss', $nama, $userName, $password, $foto, $jenisKelamin, $tanggalLahir, $alamat, $status);

$user->execute();

header("location:../user.php");
