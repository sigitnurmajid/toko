<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Update Data User</h2>
<div class="mx-5 mt-10">
    <?php
    include('../modules/database.php');

    $id = $_GET['id'];

    $user = $database->prepare("SELECT nama,username,password,jenis_kelamin,tanggal_lahir,alamat,status FROM user WHERE id = ?");
    $user->bind_param("i", $id);
    $user->execute();
    $user->store_result();

    if ($user->num_rows() > 0) {
        $user->bind_result($resultName, $resultUsername, $resultPassword, $resultJenisKelamnin, $resultTanggalLahir, $resultAlamat, $resultStatus);
        $user->fetch();
    } else {
        header("location:../user.php");
    }
    ?>
    <form action="update_user_action.php" method="post" enctype="multipart/form-data">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="nama">
                    <span class="mr-20">NAMA</span><br>
                    <input type="text" name="nama" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $resultName ?>>
                </label>
            </div>
            <div>
                <label for="jenis_kelamin">
                    <span class="mr-20">JENIS KELAMIN</span><br>
                    <select name="jenis_kelamin" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                        <option value="L" <?php if ($resultJenisKelamnin == 'L') echo "selected"; ?>>Laki-laki</option>
                        <option value="P" <?php if ($resultJenisKelamnin == 'P') echo "selected"; ?>>Perempuan</option>
                        
                    </select>
                </label>
            </div>
            <div>
                <label for="username">
                    <span class="mr-20">USERNAME</span><br>
                    <input type="text" name="username" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $resultUsername ?>>
                </label>
            </div>
            <div>
                <label for="tanggal_lahir">
                    <span class="mr-20">TANGGAL LAHIR</span><br>
                    <input type="date" name="tanggal_lahir" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $resultTanggalLahir ?>>
                </label>
            </div>
            <div>
                <label for="password">
                    <span class="mr-20">PASSWORD</span><br>
                    <input type="password" name="password" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $resultPassword ?>>
                </label>
            </div>
            <div>
                <label for="alamat">
                    <span class="mr-20">ALAMAT</span><br>
                    <textarea name="alamat" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" cols="30" rows="10"><?php echo $resultAlamat ?></textarea>
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
                        <option value="admin" <?php if ($resultStatus == 'admin') echo "selected"; ?>>Admin</option>
                        <option value="kasir" <?php if ($resultStatus == 'kasir') echo "selected"; ?>>Kasir</option>
                        <option value="gudang" <?php if ($resultStatus == 'gudang') echo "selected"; ?>>Gudang</option>
                    </select>
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