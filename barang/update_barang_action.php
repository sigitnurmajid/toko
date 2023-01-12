<?php
include '../modules/database.php';

$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$diskon = $_POST['diskon'];
$id = $_POST['id'];

$barang = $database->prepare("UPDATE barang SET nama = ?, satuan = ?, harga = ?, stok = ?, diskon = ? WHERE id = ?");

$barang->bind_param('ssiiii', $nama, $satuan, $harga, $stok, $diskon, $id);

$barang->execute();

header("location:../barang.php");
