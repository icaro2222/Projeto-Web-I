<?php
if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    
    require_once('../../db/conexao.php');
    require_once('Usuario.class.php');

    $u = new Usuario();
    
    $login = $_POST['login'];
    $senha = $_POST['senha'];

  if($u->login($login,$senha)==true){
      if(isset($_SESSION['idUsuario'])){

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