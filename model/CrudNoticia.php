<?php

require_once('DB/conexao.php');

abstract class CrudNoticia extends DB{

    protected $tabela;
    public $idNoticia = '"idNoticia"';
    public $descricao;

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }

    public function getIdNoticia(){
        return $this->idNoticia;
    }

    public function setIdNoticia($id){
        $this->idNoticia = $id;
    }
}

?>