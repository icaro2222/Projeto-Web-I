<?php

require_once 'config.php';

class DB {
    private static $instance;

    public static function getInstance(){

        if(!isset(self::$instance)){
            try {
                self::$instance = new PDO('mysql:host='.HOST.';dbname'.BASE.USER.PASS);
            } catch (PDOException $menssagen) {
                echo $menssagen->getMessage();
            }
        }
        return self::$instance;
    }
    public static function prepare($sql){
        return self::getInstance()->prepare($sql);
    }
}
?>