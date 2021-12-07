<?php

$nome = "joao braz";

echo strtoupper($nome); // coloca a string em maiuscula
echo "<br>";
echo strtolower($nome); // coloca a string em minuscula
echo "<br>";
echo ucwords($nome); // coloca a 1 letra de cada palavra maiuscula
echo "<br>";
echo ucfirst($nome); // coloca a 1 letra da palavra maiuscula
echo "<br>";
echo str_replace("o", "0",$nome); //  substitui o valor da string por outro valor
