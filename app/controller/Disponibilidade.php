<?php

require_once(__DIR__."/../../model/CrudDisponibilidade.php");

class Disponibilidade extends CrudDisponibilidade{
    protected $tabela = 'disponibilidade';

   
    //busca 1 item
    public function findUnit($id) {
        $sql = "SELECT * FROM $this->tabela WHERE $this->idDisponibilidade = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetchall();
    }

    //busca json

    public function findjson() {
        $end = '"end"';
        $date = date('Y-m-d H:m:s');
        $date = "CAST('$date' AS date)";
        $sql = "SELECT * FROM events WHERE $end >= $date ";
        $stm = DB::prepare($sql);
        $stm->execute();
        $f = $stm->fetchall(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
    

    //busca json

    public function findjsonkey() {
        $idD = '"idDisponibilidade"';
        $idDisc = '"fkDiscente"';
        $idF = '"fkDisponibilidade"';
        $end = '"end"';
        $date = date('Y-m-d H:m:s');
        $date = "CAST('$date' AS date)";

        $sql = "SELECT e.* FROM events e
        INNER JOIN disponibilidade d
        ON d.fkevents = e.id
        JOIN agendamento a
        ON a.$idF = d.$idD
        WHERE a.$idDisc = :id AND 
        $end >= $date";

        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idDisponibilidade, PDO::PARAM_INT);
        $stm->execute();
        $f = $stm->fetchall(\PDO::FETCH_ASSOC);
        return json_encode($f);
    }
    
    //busca todos os itens
    public function findAll() {
        $sql = "SELECT * FROM $this->tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }
    
    //busca senha
    public function findkey() {
        
        $hora1 = '"horaInicial"';
        $hora2 = '"horaFinal"';
        $sql = "SELECT * FROM $this->tabela 
        WHERE dia = :date AND 
        (( :horaInicial BETWEEN $hora1 AND $hora2) OR 
        ( :horaFinal BETWEEN $hora1 AND $hora2))";
        $stm = DB::prepare($sql);
        $stm->bindParam(':date', $this->dia);
        $stm->bindParam(':horaInicial', $this->horaInicial);
        $stm->bindParam(':horaFinal', $this->horaFinal);
        $stm->execute();
        return $stm->fetch();
    }
    
     //faz insert   
    public function insert() {

        $hora1 = '"horaInicial"';
        $hora2 = '"horaFinal"';
        $sql = "SELECT * FROM $this->tabela WHERE dia = :date AND 
        (( :horaInicial BETWEEN $hora1 AND $hora2) OR 
        ( :horaFinal BETWEEN $hora1 AND $hora2))";
        $stm = DB::prepare($sql);
        $stm->bindParam(':date', $this->dia);
        $stm->bindParam(':horaInicial', $this->horaInicial);
        $stm->bindParam(':horaFinal', $this->horaFinal);
        $stm->execute();

        if ($stm->rowCount() > 0 ||  
        strtotime("$this->dia") < strtotime(date('Y-m-d'))) {

            return false;
        
        }else{
            $horaI = '"horaInicial"';
            $horaF = '"horaFinal"';
            $idT  = '"idTutor"';

            $start = new \DateTime($this->dia.' '.$this->horaInicial, new \DateTimeZone('America/Sao_Paulo'));
            $end = new \DateTime($this->dia.' '.$this->horaFinal, new \DateTimeZone('America/Sao_Paulo'));
            
            $start1 = $start->format("Y-m-d H:i:s");
            $end1 = $end->format("Y-m-d H:i:s");

            $title = "'Livre'";        
            $color = "'green'";     

            $sql = 'INSERT INTO events (title, color, "start", "end") 
            VALUES ('.$title.','. $color.', :horaInicial, :horaFinal)';
            $stm = DB::prepare($sql);
            $stm->bindParam(':horaInicial', $start1);
            $stm->bindParam(':horaFinal', $end1);
            $stm->execute();

            usleep(100);

            $select = '(SELECT MAX(id) FROM events)';
            $sql = "INSERT INTO $this->tabela (dia, $horaI, $horaF, $idT, livre, fkevents) 
            VALUES (:dia, :horaInicial, :horaFinal, :idTutor, :livre, $select)";
            $stm = DB::prepare($sql);
            $stm->bindParam(':dia', $this->dia);
            $stm->bindParam(':horaInicial', $this->horaInicial);
            $stm->bindParam(':horaFinal', $this->horaFinal);
            $stm->bindParam(':idTutor', $this->idTutor, PDO::PARAM_INT);
            $stm->bindParam(':livre', $this->livre);
            return $stm->execute();
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
        $sql = "DELETE FROM events WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $this->idDisponibilidade, PDO::PARAM_INT);
        return $stm->execute();
    }
}
?>