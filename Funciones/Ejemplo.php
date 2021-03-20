<?php
include "Funciones.php";
saludo();
echo "<br>";
saludo_usuario("Iván");
echo "<br>";
$salida = saludo_usuario_con_salida("Iván");
echo $salida;
?>