<?php

//ini_set('precision', 3);

$n1 = 10.23;
$n2 = .23;
$n3 = 75e3; //75e+3 75 * 10³ 75000
$n4 = 75e-3; // 75 * 10^-3

var_dump($n1, $n2, $n3,$n4);

var_dump((.1 + .7) * 10);

var_dump(1_000_000); // para melhorar a leitura. a partir do PHP 7.4.0

var_dump(75_000.98);