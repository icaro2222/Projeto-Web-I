<?php

namespace App\Controller\Pages;

use \App\Utils\View;
class Page{

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

    public static function getHeader(){
        return View::render('pages/head');
        
    }

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

    public static function getFooter(){
        return View::render('pages/footer');
        
    }

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

    public static function getPage($title, $content){
        return View::render('pages/page',[
            'title' => $title,
            'head' => self::getHeader(),
            'content' => $content,
            'footer' => self::getFooter()
        ]);
        
    }
}