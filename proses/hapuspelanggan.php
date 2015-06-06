<?php
include "../data_pelanggan.php";
$pelanggan = new pelanggan();
$pelanggan -> hapusdata($id_pelanggan = $_GET['id']);
var_dump($_GET['id']);
header('Location:../pelanggan.php');