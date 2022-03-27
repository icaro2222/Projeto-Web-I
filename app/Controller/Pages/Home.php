<?php

namespace App\Controller\Pages;

use \App\Utils\View;
class Home extends Page{

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

     public static function getHome(){
         $content = View::render('pages/home',[
             'name' => 'sys gym',
             'teste' => 'teste'
         ]);
         $title = 'SYSGYM';

         return parent::getPage($title, $content);
     }

}