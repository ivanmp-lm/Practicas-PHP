<?php
echo "<h1>Lista ascendente:</h1>";
$i = 1;
do {
    echo "<table>
            <caption>$i</caption>
            <caption>$i</caption>
          </table>";
    $i++;
} while ($i <= 10);
echo "<h1>Lista descendente:</h1>";
$i = 10;
do {
    echo $i;
    echo "<br>";
    $i--;
} while  ($i >= 0);
?>