<html>
  <head>
    <meta charset="utf-8" />
    <title>App Compras Cartão</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="img/cartao.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
        App Compras Cartão
      </a>
    </nav>

    <div class="container">    
        <div class="row">

           <div class="card-login">
              <div class="card">
                <div class="card-header">
                  Login
                </div>
                <div class="card-body">
                  <form action="funcoes/valida_login.php" method="post">
                    <div class="form-group">
                      <input name="usuario" type="text" class="form-control" placeholder="Usuario">
                    </div>
                    <div class="form-group">
                      <input name="senha" type="password" class="form-control" placeholder="Senha">
                    </div>

                    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                      <div class="text-danger">
                        Usuário ou senha inválido(s)
                      </div>

                    <?php } ?>

                    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>

                      <div class="text-danger">
                        Faça login antes de acessar as páginas protegidas
                      </div>

                    <?php } ?>

                    <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                  </form>
                </div>
              </div>
            </div>
        </div>
    </div>
  </body>
</html>