<?php
$valor = array();
for ($i=0; $i<10; $i++) { 
    $valor[$i] = rand(1,30); }

for ($i=0; $i<10 ;$i++) {
    echo $valor[$i];
    echo "<br>"; }
?>