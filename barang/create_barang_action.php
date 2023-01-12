<?php
include '../modules/database.php';

$nama = $_POST['nama'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$diskon = $_POST['diskon'];

$barang = $database->prepare("INSERT INTO barang (nama,satuan,harga,stok,diskon ) VALUES (?,?,?,?,?)");

$barang->bind_param('ssiii', $nama, $satuan, $harga, $stok, $diskon );

$barang->execute();

header("location:../barang.php");
