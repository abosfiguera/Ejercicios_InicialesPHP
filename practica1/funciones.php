<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Funciones en PHP</title>
</head>
<body>
<?php

// Función que recibe $a por referencia y $b por valor
function duplicaYDevuelveMayor(&$a, $b) {
    // Crear una variable global si es necesario
    global $variableGlobal;

    // Duplicar los valores de los parámetros
    $a *= 2;
    $b *= 2;

    // Asignar a la variable global el valor de $b
    $variableGlobal = $b;

    // Devolver el valor mayor
    return $a > $b ? $a : $b;
}

// 1. Crear dos valores en variables
$a = 10;
$b = 20;

// 2. Visualizar sus valores
echo "Valores iniciales: a = $a, b = $b<br>";

// 3. Invocar a la función
$resultado = duplicaYDevuelveMayor($a, $b);

// 4. Visualizar los valores de los parámetros
echo "Después de llamar a la función: a = $a, b = $b<br>";

// 5. Hacer lo especificado y 6. Visualizar los valores
echo "El valor mayor después de duplicar es: $resultado<br>";

// 7. Visualizar los valores después de la llamada a la función
echo "Valores finales: a = $a, b = $b<br>";

// 8. Planteamiento sobre la variable global
echo "Valor de la variable global dentro de la función: $variableGlobal<br>";

?>
</body>
</html>
