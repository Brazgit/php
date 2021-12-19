<meta charset="UTF-8">
<pre>
<?php

echo "<h1>Apredendo Array (JSON) - 02</h1>";
echo "<br>";

$json = '[{"nome":"Joao","idade":20},{"nome":"Glaucio","idade":25}]';

$data = json_decode($json, true);

var_dump($data);
?>
</pre>