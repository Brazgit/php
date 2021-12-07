<meta charset="UTF-8">
<pre>
<form>
    <p>Nome: <input type="text" name="nome"> Data: <input type="date" name="nascimento"> <input type="submit" value="Conluir"></p>
    
</form>
    
<?php

echo "<h1> Laço de Repetição FOREACH 2</h1>";
echo "<br>";

// 1 - retorna o metodo do formulario
// 2 - retorna o name do input no formulario
// 3 - retorna o value do campo formulario

if(isset($_GET)){ // verifica se é verdadeiro
    
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: " . $key . "<br>";
        echo "Valor do campo: " . $value . "<br>";
        echo "-------------------------------------" . "<br>";
    }
}

?>
</pre>