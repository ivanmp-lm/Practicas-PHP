<?php
#Definimos una constante con el número de elementos del array
define("NUM_ELEMENTOS", 10);
#Paso 1. Declaración del array
$lista = array();
#Paso 2. Inicialización del array
for ($i = 0; $i < NUM_ELEMENTOS; $i++){
    $lista[$i] = rand(1, 30); }

echo "<h1>Array desordenado</h1>";

#Paso 3. Imprimir el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>"; }

#Paso 4. Ordenamos el array de menor a mayor
sort($lista);

echo "<h1>Array ordenado de menor a mayor</h1>";

#Paso 5. Imprimimos el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>"; }

#Paso 6. Ordenamos el array de mayor a menor
rsort($lista);

echo "<h1>Array ordenado de mayor a menor</h1>";

#Paso 7. Imprimimos el array
for ($i = 0; $i < NUM_ELEMENTOS; $i++) {
    echo $lista[$i];
    echo "<br>"; }
?>