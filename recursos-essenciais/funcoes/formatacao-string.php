<?php

$curso = "PHP";
$versao = 7.4;

echo 'Curso de ' , $curso, ' versão ' , $versao;
echo "<br>";
echo 'Curso de ' . $curso . ' versão ' . $versao;
echo "<br>";
echo "Curso de $curso versão $versao";
echo "<br>";

echo sprintf("Curso de %s versão %.1f", $curso, $versao);
echo "<br>";

printf("Curso de %s versão %.1f", $curso, $versao);
echo "<br>";

$entrada = ['PHP', 7.4];

$resultado = vsprintf("Curso de %s versão %.1f", $entrada);
echo $resultado;
echo "<br>";

vprintf("Curso de %s versão %.1f", $entrada);



