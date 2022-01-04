<?php

//Un tipo de dato es una forma de diferenciar los distintos datos

/* 
    - Numericos
        - Integer
        - Float
        - Double

    - Cadenas de caracteres
        - Char
        - String

    - Booleanos
        - True
        - False

    - Sin valor
        - Null
        - Undefined

    PHP al tener un tipado debil, es capaz de convertir un tipo de dato a otro
    
*/

//Un ejemplo del tipado debil es

$numero = "10";
echo $numero + 25;
//A pesar que $numero es un string, PHP lo convierte a numero para operarlo.
