<?php
session_start();
require_once("config.php");
try {
    $pdo = new PDO( 'mysql:host=' . HOST . ';dbname='.DB, USUARIO, SENHA );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
    exit;
}?>