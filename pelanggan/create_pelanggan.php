<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Input Data Pelanggan</h2>
<div class="mx-5 mt-10">
    <form action="create_pelanggan_action.php" method="post">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="nama">
                    <span class="mr-20">NAMA</span><br>
                    <input type="text" name="nama" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="alamat">
                    <span class="mr-20">ALAMAT</span><br>
                    <textarea name="alamat" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div>
                <label for="jenis_kelamin">
                    <span class="mr-20">JENIS KELAMIN</span><br>
                    <select name="jenis_kelamin" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="telepon">
                    <span class="mr-20">TELEPON</span><br>
                    <input type="text" name="telepon" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
        </div>
        <input type="submit" class="mt-10 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">
    </form>
</div>


<?php
include('../inc/footer.php')
?>