<?php

require_once(__DIR__."/../../model/CrudDisponibilidade.php");

class Disponibilidade extends CrudDisponibilidade{
    protected $tabela = 'disponibilidade';

   
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE $this->idDisponibilidade = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchall();
    }

    //busca json

    public function findjson() {
        // $idD = '"idDisponibilidade"';
        $sql = "SELECT * FROM events";
        $stm = DB::prepare($sql);
        // $stm->bindParam(':id', $this->idDisponibilidade, PDO::PARAM_INT);
        $stm->execute();
        $f = $stm->fetchall(\PDO::FETCH_ASSOC);
        return json_encode($f);
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
        
        $hora1 = '"horaInicial"';
        $hora2 = '"horaFinal"';
        $sql = "SELECT * FROM $this->tabela WHERE dia = :date AND (( :horaInicial BETWEEN $hora1 AND $hora2) OR ( :horaFinal BETWEEN $hora1 AND $hora2))";
        $stm = DB::prepare($sql);
        $stm->bindParam(':date', $this->dia);
        $stm->bindParam(':horaInicial', $this->horaInicial);
        $stm->bindParam(':horaFinal', $this->horaFinal);
        $stm->execute();
        return $stm->fetch();
    }
    
     //faz insert   
    public function insert() {
        $horaI = '"horaInicial"';
        $horaF = '"horaFinal"';
        $idT  = '"idTutor"';

        $sql = "INSERT INTO $this->tabela (dia, $horaI, $horaF, $idT, livre) VALUES (:dia, :horaInicial, :horaFinal, :idTutor, :livre)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':dia', $this->dia);
        $stm->bindParam(':horaInicial', $this->horaInicial);
        $stm->bindParam(':horaFinal', $this->horaFinal);
        $stm->bindParam(':idTutor', $this->idTutor, PDO::PARAM_INT);
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
        $sql = "DELETE FROM $this->tabela WHERE $this->idDisponibilidade = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->iddisponibilidade, PDO::PARAM_INT);
        return $stm->execute();
    }
}
?>