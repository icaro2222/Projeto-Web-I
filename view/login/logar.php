<?php
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    
    require_once('../../model/db/conexao.php');
    require_once('../../app/controller/Usuario.php');

    $usuario = new Usuario();
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

  if($usuario->login($login,$senha)==true){
      if(isset($_SESSION['idUsuario'])){
        $usuario->findkey();
          header('Location: ../home/dashboard.php');

      }else{
      header('Location: ../../index.php');
      }
  }else{
    header('Location: ../../index.php');
  }

}else{
    header('Location: ../../index.php');
}
?>