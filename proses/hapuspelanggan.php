<?php
include "../data_pelanggan.php";
$pelanggan = new data_pelanggan();
$pelanggan -> hapusdata($id_pelanggan = $_GET['id']);
var_dump($_GET['id']);
header('Location:../data_pelanggan.php');