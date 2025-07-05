<?php

$peso = $_GET ["p1"];
$altura = $_GET ["a1"];
$imc = $peso / ($altura * $altura);

 echo "Seu IMC é de " .number_format($imc, 2, ',', ' ');

?>