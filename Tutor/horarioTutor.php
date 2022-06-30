<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__ . '/../../app/controller/Agendamento.php');
require_once(__DIR__ . '/../../app/controller/Disponibilidade.php');

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Discente</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo '../../public/js/fullcalendar/lib/main.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo '../../public/css/calendario.css'; ?>">
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
						<!--CALENDARIOOOOOOO-->
						<div class="calendarDiscente"></div>
					</div>
					<!--calendario-->
				</div>
				<!--horarios-pt1-->

				<div class="horarios-pt2">
					<div class="seletor-periodo">

						<!--h2-->
					</div>
					<!--seletor-periodo-->


					<!--meus-horarios-->
				</div>
				<!--horarios-pt2-->
			</div>
			<!--horarios-->
		</div>
		<!--container-->

	</section>
	<script src="<?php echo '../../public/js/fullcalendar/lib/main.min.js'; ?>"></script>
	<script src="<?php echo '/calendario1.js'; ?>"></script>
</body>

</html>