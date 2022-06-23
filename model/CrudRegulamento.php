<?php

require_once('DB/conexao.php');

abstract class CrudRegulamento extends DB{

    protected $tabela;
    public $idRegulamento = '"idRegulamento"';
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

    public function setIdRegulamento($idRegulamento){
        $this->idRegulamento = $idRegulamento;
    }
}

?>