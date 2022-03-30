<?php

namespace App\Controller\Pages;

use \App\Utils\View;
class Login{

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

    public static function getLogin2(){
        return View::render('pages/login2',[
            'name' => 'sys gym',
            'teste' => 'teste'
        ]);
     }
}