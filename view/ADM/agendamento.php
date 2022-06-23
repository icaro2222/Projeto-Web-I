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

<section>
	<div class="container">
		<div class="bloquear-aluno">
			<div class="texto1">
				<h1>Bloquear aluno:</h1>
				<p>Selecione o aluno:</p>
			</div>
			<!--texto1-->
			<div class="select-bloqueio">
				<div class="select-bloqueio-aluno">
					<select name="Aluno">
						<option>Aluno</option>
						<option>2</option>
					</select>

				</div>
				<!--select-bloqueio-aluno-->
				<p>Tempo:</p>
				<div class="select-tempo-bloqueio">
					<select name="tempo-bloqueio">
						<option>Dias:</option>
						<option>2</option>
					</select>

					<input type="submit" name="Agendar" value="Bloquear">
				</div>
				<!--agendamento-->
			</div>
			<!--container-->
</section>

<section>
	<div class="container">
		<div class="desbloquear-aluno">
			<div class="texto2">
				<h1>Desbloquear aluno:</h1>
				<p>Selecione o aluno:</p>
			</div>
			<!--texto1-->
			<div class="select-desbloqueio">
				<div class="select-desbloqueio-aluno">
					<select name="Aluno">
						<option>Aluno</option>
						<option>2</option>
					</select>

					<input type="submit" name="Agendar" value="Desloquear">

				</div>
				<!--select-bloqueio-aluno-->

			</div>
			<!--agendamento-->
		</div>
		<!--container-->
</section>
</body>

</html>