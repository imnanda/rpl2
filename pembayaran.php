<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 4:21 PM
 */
class pembayaran{

    public $idStruk;
    public $totalHarga;
    public $statusPembayaran;

    function ambilsebagian($id_cucian)
    {
        include "include/db_connect.php";
        $sql = "SELECT * FROM t_cucian tc, t_pelanggan tpel, t_pembayaran tpem WHERE tc.id_pelanggan = tpel.id_pelanggan ".
            "AND tc.id_cucian = tpem.id_cucian AND tc.id_cucian = '$id_cucian'";
        return Koneksi::getconn()->query($sql);
    }

    function simpanStruk($id_cucian) {
        $sql = "insert into t_pembayaran(totalHarga, id_cucian) VALUES($this->totalHarga,$id_cucian)";
        return Koneksi::getconn()->query($sql);
    }

    function setBayar($id_cucian) {
        include "include/db_connect.php";
        $sql = "update t_pembayaran set statusPembayaran = 'Lunas' where id_cucian = $id_cucian";
        return Koneksi::getconn()->query($sql);
    }
}
