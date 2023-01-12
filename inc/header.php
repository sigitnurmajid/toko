<html>

<?php
session_start();
?>

<head>
    <title>Toko Sigit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<body>
    <?php
    if (!isset($_SESSION['nama'])) {
        header("location:/toko/login.php");
    }
    ?>

    <!-- Sidebar -->
    <div class="w-1/5 h-full bg-gray-900 fixed">
        <h3 class="mt-5 text-lg uppercase tracking-widest font-bold mb-4 text-center text-white">Toko Sigit</h3>

        <div class="h-10 mt-10 mb-2 mx-3 p-4 rounded-md flex items-center duration-300 cursor-pointer hover:bg-blue-600 text-white <?php if ($_SESSION['status'] == 'kasir' || $_SESSION['status'] == 'gudang') echo "hidden";?>">
            <a class="text-gray-200 text-md font-bold" href="http://localhost/toko/user.php">Menu User</a>
        </div>
        <div class="h-10 mt-10 mb-2 mx-3 p-4 rounded-md flex items-center duration-300 cursor-pointer hover:bg-blue-600 text-white">
            <a class="text-gray-200 text-md font-bold" href="http://localhost/toko/barang.php">Menu Barang</a>
        </div>
        <div class="h-10 mt-10 mb-2 mx-3 p-4 rounded-md flex items-center duration-300 cursor-pointer hover:bg-blue-600 text-white <?php if ($_SESSION['status'] == 'gudang') echo "hidden";?>">
            <a class="text-gray-200 text-md font-bold" href="http://localhost/toko/pelanggan.php">Menu Pelanggan</a>
        </div>
        <hr class="m-9">
        <div class="h-10 mt-10 mb-2 mx-3 p-4 rounded-md flex items-center duration-300 cursor-pointer hover:bg-blue-600 text-white <?php if ($_SESSION['status'] == 'gudang') echo "hidden";?>">
            <a class="text-gray-200 text-md font-bold" href="http://localhost/toko/penjualan.php">Input Penjualan</a>
        </div>
        <div class="h-10 mt-10 mb-2 mx-3 p-4 rounded-md flex items-center duration-300 cursor-pointer hover:bg-blue-600 text-white <?php if ($_SESSION['status'] == 'gudang') echo "hidden";?>">
            <a class="text-gray-200 text-md font-bold" href="http://localhost/toko/pembelian.php">Input Pembelian</a>
        </div>
        <div class="h-10 mt-48 mb-2 mx-3 p-4 flex items-center">
            <p class="text-gray-200 text-md font-bold" href="user.php">HAI, <span class="uppercase tracking-widest"><?php echo $_SESSION['nama'] . " as " . $_SESSION['status']; ?></span></p>
        </div>
        <div class="h-10 mb-2 mx-3 p-4 flex">
            <a href="login/action_logout.php" class="underline font-bold text-red-200">Logout</a>
        </div>
    </div>

    <!-- Content -->
    <div class="absolute max-h-screen w-4/5 right-0">