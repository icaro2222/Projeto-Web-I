<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

require_once('./../../app/controller/Usuario.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location:index.php');
    exit();
}

$usuario = new Usuario;
$usuario->setNome($_POST['usuario']);
$usuario->setSenha($_POST['senha']);

$row = $usuario->findkey();

if($row>0){
    $_SESSION['usuario']= $usuario;
    header('location:./../Discente/DisceTela1.php');
    exit();
}else{
    $_SESSION['nao_autenticado']=true;
    header('location:index.php');
    exit();
}