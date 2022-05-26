<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Noticia.php');

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

	<section>
		<div class="container">
			<div class="notas">
				<h2>Horários da Academia:</h2>
				<div class="notas">
					 <div class="semana">
						<ul>
							<li>Segunda: 8:30 ~ 11:00 || 13:30 ~ 18:00</li>
							<li>Terça:       8:30 ~ 11:00 || 13:30 ~ 18:00</li>
							<li>Quarta:     8:30 ~ 11:00 || 13:30 ~ 18:00</li>
							<li>Quinta:     8:30 ~ 11:00 || 13:30 ~ 18:00</li>
							<li>Sexta:       8:30 ~ 11:00 || 13:30 ~ 18:00</li>
						</ul>
					</div><!--semana-->
					<div class="calendario"><!--CALENDARIOOOOOOO
					--><h1>add calendario </h1></div><!--calendario-->
				</div><!--horarios-pt1-->
				
				<div class="horarios-pt2">
					<div class="seletor-periodo">
						<div class="meus-horarios">
						<h2>Meus Horários:</h2>
					</div><!--h2-->
						<div class="select">
						<select name="select">
							  <option value="valor1">Periodo 1</option>
							  <option value="valor2" selected>Periodo 2</option>
							  <option value="valor3">Periodo 2</option>
						</select>
					</div><!--select-->
					</div><!--seletor-periodo-->
					<div class="meus-horarios">
						<ul>
							<li>Segunda 17/04/2022 : 8:30 ~ 9:00 </li>
							<li>Quarta    19/04/2022 : 9:30 ~ 10:00 </li>
							<li>Quinta     20/04/2022 : 14:30 ~ 15:00 </li>
						</ul>
					</div><!--meus-horarios-->
				</div><!--horarios-pt2-->
			</div><!--horarios-->
		</div><!--container-->

	</section>

</body>

</html>