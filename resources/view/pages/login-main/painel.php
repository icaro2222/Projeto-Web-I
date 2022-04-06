<?php
include('verificalogin.php');
if(!isset($_SESSION)){
session_start();
}
?>
<h2>ola! <?php echo $_SESSION['usuario']?></h2>
<h2><a href="logout.php">sair</a></h2>