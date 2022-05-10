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

    <form action="login.php" method="POST">
        <!-- <h3>Login</h3> -->
        <?php
        if (isset($_SESSION['nao_autenticado'])) :
        ?>
            <div class="notification is danger">
                <p>ERRO! usuario ou senha incorreta</p>
            </div>
        <?php
        endif;
        unset($_SESSION['nao_autenticado']);
        ?>
        <input type="text" id="email" name="usuario" placeholder="Digite seu email">
        <input type="password" id="password" name="senha" placeholder="Digite sua senha">

        <input type="submit" value="entrar">
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