<?php

require_once 'DB/conexao.php';

abstract class CrudDiscente extends DB{

    protected $tabela;
    public $usuario;
    public $senha;
    public $endereco;
    
    public function setNome($nome) {
        $this->usuario = $nome;
    }
    public function getNome() {
        return $this->usuario;
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
}?>