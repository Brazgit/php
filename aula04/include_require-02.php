<?php

//include './include_require-01.php'; // funciona mesmo se houver algum erro
require './include_require-01.php'; // obriga o arquivo estaja funcionando 100%

include_once './include_require-01.php'; // tras o arquivo apenas uma vez e funciona mesmo se houver algum erro
require_once './include_require-01.php'; // tras o arquivo apenas uma vez e obriga o arquivo estaja funcionando 100%


$soma = somar(15,10);

echo $soma;

