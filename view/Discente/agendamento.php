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
	$hora = $_POST['hora'];

	$disponibilidade->setDia($dia);
	$disponibilidade->setHoraInicial($hora);

	$DisponibilidadeIdTutor = $disponibilidade->findkey();
} else {
	echo "<br>Seleione uma dia e uma hora que você deseja ir treinar!!!!";
}

if (isset($_POST['Agendar'])) {

	if (isset($_POST['idTutor'])) {
		$dia = $_POST['dia'];
		$hora = $_POST['hora'];
		$idTutorSelecionado = $_POST['idTutor'];

		$disponibilidade->setDia($dia);
		$disponibilidade->setHoraInicial($hora);
		$disponibilidade->setLivre(1);

		$DisponibilidadeIdTutor = $disponibilidade->findkey();

		$agendamento->fkTutor = $idTutorSelecionado;
		$agendamento->fkDiscente = 14;
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
					<div class="botão-agendamento">
						<input type="submit" name="Buscar" value="Busca Tutor disponível">
					</div>
					<!--botão-agendamento-->
				</div>
				<!--agendamento-->
				<div class="agendamento">
					<!--ALTERAR--->
					<p>* Nesse horario estará presente o seguinte tutor:</p>
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
			</form>
		</div>
		<!--container-->
</section>

</body>

</html>