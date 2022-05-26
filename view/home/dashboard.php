<?php
require '../login/verificalogin.php';

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>IFHealth</title>
	<link rel="stylesheet" type="text/css" href="../../public/css/styleTela1.css">
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
							<a href="../login/logout.php">Sair</a>
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
			<?php if ($nivel == 1) {
			?>
				<div class="painelDeEscolha">
					<li><a href="../home/dashboard.php?menuop=home">Regulamento</a></li>
					<li><a href="../home/dashboard.php?menuop=agendamento">Agendamento</a></li>
					<li><a href="../home/dashboard.php?menuop=noticias">Noticias</a></li>
					<li><a href="../home/dashboard.php?menuop=create">Cadastro</a></li>

				</div>
				<!--painelDeEscolha-->
		</div>
		<!--container-->
	
		<div class="container">
			<div class="notas">
				<?php

				$menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
				switch ($menuop) {

					case 'home':
						include '../ADM/regulamento.php';
						break;
					case 'create':
						include '../ADM/create.php';
						break;
					case 'agendamento':
						include '../ADM/agendamento.php';
						break;
					case 'noticias':
						include '../ADM/noticias.php';
						break;
						// case 'update_env':
						// 	include('paginas/discente/update_env.php');
						// 	break;
				}} elseif ($nivel == 2) { ?>

				<div class="painelDeEscolha">
					<li><a href="../home/dashboard.php?menuop=home">Regulamento</a></li>
					<li><a href="../home/dashboard.php?menuop=agendamento">Agendamento</a></li>
					<li><a href="../home/dashboard.php?menuop=create">Cadastro</a></li>
					<li><a href="../home/dashboard.php?menuop=noticias">Noticias</a></li>

				</div>

					<?php
				$menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
				switch ($menuop) {

					case 'home':
						include '../Tutor/regulamento.php';
						break;
					case 'create':
						include '../Tutor/create.php';
						break;
					case 'agendamento':
						include '../Tutor/agendamento.php';
						break;
					case 'noticias':
						include '../Tutor/noticias.php';
						break;
						// case 'update_env':
						// 	include('paginas/Tutor/update_env.php');
						// 	break;
				}} else { ?>
				<div class="painelDeEscolha">
					<li><a href="../home/dashboard.php?menuop=home">Regulamento</a></li>
					<li><a href="../home/dashboard.php?menuop=horario">Horário</a></li>
					<li><a href="../home/dashboard.php?menuop=agendamento">Agendamento</a></li>
					<li><a href="../home/dashboard.php?menuop=noticias">Noticias</a></li>
					
				</div>
				<!--painelDeEscolha-->
				<?php
				$menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
				switch ($menuop) {

					case 'home':
						include '../Discente/regulamento.php';
						break;
					case 'agendamento':
						include '../Discente/agendamento.php';
						break;
					case 'horario':
						include '../Discente/horario.php';
						break;
					case 'noticias':
						include '../Discente/noticias.php';
						break;
						// case 'update_env':
						// 	include('paginas/discente/update_env.php');
						// 	break;
				}
				?>
				<?php } ?>
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