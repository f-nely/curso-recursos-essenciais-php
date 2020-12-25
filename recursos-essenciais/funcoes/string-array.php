<?php

// explode - transforma uma string em um array
$cursos = explode(", ", "PHP, C#, Java, Flutter");

var_dump($cursos);

// implode - transforma array em string
$cursosString = implode(" - ", $cursos);

var_dump($cursosString);