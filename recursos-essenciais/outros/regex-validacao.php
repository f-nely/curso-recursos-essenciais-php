<?php

$email = "nelly.nf54@gmail.com";

if (preg_match("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $email) === 1) {
    echo "válido";
} else {
    echo "inválido";
}

$emails = ["nelly.nf54@gmail.com", "nely@gmail.com", "fnelly.com"];

$validos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $emails);

$invalidos = preg_grep("/^[a-z0-9_.]+@[a-z0-9]+\.[a-z]+(\.[a-z]+)?/i", $emails, PREG_GREP_INVERT);

var_dump($validos, $invalidos);