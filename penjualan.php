<?php
include('inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Input Penjualan</h2>
<div class="mx-5 mt-10">
    <form action="penjualan/penjualan_action.php" method="post">
        <div>
            <label for="barang">
                <span class="mr-20">BARANG</span><br>
                <select name="barang_id" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
                    <option selected>-- INPUT BARANG --</option>
                    <?php
                    include('modules/database.php');
                    $data = mysqli_query($database, "select id,nama from barang");
                    while ($d = mysqli_fetch_array($data)) {
                        echo "<option value=\"" . $d['id'] . "\">" . $d['nama'] . "</option>";
                    }
                    ?>
                </select>
            </label>
        </div>
        <div class="mt-10">
            <label for="jumlah">
                <span class="mr-20">JUMLAH</span><br>
                <input type="number" name="jumlah" class="border-2 border-gray-600 rounded-md h-10 w-60 mt-4">
            </label>
        </div>
        <input type="submit" class="mt-10 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">
    </form>
    <div class="mt-10">
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['status'] == 'failed') {
                echo "<p class=\"text-red-500 uppercase\">" . $_GET['message'] . "</p>";
            }
            if ($_GET['status'] == 'ok') {
                echo "<p class=\"text-green-500 uppercase\">" . $_GET['message'] . "</p>";
            }
        }
        ?>
    </div>
</div>


<?php
include('inc/footer.php')
?>