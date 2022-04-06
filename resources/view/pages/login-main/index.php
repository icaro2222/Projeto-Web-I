<?php
session_start();
?>
<!DOCTYPE html>

<html lang="pt-br">

<head>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            background-image: url(img/fundo_login.webp);
            background-size: 100%;
            border-radius: 15px;
            height: 260px;
            padding-right: 10px;
            margin-right: 5px;
        }
        
        form {
            background-color: white;
            max-width: 500px;
            width: 70%;
            padding: 20px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 15px;
        }
        
        form h3 {
            text-align: center;
            color: #5f7c8a;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        
        form input[type=text],
        form input[type=password] {
            width: 100%;
            height: 45px;
            border: 1px solid #ccc;
            padding-left: 10PX;
            margin: 10px 0;
            border-radius: 15px;
        }
        
        form input[type=submit] {
            width: 100%;
            height: 40px;
            cursor: pointer;
            background-color: #5f7c8a;
            color: white;
            border: 0;
            border-radius: 15px;
            transition: 1s;
        }
        
        form input[type=submit]:hover {
            background-color: #4a5f6a;
        }
        
        form input[type=text]:focus {
            outline: 0;
        }
        
        form input[type=password]:focus {
            outline: 0;
        }
    </style>
</head>

<body>

    <form action="login.php" method="POST">
        <h3>Login</h3>
        <?php
         if(isset($_SESSION['nao_autenticado'])):
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
        
        <input type="submit"  value="enviar">
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
