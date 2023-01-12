<?php
include '../modules/database.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenisKelamin = $_POST['jenis_kelamin'];
$telepon = $_POST['telepon'];
$id = $_POST['id'];

$pelanggan = $database->prepare("UPDATE pelanggan SET nama = ?, alamat = ?, jenis_kelamin = ?, telepon = ? WHERE id = ?");

$pelanggan->bind_param('ssssi', $nama, $alamat, $jenisKelamin, $telepon, $id);

$pelanggan->execute();

header("location:../pelanggan.php");
