<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 7:14 PM
 */
include "class_user.php";

$pelanggan = new pelanggan();
$pelanggan -> namaPelanggan = $_POST['nama'];
$pelanggan -> noHp = $_POST['nohp'];
$pelanggan -> alamatPelanggan['alamat'];
$pelanggan ->tambahpelanggan();