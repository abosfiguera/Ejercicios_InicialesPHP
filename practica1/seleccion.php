<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Selección en PHP</title>
    <meta http-equiv="refresh" content="2;url=index.php">
</head>
<body>
<?php

// Generar una edad aleatoria entre 1 y 150 años
$edad = rand(1, 150);

// Uso de switch para categorizar la edad
switch (true) {
    case ($edad >= 0 && $edad <= 11):
        $categoria = "niños";
        break;
    case ($edad >= 12 && $edad <= 17):
        $categoria = "adolescentes";
        break;
    case ($edad >= 18 && $edad <= 35):
        $categoria = "jóvenes";
        break;
    case ($edad >= 36 && $edad <= 65):
        $categoria = "adultos";
        break;
    case ($edad >= 66 && $edad <= 110):
        $categoria = "jubilados";
        break;
    default:
        $categoria = "edad no contemplada en nuestra encuesta";
}

// Visualizar el resultado
print "Edad generada: $edad años. Categoría: $categoria<br>";

?>
</body>
</html>
