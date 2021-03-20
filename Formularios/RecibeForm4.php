<?php
$numero_de_monedas = $_GET["numero_de_monedas"];
$moneda = $_GET["tipo_moneda"];

if (empty($numero_de_monedas) || empty($tipo_moneda)) {
    header('Location: Formulario4.php');
    exit;}

echo "<h2>Número de monedas: $numero_de_monedas</h2>";
echo "<h2>Tipo de moneda: $tipo_moneda</h2>";

#Declaramos array
$lista = array();

#Inicializamos array
for($i = 0; $i < $numero_de_monedas; $i++) {
    $lista[$i] = rand(0, 1); }

#Mostrar monedas
for ($i = 0; $i < $numero_de_monedas; $i++) {
    if ($lista[$i] == 0) {
        echo "<img src='/Imágenes/eurocara.jpg'>";
    } else {
        echo "<img src='/Imágenes/eurocruz.jpg'>"; }}
?>