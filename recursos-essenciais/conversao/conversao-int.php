<?php

/*
 * Usam-se os modificadores (int) e (integer)
 * ou as funções settype() e intval() para
 * converter valores para inteiro.
 */

$valor = true;

settype($valor, "integer"); // usando settype
var_dump($valor);

$valor = false;
var_dump(intval($valor)); // usando o intval()

$valor = true;
var_dump((int) $valor); // usando (int)

/*
 * strings que não começam com nenhum valor numérico retornam 0
 */
$valor = "TreinaWeb";
var_dump((int)$valor); // Retorna 0

/*
 * Strings que não começam com o nenhum valor numérico retornam 0.
 * Se há algum valor numérico no início da string a parte numérica
 * é mantida e todo o resto da string é ignorado/cortado.
 */
$valor = "20TreinaWeb";
var_dump((int)$valor); // Retorna 20

/*
 * Ao converter números de ponto flutuante
 *  para inteiro, o número é truncado.
 */
$valor = 25.7;
var_dump((int)$valor); // Resultado: 25

$valor = 25.7 + 10.7;
var_dump((int)$valor); // Resultado: 36

/*
 * Um arrays quando convertidos para inteiro retorna
 * 1 se tiver elementos 0 caso esteja vazio.
 */
$cursos = [9, 2, 3, 7];
var_dump((int)$cursos); // Retorna: 1

$cursos = [NULL];
var_dump((int)$cursos); // Retorna: 1

$cursos = [];
var_dump((int)$cursos); // Retorna: 0

$cursos = [''];
var_dump((int)$cursos); // Retorna: 1
