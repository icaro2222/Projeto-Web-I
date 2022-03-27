<?php

namespace App\Utils;

class View{

    
    /**
     * Metodo de return de Views
     * @param string
     * @return string
     */

    private static function getContentView($view){

        $file = __DIR__.'/../../resources/view/'.$view.'.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Metodo de return de Views
     * @param string
     * @param array
     * @return string
     */

    public static function render($view, $vars = []){
        // Coteúdo da view

        $contentView = self::getContentView($view);

        $keys  = array_keys($vars);
        $keys  = array_map(function ($item){
            return '{{'.$item.'}}';
        },$keys);

        return str_replace($keys, array_values($vars), $contentView);

    }

}