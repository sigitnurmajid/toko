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
$id = $_POST['id'];

if (isset($_FILES['foto']['tmp_name'])) {
    $file_size = $_FILES['foto']['size'];
    $file_type = $_FILES['foto']['type'];
    if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
        $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
    }
}

$user = $database->prepare("UPDATE user SET nama = ?, username = ?, password = ?, foto = ?, jenis_kelamin = ?, tanggal_lahir = ?, alamat = ?, status = ? WHERE id = ?");

$user->bind_param('ssssssssi', $nama, $userName, $password, $foto, $jenisKelamin, $tanggalLahir, $alamat, $status, $id);
echo $user->num_rows();
echo $user->execute();
echo $user->num_rows();
echo $user->error;


header("location:../user.php");
