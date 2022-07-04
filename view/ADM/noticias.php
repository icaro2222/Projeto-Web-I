<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Noticia.php');

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela3</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

	<?php
	$Noticia = new Noticia;
	if (
		isset($_POST['Adicionar']) &&
		$_POST['descricao'] != ''  &&
		$_POST['descricao'] != null
	) {

		$descricao = $_POST['descricao'];

		$Noticia->setDescricao($descricao);

		if ($Noticia->insert()) {?>
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>
		<?php
		}
	}
	if (isset($_POST['Remover'])) {
		$idNoticia = $_POST['idNoticia'];

		$Noticia->setIdNoticia($idNoticia);

		if ($Noticia->delete()) {?>
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
		isset($_POST['Salvar']) &&
		$_POST['descricao'] != ''  &&
		$_POST['descricao'] != null
	) {
		$descricao = $_POST['descricao'];
		$idNoticia = $_POST['idNoticia'];

		$Noticia->setIdNoticia($idNoticia);
		$Noticia->setDescricao($descricao);

		if ($Noticia->update()) {?>
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>
		<?php
		}
	}
	?>

	<section>
		<div class="container">
			<div class="notas">
				<table>
					<thead>
						<tr>
							<th><h1>Notícias</h1></th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
					</thead>
				<?php
				$Noticias = $Noticia->findAll();
				foreach ($Noticias as $key => $value) { ?>
					<tbody>
						<tr>
							<td><?php echo $value->descricao; ?></td>
							<input type="hidden" name="idNoticia" 
							value="<?php echo $value->idNoticia; ?>">
							<td><input type="submit" name="Remover" value="Excluir"></td>
							<td><input type="submit" name="Salvar" value="Editar"></td>
						</tr>
					</tbody>
				<?php
				}
				?>
				</table>
			</div>
			<!--notas-->
		</div>
		<!--container-->
	</section>

	<section>
		<div class="container">
			<div class="editar-nota">
				<h1>Adicionar notícias:</h1>
				<div class="adicionar-nota">
					<h2>Digite aqui a nova notícia:</h2>
					<form action="" method="POST">
						<div class="texto-add-nota">
							<textarea name="descricao" required></textarea>
							<div class="tad-btt">
								<input type="submit" name="Adicionar" value="Adicionar">
							</div>
						</div>
						<!--texto-add-nota-->
					</form>
				</div>
				<!--adicionar-nota-->
			</div>
			<!--editar-nota-->
		</div>
		<!--container-->
	</section>

	<section>
		<div class="container">
			<div class="editar-nota">


				<div class="apagar-edd">
					<form action="" method="POST">
						<div class="apagar1">
							<h1>Apagar ou editar notícias:</h1>
							<p>Selecione a notícia:</p>
							<select name="idNoticia" id="idNoticia">
								<?php
								$Noticias = $Noticia->findAll();
								foreach ($Noticias as $key => $value) { ?>
									<option><?php echo $value->idNoticia; ?></option>
								<?php
								} ?>
							</select>
						</div>
						<!--apagar1-->
						<div class="apagar2">
							<textarea name="descricao" minlength="2" required></textarea>
							<div class="apagar3">
								<input type="submit" name="Remover" value="Remover">
								<input type="submit" name="Salvar" value="Salvar">
							</div>
						</div>
						<!--apagar2-->
					</form>
				</div>
				<!--apagar-edd-->

			</div>
			<!--editar-nota-->
		</div>
		<!--container-->
	</section>


</body>

</html>