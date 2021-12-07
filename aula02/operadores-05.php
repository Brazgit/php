<?php

// Operadores de inclemento 

$v = 10;

echo $v++; // o operador ++ soma +1
echo "<br>";
echo ++$v; // o inclemneto é feito antes
echo "<br>";
echo $v;
echo "<br>";
echo "------------------------------------";
echo "<br>";

// ordem de calculos 

$resultado = (10 + 3) /2;
echo $resultado;

echo "<br>";

$resultado1 = (10 + 3) /2 > 5 || 10 + 5 < 3; // && significa E // || ou um ou outro

var_dump($resultado1);

