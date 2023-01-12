<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Input Data User</h2>
<div class="mx-5 mt-10">
    <form action="create_user_action.php" method="post" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="nama">
                    <span class="mr-20">NAMA</span><br>
                    <input type="text" name="nama" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
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
                <label for="username">
                    <span class="mr-20">USERNAME</span><br>
                    <input type="text" name="username" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="tanggal_lahir">
                    <span class="mr-20">TANGGAL LAHIR</span><br>
                    <input type="date" name="tanggal_lahir" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="password">
                    <span class="mr-20">PASSWORD</span><br>
                    <input type="password" name="password" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="alamat">
                    <span class="mr-20">ALAMAT</span><br>
                    <textarea name="alamat" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div>
                <label for="foto">
                    <span class="mr-20">FOTO</span><br>
                    <input type="file" name="foto" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                </label>
            </div>
            <div>
                <label for="status">
                    <span class="mr-20">STATUS</span><br>
                    <select name="status" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                        <option value="admin">Admin</option>
                        <option value="kasir">Kasir</option>
                        <option value="gudang">Gudang</option>
                    </select>
                </label>
            </div>
        </div>
        <input type="submit" class="mt-10 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">
    </form>
</div>


<?php
include('../inc/footer.php')
?>