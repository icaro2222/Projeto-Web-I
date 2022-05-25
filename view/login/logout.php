<?php
session_start();
unset($_SESSION['idUsuario']);
session_destroy();
header('location: ../../index.php');
exit();
?>