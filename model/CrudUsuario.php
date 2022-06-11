<?php

require_once 'DB/conexao.php';

abstract class CrudUsuario extends DB{

    protected $tabela;
    public $idUsuario;
    public $usuario;
    public $login;
    public $num_registro;
    public $senha;
    public $peso;
    public $idade;
    public $sexo;
    public $altura;
    public $broqueado;
    public $endereco;
    public $nivel;
    
    public function setNome($nome) {
        $this->usuario = $nome;
    }
    public function getNome() {
        return $this->usuario;
    }
    
    
    public function setNumMatricula($matricula) {
        $this->num_registro= $matricula;
    }
    public function getNumMatricula() {
        return $this->num_registro;
    }
    
    
    public function setLogin($login) {
        $this->login = $login;
    }
    public function getLogin() {
        return $this->login;
    }
       
    
    public function setNivel($nivel) {
        $this->nivel = $nivel;
    }
    public function getNivel() {
        return $this->nivel;
    }
    
    
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    public function getEndereco() {
        return $this->endereco;
    }
    
    public function setSenha($senha) {
        $this->senha = $senha;
    }
    public function getSenha() {
        return $this->senha;
    }

    public function setIdUsuario($id) {
        $this->idUsuario = $id;
    }
    public function getIdUsuario() {
        return $this->idUsuario;
    }

}?>