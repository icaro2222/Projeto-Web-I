<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AdmTela2</title>
	<link rel="stylesheet" type="text/css" href="css/styleTela2.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>

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

</body>
</html>