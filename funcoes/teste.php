<?php

$var = 1535.45;

if(preg_match("/[.]/", $var)){
    echo "sim";
}else{
    echo "nao";
}

echo "<br />\n";

$palavra = $_POST["desc"];

print_r($_POST["desc"]);

echo "<br />\n";

print_r($_SERVER["REQUEST_URI"]); // imprime toda a url

echo "<br />\n";
$separaigual  = explode("=", $_SERVER["REQUEST_URI"]); //separa a url do valor da variavel

print_r($separaigual); // imprime o array

echo "<br />\n";

print_r($separaigual['1']); // imprime só o valor da variavel
echo "<br />\n";

print_r($_POST);

$valor = $_POST['valor'];


if(is_int($valor)){
    echo "é inteiro";
}else{
    echo "nop";
}

?>
<html>

<body>
<form method="post" action="../funcoes/registra_compra.php">
<div >
                        <label>Total em R$</label>
                        <input name="total" type="text" id="total" value="<?=$_POST['valor']?>">
                      </div>
</form>
</body>

</html>