<?php 
//Tela de Verificação de url
session_start();

if(!$_SESSION["nome"]){
    header ("Location: P_login.php");
    exit();
}


?>