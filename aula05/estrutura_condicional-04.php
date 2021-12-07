<meta charset="UTF-8">
<pre>
<?php

echo "<h1> Laço de Repetição FOREACH</h1>";
echo "<br>";

$meses = array("Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
               "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro");

// 1 - array fica no 1 campo onde deve percorrer 
// 2 - retorno do array

foreach ($meses as $index => $mes){
    
    echo "Indice: " . $index . "<br>";
    echo "O mês é: " . $mes . "<br>"."<br>";
}
?>
</pre>