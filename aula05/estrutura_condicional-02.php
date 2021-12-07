<?php

//$diadasemana = date("w");// pega dia da semana
$diadasemana = 5;//

switch ($diadasemana){
    
    case 0:
    echo "Domingo";
    break;
    
    case 1:
    echo "Segunda";
    break;
    
    case 2:
    echo "Terca";
    break;
    
    case 3:
    echo "Quarta";
    break;
    
    case 4:
    echo "Quinta";
    break;
    
    case 5:
    echo "Sexta";
    break;

    case 0:
    echo "Sabado";
    break;

    default :
    echo "Erro na data!";
}
