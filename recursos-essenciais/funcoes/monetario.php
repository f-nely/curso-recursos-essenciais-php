<?php

$valor = 1879.85;

// number_format - formata um número com os milhares agrupados
var_dump('R$ ' . number_format( $valor, 2, ',', '.'));
