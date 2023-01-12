<?php
include '../modules/database.php';

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jenisKelamin = $_POST['jenis_kelamin'];
$telepon = $_POST['telepon'];

$pelanggan = $database->prepare("INSERT INTO pelanggan (nama,alamat,jenis_kelamin,telepon) VALUES (?,?,?,?)");

$pelanggan->bind_param('ssss', $nama, $alamat, $jenisKelamin, $telepon );

$pelanggan->execute();

header("location:../pelanggan.php");
