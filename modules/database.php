<?php
include "config.php";

$database = mysqli_connect($HOSTNAME, $USER, $PASSWORD, $DATABASE);

if (mysqli_connect_errno()) {
    echo "Koneksi database mysqli gagal!!! : " . mysqli_connect_errno();
}
