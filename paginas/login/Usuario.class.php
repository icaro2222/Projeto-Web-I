<?php
class Usuario{

    public function login($login,$senha){
        global $pdo;
        
        $sql = "SELECT * FROM usuario WHERE login = :login and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('login',$login);
        $sql->bindValue('senha',md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0 ) {
            $dado = $sql->fetch();
            $_SESSION['idUsuario']=$dado['idUsuario'];
            return true;   
        }else{
            return false;
        }
    }
    // exibir nome ou qualquer coisa
    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nivel FROM usuario WHERE idUsuario = :idUsuario";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idUsuario",$id);
        $sql->execute();
        if ($sql->rowCount()>0) {
            $array= $sql->fetch();
        }
        return $array;
    }
}
?>