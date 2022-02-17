<?php 

require_once "validador_acesso.php"; 
require 'conexao.php';

  $sql = "SELECT * FROM compras";
  $resultado = $pdo->query($sql);

  $sql1 = "SELECT * FROM usuario";
  $resultado1 = $pdo->query($sql1);

?>