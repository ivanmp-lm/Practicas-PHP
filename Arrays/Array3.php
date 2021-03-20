<?php
$valor = array();

for ($i=0;$i<10;$i++){
    $valor[$i]=rand(1,30); }
for ($i=0;$i<10;$i++){
    echo $valor[$i];
    echo "<br>"; }

$valor_array = count($valor);

$max = 0;

for ($i=0;$i<$valor_array;$i++){
    if ($max < $valor[$i]){
        $max=$valor[$i]; }}
 
echo "<br>Valor máximo: $max";

?>