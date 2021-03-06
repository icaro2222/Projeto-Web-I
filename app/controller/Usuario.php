<?php

require_once("../../model/CrudUsuario.php");

class Usuario extends CrudUsuario{
    protected $tabela = 'usuario';

   
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE $this->idUsuario = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchAll();
    }

    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    //busca todos os itens
    public function findAllBloqueio() {
        $idD = '"idDiscente"';
        $idU = '"idUsuario"';

        $sql = "SELECT * FROM $this->tabela AS u
        INNER JOIN bloqueio AS b
        ON b.$idD = u.$idU
        WHERE b.bloqueio = 'false'";

        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    //busca todos os itens
    public function findBloqueio($idU) {
        $idD = '"idDiscente"';
        $idB = '"idBloqueio"';

        $sql = "SELECT * FROM bloqueio AS b
        WHERE b.bloqueio = 'true' AND
        $idU= b.$idD";

        $stm = DB::prepare($sql);
        $stm->execute();
        
        if ($stm->rowCount() > 0 ) {
            return false;   
        }else{
            return true;
        }
    }
    

    //busca todos os itens
    public function findAllDesbloqueio() {
        $idD = '"idDiscente"';
        $idU = '"idUsuario"';

        $sql = "SELECT * FROM $this->tabela AS u
        INNER JOIN bloqueio AS b
        ON b.$idD = u.$idU
        WHERE b.bloqueio = 'true'";

        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    

    //busca todos os itens
    public function findAllDesbloqueioKey($idd) {
        $idD = '"idDiscente"';
        $idU = '"idUsuario"';

        $sql = "SELECT * FROM $this->tabela AS u
        INNER JOIN bloqueio AS b
        ON b.$idD = u.$idU
        WHERE b.bloqueio = 'false' AND
        $idd = b.$idD";

        $stm = DB::prepare($sql);
        $stm->execute();

        if ($stm->rowCount() > 0 ) {
            return false;   
        }else{
            return true;
        }
    }
    
    //busca todos os itens
    public function findAtual() {
        $sql = "SELECT idUsuario FROM $this->tabela WHERE usuario = :usuario AND senha = :senha LIMIT 1";
        $stm = DB::prepare($sql);
        $stm->bindParam(':usuario', $this->usuario);
        $stm->bindParam(':senha', $this->senha);
        $stm->execute();
        return $stm->fetch();
    }
    
    //busca todos os itens
    public function findultimo() {
        $idu = '"idUsuario"';
        $sql = "SELECT MAX($idu) FROM $this->tabela WHERE nivel = :nivel";
        $stm = DB::prepare($sql);
        $stm->bindParam(':nivel', $this->nivel);
        $stm->execute();
        return $stm->fetch();
    }
    
    //busca senha
    public function findkey() {
        $sql = "SELECT usuario FROM $this->tabela WHERE usuario = :usuario AND senha = :senha LIMIT 1";
        $stm = DB::prepare($sql);
        $stm->bindParam(':usuario', $this->getNome());
        $stm->bindParam(':senha', $this->getSenha());
        $stm->execute();
        return $stm->fetch();
    }
    
     //faz insert   
    public function insert() {


        $sql = "SELECT * FROM $this->tabela WHERE login = :login";
        $sql = DB::prepare($sql);
        $sql->bindParam(':login', $this->login);
        $sql->execute();
        
        if($sql->rowCount() < 1){

            $sql = "INSERT INTO $this->tabela (login, usuario, num_registro, endereco, senha, nivel) 
                        VALUES (:login, :usuario, :num_registro, :endereco, :senha, :nivel)";
            $stm = DB::prepare($sql);
            $stm->bindParam(':login', $this->login);
            $stm->bindParam(':usuario', $this->usuario);
            $stm->bindParam(':num_registro', $this->num_registro);
            $stm->bindParam(':endereco', $this->endereco);
            $stm->bindParam(':senha', $this->senha);
            $stm->bindParam(':nivel', $this->nivel);
            $stm->execute();
            return self::getInstance()->lastInsertId() ;
        }else{
            return false;
        }
    }
    
    //update de itens
    public function update($id) {
        $sql = "UPDATE $this->tabela SET nome = :nome, endereco = :endereco WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':endereco', $this->endereco);
        return $stm->execute();
    }
    
//deleta  1 item
    public function delete() {
        $id = '"idUsuario"';
        // $cascade = '"CASCADE"';
        $sql = "DELETE FROM $this->tabela WHERE $id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idUsuario, PDO::PARAM_INT);
        return $stm->execute();
    }
    
    public function login($login,$senha){
        global $pdo;
        
        $sql = "SELECT * FROM usuario WHERE login = :login and senha = :senha";
        $sql = $pdo->prepare($sql);
        $sql->bindValue('login',$login);
        $sql->bindValue('senha',md5($senha));
        $sql->execute();

        if ($sql->rowCount() > 0 ) {
            $dado = $sql->fetch();
            $_SESSION['idUsuario']=$dado['idUsuario'];
            return true;   
        }else{
            return false;
        }
    }
    // exibir nome ou qualquer coisa
    public function logged($id){
        global $pdo;

        $sql = 'SELECT * FROM usuario WHERE "idUsuario" = :idUsuario';
        $sql = $pdo->prepare($sql);
        $sql->bindValue("idUsuario",$id);
        $sql->execute();
        if ($sql->rowCount()>0) {
            $dado= $sql->fetch();
            $nivel = $dado['nivel'];
        }
        return $nivel;
    }
}
?>