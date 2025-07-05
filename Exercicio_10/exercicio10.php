<?php

$l = $_GET ["largura"];
$a = $_GET ["altura"];
$c = $_GET ["c"];
$v = $c * $l * $a;

echo "O volume da caixa é $v cm.";

?>