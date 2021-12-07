<meta charset="UTF-8">
<?php

$qualsuaidade = 100;

$idade1 = 12;
$idade2 = 18;
$idade3 = 65;

if($qualsuaidade < $idade1){
    echo "Criança";
} else if($qualsuaidade < $idade2){
    echo "Adolecesnte";
} else if($qualsuaidade < $idade3){
    echo "Adulto";
} else{
    echo "Idoso";
}
echo "<br>";
echo "--------------------------";
echo "<br>";
echo ($qualsuaidade < $idade3) ? "Menor de Idade" : "Maior de Idade"; // if reduzido
