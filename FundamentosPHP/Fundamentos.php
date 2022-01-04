<?php
//Siempre debe ir la etiqueta de apertura <?php 

echo "Hola, estoy programando en PHP <br>";//echo "" imprime un msg por pantalla
// El <br> es un salto de linea para el navegador, desde la terminal es \n

$nombre = "Sebastian"; //$ se utiliza para declarar variables
$apellido = "Ohberg";

echo "Yo me llamo " . $nombre . " " . $apellido . "<br>";
// El . permite juntar strings

//tambien se puede imprimir asi.
echo "Yo me llamo $nombre $apellido <br>"; //Asi es mas eficiente y claro
echo "El resultado de 4 * 5 es: " . (4 * 5) . "<br>";


//La etiqueta de cierre es importante cuando trabajamos codigo HTML y PHP
?>