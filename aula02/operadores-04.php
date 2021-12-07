<?php

// Operadores comparação

$v1 = 30;
$v2 = 55;

$v3 = 55.0;
$v4 = 55;

echo var_dump($v1 > $v2); // operador de maior
echo "<br>";
echo var_dump($v1 < $v2); // operador de menor
echo "<br>";
echo var_dump($v1 == $v2); // operador de comparação de valor
echo "<br>";
echo var_dump($v3 === $v4); // operador de comparação de valor e tipo
echo "<br>";
echo var_dump($v3 != $v4); // operador de diferente
echo "<br>";
echo var_dump($v3 !== $v4); // operador de diferente e tipo difenrente


// novos operadores para a versao 7

$v5 = 50;
$v6 = 25;

//echo var_dump($v5 <=> $v6); // operador de diferente e tipo difenrente 
// verifica se o valor ele é maior, menor ou igual onde o retorno do valor é 1,0 -1
//echo var_dump($v5 ?? $v6); se existir o valor ele exibi a 1 varivael