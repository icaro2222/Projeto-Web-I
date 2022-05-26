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
	<link rel="stylesheet" type="text/css" href="css/styleTela1.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    
	<?php
		$regulamento = new Regulamento;
		if(isset($_POST['Adicionar'])){
			$descricao = $_POST['descricao'];
	
			$regulamento->setDescricao($descricao);
			
			if($regulamento->insert()){
				echo "regulamento ". $descricao. " inserido com sucesso";
			}
		}
		if(isset($_POST['Remover'])){
			$idRegulamento = $_POST['idRegulamento'];
	
			$regulamento->setRegulamento($idRegulamento);
			
			if($regulamento->delete()){
				echo "regulamento ". $idRegulamento. " excluido com sucesso";
			}
		}
		if(isset($_POST['Salvar'])){
			$descricao = $_POST['descricao'];
			$idRegulamento = $_POST['idRegulamento'];
	
			$regulamento->setRegulamento($idRegulamento);
			$regulamento->setDescricao($descricao);
			
			if($regulamento->update()){
				echo "regulamento ". $descricao. " atualizado com sucesso";
			}
		}
		?>
	<section>
		<div class="container">
			<div class="notas">
				<h1>Regulamento</h1>
                <?php
                $regulamentos = $regulamento->findAll();
                foreach ($regulamentos as $key => $value) {?>
                    <p><?php echo $value->descricao;?></p>
                <?php
                }
                ?>
			</div><!--notas-->
		</div><!--container-->
	</section>
</body>
</html>