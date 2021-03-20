<?php
$valor = array();

for ($i=0;$i<10;$i++){
    $valor[$i]=rand(1,30); }
for ($i=0;$i<10;$i++){
    echo $valor[$i];
    echo "<br>"; }

$valor_array = count($valor);

$suma = 0;

for ($i=0;$i<$valor_array;$i++){
    $suma=$suma+$valor[$i]; }

$media = $suma/$valor_array;

echo "<br>Media de entre todos los valores: $media";
?>