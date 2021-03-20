<?php
echo "<b>IP Servidor: </b><br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br><b>Nombre Servidor: </b><br>";
echo $_SERVER['SERVER_NAME'];
echo "<br><b>Nombre software: </b><br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br><b>Nombre UA: </b><br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br><b>IP Cliente: </b><br>";
echo $_SERVER['REMOTE_ADDR'];
?>