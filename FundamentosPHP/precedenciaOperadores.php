<?php

/* 
    La precedecnica de operadores, es cuando el lenguaje decide que sucede 
    antes y despues.
    () los parentesis permiten controlar como se ejecuta una operacion.
    el signo = tiene una asociatividad de derecha.
    y las matematicas una de izquierda
*/
$suma = 1;
$a = $suma++; //Primero se asigna el valor y despues lo suma.
$b = ++$suma; //Primero suma y luego asigna

//cuando utilizamos and

$varTrue = true;
$varFalse = false;
$varComparison = $varTrue and $varFalse;
/*
    and tiene una asociatividad de izquierda, por ende se asignara y
    luego se operara, eso hace que el resultado sea True a Pesar que
    deba ser False
*/
 