<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 4:21 PM
 */
class transaksi{

    public $idTransaksi;
    public $waktuTransaksi;
    public $keterangan;

    function rekamTransaksi()
    {
        $sql = "INSERT INTO t_transaksi(waktuTransaksi, keterangan) VALUES($this->waktuTransaksi,'$this->keterangan')";
        return Koneksi::getconn()->query($sql);
    }

    function tampilTransaksi()
    {
        $sql = "SELECT * FROM t_transaksi";
        return Koneksi::getconn()->query($sql);
    }
}
