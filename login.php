<html>

<head>
    <title>Toko Sigit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="w-96 shadow-md border-2 border-slate-200 rounded-xl p-5 mx-auto mt-24">
        <h3 class="text-lg uppercase tracking-widest font-bold mb-4 text-center">Toko Sigit</h3>
        <form action="login/action_login.php" method="post">
            <label for="username" class="block mb-5">
                <span>Username</span><br>
                <input class="border-2 w-full shadow-sm p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-sky-400 focus:border-sky-400" type="text" name="username" placeholder="Input your username">
            </label>
            <label for="password" class="block mb-2">
                <span>Password</span>
                <input class="border-2 w-full shadow-sm p-2 rounded-md focus:outline-none focus:ring-1 focus:ring-sky-400 focus:border-sky-400" type="password" name="password" placeholder="Input your password">
            </label><br>
            <button name="submit" class="w-full py-1 rounded-lg bg-blue-700 text-white hover:bg-blue-900 h-10">Login</button>
        </form>
        <?php
        if (isset($_GET['message'])) {
            if ($_GET['message'] == 'failed') {
                echo "<p class=\"text-red-500\">Username atau password salah</p>";
            }
        }
        ?>
    </div>
</body>

</html>