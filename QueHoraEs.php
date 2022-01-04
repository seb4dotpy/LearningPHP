<?php
/*
    Programa que nos permite transformar horas a minutos, segundos o lo que sea
*/

$segundos = readline("Ingresa el tiempo en segundos: ");
echo $segundos;
$horas = (int)($segundos / 3600);
$segundos = (int)($segundos % 3600);
$minutos = (int)($segundos / 60);
$segundos = (int)($segundos % 60);

echo "Son $horas horas, $minutos minutos, $segundos segundos";
