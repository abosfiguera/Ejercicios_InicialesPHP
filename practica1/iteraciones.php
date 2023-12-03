<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iteraciones en PHP</title>
    <meta http-equiv="refresh" content="2;url=index.php">
</head>
<body>
<?php

// Inicializar la suma de números pares
$suma = 0;

// Sumar los 100 primeros números pares
for ($i = 2; $i <= 200; $i += 2) {
    $suma += $i;
}

// Visualizar el resultado
print "La suma de los 100 primeros números pares es: $suma";

?>
</body>
</html>
