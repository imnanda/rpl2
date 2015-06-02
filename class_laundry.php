<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 4:21 PM
 */
//include "include/db_connect.php";
class laundy{

    public  $idCucian;
    public  $jenisCucian;
    public  $beratCucian;
    public  $idUser;

    function tambahlaundy()
    {
        $sql = "INSERT INTO t_cucian VALUE ('$this->idCucian','$this->jenisCucian','$this->beratCucian','$this->iduser')";
        $result = Koneksi::getconn()->query($sql);
    }
    function ambildatalaundy()
    {
        $sql = "SELECT * FROM t_cucian";
        return koneksi::getconn()->query($sql);
    }
    function ambilsebagian($id_cucian)
    {
        $sql = "SELECT * FROM t_cucian WHERE id_cucian = '$id_cucian'";
        return koneksi::getconn()->query($sql);
    }
    function editdatalaundy($id_cucian)
    {
        $sql = "UPDATE t_cucian SET jenis_cucian ='$this->jenisCucian',berat_cucian ='$this->beratCucian' WHERE id_cucian = $idcucian";
        $result = Koneksi::getconn()->query($sql);
    }
    function  ambilakhir()
    {
        $sql = "SELECT * FROM t_cucian ORDER BY id_cucian DESC LIMIT 1";
        return koneksi::getconn()->query($sql);
    }

}
