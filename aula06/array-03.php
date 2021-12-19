<meta charset="UTF-8">
<pre>
<?php

echo "<h1>Apredendo Array - 03</h1>";
echo "<br>";

$pessoas = array();

array_push($pessoas, array(

    'nome'=>'João',
    'idade'=>20

));

array_push($pessoas, array(

    'nome'=>'Glaucio',
    'idade'=>25

));

print_r($pessoas[1]['nome']);


?>
</pre>