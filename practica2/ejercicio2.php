<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 PHP</title>
</head>
<body>
<?php
 
// Defino dos variables con mi nombre y apellidos
$nombre = "Pablo";
$apellido = "Abós";

// 1) Con echo pasando varios argumentos (separados por coma)
echo "mi nombre es \"$nombre\", y mi apellido es \"$apellido\"";

// 2) Con print
print "mi nombre es \"$nombre\" y mi apellido es \"$apellido\"";

// 3, 4, 5) Diferencias y similitudes entre echo y print
// Echo puede tomar múltiples parámetros, mientras que print solo puede tomar uno.
// Echo es ligeramente más rápido que print.
// Ambos son constructores de lenguaje y se usan para imprimir datos en la pantalla.

// 6) Se pueden pasar argumentos sin usar paréntesis porque 'echo' y 'print' son constructores del lenguaje, no funciones.

/* 7) Sintaxis heredoc */
$informe = <<<FIN
Línea 1 del informe.
Línea 2 del informe.
Línea 3 del informe.
Línea 4 del informe.
Línea 5 del informe.
FIN;

// Visualización del texto heredoc
echo $informe;

/* PROBANDO VARIABLES (del 8 al 19) */
$variable = "valor inicial";

// Visualización del valor y tipo
echo gettype($variable) . ": " . $variable;

// Cambio de tipos
$variable = true; // boolean
echo gettype($variable) . ": " . $variable;
$variable = 3.14; // float
echo gettype($variable) . ": " . $variable;
$variable = "string"; // string
echo gettype($variable) . ": " . $variable;
$variable = null; // null
echo gettype($variable) . ": " . $variable;

// Variable no definida
$indefinida;
echo gettype($indefinida) . ": " . $indefinida;

/* 20) Visualiza el código ASCII del valor 64 al 122 */
for ($i = 64; $i <= 122; $i++) {
    printf("ASCII %d es %s\n", $i, chr($i));
}

// 21) Visualiza el contenido de la función time()
echo "time() devuelve: " . time() . " que es el número de segundos desde el 1 de enero de 1970";

// 22) Fecha actual con date()
echo "Fecha actual: " . date("d-m-Y");

// 23, 24, 25) Días, horas, minutos desde el 1/1/1970
$segundos_desde_1970 = time();
echo "Días desde el 1/1/1970: " . floor($segundos_desde_1970 / 86400);
echo "Horas desde el 1/1/1970: " . floor($segundos_desde_1970 / 3600);
echo "Minutos desde el 1/1/1970: " . floor($segundos_desde_1970 / 60);

// 26, 27, 28) Fecha con formato localizado
setlocale(LC_TIME, "es_ES");
echo strftime("%A, %d de %B de %Y");
setlocale(LC_TIME, "en_US");
echo strftime("%A, %d %B %Y");
setlocale(LC_TIME, "fr_FR");
echo strftime("%A, %d %B %Y");

// 29-30) Edad desde la fecha de cumpleaños
$fecha_cumpleaños = strtotime("1990-01-01");
$edad_segundos = time() - $fecha_cumpleaños;
$edad_años = floor($edad_segundos / (365*60*60*24));
$edad_meses = floor(($edad_segundos % (365*60*60*24)) / (30*60*60*24));
$edad_dias = floor(($edad_segundos % (30*60*60*24)) / (60*60*24));
echo "Tienes $edad_años años, $edad_meses meses y $edad_dias días";

// 31-32) Edad desde una fecha específica
$fecha_especifica = strtotime("1969-10-30");
$edad_especifica_segundos = time() - $fecha_especifica;
$edad_especifica_años = floor($edad_especifica_segundos / (365*60*60*24));
$edad_especifica_meses = floor($edad_especifica_segundos / (30*60*60*24));
$edad_especifica_dias = floor($edad_especifica_segundos / (60*60*24));
echo "Tienes $edad_especifica_años años";
echo "Tienes $edad_especifica_meses meses";
echo "Tienes $edad_especifica_días días";

// 33-36) Uso de getdate()
$fecha_info = getdate();
print_r($fecha_info);
$fecha_info_1 = getdate(1);
print_r($fecha_info_1);

// Edad de una persona nacida el 1/1/1969
$fecha_nacimiento = strtotime("1969-01-01");
$edad = floor((time() - $fecha_nacimiento) / (365*60*60*24));
echo "La edad es: $edad años";

// 37-64) Explicación del código
// Este bloque de código usa 'strtotime' y 'date' para manipular y formatear fechas.
// 'strtotime' convierte una descripción de fecha y hora en inglés a un timestamp Unix
// 'date' formatea una fecha en un formato legible, usando el timestamp proporcionado por strtotime.

?>
</body>
</html>
