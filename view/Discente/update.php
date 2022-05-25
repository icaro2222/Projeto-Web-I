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
    <h2>Editar Discente</h2><br>

    <div>
        <form action="index_admin.php?menuop=update_env" method="POST">
            <?php
            include('db/conexao.php');
                $id = $_GET['id'];
                $query = "SELECT *FROM discente WHERE id = {$id}";
                $result = mysqli_query($conexao,$query) or die("erro no update".mysqli_error($conexao));
                $discente = mysqli_fetch_assoc($result);
                

            ?>
        
            <input type="text" name="id" value="<?php echo $id ?>" >
            <label for="fname">Nome</label>
            <input type="text" name="nome" value="<?php echo $discente['nome'] ?>" >
            <img id="olho" src="img/olho.png" />
            <span class="lnr lnr-eye"></span>
            <label for="fname">Senha</label>
            <input type="password" id="senha" name="senha" value="<?php $discente['senha'] ?>"><br>
            <label for="fname">Matricula</label>
            <input type="text" id="fname" name="matricula" value="<?php echo $discente['matricula'] ?>"><br>
            <label for="fname">Idade</label>
            <input type="text" id="fname" name="idade" value="<?php echo $discente['idade'] ?>"><br>
            <label for="fname">Sexo</label>
            <select name="sexo">
                <?php
                if($discente['sexo']=='M'){?>

                    <option value="M" selected >Masculino</option>
                    <option value="F" >Feminino</option>
                <?php
                }
                else{
                ?>
                    <option value="F" selected>Feminino</option>

                    <option value="M" >Masculino</option>
                <?php
                }
                ?>
            </select>
            <label for="fname">Altura</label>
            <input type="text" id="lname" name="altura" value="<?php echo $discente['altura'] ?>"><br>
            <label for="fname">Peso</label>
            <input type="text" id="fname" name="peso" value="<?php echo $discente['peso'] ?>"><br>
            <input type="submit" name='btnadd' value="Editar">
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