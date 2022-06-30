<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

global $css;

if ($nivel == 1) {
    $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

    switch ($menuop) {

        case 'home':
            $css = ('href="../ADM/css/styleTela1.css"');
            break;
        case 'agendamento':
            $css = ('href="../ADM/css/styleTela2.css"');
            break;
        case 'noticias':
            $css = ('href="../ADM/css/styleTela3.css"');
            break;
        case 'cadastro-tutor':
            $css = ('href="../ADM/css/styleTela4.css"');
            break;
        case 'cadastro-discente':
            $css = ('href="../ADM/css/styleTela5.css"');
            break;
    }
} elseif ($nivel == 2) {

    $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
    switch ($menuop) {

        case 'home':
            $css = ('href="../Tutor/css/styleTela1.css"');
            break;
        // case 'create':
        //     $css = ('href="../Tutor/css/styleTela5.css"');
        //     break;
        case 'horario':
            $css = ('href="../Tutor/css/styleTela2.css"');
            break;
        case 'agendamento':
            $css = ('href="../Tutor/css/styleTela3.css"');
            break;
        case 'noticias':
            $css = ('href="../Tutor/css/styleTela4.css"');
            break;
    }
} else {

    $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";
    switch ($menuop) {

        case 'home':
            $css = ('href="../Discente/css/styleTela1.css"');
            break;
        case 'horario':
            $css = ('href="../Discente/css/styleTela2.css"');
            break;
        case 'agendamento':
            $css = ('href="../Discente/css/styleTela3.css"');
            break;
        case 'noticias':
            $css = ('href="../Discente/css/styleTela4.css"');
            break;
    }
}
