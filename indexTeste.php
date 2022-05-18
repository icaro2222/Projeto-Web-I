<?php
session_start();
?>
<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="./style.css" />
<title>login</title>
<header id="header">
    
    <img id="logo" src="./img/logo if.png">
</header>
<body>
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
            $_SESSION['usuario']="teste";
        endif;
        
        ?>
        
    <form action="login.php" method="POST">
            <a href="paginas/Discente/DisceTela1.html">Discente 1</a>
            <a href="paginas/Discente/DisceTela2.html">Discente 2</a>
            <a href="paginas/Discente/DisceTela3.html">Discente 3</a>
            <a href="paginas/Discente/DisceTela4.html">Discente 4</a>
            
            <a href="paginas/ADM/AdmTela1.html">ADM 1</a>
            <a href="paginas/ADM/AdmTela2.html">ADM 2</a>
            <a href="paginas/ADM/AdmTela3.html">ADM 3</a>
            <a href="paginas/ADM/AdmTela4.html">ADM 4</a>

            <a href="paginas/Tutor/TutoTela1.html">Tutor 1</a>
            <a href="paginas/Tutor/TutoTela2.html">Tutor 2</a>
            <a href="paginas/Tutor/TutoTela3.html">Tutor 3</a>
            <a href="paginas/Tutor/TutoTela4.html">Tutor 4</a>
            
        </div>
    </form>
</body>
<script>
    var email = document.getElementById('email');
    email.addEventListener('focus', () => {
        email.style.borderColor = "#4a5f6a";
    })
    email.addEventListener('blur', () => {
        email.style.borderColor = "#ccc";
    })
    var password = document.getElementById('password');
    password.addEventListener('focus', () => {
        password.style.borderColor = "#4a5f6a";
    })
    password.addEventListener('blur', () => {
        password.style.borderColor = "#ccc";
    })
</script>
</html>