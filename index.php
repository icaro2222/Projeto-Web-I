<?php

require __DIR__.'/vendor/autoload.php';

use \App\Controller\Pages\Home;

use App\classe\Usuario;
use \App\Controller\Pages\Login;

if(false){
    echo Home::getHome();
    
}else if(false){
    echo Login::getLogin();
}else if(false){
    echo Login::getLogin2();
}else if(true){
    echo Home::getHome2();
}
