<?php

include 'class.php';

extract($_POST);

$bil1;
$bil2;
$operasi;

$calculator = new Calculator($bil1, $bil2, $operasi);
echo $calculator->calcMethod();
