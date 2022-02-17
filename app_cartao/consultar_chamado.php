<?php 

require_once "../funcoes/validador_acesso.php"; 
require '../funcoes/consultas.php';

$total_compras = 0;
$mes_parcela = 0;
$next_parcela = 0;
$parcela = 0;
$parcela_paga = 0;
$parcelas_restantes = 0;
$total_compras1 = 0;
$mes_parcela1 = 0;
$next_parcela1 = 0;
$parcela1 = 0;
$parcela_paga1 = 0;
$parcelas_restantes1 = 0;
$total_compras2 = 0;
$mes_parcela2 = 0;
$next_parcela2 = 0;
$parcela2 = 0;
$parcela_paga2 = 0;
$parcelas_restantes2 = 0;

?>

<html>
  <head>
  <meta charset="utf-8" />
    <title>App Compras do cartão</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery.mask.min.js"></script>

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>

      <script>
        $(document).ready(function(){
          $("#Pagas").click(function(){
            $(".1").hide();
            $(".2").show();
            
            $("#totalCompras").show();
            $("#comprasDani").hide();
            $("#comprasRkl").hide();
          });
          $("#Pendentes").click(function(){
            $(".2").hide();
            $(".1").show();
            
            $("#totalCompras").show();
            $("#comprasDani").hide();
            $("#comprasRkl").hide();
          });
          $("#Todas").click(function(){
            $(".1").show();
            $(".2").show();
            $("#comprasDani").hide();
            $("#comprasRkl").hide();
            $("#totalCompras").show();
          });
          $("#rudi").click(function(){
            $(".Daniele").hide();
            $(".Rudi").show();
            $(".2").hide();
           
            $("#comprasRkl").show();
            
            $("#totalCompras").hide();
            $("#comprasDani").hide();
     
          });
          $("#daniele").click(function(){
            //$("totalCompras").hide();
            $(".Rudi").hide();
            //$(".2").hide();
            $(".Daniele").show();
            $(".2").hide();
            $("#comprasDani").show();
            $("#totalCompras").hide();
            $("#comprasRkl").hide();
            //$("#comprasRkl").style.display='block';

          });
        });
      </script>

  </head>

  <body>

  <?php include '../includes/cabecalho.php' ?>

    <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de compras
              <button id="Todas" class="btn btn-dark"> Todas </button>
              <button id="Pendentes" class="btn btn-dark"> Pendentes </button>
              <button id="Pagas" class="btn btn-dark"> Pagas </button>
              <button id="rudi" class="btn btn-dark"> Rudolfo </button>
              <button id="daniele" class="btn btn-dark"> Daniele </button>
            </div>

            <div class="card-body">

              <?php
                  /*
                  if($_SESSION['perfil_id'] == 2) {
                    //só vamos exibir o chamado, se ele foi criado pelo usuário
                    if($_SESSION['id'] != $compra_dados[0]) {
                      continue;
                    }
                  }

                  if(count($compra_dados) < 3) {
                    continue;
                  }
                  */
                

                  if($resultado){
                    while($row = $resultado->fetch(PDO::FETCH_ASSOC)){
                      $compras = $row;
                      //

                      if($compras['id_usuario'] == 1){
                        $id_user = "Rudi";
                      }

                      if($compras['id_usuario'] == 2){
                        $id_user = "Daniele";
                      }

                      if($compras['id_status'] == 1){
                        $parcelas_restantes = $compras['num_parcelas'] - $compras['parcelas_paga'];
                        $total_compras += $compras['valor_parcela'] * $parcelas_restantes;
                        $total_compras = number_format($total_compras, 2, '.', '');
                        $mes_parcela += $compras['valor_parcela'];
                        $mes_parcela = number_format($mes_parcela, 2, '.', '');
                        $parcela = $compras['num_parcelas'];
                        $parcela_paga = $compras['parcelas_paga'];
                      }
                      if(--$parcela > $parcela_paga){
                        $next_parcela += $compras['valor_parcela'];
                        $next_parcela = number_format($next_parcela, 2, '.', '');
                      }

                      if($compras['id_usuario'] == 1 && $compras['id_status'] == 1){
                        $parcelas_restantes1 = $compras['num_parcelas'] - $compras['parcelas_paga'];
                        $total_compras1 += $compras['valor_parcela'] * $parcelas_restantes1;
                        $total_compras1 = number_format($total_compras1, 2, '.', '');
                        $mes_parcela1 += $compras['valor_parcela'];
                        $mes_parcela1 = number_format($mes_parcela1, 2, '.', '');
                        $parcela1 = $compras['num_parcelas'];
                        $parcela_paga1 = $compras['parcelas_paga'];
                      }
                      if(--$parcela1 > $parcela_paga1){
                        $next_parcela1 += $compras['valor_parcela'];
                        $next_parcela1 = number_format($next_parcela1, 2, '.', '');
                      }

                      if($compras['id_usuario'] == 2 && $compras['id_status'] == 1){
                        $parcelas_restantes2 = $compras['num_parcelas'] - $compras['parcelas_paga'];
                        $total_compras2 += $compras['valor_parcela'] * $parcelas_restantes2;
                        $total_compras2 = number_format($total_compras2, 2, '.', '');
                        $mes_parcela2 += $compras['valor_parcela'];
                        $mes_parcela2 = number_format($mes_parcela2, 2, '.', '');
                        $parcela2 = $compras['num_parcelas'];
                        $parcela_paga2 = $compras['parcelas_paga'];
                      }
                      if(--$parcela2 > $parcela_paga2){
                        $next_parcela2 += $compras['valor_parcela'];
                        $next_parcela2 = number_format($next_parcela2, 2, '.', '');
                      }
                  

                ?>

                <div class="<?=$compras['id_status']?> <?=$id_user?>" class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title text-danger">Descrição: <?=$compras["descricao"]?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"> Valor: R$<?=$compras['valor']?> | Data: <?=$compras['data_compra']?> 
                    | Parcelas/Pago: <?=$compras['num_parcelas']?>/<?=$compras['parcelas_paga']?> | Valor parcelas: R$<?=$compras['valor_parcela']?> | <?=$id_user?></h6>
                    
                    <?php 
                      if($compras['id_status'] == 1){ ?>
                        <button class="btn btn-sm btn-danger mr-2" type="submit">Pendente</button>
                    
                      <?php }
                    ?>

                    <?php 
                      if($compras['id_status'] == 2){ ?>
                        <button class="btn btn-sm btn-success mr-2" type="submit">Pago</button>
                    
                      <?php }
                    ?>
                    

                    <div class="btn-group float-right" role="group" aria-label="botoes_edit">
                      <form method="post" action="../funcoes/remove_compra.php">
                        <input type="hidden" name="remover" value=<?=$compras['id']?> />
                        <button class="btn btn-lg btn-danger mr-2" type="submit">Remover</button>
                      </form>

                      <form method="post" action="abrir_chamado.php?edit=verdade">
                        <!--<form method="post" action="../funcoes/teste.php?edit=verdade">-->
                        <input type="hidden" name="id" value=<?=$compras['id']?> />
                        <input type="hidden" name="desc" value="<?=$compras["descricao"]?>"/>
                        <input type="hidden" name="valor" value=<?=$compras['valor']?> />
                        <input type="hidden" name="data" value=<?=$compras['data_compra']?> />
                        <input type="hidden" name="parcelas" value=<?=$compras['num_parcelas']?> />
                        <button class="btn btn-lg btn-info ml-2" type="submit">Editar</button>
                      </form>

                    </div>

                  </div>
                </div>
                

                    <?php  }}
                  $pdo = null;
              ?>

              <?php                    
              
              ?>

              <div class="row mt-5">
                <div class="col-4">
                  <a class="btn btn-lg btn-warning btn-block" href="index.php">Voltar</a>
                </div>
                <div class="col-4">
                  <a class="btn btn-lg btn-success btn-block" href="pagamento.php">Pagar</a>
                </div>

                <div id="totalCompras"class="card float-right" style="width: 22rem;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-danger h1">Total: R$<?php echo "$total_compras"; ?></li>
                    <li class="list-group-item text-warning h2">Mês: R$<?php echo "$mes_parcela"; ?></li>
                    <li class="list-group-item text-primary h3">Próximo mês: R$<?php echo "$next_parcela"; ?></li>
                  </ul>
                </div>
                
                <div id="comprasRkl" class="card float-right" style="width: 22rem; display:none;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-danger h1">Total: R$<?php echo "$total_compras1"; ?></li>
                    <li class="list-group-item text-warning h2">Mês: R$<?php echo "$mes_parcela1"; ?></li>
                    <li class="list-group-item text-primary h3">Próximo mês: R$<?php echo "$next_parcela1"; ?></li>
                  </ul>
                </div>

                <div id="comprasDani" class="card float-right" style="width: 22rem; display:none;">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item text-danger h1">Total: R$<?php echo "$total_compras2"; ?></li>
                    <li class="list-group-item text-warning h2">Mês: R$<?php echo "$mes_parcela2"; ?></li>
                    <li class="list-group-item text-primary h3">Próximo mês: R$<?php echo "$next_parcela2"; ?></li>
                  </ul>
                </div>
                
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>