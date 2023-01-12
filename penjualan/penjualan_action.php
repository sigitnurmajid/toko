<?php
include '../modules/database.php';

$barangId = $_POST['barang_id'];
$jumlah = $_POST['jumlah'];

$getBarang = $database->prepare("SELECT stok, diskon, harga, satuan, nama FROM barang WHERE id = ?");
$getBarang->bind_param("i", $barangId);
$getBarang->execute();
$getBarang->store_result();

if ($getBarang->num_rows() > 0) {
    $getBarang->bind_result($stok, $diskon, $harga, $satuan, $nama);
    $getBarang->fetch();
} else {
    $status = "fail";
}

$totalStok = $stok - $jumlah;
$totalHarga = $harga * $jumlah;
$totalDiskon = $totalHarga * ($diskon / 100);

if ($totalHarga > 200000) {
    $totalHarga = $totalHarga - $totalDiskon;
}

if ($jumlah <= $stok) {
    $insertBarang = $database->prepare("UPDATE barang SET stok = ? WHERE id = ?");

    $insertBarang->bind_param('ii', $totalStok, $barangId);

    $insertBarang->execute();
}


?>

<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Detail Penjualan</h2>
<div class="mx-5 mt-10" <?php if ($jumlah > $stok) echo "hidden"; ?>>
    <table style="width:35%" class="border-2">
        <tr class="border-2">
            <td class="p-2">Nama Barang</td>
            <td class="p-2"><?php echo $nama; ?></td>
        </tr>
        <tr class="border-2">
            <td class="p-2">Jumlah Barang</td>
            <td class="p-2"><?php echo $jumlah . " " . $satuan; ?></td>
        </tr>
        <tr class="border-2">
            <td class="p-2">Total Diskon</td>
            <td class="p-2">Rp <?php echo ($totalHarga > 200000) ? $totalDiskon : 0; ?></td>
        </tr>
        <tr class="border-2">
            <td class="p-2">Total Harga </td>
            <td class="p-2">Rp <?php echo $totalHarga; ?></td>
        </tr>
    </table>
</div>

<div class="mx-5 mt-10 text-red-500 uppercase tracking-widest" <?php if ($jumlah <= $stok) echo "hidden"; ?>>
    Stok tidak bisa mencukupi pembelian
</div>

<?php
include('../inc/footer.php')
?>