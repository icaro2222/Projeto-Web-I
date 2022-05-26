<?php

require_once 'DB/conexao.php';

abstract class CrudDisponibilidade extends DB{

    protected $tabela;
    public $idDisponibilidade;
    public $disponibilidade;
    public $dia;
    public $hora;
    public $livre;

    public function setNome($nome) {
        $this->disponibilidade = $nome;
    }
    public function getNome() {
        return $this->disponibilidade;
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

}?>