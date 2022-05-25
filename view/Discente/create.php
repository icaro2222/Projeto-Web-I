<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/stylesform.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
    <title>Create</title>
</head>

<body>

    <br>
    <h2>Cadastrar Discente</h2><br>

    <div>
        <form action="index_admin.php?menuop=env-disc" method="POST">
            <label for="fname">Nome</label>
            <input type="text" name="nome"  placeholder="Digite sua senha"><img id="olho" src="img/olho.png" />
            <span class="lnr lnr-eye"></span>
            <label for="fname">Senha</label>
            <input type="password" id="senha" name="senha" placeholder="Senha"><br>
            <label for="fname">Matricula</label>
            <input type="text" id="fname" name="matricula" placeholder="matricula"><br>
            <label for="fname">Idade</label>
            <input type="text" id="fname" name="idade" placeholder="idade"><br>
            <label for="fname">Sexo</label>
            <select name="sexo">
                <option value="M">Masculino</option>
                <option value="F" selected>Femino</option>
            </select>
            <label for="fname">Altura</label>
            <input type="text" id="lname" name="altura" placeholder="altura"><br>
            <label for="fname">Peso</label>
            <input type="text" id="fname" name="peso" placeholder="peso"><br>
            <input type="submit" name='btnadd' value="Cadastrar">
        </form>
    </div>

</body>

</html>
<script>
    var senha = $('#senha');
    var olho = $("#olho");

    olho.mousedown(function() {
        senha.attr("type", "text");
    });

    olho.mouseup(function() {
        senha.attr("type", "password");
    });
    // para evitar o problema de arrastar a imagem e a senha continuar exposta, 
    //citada pelo nosso amigo nos comentários
    $("#olho").mouseout(function() {
        $("#senha").attr("type", "password");
    });
</script>