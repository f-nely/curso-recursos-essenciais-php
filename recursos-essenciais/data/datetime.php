<?php

$now = new DateTime();

$othorDate = new DateTime('2020-08-22');

$yesterday = new DateTime('yesterday');

$othorDate2 = DateTime::createFromFormat("d/m/Y H:i:s", "22/08/2020 00:00:00");

//var_dump($othorDate->format("d/m/Y"), $othorDate2);

function iso_para_brasil($date)
{
    $dateTime = new DateTime($date);

    return $dateTime->format("d/m/Y");
}

function brasil_para_iso($date)
{
    $dateTime = DateTime::createFromFormat("d/m/Y", $date);

    return $dateTime->format("Y-m-d");
}

var_dump(iso_para_brasil("2020-08-22"));

var_dump(brasil_para_iso("22/08/2020"));