<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Regulamento.php');

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela1</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

	<?php
	$regulamento = new Regulamento;
	if (isset($_POST['Adicionar'])) {
		$descricao = $_POST['descricao'];

		$regulamento->setDescricao($descricao);

		if ($regulamento->insert()) { ?>
			<div class="model">
					<img src="../../public/img/sucess.gif" alt="">
				</div>
			<?php
		}
	}
	if (isset($_POST['Remover'])) {

		$idRegulamento = $_POST['idRegulamento'];

		$regulamento->setIdRegulamento($idRegulamento);

		if ($regulamento->delete()) { ?>
		<div class="model">
				<img src="../../public/img/sucess.gif" alt="">
			</div>
		<?php
		}
	}
	if (isset($_POST['Salvar'])) {
		$descricao = $_POST['descricao'];
		$idRegulamento = $_POST['idRegulamento'];

		$regulamento->setIdRegulamento($idRegulamento);
		$regulamento->setDescricao($descricao);

		if ($regulamento->update()) { ?>
			<div class="model">
					<img src="../../public/img/sucess.gif" alt="">
				</div>
			<?php
		}
	}
	?>
	<section>
		<div class="container">
			<div class="regulamento">
				<h1>Regulamento</h1>
				<?php
				$regulamentos = $regulamento->findAll();
				foreach ($regulamentos as $key => $value) { ?>
					<p><?php echo "<h3>* Regulamento " . $value->idRegulamento . ":</h3></br>" . $value->descricao; ?></p>
				<?php
				}
				?>
			</div>
			<!--notas-->
		</div>
		<!--container-->
	</section>

	<section>
		<div class="container">
			<div class="editar-regulamento">
				<h1>Editar regulamento:</h1>
				<div class="adicionar-regulamento">
					<h2>Adicionar:</h2>
					<form action="" method="POST">
						<div class="texto-add-regulamento">
							<textarea name="descricao"></textarea>
							<div class="tad-btt">
								<input type="submit" name="Adicionar" value="Adicionar">
							</div>
						</div>
						<!--texto-add-nota-->
					</form>
				</div>
				<!--adicionar-nota-->

				<div class="apagar-edd">
					<form action="" method="POST">
						<div class="apagar1">
							<h2>Apagar ou editar:</h1>
								<p>Selecione o regulamento:</p>
								<select name="idRegulamento" id="idRegulamento">
									<?php
									$regulamentos = $regulamento->findAll();
									foreach ($regulamentos as $key => $value) { ?>
										<option><?php echo $value->idRegulamento; ?></option>
									<?php
									} ?>
								</select>
						</div>
						<!--apagar1-->
						<div class="apagar2">
							<textarea name="descricao"></textarea>
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