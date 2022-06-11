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

    public function getIdRegulamento(){
        return $this->idRegulamento;
    }

    public function setIdegulamento($idRegulamento){
        $this->idRegulamento = $idRegulamento;
    }
}

?>