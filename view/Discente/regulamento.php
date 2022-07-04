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
	<link rel="stylesheet" type="text/css" <?php echo $css ?> >
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

	<section>
		<div class="container">
			<div class="notas">
							<th><h1>Regulamento</h1></th>
				<table>
				<?php
				$regulamento = new Regulamento;
				$regulamentos = $regulamento->findAll();
				$cont = 0;
				foreach ($regulamentos as $key => $value) { ?>
					<tbody>
						<tr>
							<td><p><?php $cont++;echo $cont." : ".$value->descricao; ?></p></td>
						</tr>
					</tbody>
				<?php
				}
				?>
				</table>
			</div>
			<!--notas-->
		</div>
		<!--container-->
	</section>

</body>

</html>