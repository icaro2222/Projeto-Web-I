<?php
session_start();
include('model/db/conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('location:index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$senha = md5($senha);

$query = "select usuario from usuario where usuario = '{$usuario}'";
$result = mysqli_query($conexao,$query);
$row = mysqli_num_rows($result);

if(1==1){
    $_SESSION['usuario']= '$usuario';
    header('location:view/Discente/DisceTela1.php');
    exit();
}else{
    $_SESSION['nao_autenticado']=true;
    header('location:index.php');
    exit();
}