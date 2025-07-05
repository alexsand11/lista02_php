<?php

$vh1= $_GET ["vh1"];
$hs1= $_GET ["hs1"];
$salario = $vh1 * $hs1 * 4.5;

if ($vh1 >= 1) {
 echo "Seu salario é " .number_format($salario, 2, ',', ' ');
} 
elseif ($hs1 >= 1 ) {
 echo "Seu salario é " .number_format($salario, 2, ',', ' ');
}
else {
    echo "Digite seus dados corretamente";
}

?>