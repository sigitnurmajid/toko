<?php
include '../modules/database.php';

$id = $_GET['id'];

$database->query("DELETE FROM user WHERE id=$id");

header("location:../user.php");

?>