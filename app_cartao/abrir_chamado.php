<?php require_once "../funcoes/validador_acesso.php"; 
   
    
    $url  = explode("=", $_SERVER["REQUEST_URI"]);
    $url = $url['1'];
    //print_r($url);
    
  ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Compras do cartão</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <script type="text/javascript" src="../jquery/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../jquery/jquery.mask.min.js"></script>
    <script type="text/javascript">
        
        $(document).ready(function(){
           $("#total").mask("999.999.999,99", {reverse: true}); 
        });
        
    </script>
      
    <style>
      .card-abrir-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>

  </head>

  <body>

    <?php include '../includes/cabecalho.php' ?>

    <?php 

    if ($url == "falso"){
      ?>

      <div class="container">    
        <div class="row">

          <div class="card-abrir-chamado">
            <div class="card">
              <div class="card-header">
                Compra no cartão
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    
                    <form method="post" action="../funcoes/registra_compra.php">
                      <div class="form-group">
                        <label>Descrição</label>
                        <input name="titulo" type="text" class="form-control" placeholder="Descrição da compra" required>
                      </div>
                        
                      <div class="form-group">
                        <label>Total em R$</label>
                        <input name="total" type="text" class="form-control" id="total" required>
                      </div>
                      
                      <div class="form-group">
                        <label>Parcelas</label>
                        <select name="parcelas" class="form-control" required>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>Data de compra</label>
                        <input id="date" type="date" name="dataCompra" required>
                      </div>
                      <!--  
                      <div class="form-group">
                        <label>Data de registro</label>
                        <input id="date" type="date" name="dataRegistro">
                      </div>-->

                      <div class="row mt-5">
                        <div class="col-6">
                          <a class="btn btn-lg btn-warning btn-block" href="index.php">Voltar</a>
                        </div>

                        <div class="col-6">
                          <button class="btn btn-lg btn-info btn-block" type="submit">Registrar</button>
                        </div>
                      </div>
                    </form>
              <?php }

           if ($url == "verdade"){

            
              if(preg_match("/[^.]/", $_POST['valor'])){
                $valor = $_POST['valor']."00";
              }

              if(preg_match("/[.]/", $_POST['valor'])){
                $valor=str_replace(".","",$_POST['valor']);
   }
      ?>

      <div class="container">    
        <div class="row">

          <div class="card-abrir-chamado">
            <div class="card">
              <div class="card-header">
                Compra no cartão
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    
                    <form method="post" action="../funcoes/registra_compra.php">
                      <div class="form-group">
                        <label>Descrição</label>
                        <input name="titulo" type="text" class="form-control" value="<?=$_POST['desc']?>" required>
                      </div>
                     

                      <div class="form-group">
                        <label>Total em R$</label>
                        <input name="total" type="text" class="form-control" id="total" value="<?=$valor?>" required>
                      </div>
                      
                      <div class="form-group">
                        <label>Parcelas</label>
                        <select name="parcelas" class="form-control" required>
                          <option><?=$_POST['parcelas']?></option>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                          <option>5</option>
                          <option>6</option>
                          <option>7</option>
                          <option>8</option>
                          <option>9</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        
                        </select>
                      </div>
                      
                      <div class="form-group">
                        <label>Data de compra</label>
                        <input id="date" type="date" name="dataCompra" value="<?=$_POST['data']?>" required>
                      </div>
                      <!--  
                      <div class="form-group">
                        <label>Data de registro</label>
                        <input id="date" type="date" name="dataRegistro">
                      </div>-->

                      <div class="row mt-5">
                        <div class="col-6">
                          <a class="btn btn-lg btn-warning btn-block" href="index.php">Voltar</a>
                        </div>

                        <div class="col-6">
                          <input type="hidden" name="id" value="<?=$_POST['id']?>">
                          <button class="btn btn-lg btn-info btn-block" type="submit">Registrar</button>
                        </div>
                      </div>
                    </form>

           <?php } ?>

                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      </div>   
  </body>
</html>