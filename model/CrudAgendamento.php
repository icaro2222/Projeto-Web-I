<?php

require_once('DB/conexao.php');

abstract class CrudAgendamento extends DB{

    protected $tabela;
    public $idAgendamento = '"idAgendamento"';
    public $agendamento;
    public $fkTutor = '"fkTutor"';
    public $fkDiscente = '"fkDiscente';
    public $fkDisponibilidade = '"fkDisponibilidade"';

    public function setNome($nome) {
        $this->agendamento = $nome;
    }
    public function getNome() {
        return $this->agendamento;
    }
    
    
    public function setDia($dia) {
        $this->dia = $dia;
    }
    public function getDia() {
        return $this->dia;
    }
       
    
    public function setHora($hora) {
        $this->hora = $hora;
    }
    public function getHora() {
        return $this->hora;
    }

    
    public function setLivre($livre) {
        $this->livre = $livre;
    }
    public function getLivre() {
        return $this->livre;
    }
}
?>