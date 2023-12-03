<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio de Variables PHP</title>
    <meta http-equiv="refresh" content="5;url=index.php">
</head>
<body>
<?php
 
// Asignación de valores a las variables
$var1 = 125;
$var2 = 074; // Valor válido en octal
$var3 = 0xAbC12;
$var4 = 0b1100;
$var5 = "Esto es una cadena de caracteres";
$var6 = 'Esto es otra cadena de caracteres';
$var7 = <<<EOD
               Esto es una cadena
               multilínea
               y termina aquí
EOD;
$var8 = 1.23432230003322014000002234101;
$var9 = 1234E-2;
$var10 = null;
$var11 = true;
$var12 = false;

// Visualización con print
print "var1: " . $var1 . "<br>";
print "var2: " . $var2 . "<br>";
print "var3: " . $var3 . "<br>";
print "var4: " . $var4 . "<br>";
print "var5: " . $var5 . "<br>";
print "var6: " . $var6 . "<br>";
print "var7: " . $var7 . "<br>";
print "var8: " . $var8 . "<br>";
print "var9: " . $var9 . "<br>";
print "var10: " . ($var10 === null ? 'null' : $var10) . "<br>";
print "var11: " . ($var11 ? 'true' : 'false') . "<br>";
print "var12: " . ($var12 ? 'true' : 'false') . "<br>";

?>
</body>
</html>
