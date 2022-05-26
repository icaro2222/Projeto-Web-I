<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Usuario.php');

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela4</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela4.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>

<?php
	$usuario = new Usuario;
	if(isset($_POST['Cadastrar']) &&
		$_POST['nome'] != '' &&
		$_POST['senha'] != '' &&
		$_POST['usuario'] != ''):
		$nome = $_POST['nome'];
		$senha = $_POST['senha'];

		$usuario->setNome($nome);
		$usuario->setSenha(md5($senha));
		$usuario->setNivel(2);
		
		if($usuario->insert()){
			echo "Aluno ". $nome. " inserido com sucesso";
		}
	endif;
    ?>

	<section>
		<div class="container">
			<form action="" method="POST">
			<div class="add-tutor">
				<h1>Adicionar tutor:</h1>
				<div class="add-tutor-cadast">
					<div class="cap1"><p>Nome:</p>
					<textarea name="nome"></textarea>
				</div>
					<div class="cap2"><p>Matricula:</p>
					<textarea></textarea>
				</div>
					<div class="cap3"><p>Digite o usuário:</p>
					<textarea name="usuario"></textarea>
				</div>
					<div class="cap4">
						<p>Digite a senha:</p>
						<textarea name="senha"></textarea>
					</div>
				</div><!--add-tutor-cadast-->
				<h2>Selecione os horarios do instrutor:</h2>
				<div class="add-tutor-horari">
					<div class="select">
					<div class="select-data">
						<select name="Data"><option>1</option>
						<option>2</option></select>
						<p>Data:</p></div><!--select-data-->
					<div class="select-hora">
						<select name="Hora"><option>1</option>
						<option>2</option></select><p>Hora:</p></div><!--select-hora-->
					<div class="select-min">
						<select name="Hora"><option>1</option>
						<option>2</option></select><p>Minuto:</p></div><!--select-min-->
				</div><!--select-->
				<div class="botão-agendamento">
					<input type="submit" name="Cadastrar" value="Cadastrar">
					</div><!--botão-agendamento-->
				</div><!--add-tutor-horari-->
			</div><!--add-tutor-->
			</form>
		</div><!--container-->
	</section>





</body>
</html>