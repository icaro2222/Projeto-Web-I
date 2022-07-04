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

		$idRegulamento = $_POST['idRegulamento'];

		$regulamento->setIdRegulamento($idRegulamento);

		if ($regulamento->delete()) { ?>
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
		$idRegulamento = $_POST['idRegulamento'];

		$regulamento->setIdRegulamento($idRegulamento);
		$regulamento->setDescricao($descricao);

		if ($regulamento->update()) { ?>
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
			<div class="regulamento">
				<h1>Regulamentos</h1>
				<form action="" method="POST" >
				<table>
					<thead>
						<tr>
							<th>Descrição</th>
							<th>Editar</th>
							<th>Excluir</th>
						</tr>
					</thead>
				<?php
				$regulamentos = $regulamento->findAll();
				foreach ($regulamentos as $key => $value) { ?>
					<tbody>
						<tr>
							<td><?php echo "<br><h3>" . $value->descricao; ?>
							
							<input type="hidden" name="idRegulamento" value="<?php echo $value->idRegulamento; ?>">
							
							<td><button><a href=""><br>Editar</a></button></td>
							<td><button name="Remover"><br>Excluit</button></td></td>
						</tr>
					</tbody>
				<?php
				}
				?>
				</table>
				</form>
			</div>
			<!--notas-->
		</div>
		<!--container-->
	</section>

	<section>
		<div class="container">
			<div class="editar-regulamento">
				<h1>Adicionar regulamento:</h1>
				<div class="adicionar-regulamento">
					<h2>Digite aqui o novo regulamento:</h2>
					<form action="" method="POST">
						<div class="texto-add-regulamento">
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
			<!--editar-regulamento-->
		</div>
		<!--container-->

	</section>

	<section>
		<div class="container">
			<div class="editar-regulamento">
				<div class="apagar-edd">
					<form action="" method="POST">
						<div class="apagar1">
							<h1>Apagar ou editar regulamentos:</h1>
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
							<textarea name="descricao" ></textarea>
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