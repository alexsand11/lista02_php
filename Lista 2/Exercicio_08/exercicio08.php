<?php

$anodenascimento = $_GET ["anodenascimento"];
$idade = date('Y') - $anodenascimento;

echo "Sua idade é $idade anos.";



?>