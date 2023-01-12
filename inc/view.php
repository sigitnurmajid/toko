<?php
include('../modules/database.php');
if (isset($_GET['id']) && isset($_GET['table'])) {

    $table = $_GET['table'];
    $id = $_GET['id'];

    $query = mysqli_query($database, "select foto from $table where id=$id");
    $row = mysqli_fetch_array($query);
    // header("Content-type: " . "image/jpg");
    echo $row["foto"];
}
