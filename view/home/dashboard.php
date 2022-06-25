<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//       Verifica se o Usuário está logado  

require_once(__DIR__.'/../login/verificalogin.php');

//       Puxar as configurações  

require_once(__DIR__.'/../../model/DB/variaveis.php');

//       Verifica a pagina que está e coloca o CSS especifico da pagina.

require_once(__DIR__.'/requireCss.php');

//       Incluir na pagina a cabeça, parti inicial  

require_once(__DIR__.'/head.php');

//        Incluir na pagina a seção de escolher , as opções 

require_once(__DIR__.'/section.php');

//        Incluir na pagina o rodapé, parti final.  

require_once(__DIR__.'/footer.php');

?>