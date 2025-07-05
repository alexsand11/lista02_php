

<?php

$cidade = $_GET ["cidade"];
$bairro = $_GET ["bairro"];
$rua = $_GET ["rua"];
$numero = $_GET ["numero"];
$quadra = $_GET ["quadra"];
$endereço = "$cidade, $bairro), $rua, nº $numero, $quadra" ;

 echo "Seu endereço é $endereço.";

?>