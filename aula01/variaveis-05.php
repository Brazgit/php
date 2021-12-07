<?php

// Escopo de variáveis

$nome = "Joao";

function teste(){
    
    global $nome; // chama a varivel para dentro da função
    echo $nome;
}

function teste2(){
    
    $nome = "Braz";
    echo "<p>" . $nome . " no teste 2!";
}
teste();
teste2();
?>
