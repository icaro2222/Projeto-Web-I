<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tutor3</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<section>
	<div class="container">
		<div class="bloquear-agendamento">
			<h1>Bloquer agendamento:</h1>
			<div class="texto1-bt">
				<h2>Agendamento:</h2>
				<input type="submit" name="on/off" value="Ligado/Desligado">

			</div>
			<!--texto1-->

		</div>
		<!--bloquear-agendamento-->
	</div>
	<!--container-->
</section>

<section>
	<div class="container">
		<div class="agendamento">
			<div class="texto1">
				<h1>Agende seu horário:</h1>
				<p>Data e hora do agendamento:</p>
			</div>
			<!--texto1-->
			<div class="select">
				<div class="select-data">

					<p>Dia:</p>
					<input type="date" name="date" id="">
					<p>Hora Inicial:</p>
					<input type="time" name="timeInicial" id="">
					<p>Hora Final:</p>
					<input type="time" name="timeFinal" id="">
				</div>
				<!--select-min-->
			</div>
			<!--select-->
			<p>*Nesse horario estará presente o seguinte tutor: XXXXX</p>
			<div class="botão-agendamento">
				<input type="submit" name="Agendar" value="Agendar">
			</div>
			<!--botão-agendamento-->
		</div>
		<!--agendamento-->
	</div>
	<!--container-->
</section>
</body>

</html>