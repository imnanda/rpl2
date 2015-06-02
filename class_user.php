<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 4:21 PM
 */
class pelanggan{
    public  $idPelanggan;
    public  $namaPelanggan;
    public  $noHp;
    public  $alamatPelanggan;

    function tambahpelanggan()
    {
        $sql = "INSERT INTO t_pelanggan VALUE ('$this->idPelanggan','$this->namaPelanggan','$this->noHp','$this->alamatPelanggan')";
        $result = mysqli_query($conn, $sql);
    }
}