<?php
error_reporting(E_ALL);
ini_set("display_erros",1);
 require_once('../../model/DB/conexao2.php');
 
 if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
	require_once('../../app/controller/Usuario.php');
	$usuario = new Usuario();

	$nivel = $usuario->logged($_SESSION['idUsuario']);
	
 }else{

	 header('location: ../../index.php');
 }