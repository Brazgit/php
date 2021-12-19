<meta charset="UTF-8">
<pre>
<?php

echo "<h1>Apredendo Sessão - 03</h1>";
echo "<br>";

require_once("./sessao-01.php");

//session_unset($_SESSION['nome']);

session_destroy();
/*
No exemplo-02.php criado nesta aula, os professores mostram a função session_unset($_SESSION['nome'])
Entretanto, isso pode gerar um erro em seu código pois essa função não espera parâmetros. Ela libera todas as variáveis de sessão
Para excluir uma variável específica, devemos executar unset($_SESSION['nome'])
Bons estudos a todos :)

*/
?>
</pre>