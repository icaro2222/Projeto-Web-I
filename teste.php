<?php
echo $_POST["linkNovo"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Teste ajax jquery tutsmais</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"> </script>
<script>

// Função 
$(function(){
    $('#menu a').click(function(){    /* Conforme menu da div id="menu" os links clicados*/
	
	var recebeLink = $(this).attr('name');  /* Cria variavel nome e depois Pega pelo atributo name do link*/
	//alert(nome);  // Mensagem de alerta
	
    $.ajax({
            type 	        : 'post',       
             url       	    : 'index.php',
             data			: 'linkNovo='+ recebeLink,   /*seta que o post tera o nome de linkNovo e atribui a ele o valor do name do link  */
             dataType	: 'html',
             success : function(name){
                    $('body').html(name);
                }
        });
 
        });
    });
</script>
</head>
 
<body>
	<div id="menu">
	 <a href="#"  name="valor1">menu1 </a>
	 <a href="#"  name="valor2">menu1 </a>
	 <a href="#"  name="valor3">menu1 </a>
	 <a href="#"  name="valor4">menu1 </a>
	 <a href="#"  name="valor5">menu1 </a>
	 <a href="#"  name="valor6">menu1 </a>
</div>
</body>
</html>