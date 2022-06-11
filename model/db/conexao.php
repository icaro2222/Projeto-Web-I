<?php
error_reporting(E_ALL);
ini_set("display_erros",1);
session_start();
require_once("/home/icaro/Documentos/Estudos/Densenvolvimento/Projeto_Web_I_Oficial/IFHelth/model/DB/config.php");
try {
    $pdo = new PDO( 'mysql:host=' . HOST . ';dbname='.DB, USUARIO, SENHA );
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();
    exit;
}?>