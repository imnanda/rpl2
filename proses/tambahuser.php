<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 7:14 PM
 */
include "../data_pelanggan.php";
$pelanggan = new data_pelanggan();
$pelanggan -> namaPelanggan = $_POST['nama'];
$pelanggan -> telepon = $_POST['telepon'];
$pelanggan -> alamatPelanggan = $_POST['alamat'];
$pelanggan ->tambahpelanggan();

header('Location:../tambahlaundy.php');