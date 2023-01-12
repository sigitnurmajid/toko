<?php
include('inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Data Pelanggan</h2>
<a href="pelanggan/create_pelanggan.php">
    <button class="ml-5 mt-20 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">Add New</button>
</a>
<div class="mx-5 mt-10">
    <table id="example">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('modules/database.php');
            $data = mysqli_query($database, "select * from pelanggan");
            while ($d = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td <td class=\"capitalize\">" . $d['nama'] . "</td>";
                echo "<td <td class=\"capitalize\">" . $d['alamat'] . "</td>";
                echo "<td>";
                echo ($d['jenis_kelamin'] == "L") ? "Laki-laki" : "Perempuan" ;
                echo "</td>";
                echo "<td>" . $d['telepon'] . "</td>";
                echo "<td>" . "<a class=\"text-blue-500 hover:underline\" href=\"pelanggan/update_pelanggan.php?id=" . $d['id'] ."\">Edit </a>". "<a class=\"text-red-500 hover:underline\" href=\"pelanggan/delete_pelanggan_action.php?id=" . $d['id'] ."\">Hapus</a>" ."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<?php
include('inc/footer.php')
?>