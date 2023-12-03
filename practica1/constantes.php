<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio de Constante en PHP</title>
    <meta http-equiv="refresh" content="2;url=index.php">
</head>
<body>
<?php

// Definición de la constante 'EDAD'
define("EDAD", 30); // Reemplaza 30 con tu edad real

// Calculando los años que faltan para cumplir 100 años
$anios_para_100 = 100 - EDAD;

// Visualizando la información
print "Tienes " . EDAD . " años.<br>";
print "Te faltan " . $anios_para_100 . " años para cumplir 100.<br>";

?>
</body>
</html>
