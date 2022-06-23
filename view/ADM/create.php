<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Usuario.php');
require_once('../../app/controller/Disponibilidade.php');

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela4</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

	<?php
	$usuario = new Usuario;
	$disponibilidade = new Disponibilidade;

	if (
		isset($_POST['Cadastrar']) &&
		$_POST['nome'] != '' &&
		$_POST['senha'] != '' &&
		$_POST['login'] != '' &&
		$_POST['date'] != '' &&
		$_POST['timeInicial'] != '' &&
		$_POST['timeFinal'] != ''
	) {

		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$login = $_POST['login'];

		$dia = $_POST['date'];
		$horaInicial = $_POST['timeInicial'];
		$horaFinal = $_POST['timeFinal'];
		$idTutor = 44;
		$livre = 1;

		$usuario->setNome($nome);
		$usuario->setLogin($login);
		$usuario->setSenha(md5($senha));
		$usuario->setNivel(2);

		$disponibilidade->setDia($dia);
		$disponibilidade->setHoraInicial($horaInicial);
		$disponibilidade->setHoraFinal($horaFinal);
		$disponibilidade->setLivre($livre);

		if ($usuario->insert() && $disponibilidade->insert()) {
	?>
			<div class="model">
				<img src="../../public/img/sucess.gif" alt="">
			</div>
	<?php
		}
	}

	if (isset($_POST['Apagar'])) {
		$idTutor = $_POST['idTutor'];

		$usuario->setIdUsuario($idTutor);

		if ($usuario->delete()) {
			echo "Tutor " . $usuario->getIdUsuario() . " excluido com sucesso";
		}
	}

	if (isset($_POST['Salvar'])) {
		$descricao = $_POST['descricao'];
		$idTutor = $_POST['idTutor'];

		$Tutor->setIdTutor($idTutor);
		$Tutor->setDescricao($descricao);

		if ($Tutor->update()) {
			echo "Tutor " . $descricao . " atualizado com sucesso";
		}
	}
	?>

	<section>
		<div class="container">
			<form action="" method="POST">
				<div class="add-tutor">
					<h1>Adicionar tutor:</h1>
					<div class="add-tutor-cadast">
						<div class="cap1">
							<p>Nome:</p>
							<textarea name="nome"></textarea>
						</div>
						<div class="cap2">
							<p>Matricula:</p>
							<textarea name="matricula"></textarea>
						</div>
						<div class="cap3">
							<p>Digite o Login:</p>
							<textarea name="login"></textarea>
						</div>
						<div class="cap4">
							<p>Digite a senha:</p>
							<textarea name="senha"></textarea>
						</div>
					</div>
					<!--add-tutor-cadast-->
					<h2>Selecione os horarios do instrutor:</h2>
					<div class="add-tutor-horari">
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
						<div class="botão-agendamento">
							<input type="submit" name="Cadastrar" value="Cadastrar">
						</div>
						<!--botão-agendamento-->
					</div>
					<!--add-tutor-horari-->
				</div>
				<!--add-tutor-->
			</form>
		</div>
		<!--container-->
	</section>

	<section>
		<div class="container">
			<div class="apagar-tutor">
				<div class="texto2">
					<h1>Apagar Tutor:</h1>
					<h2>Selecione o tutor:</h2>
				</div>
				<!--texto1-->
				<div class="select-apagar">
					<form action="" method="POST">
						<div class="select-apagar-tutor">
							<select name="idTutor">
								<?php
								$usuarios = $usuario->findAll();
								foreach ($usuarios as $key => $value) {
									if ($value->usuario !=  '' && $value->nivel ==  2) { ?>
										<option value="<?php echo $value->idUsuario; ?>"><?php echo $value->usuario; ?></option>
								<?php
									}
								} ?>
							</select>

							<input type="submit" name="Apagar" value="Apagar">

						</div>
						<!--select-bloqueio-aluno-->
					</form>
				</div>
				<!--agendamento-->
			</div>
			<!--container-->
	</section>

</body>

</html>