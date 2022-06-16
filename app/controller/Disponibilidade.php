<?php

require_once("../../model/CrudDisponibilidade.php");

class Disponibilidade extends CrudDisponibilidade{
    protected $tabela = 'disponibilidade';

   
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE idDisponibilidade = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchall();
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
        $sql = "SELECT * FROM $this->tabela WHERE dia = :date AND (:hora BETWEEN horaInicial AND horaFinal) LIMIT 1";
        $stm = DB::prepare($sql);
        $stm->bindParam(':date', $this->dia);
        $stm->bindParam(':hora', $this->horaInicial);
        $stm->execute();
        return $stm->fetch();
    }
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (dia, horaInicial, horaFinal, idTutor, livre) VALUES (:dia, :horaInicial, :horaFinal, :idTutor, :livre)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':dia', $this->dia);
        $stm->bindParam(':horaInicial', $this->horaInicial);
        $stm->bindParam(':horaFinal', $this->horaFinal);
        $stm->bindParam(':idTutor', $this->idTutor);
        $stm->bindParam(':livre', $this->livre);
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
        $sql = "DELETE FROM $this->tabela WHERE idDisponibilidade = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->iddisponibilidade, PDO::PARAM_INT);
        return $stm->execute();
    }
    
    public function login($login,$senha){
        global $pdo;
        
        $sql = "SELECT * FROM disDonibilidade WHERE login = :login and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('login',$login);
        $sql->bindValue('senha',md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0 ) {
            $dado = $sql->fetch();
            $_SESSION['idDisponibilidade']=$dado['idDisponibilidade'];
            return true;   
        }else{
            return false;
        }
    }
    // exibir nome ou qualquer coisa
    public function logged($id){
        global $pdo;

        $array = array();

        $sql = "SELECT nivel FROM disponibilidade WHERE iddisponibilidade = :iddisponibilidade";
        $sql = $pdo->prepare($sql);
        $sql->bindValue("iddisponibilidade",$id);
        $sql->execute();
        if ($sql->rowCount()>0) {
            $array= $sql->fetch();
        }
        return $array;
    }
}
?>