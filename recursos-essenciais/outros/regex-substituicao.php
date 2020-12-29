<?php

$aniversario = "Elton 22/08 Daniel 26/04 Taylon 09/12 Ariana 10/02";

$nomes = preg_replace('/[0-9\/]+/', '', $aniversario);

$names = preg_replace(['/[a-z]+/i','/[0-9\/]+/'], ['#', '*'], $aniversario, -1, $contador);

var_dump($names, $contador);

$aniversario2 = "Elton 2020-22-08 Daniel 2020-26-04 Taylon 2020-09-12 Ariana 2020-10-02";

$formatado = preg_replace_callback('/[0-9-]+/', 'tratar', $aniversario2);

function tratar(array $item):string
{
    return DateTime::createFromFormat('Y-m-d', $item[0])->format('d/m/Y');
}

var_dump($formatado);

 