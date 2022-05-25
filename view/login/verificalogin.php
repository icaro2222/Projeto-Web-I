<?php
 require_once('../../model/db/conexao.php');
 
 if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])){
	require_once('../login/Usuario.class.php');
	$u = new Usuario();

	$listlogged = $u->logged($_SESSION['idUsuario']);
	$nivel = $listlogged['nivel'];
 }else{

	 header('location: ../../index.php');
 }