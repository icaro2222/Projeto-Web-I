<?php

require_once 'db/conexao.php';

abstract class CrudAviso extends DB{

    protected $tabela;
    public $descricao;

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
}

?>