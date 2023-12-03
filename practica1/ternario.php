<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Operador Ternario en PHP</title>
    <meta http-equiv="refresh" content="2;url=index.php">
</head>
<body>
<?php

// Obtener un número aleatorio entre 1 y 1000
$numero = rand(1, 1000);

// Usar el operador ternario para determinar si es par o impar
$resultado = ($numero % 2 === 0) ? "par" : "impar";

// Visualizar el resultado
print "El número $numero es $resultado.";

?>
</body>
</html>
