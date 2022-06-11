<?php
require 'database.php';
class Calculator extends Connection
{

    public $bil1;
    public $bil2;
    public $operasi;

    public function __construct($bil1, $bil2, $operasi)
    {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
        $this->operasi = $operasi;

        $this->conn = $this->get_connection();
    }

    public function calcMethod()
    {
        switch ($this->operasi) {
            case 'tambah':
                $hasil = $this->bil1 + $this->bil2;
                break;
            case 'kurang':
                $hasil = $this->bil1 - $this->bil2;
                break;
            case 'kali':
                $hasil = $this->bil1 * $this->bil2;
                break;
            case 'bagi':
                $hasil = $this->bil1 / $this->bil2;
                break;
            case 'pangkat':
                $hasil = $this->bil1 * $this->bil1;
                break;
            case 'modulo':
                $hasil = $this->bil1 % $this->bil2;
                break;
            default:
                $hasil = "Error";
                break;
        }

        extract($_POST);
        $bil1;
        $bil2;
        $operasi;
        $hasil;

        $queryinput = "INSERT INTO calculator
        VALUES ('$bil1', '$bil2', '$operasi', '$hasil')";
        $this->conn->query($queryinput);

        return $hasil;
    }

    // public function insert($bil1, $bil2, $operasi, $hasil)
    // {
    //     $queryinput = "INSERT INTO calculator
    //     VALUES ('$bil1', '$bil2', '$operasi', '$hasil')";
    //     $this->conn->query($queryinput);
    // }
}
