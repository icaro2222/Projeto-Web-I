<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Home;

use App\classe\Usuario;
use \App\Controller\Pages\Login;

if(Usuario::Logar()){
    echo Home::getHome();
    
}else{
    echo Login::getLogin();
}
