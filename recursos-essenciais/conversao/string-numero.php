<?php

/*
 * Conversões automáticas de string para número
 *
 * Uma string é avaliada como ponto flutuante se
 * contiver qualquer um dos caracteres ".", "E"
 * ou "e". Nos demais casos ela será avaliada
 * como um inteiro.
 */


$valor = 1 + "7.5";
var_dump($valor); // Float 8.5

$valor = 1 + "-10";
var_dump($valor); // Int -9

$valor = 1 + "2e2";
var_dump($valor); // Float 201

$valor = 1 + "-10.5";
var_dump($valor); // Float -9.5
