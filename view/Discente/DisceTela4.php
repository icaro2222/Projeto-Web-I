<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once('../../app/controller/Aviso.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DisceTela4</title>
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
				<a href="./DisceTela1.php"><input type="submit" name="Regulamento" value="Regulamento"></a>
				<a href="./DisceTela2.php"><input type="submit" name="Horários" value="Horários"></a>
				<a href="./DisceTela3.php"><input type="submit" name="Agendamento" value="Agendamento"></a>
				<a href="./DisceTela4.php"><input type="submit" name="Notas" value="Notas"></a>

			</div><!--painelDeEscolha-->
		</div><!--container-->
	</section>
	<section>
		<div class="container">
			<div class="notas">
				<h1>Notas</h1>
				
			<?php
				$aviso = new Aviso;
				foreach($aviso->findAll() as $index => $value){?>
					<p><?php echo $value->descricao;?></p>
				<?php
				}
				?>
			</div><!--notas-->
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