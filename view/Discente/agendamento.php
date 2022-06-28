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
	$_POST['dia'] != null &&
	isset($_POST['hora']) &&
	$_POST['hora'] != "" &&
	$_POST['hora'] != null
) {

	$dia = $_POST['dia'];
	$horaInicial = $_POST['hora'];
	$horaFinal = $_POST['hora'];


	$duracao = '01:00';
	$horaFinal = date('H:i', strtotime("{$horaInicial[0]} hours {$horaInicial[1]} minutes  + {$duracao[0]} hours {$duracao[1]} minutes "));

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
		
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>

			<?php		
			} else {?>
		
		<div class="modal">
			<form action="" method="POST">
				<img src="../../public/img/falha.gif" alt="" srcset="">
				<input type="submit" value="fecha">
				<h3>Você já possui agendamento nesse horário !!!</h3>
			</form>
		</div>

		<?php	
		}
	} else {
		echo "<br>Seleione um tutor!!!!";
	}
}

?>

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
						<input type="date" name="dia" id="" value="<?php echo $disponibilidade->dia ?>" required>
						<input type="time" name="hora" id="" value="<?php echo $disponibilidade->horaInicial ?>" required>
					</div>
					<!--select-->
					<div class="botão-agendamento2">
						<input type="submit" name="Buscar" value="Busca Tutor disponível">
					</div>
					<!--botão-agendamento-->
					<?php
					if (
						isset($_POST['Buscar']) &&
						isset($_POST['dia']) &&
						$_POST['dia'] != "" &&
						$_POST['dia'] != null &&
						isset($_POST['hora']) &&
						$_POST['hora'] != "" &&
						$_POST['hora'] != null &&
						isset($DisponibilidadeIdTutor->idTutor) &&
						$DisponibilidadeIdTutor->idTutor != ''  &&
						$DisponibilidadeIdTutor->idTutor != null
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
							} 
							?>
						</select>
						<input type="submit" name="Agendar" value="Agendar">
						</div>

						<?php
					}
					?>
				</div>
			</form>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="agendamento">
			<div class="horarios">

				<h2>Horários da Academia:</h2>
				<div class="horarios-pt1">
					<div class="semana">
					</div>
					<!--semana-->
					<div class="calendario">
						<!--CALENDARIOOOOOOO
					-->
						<div class="calendarTutor"></div>
					</div>
					<!--calendario-->
				</div>
				<!--horarios-pt1-->

			</div>
			<!--agendamento-->
	</div>
	<!--container-->
</section>

</body>
<script src="<?php echo '../../public/js/fullcalendar/lib/main.min.js'; ?>"></script>
<script src="<?php echo '../../public/js/calendario.js'; ?>"></script>
</html>