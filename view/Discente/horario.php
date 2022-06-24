<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Agendamento.php');
require_once('../../app/controller/Disponibilidade.php');

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Discente2</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

	<section>
		<div class="container">
			<div class="horarios">
				<h2>Horários da Academia:</h2>
				<div class="horarios-pt1">
					<div class="semana">
					</div>
					<!--semana-->
					<div class="calendario">
						<!--CALENDARIOOOOOOO
					-->
						<h1>Meus horários </h1>
						<?php
						$Agendamento = new Agendamento;
						$HorarioAgendado = new Disponibilidade;

						$Agendamento->fkDiscente = 14;
						$fkDisponibilidade = $Agendamento->findkey();
						
						// $Agendamentos = $Agendamento->findAll();

						foreach ($fkDisponibilidade as $key => $value) {
						$HorarioAgendados = $HorarioAgendado->findUnit($value->fkDisponibilidade);
							foreach ($HorarioAgendados as $key => $value) { ?>
								<p><?php echo "<br>Dias : " . $value->dia; ?></p>
								<p><?php echo "Horarios Inicial: " . $value->horaInicial; ?></p>
								<p><?php echo "Horarios Final: " . $value->horaFinal; ?></p>
							<?php
							}
						}
						?>
						
					</div>
					<!--calendario-->
				</div>
				<!--horarios-pt1-->

				<h2>Horários da Academia:</h2>
				<div>
					<div class="semana">
					</div>
					<!--semana-->
					<div class="calendario">
						<!--CALENDARIOOOOOOO
					-->
						<h1>add calendario </h1>

						<table>
							<thead>
								<tr>
									<th>Dom  .</th>
									<th>Seg  .</th>
									<th>Ter  .</th>
									<th>Quar .</th>
									<th>Quin .</th>
									<th>Sex  .</th>
									<th>Sab  .</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>2</td>
									<td>3</td>
									<td>4</td>
									<td>5</td>
									<td>6</td>
									<td>7</td>
								</tr>
								<tr>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
									<td>13</td>
									<td>14</td>
								</tr>
								<tr>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
									<td>13</td>
									<td>14</td>
								</tr>
								<tr>
									<td>8</td>
									<td>9</td>
									<td>10</td>
									<td>11</td>
									<td>12</td>
									<td>13</td>
									<td>14</td>
								</tr>
							</tbody>
						</table>
						
					</div>
					<!--calendario-->
				</div>
				<!--horarios-pt1-->

				<div class="horarios-pt2">
					<div class="seletor-periodo">
						<div class="meus-horarios">
							<h2>Meus Horários:</h2>
						</div>
						<!--h2-->
						<div class="select">
							<select name="select">
								<option value="valor1">Periodo 1</option>
								<option value="valor2" selected>Periodo 2</option>
								<option value="valor3">Periodo 2</option>
							</select>
						</div>
						<!--select-->
					</div>
					<!--seletor-periodo-->
					<div class="meus-horarios">
						<ul>
							<input type="date" name="" id="">
						</ul>
					</div>
					<!--meus-horarios-->
				</div>
				<!--horarios-pt2-->
			</div>
			<!--horarios-->
		</div>
		<!--container-->

	</section>

</body>

</html>