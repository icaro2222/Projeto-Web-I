<?php

require_once('../../model/ModelBloqueio.php');

class Bloqueio extends ModelBloqueio {
    protected $tabela = 'bloqueio';

   
    //busca 1 item
    public function findUnit() {
        $idD = '"idDiscente"';
        $idT = '"idTutor"';

        $sql = "SELECT bloqueio FROM $this->tabela 
        WHERE  $idD = :idd AND $idT = :idt 
        AND bloqueio = :bloqueio";
        
        $stm = DB::prepare($sql);
        $stm->bindParam(':idd', $this->idDiscente, PDO::PARAM_INT);
        $stm->bindParam(':idt', $this->idTutor, PDO::PARAM_INT);
        $stm->bindParam(':bloqueio', $this->bloqueio);
        $stm->execute();
        if ($stm->rowCount() > 0) {
            return true;
        }else{
            return false;
        }
    }
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
     //faz insert   
    public function insert() {
        $idD = '"idDiscente"';
        $idT = '"idTutor"';
        $tempo = '"tempo"';
        $sql = "INSERT INTO $this->tabela ($idD, $idT, $tempo, bloqueio) 
        VALUES (:idDiscente, :idTutor, :tempo, 'true')";
        $stm = DB::prepare($sql);
        $stm->bindParam(':idDiscente', $this->idDiscente);
        $stm->bindParam(':idTutor', $this->idTutor);
        $stm->bindParam(':tempo', $this->tempo);
        return $stm->execute();
    }
    
    //update de itens
    public function update() {
        $idD = '"idDiscente"';
        $idT = '"idTutor"';
        $tempo = '"tempo"';

        $idD = '"idDiscente"';
        $idT = '"idTutor"';
        $sql = "SELECT bloqueio FROM $this->tabela 
        WHERE  $idD = :idd"; 
        // AND $idT = :idt 
        $stm = DB::prepare($sql);
        $stm->bindParam(':idd', $this->idDiscente, PDO::PARAM_INT);
        // $stm->bindParam(':idt', $this->idTutor, PDO::PARAM_INT);
        $stm->execute();
        
        if ($stm->rowCount() > 0) {
            $sql = "UPDATE $this->tabela 
            SET bloqueio = :bloqueio 
            WHERE $idD = :idd ";
            // AND $idT = :idt"
    
            $stm = DB::prepare($sql);
            $stm->bindParam(':idd', $this->idDiscente, PDO::PARAM_INT);
            // $stm->bindParam(':idt', $this->idTutor, PDO::PARAM_INT);
            $stm->bindParam(':bloqueio', $this->bloqueio);
            return $stm->execute();
        }else{
            return $this->insert();
        }

    }

    //update de itens
    public function desbloqueiarDiscente() {
        $idD = '"idDiscente"';
        $idT = '"idTutor"';
        $tempo = '"tempo"';

        $sql = "UPDATE $this->tabela 
        SET bloqueio = :bloqueio 
        WHERE $idD = :idd";

        $stm = DB::prepare($sql);
        $stm->bindParam(':idd', $this->idDiscente, PDO::PARAM_INT);
        $stm->bindParam(':bloqueio', $this->bloqueio);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete() {
        $id = '"idNoticia"';
        $sql = "DELETE FROM $this->tabela WHERE $id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idNoticia, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}
?>