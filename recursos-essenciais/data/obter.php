<?php

// date_default_timezone_set('America/Sao_Paulo');

// $tomorrow = time() + (60 * 60 *24);
/*
 * strtotime - interpreta qualquer descrição de
 * data/hora em texto em inglês em timestamp Unix
 */
$tomorrow = strtotime("+1 day");

$data = date("d/m/Y H:i:", $tomorrow);

//var_dump($data);

// var_dump(date('e'), date('P'));

//var_dump(time());

function formata_data_para_br($data)
{
    $timestamp = strtotime($data);

    return date("d/m/Y", $timestamp);
}

echo formata_data_para_br('2020-12-31');