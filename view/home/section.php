

<section>
	<div class="container">
		<div class="academiaDoCampus">
			<h2>Academia do campus</h2>
		</div>
		<!--academiaDoCampus-->
		<?php if ($nivel == 1) {
		?>
			<div class="painelDeEscolha">
				<button><a href="../home/dashboard.php?menuop=home">Regulamento</a></button>
				<button><a href="../home/dashboard.php?menuop=agendamento">Agendamento</a></button>
				<button><a href="../home/dashboard.php?menuop=noticias">Noticias</a></button>
				<button type="submit"><a href="../home/dashboard.php?menuop=create">Cadastro</a></button>
			</div>
			<!--painelDeEscolha-->
			
			<div class="painelDeEscolha">
				<input type="submit" name="Regulamento" value="Regulamento">
				<input type="submit" name="Agendamento" value="Agendamento">
				<input type="submit" name="Notas" value="Notas">
				<input type="submit" name="Cadastrar Tutor" value="Cadastrar Tutor">

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
				<button><a href="../home/dashboard.php?menuop=home">Regulamento</a></button>
				<button><a href="../home/dashboard.php?menuop=create">Cadastro</a></button>
				<button><a href="../home/dashboard.php?menuop=agendamento">Agendamento</a></button>
				<button><a href="../home/dashboard.php?menuop=noticias">Noticias</a></button>

			</div>

			<div class="painelDeEscolha">
				<input type="submit" name="Regulamento" value="Regulamento">
				<input type="submit" name="Cadastro" value="Cadastro">
				<input type="submit" name="Agendamento" value="Agendamento">
				<input type="submit" name="Notas" value="Notas">

			</div><!--painelDeEscolha-->
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
				<button><a href="../home/dashboard.php?menuop=home">Regulamento</a></button>
				<button><a href="../home/dashboard.php?menuop=horario">Horários</a></button>
				<button><a href="../home/dashboard.php?menuop=agendamento">Agendamento</a></button>
				<button><a href="../home/dashboard.php?menuop=noticias">Notícias</a></button>

			</div>

			<div class="painelDeEscolha">
				<input type="submit" name="Regulamento" value="Regulamento">
				<input type="submit" name="Horários" value="Horários">
				<input type="submit" name="Agendamento" value="Agendamento">
				<input type="submit" name="Notas" value="Notas">

			</div><!--painelDeEscolha-->

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