<?php

namespace App\Controller\Pages;

use \App\Utils\View;
class Login{

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

     public static function getLogin(){
        return View::render('pages/login',[
            'name' => 'sys gym',
            'teste' => 'teste'
        ]);
        
     }

}