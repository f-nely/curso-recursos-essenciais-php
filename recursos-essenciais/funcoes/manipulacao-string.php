<?php

$frase = "Treinaweb Cursos";

// strpos - encontra a posição da primeira ocorrência de uma string
$posicaoR = strpos($frase, "web");

var_dump($posicaoR);

// str_replace - substitui todas as ocorrências da string de procura com a string de substituição
$fraseModificada = str_replace('r', '*', $frase);

var_dump($fraseModificada);

$fraseModificada = str_replace(['r', 'w'], '*', $frase);
var_dump($fraseModificada);

$fraseModificada = str_replace(['r', 'w'], ['*', '#'], $frase);
var_dump($fraseModificada);

// substr - retorna uma parte de uma string
$fraseModificada2 = substr($frase, 6, 3);
var_dump($fraseModificada2);

$fraseModificada2 = substr($frase, -6);
var_dump($fraseModificada2);

echo (substr('nelynely', 4, 4));

