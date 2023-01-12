<?php
include('../inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Update Data Pelanggan</h2>
<div class="mx-5 mt-10">
    <?php
    include('../modules/database.php');

    $id = $_GET['id'];

    $pelanggan = $database->prepare("SELECT nama,alamat,jenis_kelamin,telepon FROM pelanggan WHERE id = ?");
    $pelanggan->bind_param("i", $id);
    $pelanggan->execute();
    $pelanggan->store_result();

    if ($pelanggan->num_rows() > 0) {
        $pelanggan->bind_result($nama, $alamat, $jenisKelamin, $telepon);
        $pelanggan->fetch();
    } else {
        header("location:../pelanggan.php");
    }
    ?>
    <form action="update_pelanggan_action.php" method="post">
        <div class="grid grid-cols-2 gap-6">
            <div>
                <label for="nama">
                    <span class="mr-20">NAMA</span><br>
                    <input type="text" name="nama" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $nama ?>>
                </label>
            </div>
            <div>
                <label for="alamat">
                    <span class="mr-20">ALAMAT</span><br>
                    <textarea name="alamat" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" cols="30" rows="10"><?php echo $alamat ?></textarea>
                </label>
            </div>
            <div>
                <label for="jenis_kelamin">
                    <span class="mr-20">JENIS KELAMIN</span><br>
                    <select name="jenis_kelamin" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                        <option value="L" <?php if ($jenisKelamin == 'L') echo "selected"; ?>>Laki-laki</option>
                        <option value="P" <?php if ($jenisKelamin == 'P') echo "selected"; ?>>Perempuan</option>
                    </select>
                </label>
            </div>
            <div>
                <label for="telepon">
                    <span class="mr-20">TELEPON</span><br>
                    <input type="text" name="telepon" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4" value=<?php echo $telepon ?>>
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