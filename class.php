<?php
require 'database.php';
class Calculator extends Connection
{

    public $bil1; // Object bilangan 1
    public $bil2; // Object bilangan 2
    public $operasi; // Object operasi


    // Method Construct
    public function __construct($bil1, $bil2, $operasi)
    {
        $this->bil1 = $bil1;
        $this->bil2 = $bil2;
        $this->operasi = $operasi;

        $this->conn = $this->get_connection(); // Memanggil koneksi database
    }

    //Method perhitungan operasi
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
                $hasil = pow($this->bil1, $this->bil2);
                break;
            case 'modulo':
                $hasil = $this->bil1 % $this->bil2;
                break;
            default:
                $hasil = "Error";
                break;
        }

        // Input perhitungan kalkulator ke database
        extract($_POST);
        $bil1;
        $bil2;
        $operasi;
        $hasil;
        $timestamp;

        $queryinput = "INSERT INTO calculator
        VALUES ('$timestamp','$bil1', '$bil2', '$operasi', '$hasil')";
        $this->conn->query($queryinput);

        return $hasil;
    }
}
