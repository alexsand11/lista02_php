<?php

$vr1= $_GET ["vh1"];
$cd= $_GET ["cd"];
$vd = $vr1 / $cd;

 echo "O valor em dolar é " .number_format($vd, 2, ',', ' ');

?>