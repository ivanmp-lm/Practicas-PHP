<?php
function tabla_multiplicar($num) {
    echo "<table border=1>";
    for ($i = 0; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "<tr>";
        echo "<td>$num</td>";
        echo "<td>x</td>";
        echo "<td>$i</td>";
        echo"<td>=</td>";
        echo "<td>$resultado</td>";
        echo "</tr>"; }
    echo "</table>"; }
# Definición de la funcion "saludo"
function saludo() {
    echo "Hola mundo"; }

#Entrada: $nombre
#Salida: -
function saludo_usuario ($nombre){
    echo "Hola $nombre"; }

#Entrada: $nombre
#Salida: Una cadena de texto
function saludo_usuario_con_salida($nombre){
    return "Hola $nombre"; }
?>