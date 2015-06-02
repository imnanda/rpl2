<?php
$servername = "localhost";
$username = "root";
$password = "asdasd150494";
$dbname = "rpl2";
$mysqli = new mysqli($servername, $username, $password,$dbname);
if (mysqli_connect_errno()) {
    echo "Error koneksi ke database";
    exit;
}
