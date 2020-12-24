<?php

// convertendo valores para string
$valor = TRUE;
var_dump((string)$valor); // String '1'

$valor = FALSE;
var_dump((string)$valor); // String Vazia ''

$valor = NULL;
var_dump((string)$valor); // String Vazia ''

$valor = 1;
var_dump((string)$valor); // String '1'

$valor = -1;
var_dump((string)$valor); // String '-1'

$valor = 1.5;
var_dump((string)$valor); // String '1.5'

$valor = 2e2;
var_dump((string)$valor); // String '200'

$valor = 0xffffffffff;
var_dump((string)$valor); // String '1099511627775'

$valor = 0xfffffffffffff;
var_dump((string)$valor); // String '4503599627370495'

$valor = [];
var_dump((string)$valor); // String 'Array'

$valor = [1, 5, 8];
var_dump((string)$valor); // String 'Array'
