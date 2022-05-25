<?php

require_once 'DB/conexao.php';

abstract class CrudRegulamento extends DB{

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