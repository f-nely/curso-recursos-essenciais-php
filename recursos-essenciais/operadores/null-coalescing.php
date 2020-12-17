<?php
/*
 * null coalescing
 * Ele retorna o primeiro operando se este existir e não
 * for null; caso contrário retorna o segundo operando.
 */

$valor = [
    "php" => 8.0,
    "java" => 8,
    "c#" => 9
];

//$cSharp = isset($valor['c#']) ? $valor['c#'] : "Curso de C# não encontrado: ";

$cSharp = $valor['c#'] ?? "Curso de C# não encontrado: ";

echo $cSharp;