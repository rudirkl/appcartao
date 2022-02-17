<?php 

$host = "localhost";
$user = "root";
$passwd = "";
$db = "app_cartao";

global $pdo;

try{
    
    $pdo = new PDO("mysql:dbname=".$db."; host=".$host, $user, $passwd);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "ERRO: ".$e->getMessage();
    exit;
}


?>