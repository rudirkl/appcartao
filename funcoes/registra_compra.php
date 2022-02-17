<?php require_once "validador_acesso.php" ?>

<?php

require 'conexao.php';

$user_id = $_SESSION['idUser'];

//print_r($_POST);
if(!isset($_POST['id'])){
    $titulo = $_POST["titulo"];
    $total = preg_replace("/[^0-9,]+/i","",$_POST["total"]); // manté só números e vírgulas
    $total=str_replace(",",".",$total); // subtitui a vírgula pelo ponto final
    $parcelas = $_POST["parcelas"];
    $dataCompra = $_POST["dataCompra"];
    $valor_parcelas = $total/$parcelas;

    //print_r ($valor_parcelas);

    $sql = "INSERT INTO compras (descricao, valor, data_compra, num_parcelas, valor_parcela, parcelas_paga, id_status, id_usuario) VALUES ('$titulo', '$total', '$dataCompra', 
    '$parcelas', '$valor_parcelas', '0', '1', $user_id)";

}

if(isset($_POST['id'])){
    $id = $_POST["id"];
    $titulo = $_POST["titulo"];
    $total = preg_replace("/[^0-9,]+/i","",$_POST["total"]); // manté só números e vírgulas
    $total=str_replace(",",".",$total); // subtitui a vírgula pelo ponto final
    $parcelas = $_POST["parcelas"];
    $dataCompra = $_POST["dataCompra"];
    $valor_parcelas = $total/$parcelas;
    
    //print_r ($valor_parcelas);
    
    $sql = "UPDATE compras SET descricao = '$titulo', valor = '$total', data_compra = '$dataCompra', num_parcelas = '$parcelas', 
    valor_parcela = '$valor_parcelas', id_status = '1', id_usuario = $user_id WHERE id = $id";
    
    }

if($pdo->query($sql)){
    header("Location: ../app_cartao/index.php");
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($pdo);
}

$pdo = null;

?>