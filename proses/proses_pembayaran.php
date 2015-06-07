<?php

include "../pembayaran.php";
$bayar = new pembayaran();
$bayar -> totalHarga = $_POST['totalHarga'];
$bayar -> statusPembayaran = "Lunas";
$bayar -> setBayar($id_cucian = $_POST['id_cucian']);

include "../transaksi.php";
$dataTransaksi= new transaksi();
$dataTransaksi->waktuTransaksi = getdate();
$dataTransaksi->keterangan = "Transaksi Pembayaran dengan ID Struk '".$_POST['idStruk']."'";
$dataTransaksi->rekamTransaksi();

var_dump($dataTransaksi);
//header('Location:../form_pembayaran.php');