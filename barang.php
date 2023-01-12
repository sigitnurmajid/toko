<?php
include('inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Data Barang</h2>
<a href="barang/create_barang.php">
    <button class="ml-5 mt-20 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">Add New</button>
</a>
<div class="mx-5 mt-10">
    <table id="example">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Satuan</th>
                <th>Harga (Rp)</th>
                <th>Stok</th>
                <th>Diskon (%)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('modules/database.php');
            $data = mysqli_query($database, "select * from barang");
            while ($d = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td>" . $d['nama'] . "</td>";
                echo "<td>" . $d['satuan'] . "</td>";
                echo "<td>" . $d['harga'] . "</td>";
                echo "<td>" . $d['stok'] . "</td>";
                echo "<td>" . $d['diskon'] . "</td>";
                echo "<td>" . "<a class=\"text-blue-500 hover:underline\" href=\"barang/update_barang.php?id=" . $d['id'] ."\">Edit </a>". "<a class=\"text-red-500 hover:underline\" href=\"barang/delete_barang_action.php?id=" . $d['id'] ."\">Hapus</a>" ."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<?php
include('inc/footer.php')
?>