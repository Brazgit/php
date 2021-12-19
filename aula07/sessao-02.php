<meta charset="UTF-8">
<pre>
<?php

echo "<h1>Apredendo Sessão - 02</h1>";
echo "<br>";

require_once("./sessao-01.php");

$sessao = $_SESSION["nome"] = "Joao Braz";

echo $sessao;

?>
</pre>