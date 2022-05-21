<?php
session_start();
if(!$_SESSION['usuario']) {
	header('Location: ../../index.php');
	exit();
}else{};

error_reporting(E_ALL);
ini_set("display_errors", 1);


require_once('../../app/controller/Aviso.php');


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela3</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela3.css">
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


	<?php    
      $aviso = new Aviso;
      if(isset($_POST['adicionar'])):
            $descricao = $_POST['descricao'];

            $aviso->setDescricao($descricao);

            if($aviso->insert()){
                $inserido = TRUE;
            }
      endif;
    ?>
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

	<section>
		<div class="container">
			<div class="editar-nota">
				<h1>Editar as notas:</h1>
				<div class="adicionar-nota">
					<h2>Adicionar:</h2>
					<form action="" method="POST">
						<div class="texto-add-nota">
							<input type="text" name="descricao">
							<textarea></textarea>
							<div class="tad-btt">
								<input type="submit" name="adicionar" value="Adicionar">
							</div>
							
						</div><!--texto-add-nota-->
					</form>
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