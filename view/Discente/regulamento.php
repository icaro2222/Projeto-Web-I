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
	<title>Discente1</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela7.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>
<body>

	<section>
		<div class="container">
			<div class="notas">
				<h1>Regulamento</h1>
                <?php
				$regulamento = new Regulamento;
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