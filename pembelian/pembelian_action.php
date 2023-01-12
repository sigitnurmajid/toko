<?php
include '../modules/database.php';

$barangId = $_POST['barang_id'];
$jumlah = $_POST['jumlah'];

$getBarang = $database->prepare("SELECT stok FROM barang WHERE id = ?");
$getBarang->bind_param("i", $barangId);
$getBarang->execute();
$getBarang->store_result();

if ($getBarang->num_rows() > 0) {
    $getBarang->bind_result($stok);
    $getBarang->fetch();
} else {
    header("location:../pembelian.php?status=failed&message=Barang tidak ditemukan");
}

$totalStok = $jumlah + $stok;

$insertBarang = $database->prepare("UPDATE barang SET stok = ? WHERE id = ?");

$insertBarang->bind_param('ii', $totalStok, $barangId);

$insertBarang->execute();

header("location:../pembelian.php?status=ok&message=Pembelian barang berhasil");