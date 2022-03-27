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
     * @return string
     */

    public static function render($view){
        // Coteúdo da view

        $contentView = self::getContentView($view);

        return $contentView;

    }

}