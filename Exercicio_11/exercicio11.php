<?php

$nome = $_GET ["nome"];
$sobrenome = $_GET ["sobrenome"];
$email = strtolower($nome) . '.' . strtolower($sobrenome) . '@senai.com.br' ;

echo "Seu email é $email.";

?>