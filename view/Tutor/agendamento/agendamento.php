<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once(__DIR__.'/../../../app/controller/Agendamento.php');
require_once(__DIR__.'/../../../app/controller/Disponibilidade.php');
require_once(__DIR__.'/../../../app/controller/Usuario.php');
require_once(__DIR__.'/../../../app/controller/Bloqueio.php');

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tutor3</title>
	<link rel="stylesheet" type="text/css" <?php echo $css ?>>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

</head>
<?php
require_once(__DIR__."/agendamenoHead.php");
require_once(__DIR__."/agendamentoSection.php");
?>
</body>
</html>