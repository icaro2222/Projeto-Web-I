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
		$_POST['login'] != ''){

		$nome = $_POST['nome'];
		$senha = $_POST['senha'];
		$login = $_POST['login'];

		$usuario->setNome($nome);
		$usuario->setLogin($login);
		$usuario->setSenha(md5($senha));
		$usuario->setNivel(3);
		
		if($usuario->insert()){
			echo "Tutor ". $nome. " inserido com sucesso";
		}
	}
	
	if(isset($_POST['Apagar'])){
		$idTutor = $_POST['idTutor'];

		$usuario->setIdUsuario($idTutor);
		
		if($usuario->delete()){
			echo "Tutor ". $usuario->getIdUsuario(). " excluido com sucesso";
		}
	}

	if(isset($_POST['Salvar'])){
		$descricao = $_POST['descricao'];
		$idTutor = $_POST['idTutor'];

		$Tutor->setIdTutor($idTutor);
		$Tutor->setDescricao($descricao);
		
		if($Tutor->update()){
			echo "Tutor ". $descricao. " atualizado com sucesso";
		}
	}
    ?>

	<section>
		<div class="container">
			<form action="" method="POST">
			<div class="notas">
				<h1>Adicionar Discente:</h1>
				<div class="add-tutor-cadast">
					<div class="cap1"><p>Nome:</p>
					<textarea name="nome"></textarea>
				</div>
					<div class="cap2"><p>Matricula:</p>
					<textarea name="matricula"></textarea>
				</div>
					<div class="cap3"><p>Digite o Login:</p>
					<textarea name="login"></textarea>
				</div>
					<div class="cap4">
						<p>Digite a senha:</p>
						<input type="password" name="senha">
					</div>
				</div><!--add-tutor-cadast-->
				<div class="botão-agendamento">
					<input type="submit" name="Cadastrar" value="Cadastrar">
					</div><!--botão-agendamento-->
				</div><!--add-tutor-horari-->
			</div><!--add-tutor-->
			</form>
		</div><!--container-->
	</section>

	<section>
		<div class="container">
			<div class="notas">
				<div class="texto2">
					<h1>Apagar Discente:</h1>
					<p>Selecione o discente:</p>
				</div><!--texto1-->
				<div class="select-apagar">
					<form action="" method="POST">
					<div class="select-apagar-tutor">
						<select name="idTutor">
							<?php
							$usuarios = $usuario->findAll();
							foreach ($usuarios as $key => $value) {
							if ($value->usuario !=  '' && $value->nivel ==  3) {?>
							<option value="<?php echo $value->idUsuario;?>"><?php echo $value->usuario;?></option>
							<?php
							}}?>
						</select>

						<input type="submit" name="Apagar" value="Apagar">
											
				</div><!--select-bloqueio-aluno-->
				</form>	
			</div><!--agendamento-->
		</div><!--container-->
	</section>

</body>
</html>