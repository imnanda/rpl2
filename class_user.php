<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 4:21 PM
 */
include "include/db_connect.php";
class pelanggan{

    public  $idPelanggan;
    public  $namaPelanggan;
    public  $alamatPelanggan;
    public  $telepon;

    function tambahpelanggan()
    {
        $sql = "INSERT INTO t_pelanggan VALUE ('$this->idPelanggan','$this->namaPelanggan','$this->alamatPelanggan','$this->telepon')";
        $result = Koneksi::getconn()->query($sql);
    }
    function ambildatepelanggan()
    {
        $sql = "SELECT * FROM t_pelanggan";
        return koneksi::getconn()->query($sql);
    }
    function ambilsebagian($id_pelanggan)
    {
        $sql = "SELECT * FROM t_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
        return koneksi::getconn()->query($sql);
    }
    function editdatapelanggan($id_pelanggan)
    {
        $sql = "UPDATE t_pelanggan SET nama_pelanggan ='$this->namaPelanggan',alamat_pelanggan ='$this->alamatPelanggan',telepon ='$this->telepon' WHERE id_pelanggan = $id_pelanggan";
        $result = Koneksi::getconn()->query($sql);
    }
    function  ambilakhir()
    {
        $sql = "SELECT * FROM t_pelanggan ORDER BY id_pelanggan DESC LIMIT 1";
        return koneksi::getconn()->query($sql);
    }

}
