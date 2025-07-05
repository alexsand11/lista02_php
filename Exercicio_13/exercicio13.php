<?php

$nome = $_GET ["nome"];
$sobrenome = $_GET ["sobrenome"];
$novonome =  "$sobrenome," . " $nome" ;

echo "Seu nome reorganizado é $novonome.";

?>