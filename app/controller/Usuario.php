<?php

require_once("../../model/CrudUsuario.php");

class Usuario extends CrudUsuario{
    protected $tabela = 'usuario';

   
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE $this->idUsuario = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    //busca todos os itens
    public function findAtual() {
        $sql = "SELECT idUsuario FROM $this->tabela WHERE usuario = :usuario AND senha = :senha LIMIT 1";
        $stm = DB::prepare($sql);
        $stm->bindParam(':usuario', $this->usuario);
        $stm->bindParam(':senha', $this->senha);
        $stm->execute();
        return $stm->fetch();
    }
    
    //busca senha
    public function findkey() {
        $sql = "SELECT usuario FROM $this->tabela WHERE usuario = :usuario AND senha = :senha LIMIT 1";
        $stm = DB::prepare($sql);
        $stm->bindParam(':usuario', $this->getNome());
        $stm->bindParam(':senha', $this->getSenha());
        $stm->execute();
        return $stm->fetch();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (login, usuario, num_registro, endereco, senha, nivel) 
                    VALUES (:login, :usuario, :num_registro, :endereco, :senha, :nivel)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':login', $this->login);
        $stm->bindParam(':usuario', $this->usuario);
        $stm->bindParam(':num_registro', $this->num_registro);
        $stm->bindParam(':endereco', $this->endereco);
        $stm->bindParam(':senha', $this->senha);
        $stm->bindParam(':nivel', $this->nivel);
        return $stm->execute();
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete() {
        $id = '"idUsuario"';
        $sql = "DELETE FROM $this->tabela WHERE $id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idUsuario, PDO::PARAM_INT);
        return $stm->execute();
    }
    
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

        $sql = 'SELECT * FROM usuario WHERE "idUsuario" = :idUsuario';
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idUsuario",$id);
        $sql->execute();
        if ($sql->rowCount()>0) {
            $dado= $sql->fetch();
            $nivel = $dado['nivel'];
        }
        return $nivel;
    }
}
?>