<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: ../../index.php');
	exit();
}else{};
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TutorTela4</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela4.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="container">
			<div class="cabecario">
				<div class="logo-topo">

					</div><!--logo-topo-->
					<div class="cabecariopt2">
						<h3>Instituto Federal de Educação, Ciência e Tecnologia Baiano</h1>
						<h1>Campus Guanambi</h1>
						<a href="../../logout.php"><input type="submit" name="Sair" value="Sair"></a>
						<div class="borda-cabe">
						</div><!--borda-cabe-->
			
				</div><!--cabecariopt2 -->
			</div><!--cabecario-->
		</div><!--contaiver-->
	</header>

	<section>
		<div class="container">
			<div class="academiaDoCampus">
				<h2>Academia do campus</h2>
			</div><!--academiaDoCampus-->

			<div class="painelDeEscolha">
				<a href="./TutoTela1.php"><input type="submit" name="Regulamento" value="Regulamento"></a>
				<a href="./TutoTela2.php"><input type="submit" name="Horários" value="Horários"></a>
				<a href="./TutoTela3.php"><input type="submit" name="Agendamento" value="Agendamento"></a>
				<a href="./TutoTela4.php"><input type="submit" name="Notas" value="Notas"></a>

			</div><!--painelDeEscolha-->
		</div><!--container-->
	</section>
	<section>
		<div class="container">
			<div class="notas">
				<h1>Notas</h1>
				<p>* A bobrinha 1: Proin vulputate tellus urna, ac tempus orci auctor vel. Proin viverra sagittis porta. Quisque eget rhoncus est. Nunc ac nisi eu eros sollicitudin semper. Aenean feugiat ante non nisl semper, non aliquet elit ornare. Morbi pharetra nec justo sed vehicula.</p>
				<p>* A bobrinha 2: Proin vulputate tellus urna, ac tempus orci auctor vel. Proin viverra sagittis porta. Quisque eget rhoncus est. Nunc ac nisi eu eros sollicitudin semper. Aenean feugiat ante non nisl semper, non aliquet elit ornare. Morbi pharetra nec justo sed vehicula.</p>
				<p>* A bobrinha 3: Proin vulputate tellus urna, ac tempus orci auctor vel. Proin viverra sagittis porta. Quisque eget rhoncus est. Nunc ac nisi eu eros sollicitudin semper. Aenean feugiat ante non nisl semper, non aliquet elit ornare. Morbi pharetra nec justo sed vehicula.</p>
				<p>* A bobrinha 4: Proin vulputate tellus urna, ac tempus orci auctor vel. Proin viverra sagittis porta. Quisque eget rhoncus est. Nunc ac nisi eu eros sollicitudin semper. Aenean feugiat ante non nisl semper, non aliquet elit ornare. Morbi pharetra nec justo sed vehicula.</p>
			</div><!--notas-->
		</div><!--container-->
	</section>

	<section>
		<div class="container">
			<div class="editar-nota">
				<h1>Editar as notas:</h1>
				<div class="adicionar-nota">
					<h2>Adicionar:</h2>
					<div class="texto-add-nota">
						<textarea></textarea>
						<div class="tad-btt">
							<input type="submit" name="Adicionar" value="Adicionar">
						</div>
						
					</div><!--texto-add-nota-->
				</div><!--adicionar-nota-->

				<div class="apagar-edd">
					<div class="apagar1">
						<h2>Apagar ou editar:</h1>
						<p>Selecione a nota:</p>
						<select><option>1</option><option>2</option></select>
					</div><!--apagar1-->
					<div class="apagar2">
						<textarea></textarea>
						<div class="apagar3">
						<input type="submit" name="Remover" value="Remover">
						<input type="submit" name="salvar" value="Salvar">
					</div>
					</div><!--apagar2-->
					
				</div><!--apagar-edd-->
				
			</div><!--editar-nota-->
		</div><!--container-->
	</section>

















	<footer>
		<div class="container">
			<div class="primeiroRodaPe">
				<p>Instituto Federal de Educação, Ciência e Tecnologia Baiano – Campus Guanambi
					Zona Rural - Distrito de Ceraíma, Bahia - CEP: 46430-000</p>
				<p>Instituto Federal de Educação, Ciência e Tecnologia Baiano
					Reitoria: Rua do Rouxinol, nº 115, Imbuí, Salvador-BA. CEP: 41720-052. CNPJ: 10.724.903/0001-79 Telefone: (71) 3186-0001 | E-mail: gabinete@ifbaiano.edu.br</p>
			</div><!--primeiroRodaPe-->
			<div class="container-segundoRodaPe">
			<div class="segundoRodaPe">

				<div class="img-footer1"></div><!--img-footer1-->
				<div class="p">
					<p>Tel.: (77) 3493-2100
						Diretor: Carlito José de Barros Filho
						E-mail: diretor@guanambi.ifbaiano.edu.br</p>
					</div><!--p-->
				<div class="img-footer2"></div><!--imgfooter2-->
			</div><!--segundoRodaPe-->
		</div><!--container-segundoRodaPe-->
		</div><!--container-->
	</footer>


</body>
</html>