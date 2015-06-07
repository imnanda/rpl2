<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 7:14 PM
 */

//include "../include/db_connect.php";
include "../Data_cucian.php";
$laundry = new laundry();
$laundry -> jenisCucian = $_POST['jenis'];
$laundry -> beratCucian = $_POST['berat'];
$laundry -> idUser = $_POST['id_pelanggan'];
$laundry -> tambahlaundy();
//var_dump($laundry);
header('Location:../pelanggan.php');