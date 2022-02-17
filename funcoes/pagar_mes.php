<?php 

require_once "validador_acesso.php";
require "consultas.php";
require "conexao.php";

//$dataInicio = 0;
//$dataFinal = 0;

//$dataInicio = $_POST["dataInicio"];
$dataFinal = $_POST["dataFinal"];

//echo "$dataInicio \n";
//echo "$dataFinal \n";

if($resultado){
    while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
      $compras = $row;

      //print_r($compras['data_compra']);

      if(strtotime($compras['data_compra']) <= strtotime($dataFinal)){
          //print_r("OK");
          if($compras['id_status'] == 1){
            $id = $compras['id'];
            $parcelas_paga = $compras['parcelas_paga'];
            $parcelas_paga++;
            if($compras['num_parcelas'] == $parcelas_paga){
                $sql_status = "UPDATE compras SET id_status = 2 WHERE id = $id";
                try{
                  $pdo->query($sql_status);
                }catch(PDOException $e){
                echo "ERRO: ".$e->getMessage();
                exit;
            }
            }
            //print_r($parcelas_paga);
            $sql_parcelas = "UPDATE compras SET parcelas_paga = '$parcelas_paga' WHERE id = $id";
            try{
              $pdo->query($sql_parcelas);
            }catch(PDOException $e){
            echo "ERRO: ".$e->getMessage();
            exit;
        }

          }

        } 

    }
}

$pdo = null;

header("Location: ../app_cartao/index.php");

?>