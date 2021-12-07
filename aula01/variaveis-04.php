<?php

// Variáveis Predefinidas / arrays super globais

//$nome = (int)$_GET["a"]; // leva a varivel na url exibindo o valor - modelo inteiro
$nome = $_GET["a"]; // leva a varivel na url exibindo o valor - modelo string

// no link de pesquisa primeiro vem url e depois são tudo variaveis (paramentros)

//var_dump($nome);

//-------------------------------------

//$ip = $_SERVER["REMOTE_ADDR"]; // busca o IP da maquina

$ip = $_SERVER["SCRIPT_NAME"]; // busca o caminho do arquivo

$ip;


