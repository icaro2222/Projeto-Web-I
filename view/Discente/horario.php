<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../model/DB/variaveis.php');
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
	<link rel="stylesheet" href="<?php echo '../../public/js/fullcalendar/lib/main.min.css';?>">
	<link rel="stylesheet" href="<?php echo '../../public/css/calendario.css';?>">
</head>

<body>
<section>
	
<?php
if (isset($_GET['idAgendar'])) {
	
	$idAgendar = $_GET['idAgendar'];
	$start = $_GET['start'];
	if(isset($_POST['DeletarAgendar'])){
		
		$disponibilidade->idDisponibilidade = $idAgendar;
		if ($disponibilidade->delete()) { ?>
				
			<div class="modal">
				<form action="" method="POST">
					<img src="../../public/img/sucess.gif" alt="" srcset="">
					<input type="submit" value="fecha">
				</form>
			</div>
	
			<?php		
			} else {?>
		
		<div class="modal">
			<form action="" method="POST">
				<img src="../../public/img/falha.gif" alt="" srcset="">
				<input type="submit" value="fecha">
				<h3>!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! !!!</h3>
			</form>
		</div>
	
		<?php	
		}
	}else if(!isset($_POST['Não'])){
		?>
		<div class="modal-excluir">
			<form action="" method="POST">
				<div class="container">
					<div class="horarios">
						<input type="hidden" value="<?php echo $idAgendar;?> "><br>
						<h2>Você Deseja Excluir Essse Agendamento ?</h2>
						<h2><?php var_dump($start);?></h2>
						<input type="submit" name="DeletarAgendar" value="Sim" width="150px">
						<input type="submit" name="Não" value="Nao" width="150px">
					</div>
				</div>
			</form>
		</div>
	<?php
	}
}
?>
</section>
<section>
		<div class="container">
			<div class="horarios">
				<h2>Horários da Academia:</h2>
				<div class="horarios-pt1">
					
					<!--semana-->
					<div class="calendario">
						<!--CALENDARIOOOOOOO
					-->
						<div class="calendarDiscente"></div>
					</div>
					<!--calendario-->
				</div>
				<!--horarios-pt1-->

				<!-- <div class="horarios-pt2">
					<div class="seletor-periodo">
						<div class="meus-horarios">
							<h2>Meus Horários:</h2>
						</div>
						h2
						<div class="select">
							<select name="select">
								<option value="valor1">Periodo 1</option>
								<option value="valor2" selected>Periodo 2</option>
								<option value="valor3">Periodo 2</option>
							</select>
						</div>
						select
					</div>
					seletor-periodo
					<div class="meus-horarios">
						<ul>
							<input type="date" name="" id="">
						</ul>
					</div>
					meus-horarios
				</div>
				horarios-pt2 -->
			</div>
			<!--horarios-->
		</div>
		<!--container-->

	</section>
<script src="<?php echo '../../public/js/fullcalendar/lib/main.min.js'; ?>"></script>
<script src="<?php echo '../../public/js/calendario.js'; ?>"></script>
</body>
</html>