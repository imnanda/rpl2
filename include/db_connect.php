<?php

class Koneksi {

    private static $servername = 'localhost';
    private static $username = 'root';
    private static $password = '';
    private static $dbname = 'rpl2';

    static private $conn;

    static function getconn()
    {
        if(! static::$conn)
        {
            static::$conn = new mysqli(static::$servername, static::$username, static::$password, static::$dbname);
            if (static::$conn->connect_error) {
                die("Connection failed: ");
            }
        }

        return static::$conn;
    }
}