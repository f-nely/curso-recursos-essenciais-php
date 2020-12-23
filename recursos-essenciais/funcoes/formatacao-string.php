<?php

$curso = "PHP";
$versao = 7.4;

echo 'Curso de ' , $curso, ' versão ' , $versao;
echo "<br>";
echo 'Curso de ' . $curso . ' versão ' . $versao;
echo "<br>";
echo "Curso de $curso versão $versao";
echo "<br>";

$padrao = "Curso de %s versão %.1f";
echo sprintf($padrao, $curso, $versao);
echo "<br>";

printf("Curso de %s versão %.1f", $curso, $versao);
echo "<br>";

$entrada = ['PHP', 7.4];

$resultado = vsprintf($padrao, $entrada);
echo $resultado;
echo "<br>";

vprintf("Curso de %s versão %.1f", $entrada);



