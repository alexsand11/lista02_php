

<?php

$salario = $_GET ["salario"];
$percentual = $_GET ["percentual"];
$novoSalario = $salario + ($salario * $percentual / 100);
echo "Seu novo salario é R$ $novoSalario.";

?>