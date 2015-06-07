<?php
//var_dump($_POST['id_pelanggan']);
include "../Data_cucian.php";
$laundry = new laundry();
//$laundry -> namaPelanggan = $_POST['nama'];
$laundry -> jenisCucian = $_POST['jenis'];
$laundry -> beratCucian = $_POST['berat'];
$laundry -> editdatalaundy($id_cucian = $_POST['id_cucian']);

//var_dump($laundry);
header('Location:../laundry.php');