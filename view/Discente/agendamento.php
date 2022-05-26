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
	<title>AdmTela2</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela2.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<?php
	
	$usuario = new Usuario;
	$agendamento = new Agendamento;
	if(isset($_POST['Buscar'])){

		$dia= $_POST['dia'];
		$hora = $_POST['hora'];

		$agendamento->setDia($dia);
		$agendamento->setHora($hora);
		$agendamento->setLivre(1);
		
		echo "Tutor ". $hora. " inserido com sucesso</div>";
	}
	
	if(isset($_POST['Agendar'])){

		$dia= $_POST['dia'];
		$hora = $_POST['hora'];
		$idUsuario = $_POST['idTutor'];

		$disponibilidade = new Disponibilidade;

		$disponibilidade->setDia($dia);
		$disponibilidade->setHora($hora);
		$disponibilidade->setLivre(2);

		$agendamento->fkTutor = 12;
		$agendamento->fkDiscente = 12;
		$agendamento->fkDiscponibilidade = 1;
		
		if($disponibilidade->insert() && $agendamento->insert()){
			echo "Tutor ". $hora. " inserido com sucesso</div>";
		}
	}
	
    ?>
	<section>
		<div class="container">
			<div class="notas">
				<div class="texto1">
					<h1>Agende seu horário:</h1>
				</div><!--texto1-->
				<form action="" method="POST">
					<div class="notas">
					<p>Data e hora do agendamento:</p>
						<div class="select-data">
							<input type="date" name="dia" id="" value="<?php echo $agendamento->dia?>">
							<input type="time" name="hora" id="" value="<?php echo $agendamento->hora?>">
						</div><!--select-->
					<div class="botão-agendamento">
						<input type="submit" name="Buscar" value="Buscar Tutor disponível">
						</div><!--botão-agendamento-->
					</div><!--agendamento-->
					<div class="notas">
					<p>* Nesse horario  estará presente o seguinte tutor:</p>
					<select name="idTutor">
							<?php
							$usuarios = $usuario->findAll();
							foreach ($usuarios as $key => $value) {
							if ($value->usuario !=  '' && $value->nivel ==  2) {?>
							<option value="<?php echo $value->idUsuario;?>">
							<?php echo $value->usuario;?></option>
							<?php
							}}?>
						</select>

						<input type="submit" name="Agendar" value="Agendar">
					</div>
				</form>
		</div><!--container-->
	</section>

</body>
</html>