<?php
 require_once('../../model/db/conexao.php');
 
 if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
	require_once('../../app/controller/Usuario.php');
	$usuario = new Usuario();

	$listlogged = $usuario->logged($_SESSION['idUsuario']);
	$nivel = $listlogged['nivel'];
 }else{

	 header('location: ../../index.php');
 }