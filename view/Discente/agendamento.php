<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Agendamento.php');
require_once('../../app/controller/Usuario.php');
require_once('../../app/controller/Disponibilidade.php');

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Discente3</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?> >
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo '../../public/js/fullcalendar/lib/main.min.css';?>">
	<link rel="stylesheet" href="<?php echo '../../public/css/calendario.css';?>">
</head>

<?php

$usuario = new Usuario;
$agendamento = new Agendamento;
$disponibilidade = new Disponibilidade;

if (
	isset($_POST['Buscar']) &&
	isset($_POST['dia']) &&
	$_POST['dia'] != "" &&
	$_POST['hora'] != "" &&
	isset($_POST['hora'])
) {

	$dia = $_POST['dia'];
	$horaInicial = $_POST['hora'];
	$horaFinal = $_POST['hora'];


	$duracao = '01:00';
	$horaFinal = date('H:i', strtotime("{$horaInicial[0]} hours {$horaInicial[1]} minutes  + {$duracao[0]} hours {$duracao[1]} minutes "));

	// echo "<br><br><br><br>".$horaInicial;
	// echo "<br><br><br><br>".$horaFinal;
	// echo "<br><br><br><br>". date('H:i',strtotime($horaInicial));
	// echo "<br><br><br><br>". date('H:i',strtotime($duracao));

	$disponibilidade->setDia($dia);
	$disponibilidade->setHoraInicial($horaInicial);
	$disponibilidade->setHoraFinal($horaFinal);
	$disponibilidade->setLivre(1);

	$DisponibilidadeIdTutor = $disponibilidade->findkey();
} else if(isset($_POST['Buscar'])){
	echo "<br>Seleione uma dia e uma hora que você deseja ir treinar!!!!";
}

if (isset($_POST['Agendar'])) {

	if (isset($_POST['idTutor'])) {
		$dia = $_POST['dia'];
		$horaInicial = $_POST['hora'];
		$horaFinal = $_POST['hora'];
		$idTutorSelecionado = $_POST['idTutor'];

		$disponibilidade->setDia($dia);
		$disponibilidade->setHoraInicial($horaInicial);
		$disponibilidade->setHoraFinal($horaFinal);
		$disponibilidade->setLivre(1);

		$DisponibilidadeIdTutor = $disponibilidade->findkey();

		$agendamento->fkTutor = $idTutorSelecionado;
		$agendamento->fkDiscente = $_SESSION['idUsuario'];
		$agendamento->fkDisponibilidade = $DisponibilidadeIdTutor->idDisponibilidade;

		if ($agendamento->insert()) { ?>
			<style>
				.modal img {
					display: block;
				}
			</style>
			<?php
			sleep(2);
			?>
			<style>
				.modal img {
					display: block;
				}
			</style>
<?php
		}
	} else {
		echo "<br>Seleione um tutor!!!!";
	}
}

?>

<div class="modal">
	<img src="../../public/img/sucess.gif" alt="" srcset="">
</div>
<section>
	<div class="container">
		<div class="agendamento">
			<div class="texto1">
				<h1>Agende seu horário:</h1>
			</div>
			<!--texto1-->
			<form action="" method="POST">

				<!--ALTERARRRARARARA-->
				<div class="select">
					<p>Data e hora do agendamento:</p>
					<div class="select-data">
						<input type="date" name="dia" id="" value="<?php echo $disponibilidade->dia ?>">
						<input type="time" name="hora" id="" value="<?php echo $disponibilidade->horaInicial ?>">
					</div>
					<!--select-->
					<div class="botão-agendamento2">
						<input type="submit" name="Buscar" value="Busca Tutor disponível">
					</div>
					<!--botão-agendamento-->
					<?php
					if (isset($_POST['Buscar']) &&
					$DisponibilidadeIdTutor->idTutor != '' 
					) {?>
							
						<!--ALTERAR--->
						<div class="select-tutor">
						<select name="idTutor">
							<?php
							$usuarios = $usuario->findUnit($DisponibilidadeIdTutor->idTutor);
							foreach ($usuarios as $key => $value) {
								if ($value->usuario !=  '' && $value->nivel ==  2) { ?>
									<option value="<?php echo $value->idUsuario; ?>">
										<?php echo $value->usuario; ?> </option>
							<?php
								}
							} ?>
						</select>
						<input type="submit" name="Agendar" value="Agendar">
						</div>

						<?php
					}
					?>
				</div>
			</form>
					
			<div class="horarios">

				<h2>Horários da Academia:</h2>
				<div class="horarios-pt1">
					<div class="semana">
					</div>
					<!--semana-->
					<div class="calendario">
						<!--CALENDARIOOOOOOO
					-->
						<div class="calendar"></div>
					</div>
					<!--calendario-->
				</div>
				<!--horarios-pt1-->
			</div>
					<!--semana-->
					<div class="calendario">
						<!--CALENDARIOOOOOOO
					-->
						<h1>Dias e Horários Disponíveis </h1>
						<?php
						$HorarioAgendado = new Disponibilidade;

						$HorarioAgendados = $HorarioAgendado->findAll();
							foreach ($HorarioAgendados as $key => $value) { ?>
								<p><?php echo "<br>Dia : " . $value->dia; ?></p>
								<p><?php echo "Horario Inicial: " . $value->horaInicial; ?></p>
								<p><?php echo "Horario Final: " . $value->horaFinal; ?></p>
							<?php
							}
						?>
						
					</div>
					<!--calendario-->
				</div>
				<!--agendamento-->
		</div>
		<!--container-->
</section>

</body>
<script src="<?php echo '../../public/js/fullcalendar/lib/main.min.js'; ?>"></script>
<script src="<?php echo '../../public/js/calendario.js'; ?>"></script>
</html>