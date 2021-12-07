<meta charset="UTF-8">
<?php

// Laço de repetição FOR serve como contador onde podemos inclementar ou declementar

// 1= Inicia
// 2= Enquanto for menor ou igual
// 3= Soma mais 1 ou diminui
echo "<h1> Laço de Repetição FOR</h1>";
echo "<br>";
for ($i=0; $i<=10; $i++){
    echo $i;
}
echo "<br>";
echo "--------------";
echo "<br>";

for ($i=0; $i<=100; $i+=2){
    echo $i . "-";
}

echo "<br>";
echo "--------------";
echo "<br>";

for ($i=0; $i<=100; $i+=2){
    if($i >= 20 && $i <=80) continue;
    
    echo $i . "-";
}

echo "<br>";
echo "--------------";
echo "<br>";

for ($i=0; $i<=100; $i+=2){
    if($i === 90) break;
    echo $i . "-";
}

echo "<br>";
echo "--------------";
echo "<br>";

// loop infinito
//for ($i=0; $i <10; $i--){
    //echo $i . "-";
//}
echo "<br>";
echo "--------------";
echo "<br>";

$ano = 2021;

echo "<select>";
for($i=$ano; $i >$ano-100; $i--){
    echo "<option value='$i'>$i<option>";
}
echo "</select>";