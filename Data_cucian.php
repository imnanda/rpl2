<?php
/**
 * Created by PhpStorm.
 * User: asmunanda
 * Date: 6/2/2015
 * Time: 4:21 PM
 */

class laundry{

    public  $idCucian;
    public  $jenisCucian;
    public  $beratCucian;
    public  $idUser;

    function tambahlaundy()
    {
        include "include/db_connect.php";
        $sql = "INSERT INTO t_cucian VALUE ('$this->idCucian','$this->jenisCucian','$this->beratCucian','$this->idUser')";
        $result = Koneksi::getconn()->query($sql);
    }
    function ambildatalaundy()
    {
        include "include/db_connect.php";
        $sql = "SELECT * FROM t_cucian";
        return koneksi::getconn()->query($sql);
    }
    function ambilsebagian($id_cucian)
    {
        include "include/db_connect.php";
        $sql = "SELECT * FROM t_cucian WHERE id_cucian = '$id_cucian'";
        return koneksi::getconn()->query($sql);
    }
    function editdatalaundy($id_cucian)
    {
        include "include/db_connect.php";
        $sql = "UPDATE t_cucian SET jenis_cucian ='$this->jenisCucian',berat_cucian ='$this->beratCucian' WHERE id_cucian = $id_cucian";
        $result = Koneksi::getconn()->query($sql);
    }
    function  ambilakhir()
    {
        include "include/db_connect.php";
        $sql = "SELECT * FROM t_cucian ORDER BY id_cucian DESC LIMIT 1";
        return koneksi::getconn()->query($sql);
    }

}
