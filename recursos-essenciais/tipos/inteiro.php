<?php

/*
 * decbin($n) <> bindec($n)
 * decoct($n) <> octdec($n)
 * dechex($n) <> hexdec($n)
 *
 */



$dec = 980; // decimal
$bin = 0b1111010100; // binário
$oct = 01724; // octal
$hex = 0x3d4; // hexadecimal

var_dump($dec, $bin, $oct, $hex);

$intMax = PHP_INT_MAX; // valor máximo de um inteiro
$intMin = PHP_INT_MIN; // valor mínimo de um inteiro
$intSize = PHP_INT_SIZE; // tamanho do inteiro

var_dump($intMax, $intMin, $intSize);


