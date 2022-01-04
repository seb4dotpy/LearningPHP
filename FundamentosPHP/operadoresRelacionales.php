<?php

$a = 5;
$b = 3;
//igual == no compara tipo de dato
var_dump($a == $b);
//identico ===, compara tipos de datos
var_dump($a === $b);
//diferente !=
var_dump($a != $b);
//menor que <
var_dump($a < $b);
//mayor que >
var_dump($a > $b);
//mayor o igual que >=
var_dump($a >= $b);
//menor o igual que <=
var_dump($a <= $b);
//nave espacial <=> devuleve -1, si el numero de la izquierda es menor al de la derecha
// si es al reves devolvera 1 y si son iguales devolvera 0
echo 2 <=> 1;
//null ?? si una variable no esta definida utiliza la otra
echo $a ?? $c; //imprime la variable a, si es que c no esta definida


