<?php

namespace App\Utils;

class View{

    
    /**
     * Metodo de return de Views
     * @param string
     * @return string
     */

    private static function getContentVieww($view){

        $file = __DIR__.'/../../resources/view/'.$view.'.httml';
        return file_exists($file) ? file_get_contents($file) : '';
    }

    /**
     * Metodo de return de Views
     * @param string
     * @return string
     */

    public static function render($view){

    }

}