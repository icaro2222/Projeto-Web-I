<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Home;

use App\classe\Usuario;
use \App\Controller\Pages\Login;

if(false){
    echo Home::getHome();
    
}else if(false){
    echo Login::getLogin();
}else{
    echo Login::getLogin2();
}
