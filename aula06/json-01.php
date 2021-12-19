<meta charset="UTF-8">
<pre>
<?php

echo "<h1>Apredendo Array (JSON) - 01</h1>";
echo "<br>";

$pessoas = array();

array_push($pessoas, array(

    'nome'=>'Joao',
    'idade'=>20

));

array_push($pessoas, array(

    'nome'=>'Glaucio',
    'idade'=>25

));

echo json_encode($pessoas);


?>
</pre>