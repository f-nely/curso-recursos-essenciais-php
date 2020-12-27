<?php

$rasmus = new DateTime("2020-11-26");
$james = new DateTime("2020-01-23");

$intervalo = $james->diff($rasmus);

var_dump($intervalo->format("%m meses, %d dias"));

$james->add(new DateInterval("P10M3D"));

var_dump($james);

$james->sub(new DateInterval("P20D"));

var_dump($james);







