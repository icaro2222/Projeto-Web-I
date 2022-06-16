<?php

require_once("./model/CrudDiscente.php");

class Discente extends CrudDiscente{
    protected $tabela = 'usuario';

   
    //busca 1 item
    public function findUnit($id) {
        $id = '"idUsuario"';
        $sql = "SELECT * FROM $this->tabela WHERE $id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
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
        $sql = "INSERT INTO $this->tabela (nome, endereco) VALUES (:nome, :endereco)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
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
    public function delete($id) {
        $id = '"idUsuario"';
        $sql = "DELETE FROM $this->tabela WHERE $id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>