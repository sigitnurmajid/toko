<?php
include '../modules/database.php';

$id = $_GET['id'];

$database->query("DELETE FROM pelanggan WHERE id=$id");

header("location:../pelanggan.php");

?>