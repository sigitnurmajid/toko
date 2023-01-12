<?php
include('inc/header.php');
?>
<h2 class="ml-5 text-2xl text-gray-700 tracking-widest uppercase text-bold mt-12 font-bold">Data User</h2>
<a href="user/create_user.php" <?php if ($_SESSION['status'] == 'kasir' || $_SESSION['status'] == 'gudang') echo "hidden";?>>
    <button class="ml-5 mt-20 rounded-md bg-blue-700 w-24 h-10 text-white text-center cursor-pointer hover:bg-blue-900">Add New</button>
</a>
<div class="mx-5 mt-10">
    <table id="example">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('modules/database.php');
            $data = mysqli_query($database, "select * from user");
            while ($d = mysqli_fetch_array($data)) {
                echo "<tr>";
                echo "<td class=\"capitalize\">" . $d['nama'] . "</td>";
                echo "<td>" . $d['username'] . "</td>";
                echo "<td>";
                echo ($d['jenis_kelamin'] == "L") ? "Laki-laki" : "Perempuan" ;
                echo "</td>";
                echo "<td>" . $d['tanggal_lahir'] . "</td>";
                echo "<td class=\"capitalize\">" . $d['alamat'] . "</td>";
                echo "<td class=\"capitalize\">" . $d['status'] . "</td>";
                echo "<td>" . "<a class=\"text-blue-500 hover:underline\" href=\"user/update_user.php?id=" . $d['id'] ."\">Edit </a>". "<a class=\"text-red-500 hover:underline\" href=\"user/delete_user_action.php?id=" . $d['id'] ."\">Hapus</a>" ."</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<?php
include('inc/footer.php')
?>