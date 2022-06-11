<?php
error_reporting(E_ALL);
ini_set("display_erros",1);

/**
 *salvar como DB.php 
 *arquivo que faz conexão com o banco de dados
 */

require_once 'config.php';

class DB {
    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO('mysql:host=' . HOST . '; dbname=' . BASE, USER, PASS);
                self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }

    public static function prepare($sql) {
        return self::getInstance()->prepare($sql);
    }
}
