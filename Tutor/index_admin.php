<?php
require_once('verificalogin.php');
if (!isset($_SESSION)) {
	session_start();
}
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Academy</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela1.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<div class="container">
			<div class="cabecario">
				<div class="logo-topo">

				</div>
				<!--logo-topo-->
				<div class="cabecariopt2">
					<h3>Instituto Federal de Educação, Ciência e Tecnologia Baiano</h1>
						<h1>Campus Guanambi</h1>
						<li>
							<a href="logout.php">Sair</a>
						</li>
						<div class="borda-cabe">
						</div>
						<!--borda-cabe-->

				</div>
				<!--cabecariopt2 -->
			</div>
			<!--cabecario-->
		</div>
		<!--contaiver-->
	</header>

	<section>
		<div class="container">
			<div class="academiaDoCampus">
				<h2>Academia do campus</h2>
			</div>
			<!--academiaDoCampus-->

			<div class="painelDeEscolha">
				<li><a href="index_admin.php?menuop=home">Discentes</a></li>
				<li><a href="index.php?menuop=contatos">Contatos</a></li>
				<li><a href="index.php?menuop=tarefas">Tarefas</a></li>
				<li><a href="index.php?menuop=eventos">eventos</a></li>

			</div>
			<!--painelDeEscolha-->
		</div>
		<!--container-->
	</section>
	<section>
		<div class="container">
			<div class="notas">
				<h1>Discentes</h1>
				<?php
				$menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
				switch ($menuop) {

					case 'home':
						include('paginas/home/home.php');
						break;
					case 'createdisc':
						include('paginas/discente/create.php');
						break;
					case 'env-disc':
						include('paginas/discente/create-env.php');
						break;
					case 'update':
						include('paginas/discente/update.php');
						break;
					case 'update_env':
						include('paginas/discente/update_env.php');
						break;
				}
				?>
			</div>
			<!--notas-->
		</div>
		<!--container-->
	</section>

	<footer>
		<div class="container">
			<div class="primeiroRodaPe">
				<p>Instituto Federal de Educação, Ciência e Tecnologia Baiano – Campus Guanambi
					Zona Rural - Distrito de Ceraíma, Bahia - CEP: 46430-000</p>
				<p>Instituto Federal de Educação, Ciência e Tecnologia Baiano
					Reitoria: Rua do Rouxinol, nº 115, Imbuí, Salvador-BA. CEP: 41720-052. CNPJ: 10.724.903/0001-79 Telefone: (71) 3186-0001 | E-mail: gabinete@ifbaiano.edu.br</p>
			</div>
			<!--primeiroRodaPe-->
			<div class="container-segundoRodaPe">
				<div class="segundoRodaPe">

					<div class="img-footer1"></div>
					<!--img-footer1-->
					<div class="p">
						<p>Tel.: (77) 3493-2100
							Diretor: Carlito José de Barros Filho
							E-mail: diretor@guanambi.ifbaiano.edu.br</p>
					</div>
					<!--p-->
					<div class="img-footer2"></div>
					<!--imgfooter2-->
				</div>
				<!--segundoRodaPe-->
			</div>
			<!--container-segundoRodaPe-->
		</div>
		<!--container-->
	</footer>

</html>