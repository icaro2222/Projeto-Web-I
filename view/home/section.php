<section>
	<div class="container">
		<div class="academiaDoCampus">
			<h2>Academia do campus</h2>
		</div>
		<!--academiaDoCampus-->
		<?php if ($nivel == 1) {
		?>
			<div class="painelDeEscolha">
				<a href="../home/dashboard.php?menuop=home">Regulamento</a>
				<a href="../home/dashboard.php?menuop=agendamento">Agendamento</a>
				<a href="../home/dashboard.php?menuop=noticias">Noticias</a>
				<a type="submit" href="../home/dashboard.php?menuop=create">Cadastro</a>
			</div>
			<!--painelDeEscolha-->


			<!--painelDeEscolha-->
	</div>
	<!--container-->

	
			<?php

			$menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
			switch ($menuop) {

				case 'home':
					global $css;
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
			}
		} elseif ($nivel == 2) { ?>

			<div class="painelDeEscolha">
				<a href="../home/dashboard.php?menuop=home">Regulamento</a>
				<a href="../home/dashboard.php?menuop=create">Cadastro</a>
				<a href="../home/dashboard.php?menuop=agendamento">Agendamento</a>
				<a href="../home/dashboard.php?menuop=noticias">Noticias</a>

			</div>

			<!--painelDeEscolha-->
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
			}
		} else { ?>
			<div class="painelDeEscolha">
				<a href="../home/dashboard.php?menuop=home">Regulamento</a>
				<a href="../home/dashboard.php?menuop=horario">Horários</a>
				<a href="../home/dashboard.php?menuop=agendamento">Agendamento</a>
				<a href="../home/dashboard.php?menuop=noticias">Notícias</a>

			</div>


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
					include(__DIR__.'/../Discente/noticias.php');
					break;
					// case 'update_env':
					// 	include('paginas/discente/update_env.php');
					// 	break;
			}} ?>
		
</section>