<?php
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
	<title>AdmTela2</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela2.css">
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
						<input type="submit" name="Entrar" value="Entrar">
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
				<a href="AdmTela1.php"><input type="submit" name="Regulamento" value="Regulamento"></a>
				<a href="AdmTela2.php"><input type="submit" name="Agendamento" value="Agendamento"></a>
				<a href="AdmTela3.php"><input type="submit" name="Notas" value="Notas"></a>
				<a href="AdmTela4.php"><input type="submit" name="Cadastrar Tutor" value="Cadastrar Tutor"></a>

			</div><!--painelDeEscolha-->
		</div><!--container-->
	</section>

		<section>
		<div class="container">
			<div class="bloquear-agendamento">
				<h1>Bloquer agendamento:</h1>
				<div class="texto1-bt">
					<h2>Agendamento:</h2>
					<input type="submit" name="on/off" value="Ligado/Desligado">

				</div><!--texto1-->
							
			</div><!--bloquear-agendamento-->
		</div><!--container-->
	</section>

	<section>
		<div class="container">
			<div class="agendamento">
				<div class="texto1">
					<h1>Agende seu horário:</h1>
					<p>Data e hora do agendamento:</p>
				</div><!--texto1-->
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
				<p>*Nesse horario  estará presente o seguinte tutor: XXXXX</p>
				<div class="botão-agendamento">
					<input type="submit" name="Agendar" value="Agendar">
					</div><!--botão-agendamento-->
			</div><!--agendamento-->
		</div><!--container-->
	</section>


<section>
		<div class="container">
			<div class="bloquear-aluno">
				<div class="texto1">
					<h1>Bloquear aluno:</h1>
					<p>Selecione o aluno:</p>
				</div><!--texto1-->
				<div class="select-bloqueio">
					<div class="select-bloqueio-aluno">
						<select name="Aluno"><option>Aluno</option>
						<option>2</option></select>
											
				</div><!--select-bloqueio-aluno-->
				<p>Tempo:</p>
				<div class="select-tempo-bloqueio">
						<select name="tempo-bloqueio"><option>Dias:</option>
						<option>2</option></select>
				
					<input type="submit" name="Agendar" value="Bloquear">
			</div><!--agendamento-->
		</div><!--container-->
	</section>

	<section>
		<div class="container">
			<div class="desbloquear-aluno">
				<div class="texto2">
					<h1>Desbloquear aluno:</h1>
					<p>Selecione o aluno:</p>
				</div><!--texto1-->
				<div class="select-desbloqueio">
					<div class="select-desbloqueio-aluno">
						<select name="Aluno"><option>Aluno</option>
						<option>2</option></select>

						<input type="submit" name="Agendar" value="Desloquear">
											
				</div><!--select-bloqueio-aluno-->
					
			</div><!--agendamento-->
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