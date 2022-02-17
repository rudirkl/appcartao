<?php

session_start();

class Usuario{
    
    public function login($user, $key){
        global $pdo;
        
        //echo $user." e ".md5($key) ;
        
        $sql = "SELECT * FROM usuario WHERE nome = :nome AND senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("nome", $user);
        $sql->bindValue("senha", md5($key));
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $dado = $sql->fetch();
            //echo "</br>".$dado['id'];
            $_SESSION['idUser'] = $dado['id'];
            
            return true;   
        }
    }
}

$usuario_autenticado = false;
    //print_r($_POST);
if(isset($_POST['usuario']) && !empty($_POST['usuario']) && isset($_POST['senha']) && !empty($_POST['senha'])){

    require 'conexao.php';
    
    $u = new Usuario();
    
    $login = addslashes($_POST['usuario']);
    $senha = addslashes($_POST['senha']);
    
    if($u->login($login, $senha) == true){
        
        //echo "deu";
        if(isset($_SESSION['idUser'])){
            //echo "deu";
            $_SESSION['autenticado'] = 'SIM';
            header("Location: ../app_cartao/index.php");
        }else{
            //echo "deu";
            $_SESSION['autenticado'] = 'NAO';
            header("Location: ../index.php?login=erro");
        }
    
}else{
    
    $_SESSION['autenticado'] = 'NAO';
    header("Location: ../index.php?login=erro");}
}
?>