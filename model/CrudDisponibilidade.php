<?php

require_once 'DB/conexao.php';

abstract class CrudDisponibilidade extends DB{

    protected $tabela;
    public $idDisponibilidade;
    public $idTutor;
    public $dia;
    public $horaInicial;
    public $horaFinal;
    public $livre;

    public function setIdTutor($idTutor) {
        $this->idTutor = $idTutor;
    }
    public function getIdTutor() {
        return $this->idTutor;
    }
    
    
    public function setDia($dia) {
        $this->dia = $dia;
    }
    public function getDia() {
        return $this->dia;
    }
       
    
    public function setHoraInicial($hora) {
        $this->horaInicial = $hora;
    }
    public function getHoraInicial() {
        return $this->horaInicial;
    }

    
       
    
    public function setHoraFinal($hora) {
        $this->horaFinal = $hora;
    }
    public function getHoraFinal() {
        return $this->horaFinal;
    }

    
    public function setLivre($livre) {
        $this->livre = $livre;
    }
    public function getLivre() {
        return $this->livre;
    }

}?>