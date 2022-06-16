<?php
error_reporting(E_ALL);
ini_set("display_erros",1);
session_start();

require_once("config.php");
try {
    $pdo = new PDO('pgsql:host=' . HOST . '; dbname=' . BASE, USER, PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
    exit;
}?>