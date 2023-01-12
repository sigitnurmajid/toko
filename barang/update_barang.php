<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Update Data Barang</h2>
<div class="mx-5 mt-10">
    <?php
    include('../modules/database.php');

    $id = $_GET['id'];

    $barang = $database->prepare("SELECT nama,satuan,harga,stok,diskon FROM barang WHERE id = ?");
    $barang->bind_param("i", $id);
    $barang->execute();
    $barang->store_result();

    if ($barang->num_rows() > 0) {
        $barang->bind_result($nama, $satuan, $harga, $stok, $diskon);
        $barang->fetch();
    } else {
        header("location:../barang.php");
    }
    ?>
    <form action="update_barang_action.php" method="post">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="nama">
                    <span class="mr-20">NAMA</span><br>
                    <input type="text" name="nama" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $nama ?>>
                </label>
            </div>
            <div>
                <label for="satuan">
                    <span class="mr-20">SATUAN</span><br>
                    <select name="satuan" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                        <option value="bungkus" <?php if ($satuan == 'bungkus') echo "selected"; ?>>Bungkus</option>
                        <option value="pcs" <?php if ($satuan == 'pcs') echo "selected"; ?>>Pcs</option>
                        <option value="pack"<?php if ($satuan == 'pack') echo "selected"; ?>>Pack</option>
                        <option value="kg" <?php if ($satuan == 'kg') echo "selected"; ?>>Kg</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="harga">
                    <span class="mr-20">HARGA (Rp)</span><br>
                    <input type="number" name="harga" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $harga ?>>
                </label>
            </div>
            <div>
                <label for="stok">
                    <span class="mr-20">STOK</span><br>
                    <input type="number" name="stok" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $stok ?>>
                </label>
            </div>
            <div>
                <label for="diskon">
                    <span class="mr-20">DISKON (%)</span><br>
                    <input type="number" name="diskon" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $diskon ?>>
                </label>
            </div>
            <input type="number" name="id" value="<?php echo $id;?>" hidden>
        </div>
        <input type="submit" class="mt-10 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">
    </form>
</div>


<?php
include('../inc/footer.php')
?>