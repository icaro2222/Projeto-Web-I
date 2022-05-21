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
			<div class="add-tutor">
				<h1>Adicionar tutor:</h1>
				<div class="add-tutor-cadast">
					<div class="cap1"><p>Nome:</p>
					<textarea></textarea></div>
					<div class="cap2"><p>Matricula:</p>
					<textarea></textarea></div>
					<div class="cap3"><p>Digite o usuário:</p>
					<textarea></textarea></div>
					<div class="cap4"><p>Digite a senha:</p>
					<textarea></textarea></div>
					
				</div><!--add-tutor-cadast-->
				<h2>Selecione os horarios do instrutor:</h2>
				<div class="add-tutor-horari">
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
				<div class="botão-agendamento">
					<input type="submit" name="Cadastrar" value="Cadastrar">
					</div><!--botão-agendamento-->
				</div><!--add-tutor-horari-->
			</div><!--add-tutor-->
		</div><!--container-->
	</section>

	<section>
		<div class="container">
			<div class="apagar-tutor">
				<div class="texto2">
					<h1>Apagar Tutor:</h1>
					<p>Selecione o tutor:</p>
				</div><!--texto1-->
				<div class="select-apagar">
					<div class="select-apagar-tutor">
						<select name="Aluno"><option>Aluno</option>
						<option>2</option></select>

						<input type="submit" name="Agendar" value="Apagar">
											
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