<?php

$valor = [
    "php" => 8.0,
    "java" => 8,
    "c#" => 9
];

//isset - informa se a variável foi iniciada
if (isset($valor['c#'])) {
    echo $valor['c#'];
} else {
    echo "Curso de C# não encontrado: ";
}