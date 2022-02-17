<?php 

require_once "../funcoes/validador_acesso.php";
require '../funcoes/consultas.php'; 


?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

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

  </head>

  <body>

  <?php include '../includes/cabecalho.php' ?>

  <div class="container">    
      <div class="row">

        <div class="card-consultar-chamado">
          <div class="card">
            <div class="card-header">
              Consulta de compras
            </div>
            
            <div class="card-body">

            <div class="row">
                  <div class="col">
                    
                    <form method="post" action="../funcoes/pagar_mes.php">
                      
                      
                      
                      <!--
                      <div class="form-group">
                        <label>Data de início</label>
                        <input type="date" name="dataInicio" required>
                      </div>
                      -->
                      
                      <div class="form-group">
                        <label>Data final</label>
                        <input type="date" name="dataFinal" required>
                      </div>

                      <div class="row mt-5">
                        <div class="col-6">
                          <a class="btn btn-lg btn-warning btn-block" href="index.php">Voltar</a>
                        </div>

                        <div class="col-6">
                          <button class="btn btn-lg btn-info btn-block" type="submit">Pagar mês</button>
                        </div>
                      </div>
                    </form>

                </div>
              </div>

            </div>
        </div>
        </div>
        </div>
        </div>


    

  </body>
</html>