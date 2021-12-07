<meta charset="UTF-8">
<?php

$frase = "A repetição é mãe da rentenção.";
$palavra = "mãe";

$resul = strpos($frase, $palavra); // função mostra a posicao do nome

$texto = substr($frase, 0, $resul); // tras todo o texto ate a posição da $resul
var_dump($texto);

echo "<br>";
echo "--------------------------";
echo "<br>";

$texto2 = substr($frase, $resul + strlen($palavra), strlen($frase));// tras todo o texto depois a posição da $resul

// strlen retorna o tamanho da string

var_dump($texto2);

echo "<br>";
echo "--------------------------";
echo "<br>";
