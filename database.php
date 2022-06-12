<?php
class Connection
{
    // Koneksi ke database
    public function get_connection()
    {
        $host = "localhost";
        $database = "calculator";
        $username = "root";
        $password = "";
        $connect = new mysqli($host, $username, $password, $database);
        return $connect;
    }
}
