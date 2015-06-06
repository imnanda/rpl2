<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 7:14 PM
 */
//var_dump($_POST['id_pelanggan']);
include "../data_pelanggan.php";
$pelanggan = new pelanggan();
//$pelanggan -> namaPelanggan = $_POST['nama'];
$pelanggan -> namaPelanggan = $_POST['nama'];
$pelanggan -> telepon = $_POST['telepon'];
$pelanggan -> alamatPelanggan = $_POST['alamat'];
$pelanggan -> editdatapelanggan($id_pelanggan = $_POST['id_pelanggan']);

//var_dump($id_pelanggan);
header('Location:../pelanggan.php');