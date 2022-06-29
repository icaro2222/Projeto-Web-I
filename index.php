<!DOCTYPE html>

<html lang="pt-br">
<link rel="stylesheet" href="./style.css" />
	<link rel="shortcut icon" href="./public/img/ifealth.png" type="image/x-icon">
<title>login</title>
<header id="header">
    <div class="logogo">
        <img id="logo" src="./public/img/logo if.png">
    </div>
</header>
<body>

    <form action="./view/login/logar.php" method="POST">
        <h2>Faça seu login:</h2>
        <!-- <h3>Login</h3> -->
        <input type="text" id="email" name="login" placeholder="Digite seu usuario" required>
        <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>

        <input type="submit" value="entrar">
    </form>

</body>

</html>