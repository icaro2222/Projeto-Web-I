<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

//       Verifica se o Usuário está logado  

require_once(__DIR__.'/../login/verificalogin.php');
require_once(__DIR__.'/../../model/DB/variaveis.php');
require_once(__DIR__.'/../../app/controller/Agendamento.php');
require_once(__DIR__.'/../../app/controller/Disponibilidade.php');

$Agendamento = new Agendamento;
$HorarioAgendado = new Disponibilidade;

// $Agendamento->fkDiscente
// $fkDisponibilidade = $Agendamento->findkey();

$HorarioAgendado->idDisponibilidade = $_SESSION['idUsuario'];
echo $HorarioAgendado->findjsonkey();