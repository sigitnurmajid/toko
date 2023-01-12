<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Input Data Barang</h2>
<div class="mx-5 mt-10">
    <form action="create_barang_action.php" method="post">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="nama">
                    <span class="mr-20">NAMA</span><br>
                    <input type="text" name="nama" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="satuan">
                    <span class="mr-20">SATUAN</span><br>
                    <select name="satuan" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                        <option value="bungkus">Bungkus</option>
                        <option value="pcs">Pcs</option>
                        <option value="pack">Pack</option>
                        <option value="kg">Kg</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="harga">
                    <span class="mr-20">HARGA (Rp)</span><br>
                    <input type="number" name="harga" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="stok">
                    <span class="mr-20">STOK</span><br>
                    <input type="number" name="stok" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="diskon">
                    <span class="mr-20">DISKON (%)</span><br>
                    <input type="number" name="diskon" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
        </div>
        <input type="submit" class="mt-10 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">
    </form>
</div>


<?php
include('../inc/footer.php')
?>