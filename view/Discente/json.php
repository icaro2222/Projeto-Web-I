<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/../../model/DB/variaveis.php');
require_once(__DIR__.'/../../app/controller/Agendamento.php');
require_once(__DIR__.'/../../app/controller/Disponibilidade.php');

$Agendamento = new Agendamento;
$HorarioAgendado = new Disponibilidade;

$Agendamento->fkDiscente = 51;
$fkDisponibilidade = $Agendamento->findkey();

echo $HorarioAgendado->findjson();
