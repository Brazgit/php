<?php

// ---------------- Tipos Basicos

$nome = "Joao"; // tipo string
$site = "www.abraz.adv.br"; // tipo string

$ano = 2021; // tipo numero
$salario = 5500.99; // tipo flutunate
$bloqueado = false; // tipo boleano

// ---------------- Tipos compostos / Objetos

// tipo array
$frutas = array("abacaxi","laranja","manga");

//echo $frutas[2];

echo "<br/>";

//$nascimento = new DateTime(); // tipo class/objetos

//var_dump($nascimento);

// ---------------- Tipos Especiais

$arquivo = fopen("variaveis-03.php","r");

//var_dump($arquivo);

$nulo = NULL; // ausencia de valor
$vazio = ""; // foi iniciado mais nao tem informação