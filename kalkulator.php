<?php

include 'class.php';

extract($_POST);

$bil1;
$bil2;
$operasi;

$calculator = new Calculator($bil1, $bil2, $operasi); // Memanggil class Calculator

?>

<!-- Tampilan UI hasil perhitungan kalkulator -->
<html>

<h2>Hasil</h2>

<body>
    <form>
        <input type="text" name="bil1" value="<?= $bil1; ?>" readonly>
        <input type="text" name="operasi" value="<?= $operasi; ?>" readonly>
        <input type="text" name="bil2" value="<?= $bil2; ?>" readonly>
        <p> = </p>
        <input type="text" name="bil1" value="<?= $calculator->calcMethod(); ?>" readonly>
    </form>



    <a href="index.php">Kembali</a>
</body>

</html>