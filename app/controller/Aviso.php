<?php

include_once '../../model/CrudAviso.php';

class Aviso extends CrudAviso {
    protected $tabela = 'anotacoes';

    public function findAll(){
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
}


?>