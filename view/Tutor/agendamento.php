<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/../../app/controller/Agendamento.php');
require_once(__DIR__.'/../../app/controller/Disponibilidade.php');
require_once(__DIR__.'/../../app/controller/Usuario.php');
require_once(__DIR__.'/../../app/controller/Bloqueio.php');

?>



<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tutor3</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<?php
	$usuario = new Usuario;
	$disponibilidade = new Disponibilidade;
	$bloqueio = new Bloqueio;

	if (
		isset($_POST['Agendar'])
		) {

		$livre = 1;

		$dia = $_POST['date'];
		$horaInicial = $_POST['timeInicial'];
		$horaFinal = $_POST['timeFinal'];

		$disponibilidade->setDia($dia);
		$disponibilidade->setHoraInicial($horaInicial);
		$disponibilidade->setHoraFinal($horaFinal);
		$disponibilidade->setLivre($livre);

		
		$disponibilidade->setIdTutor($_SESSION['idUsuario']);
		if($disponibilidade->insert()){
		?>
				<div class="model">
					<img src="../../public/img/sucess.gif" alt="">
				</div>
		<?php
		}
	}

	if (
		isset($_POST['Bloquear'])
		) {

		$bloqueio->idDiscente = $_POST['idDiscente'];
		$bloqueio->idTutor = $_SESSION['idUsuario'];
		$bloqueio->tempo = $_POST['tempo'];

		if($bloqueio->insert()){
		?>
				<div class="model">
					<img src="../../public/img/sucess.gif" alt="">
				</div>
		<?php
		}
	}

	if (
		isset($_POST['Desbloquear']) &&
		isset($_POST['idDiscente']) &&
		$_POST['idDiscente'] != '' &&
		$_POST['idDiscente'] != null
		) {

			$bloqueio->idDiscente = $_POST['idDiscente'];
			$bloqueio->bloqueio = true;

		if($bloqueio->desbloqueiarDiscente()){
		?>
				<div class="model">
					<img src="../../public/img/sucess.gif" alt="">
				</div>
		<?php
		}
	}
	
	if (
		isset($_POST['on-off'])
		) {

		$bloqueio->idDiscente = $_SESSION['idUsuario'];
		$bloqueio->idTutor = $_SESSION['idUsuario'];
		$bloqueio->bloqueio = $_POST['on-off'];

		if($bloqueio->update()){
		?>
				<div class="model">
					<img src="../../public/img/sucess.gif" alt="">
				</div>
		<?php
		}
	}
	?>

<section>
	<div class="container">
		<div class="bloquear-agendamento">
			<h1>Bloquer agendamento:</h1>
			<div class="texto1-bt">
				<h2>Agendamento:</h2>

				<?php
				
				$bloqueio->idDiscente = $_SESSION['idUsuario'];
				$bloqueio->idTutor = $_SESSION['idUsuario'];
				$on = $bloqueio->findUnit();
				
				if ($on->bloqueio) {?>
				<form action="" method="POST">
				<input type="hidden" name="on-off" value="click">
				<input type="submit" name="on-off" value="false">
				<?php

				}else{ ?>

				<form action="" method="POST">
				<input type="hidden" name="on-off" value="click">
				<input type="submit" name="on-off" value="true">
				<?php 
				}
				?>

			</form>
			</div>
			<!--texto1-->

		</div>
		<!--bloquear-agendamento-->
	</div>
	<!--container-->
</section>

<section>
	<div class="container">
			<form action="" method="POST">
		<div class="agendamento">
			<div class="texto1">
				<h1>Agende seu horário:</h1>
				<p>Data e hora do agendamento:</p>
			</div>
			<!--texto1-->
			<div class="select">
				<div class="select-data">

					<p>Dia:</p>
					<input type="date" name="date" id="">
					<p>Hora Inicial:</p>
					<input type="time" name="timeInicial" id="">
					<p>Hora Final:</p>
					<input type="time" name="timeFinal" id="">
				</div>
				<!--select-min-->
			</div>
			<!--select-->
			<p>*Nesse horario estará presente o seguinte tutor: XXXXX</p>
			<div class="botão-agendamento">
				<input type="submit" name="Agendar" value="Agendar">
			</div>
			<!--botão-agendamento-->
		</div>
		<!--agendamento-->
			</form>
	</div>
	<!--container-->
</section>

<section>
	<div class="container">
		<form action="" method="POST">
		<div class="bloquear-aluno">
			<div class="texto1">
				<h1>Bloquear aluno:</h1>
				<p>Selecione o aluno:</p>
			</div>
			<!--texto1-->
			<div class="select-bloqueio">
				<div class="select-bloqueio-aluno">
				<select name="idDiscente">
					<?php
					$usuarios = $usuario->findAll();
					foreach ($usuarios as $key => $value) {
						if ($value->usuario !=  '' && $value->nivel ==  3) { ?>
							<option value="<?php echo $value->idUsuario; ?>"><?php echo $value->usuario; ?></option>
					<?php
						}
					} ?>
				</select>

				</div>
				<!--select-bloqueio-aluno-->
				<p>Tempo:</p>
				<div class="select-tempo-bloqueio">
					<select name="tempo">
						<option value="1">1 dia</option>
						<option value="2">2 dias</option>
						<option value="3">3 dias</option>
						<option value="4">5 dias</option>
						<option value="5">1 semana</option>
						<option value="6">2 semana</option>
						<option value="7">1 mês</option>
					</select>

				<input type="submit" name="Bloquear" value="Bloquear">
			</div>
			<!--agendamento-->
		</form>
	</div>
	<!--container-->
</section>

<section>
	<div class="container">
		<div class="desbloquear-aluno">
			<div class="texto2">
				<h1>Desbloquear aluno:</h1>
				<p>Selecione o aluno:</p>
			</div>
			<!--texto1-->
			<div class="select-desbloqueio">
				<div class="select-desbloqueio-aluno">
					<form action="" method="POST">
				<select name="idDiscente">
					<?php
					$usuarios = $usuario->findAllBloqueio();
					var_dump($usuarios);
					foreach ($usuarios as $key => $value) {
						if ($value->usuario !=  '' && $value->nivel ==  3) { ?>
							<option value="<?php echo $value->idUsuario; ?>"><?php echo $value->usuario; ?></option>
					<?php
						}
					} ?>
				</select>

					<input type="submit" name="Desbloquear" value="Desbloquear">
					</form>
				</div>
				<!--select-bloqueio-aluno-->

			</div>
			<!--agendamento-->
		</div>
		<!--container-->
</section>
</body>

</html>