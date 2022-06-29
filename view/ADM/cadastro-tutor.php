<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Usuario.php');
require_once('../../app/controller/Disponibilidade.php');
require_once('../../app/controller/Bloqueio.php');

?>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela5</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

	<?php
	$usuario = new Usuario;
	$disponibilidade = new Disponibilidade;
	$bloqueio = new Bloqueio;

	if (
		isset($_POST['Cadastrar']) &&
		$_POST['nome'] != '' &&
		$_POST['senha'] != '' &&
		$_POST['login'] != '' &&
		$_POST['date0'] != '' &&
		$_POST['timeInicial0'] != '' &&
		$_POST['timeFinal0'] != ''
	) {

		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$login = $_POST['login'];

		if (isset($_POST['cont'])) {
			$cont =  $_POST['cont'];
		}else{
			$cont =  1;
		}


		$livre = 1;

		$usuario->setNome($nome);
		$usuario->setLogin($login);
		$usuario->setSenha(md5($senha));
		$usuario->setNivel(2);
		$id = $usuario->insert();
		var_dump($id);
		if ($id != null) {
			
			$contArray = array();
			
			while($cont > 0){
				$cont--;
				$dia = $_POST['date'.$cont];
				$horaInicial = $_POST['timeInicial'.$cont];
				$horaFinal = $_POST['timeFinal'.$cont];

			$disponibilidade->setDia($dia);
			$disponibilidade->setHoraInicial($horaInicial);
			$disponibilidade->setHoraFinal($horaFinal);
			$disponibilidade->setLivre($livre);

			$usuario->nivel = 2;
			$idTutor = $usuario->findultimo();
			$disponibilidade->setIdTutor($idTutor->max);
			
			$disponibilidade->insert();

			$bloqueio->idTutor = $_SESSION['idUsuario'];
			$bloqueio->idDiscente = $id;
			}
			if ($bloqueio->insert()) {?>
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>
		<?php
		}
		}
	}

	if (isset($_POST['Apagar']) &&
	isset($_POST['idTutor']) &&
	$_POST['idTutor'] != ''	 &&
	$_POST['idTutor'] != null) {
		$idTutor = $_POST['idTutor'];

		$usuario->setIdUsuario($idTutor);

		if ($usuario->delete()) {?>
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>
		<?php
		}
	}

	if (isset($_POST['Salvar'])) {
		$descricao = $_POST['descricao'];
		$idTutor = $_POST['idTutor'];

		$Tutor->setIdTutor($idTutor);
		$Tutor->setDescricao($descricao);

		if ($Tutor->update()) {?>
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>
		<?php
		}
	}
	
	if (
		isset($_POST['Adicionar'])) {

		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$login = $_POST['login'];

		$dia = $_POST['date0'];
		$horaInicial = $_POST['timeInicial0'];
		$horaFinal = $_POST['timeFinal0'];
		$livre = 1;

		?>
		<section>
		<div class="container">
			<form action="" method="POST">
				<div class="add-tutor">
					<h1>Adicionar Tutor:</h1>
					<div class="add-tutor-cadast">
						<div class="cap1">
							<p>Nome:</p>
							<textarea name="nome" required><?php echo $nome; ?></textarea>
						</div>
						<div class="cap2">
							<p>Matricula:</p>
							<textarea name="matricula" required><?php echo $nome; ?></textarea>
						</div>
						<div class="cap3">
							<p>Digite o Login:</p>
							<textarea name="login" required><?php echo $nome; ?></textarea>
						</div>
						<div class="cap4">
							<p>Digite a senha:</p>
							<textarea name="senha" required><?php echo $nome; ?></textarea>
						</div>
					</div>
					<!--add-tutor-cadast-->
					<h2>Selecione os horarios do instrutor:</h2>
					<div class="add-tutor-horari">
						<?php 
						$cont = $_POST['cont'];
						while(0 < $cont){ ?>
						<div class="select">
							<div class="select-data">
								<p>Dia:</p>
								<input type="date" name="date<?php echo $cont; ?>" id="" value="<?php echo $dia; ?>" required >
								<p>Hora Inicial:</p>
								<input type="time" name="timeInicial<?php echo $cont; ?>" id="" value="<?php echo $horaInicial; ?>"  required>
								<p>Hora Final:</p>
								<input type="time" name="timeFinal<?php echo $cont; ?>" id="" value="<?php echo $horaFinal; ?>"  required>
							</div>
							<!--select-min-->
						</div>
						<!--select-->
						<?php
						$cont--;
						} 
						$cont = $_POST['cont'];
						?>
						<div class="select">
							<div class="select-data">
								<p>Dia:</p>
								<input type="date" name="date0" id="" value="<?php echo $dia.$cont; ?>" required>
								<p>Hora Inicial:</p>
								<input type="time" name="timeInicial0" id="" value="<?php echo $horaInicial.$cont; ?>"  required>
								<p>Hora Final:</p>
								<input type="time" name="timeFinal0" id="" value="<?php echo $horaFinal.$cont; ?>" required>
								<div>
									<input type="hidden" name="cont" value="<?php echo $cont+1; ?>">
									<button type="submit" name="Adicionar">
									<img src="../../public/img/adicionar.png" height="32px">
									</button>
								</div>
								
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
	<?php
		}else {
	?>
	<section>
		<div class="container">
			<form action="" method="POST">
				<div class="add-tutor">
					<h1>Adicionar Tutor:</h1>
					<div class="add-tutor-cadast">
						<div class="cap1">
							<p>Nome:</p>
							<textarea name="nome" required></textarea>
						</div>
						<div class="cap2">
							<p>Matricula:</p>
							<textarea name="matricula" required></textarea>
						</div>
						<div class="cap3">
							<p>Digite o Login:</p>
							<textarea name="login" required></textarea>
						</div>
						<div class="cap4">
							<p>Digite a senha:</p>
							<textarea name="senha" required></textarea>
						</div>
					</div>
					<!--add-tutor-cadast-->
					<h2>Selecione os horarios do instrutor:</h2>
					<div class="add-tutor-horari">
						<div class="select">
							<div class="select-data">
								<p>Dia:</p>
								<input type="date" name="date0" id="" required>
								<p>Hora Inicial:</p>
								<input type="time" name="timeInicial0" id="" required>
								<p>Hora Final:</p>
								<input type="time" name="timeFinal0" id="" required>
								<div>
									<input type="hidden" name="cont" value="1">
									<button type="submit" name="Adicionar">
									<img src="../../public/img/adicionar.png" height="32px">
									</button>
								</div>
								
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
	<?php } ?>
	
	<section>
		<div class="container">
			<div class="apagar-tutor">
				<div class="texto2">
					<h1>Apagar Tutor:</h1>
					<h2>Selecione o Tutor:</h2>
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