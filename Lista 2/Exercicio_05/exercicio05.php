
<?php

$taxa = $_GET ["taxa"];
$base = $_GET ["base"];
$final = $base + ($base * $taxa / 100);

 echo "O valor final do produto é $final.";

?>