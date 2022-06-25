<?php

require_once('DB/conexao.php');

abstract class ModelBloqueio extends DB{

    protected $tabela;
    public $idBloqueio;
    public $idTutor;
    public $idDiscente;
    public $tempo;
    public $bloqueio = true;

    public function gettempo(){
        return $this->tempo;
    }

    public function settempo($tempo){
        $this->tempo = $tempo;
    }

    public function getbloqueio(){
        return $this->bloqueio;
    }

    public function setbloqueio($id){
        $this->bloqueio = $id;
    }
}

?>