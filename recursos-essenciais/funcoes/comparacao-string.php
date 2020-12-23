<?php

var_dump('Treinaweb' === 0);

var_dump('11t' === 11);

// strcmp - binary safe string comparison
var_dump(strcmp('aa', 'aa'), 'aa' <=> 'aa');

if (strcmp('aa', 'aa') === 0) {
    echo "As strings são seguramente iguais: ";
}

// strcasecmp - Binary safe case-insensitive string comparison
$var1 = "Hello";
$var2 = "hello";
if (strcasecmp($var1, $var2) == 0) {
    echo '$var1 is equal to $var2 in a case-insensitive string comparison';
}

