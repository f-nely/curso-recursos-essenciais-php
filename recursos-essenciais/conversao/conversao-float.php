<?php

/*
 * Exceto a conversão de Strings para Float, todos os outros tipos,
 * quando convertidos para Float, primeiramente são convertidos
 * para Inteiro e então para float.
 */

$valor = TRUE;
var_dump((float)$valor); // Float 1

$valor = [9, 2, 3, 7];
var_dump((float)$valor); // Float 1

$valor = [];
var_dump((float)$valor); // Float 0

$valor = [NULL];
var_dump((float)$valor); // Float 1

$valor = [''];
var_dump((float)$valor); // Float 1
