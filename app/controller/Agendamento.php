<?php

require_once("../../model/CrudAgendamento.php");

class Agendamento extends CrudAgendamento{
    protected $tabela = 'agendamento';
   
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE idagendamento = :id";
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
        $sql = "SELECT fkDisponibilidade FROM $this->tabela WHERE fkDiscente = :fkDiscente LIMIT 1";
        $stm = DB::prepare($sql);
        $stm->bindParam(':fkDiscente', $this->fkDiscente);
        $stm->execute();
        return $stm->fetch();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (fkTutor, fkDiscente, fkDisponibilidade) VALUES (:fkTutor, :fkDiscente, :fkDisponibilidade)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':fkTutor', $this->fkTutor);
        $stm->bindParam(':fkDiscente', $this->fkDiscente);
        $stm->bindParam(':fkDisponibilidade', $this->fkDisponibilidade);
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
        $sql = "DELETE FROM $this->tabela WHERE idagendamento = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idagendamento, PDO::PARAM_INT);
        return $stm->execute();
    }
    
    public function login($login,$senha){
        global $pdo;
        
        $sql = "SELECT * FROM agendamento WHERE login = :login and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('login',$login);
        $sql->bindValue('senha',md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0 ) {
            $dado = $sql->fetch();
            $_SESSION['idagendamento']=$dado['idagendamento'];
            return true;   
        }else{
            return false;
        }
    }
    // exibir nome ou qualquer coisa
    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nivel FROM agendamento WHERE idagendamento = :idagendamento";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idagendamento",$id);
        $sql->execute();
        if ($sql->rowCount()>0) {
            $array= $sql->fetch();
        }
        return $array;
    }
}
?>