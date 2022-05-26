<?php

include_once '../../model/CrudNoticia.php';

class Noticia extends CrudNoticia {
    protected $tabela = 'noticia';

   
      
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
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
    
     //faz insert   
    public function insert() {
        $sql = "INSERT INTO $this->tabela (descricao) VALUES (:descricao)";
        $stm = DB::prepare($sql);
        $stm->bindParam(':descricao', $this->descricao);
        return $stm->execute();
    }
    
    //update de itens
    public function update() {
        $sql = "UPDATE $this->tabela SET descricao = :descricao WHERE idNoticia = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idNoticia, PDO::PARAM_INT);
        $stm->bindParam(':descricao', $this->descricao);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete() {
        $sql = "DELETE FROM $this->tabela WHERE idNoticia = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idNoticia, PDO::PARAM_INT);
        return $stm->execute();
    }
    
}


?>