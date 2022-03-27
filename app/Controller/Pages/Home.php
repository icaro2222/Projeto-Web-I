<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;
class Home extends Page{

    /**
     *  Método responsável por retornar o conteúdo da home.
     * @return string
     */

     public static function getHome(){

        $obOrganizaation = new Organization;

        print_r($obOrganizaation);

         $content = View::render('pages/home',[
             'name' => $obOrganizaation->name,
             'teste' => $obOrganizaation->description
         ]);
         $title = 'SYSGYM';

         return parent::getPage($title, $content);
     }

}