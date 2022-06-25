<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/model/DB/variaveis.php');

?>

<!DOCTYPE html>
<html>
<head>
	
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Discente2</title>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo DIRPAGE.'public/js/fullcalendar/lib/main.min.css';?>">
	<link rel="stylesheet" href="<?php echo DIRPAGE.'public/css/calendario.css';?>">
</head>

<body>

	<div class="calendar"></div>
<script src="<?php echo DIRPAGE.'public/js/fullcalendar/lib/main.min.js'; ?>"></script>
<script src="<?php echo DIRPAGE.'public/js/calendario.js'; ?>"></script>
</body>
</html>