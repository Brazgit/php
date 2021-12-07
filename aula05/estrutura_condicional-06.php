<meta charset="UTF-8">
<pre>
    
<?php

echo "<h1> Laço de Repetição WHILE</h1>";
echo "<br>";

$condição = true;

while ($condição){
    
    $numero = rand(1, 10); // sorteador de numeros
    
    if($numero === 3){
        echo " TRÊS ";
        $condição = false;
    }
    echo $numero . " - ";
}
   echo "<br>";
   echo "-------------------------------------" . "<br>";
   echo "<h1> Laço de Repetição DO WHILE</h1>";
   echo "<br>";
   
   $total = 150;
   $desc = 0.9;
   
   do{
       $total *= $desc;
   } while($total > 100);
   
   echo $total;
   
?>
</pre>