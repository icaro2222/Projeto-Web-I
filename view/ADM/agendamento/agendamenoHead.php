<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


$usuario = new Usuario;
$disponibilidade = new Disponibilidade;
$bloqueio = new Bloqueio;

if (
    isset($_POST['Agendar'])
    ) {

    $livre = 1;

    $dia = $_POST['date'];
    $horaInicial = $_POST['timeInicial'];
    $horaFinal = $_POST['timeFinal'];

    $disponibilidade->setDia($dia);
    $disponibilidade->setHoraInicial($horaInicial);
    $disponibilidade->setHoraFinal($horaFinal);
    $disponibilidade->setLivre($livre);

    
    $disponibilidade->setIdTutor($_SESSION['idUsuario']);
    if($disponibilidade->insert()){
    ?>
    <div class="modal">
        <form action="" method="POST">
            <img src="../../public/img/sucess.gif" alt="" srcset="">
            <input type="submit" value="fecha">
        </form>
    </div>

    <?php
    } else {?>
		
		<div class="modal-falha">
			<form action="" method="POST">
				<img src="../../public/img/falha.gif" alt="" srcset="">
				<input type="submit" value="fecha">
				<h1>Você já possui agendamento nesse horário !!!</h1>
				<h3>Ou Data INVÁLIDA !!!</h3>
			</form>
		</div>

		<?php	
		}
}

if (
    isset($_POST['Bloquear'])
    ) {

    $bloqueio->idDiscente = $_POST['idDiscente'];
    $bloqueio->idTutor = $_SESSION['idUsuario'];
    $bloqueio->tempo = $_POST['tempo'];

    if($bloqueio->insert()){
    ?>
    <div class="modal">
        <form action="" method="POST">
            <img src="../../public/img/sucess.gif" alt="" srcset="">
            <input type="submit" value="fecha">
        </form>
    </div>

    <?php
    }
}

if (
    isset($_POST['Desbloquear']) &&
    isset($_POST['idDiscente']) &&
    $_POST['idDiscente'] != '' &&
    $_POST['idDiscente'] != null
    ) {

        $bloqueio->idDiscente = $_POST['idDiscente'];
        $bloqueio->bloqueio = 'false';

    if($bloqueio->desbloqueiarDiscente()){
    ?>
    <div class="modal">
        <form action="" method="POST">
            <img src="../../public/img/sucess.gif" alt="" srcset="">
            <input type="submit" value="fecha">
        </form>
    </div>

    <?php
    }
}

if (
    isset($_POST['on-off'])
    ) {

    $bloqueio->idDiscente = $_SESSION['idUsuario'];
    $bloqueio->idTutor = $_SESSION['idUsuario'];
    $bloqueio->bloqueio = $_POST['on-off'];

    if($bloqueio->update()){
    ?>
    <div class="modal">
        <form action="" method="POST">
            <img src="../../public/img/sucess.gif" alt="" srcset="">
            <input type="submit" value="fecha">
        </form>
    </div>

    <?php
    }
}


?>