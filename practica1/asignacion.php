<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Asignación en PHP</title>
    <meta http-equiv="refresh" content="5;url=index.php">
</head>
<body>
<?php

// Asignación de un valor constante numérico
$a = 9;
print "Valor constante numérico: $a<br>";

// Asignación de una expresión aritmética
$a = 6 + 7;
print "Valor de una expresión aritmética: $a<br>";

// Asignación de una invocación a función
$a = rand(1, 7);
print "Valor de una invocación a función (rand): $a<br>";

// Asignación de un valor constante string
$a = "Hola Mundo";
print "Valor constante string: $a<br>";

// Asignación de un valor constante numérica con valor hexadecimal
$a = 0x1A;
print "Valor constante numérica hexadecimal: $a<br>";

// Asignación de un valor constante numérica con valor binario
$a = 0b1101;
print "Valor constante numérica binario: $a<br>";

// Asignación de un valor de una expresión numérica
$a = 5 * 3;
print "Valor de una expresión numérica: $a<br>";

// Asignación de un valor de una expresión de cadena de caracteres
$a = "abc" . "def";
print "Valor de una expresión de cadena de caracteres: $a<br>";

// Asignación de un valor que devuelva una función
$a = print "Hello World!";
print "<br>Valor que devuelve una función (print): $a<br>";

// Asignación del valor de una expresión que sea una asignación
$b = 10;
$a = ($b = 20);
print "Valor de una expresión que es una asignación: $a (b se ha asignado a $b)<br>";

?>
</body>
</html>
