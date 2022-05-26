<?php

require_once 'DB/conexao.php';

abstract class CrudRegulamento extends DB{

    protected $tabela;
    public $idRegulamento;
    public $descricao;

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getRegulamento(){
        return $this->idRegulamento;
    }

    public function setRegulamento($idRegulamento){
        $this->idRegulamento = $idRegulamento;
    }
}

?>