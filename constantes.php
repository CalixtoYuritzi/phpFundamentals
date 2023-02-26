<?php
/*
Crear un programa para convertir de CM a pulgadas y de KG a libras
*/

define ('PULGADA', 0.393701);
define ('LIBRA', 2.204662);

$cm = 50;
$kilo = 5;

echo $cm * PULGADA . '<br>';
echo $kilo * LIBRA;
?>
