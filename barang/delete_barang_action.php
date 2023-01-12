<?php
include '../modules/database.php';

$id = $_GET['id'];

$database->query("DELETE FROM barang WHERE id=$id");

header("location:../barang.php");

?>