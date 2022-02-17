<?php require_once "../funcoes/validador_acesso.php"; ?>

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">

    <style>
      .card-home {
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

            <div class="card-home">
              <div class="card">
                <div class="card-header">
                  Menu
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-6 d-flex justify-content-center">
                      <a href="abrir_chamado.php?edit=falso">
                        <img src="../img/transferir.png" width="70" height="70">
                      </a>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                      <a href="consultar_chamado.php">
                        <img src="../img/consulta.png" width="70" height="70">
                      </a>

                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
  </body>
</html>