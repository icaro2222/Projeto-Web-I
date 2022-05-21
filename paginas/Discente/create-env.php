
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
</body>

</html>
<?php
include('db/conexao.php');
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
$idade = mysqli_real_escape_string($conexao, $_POST['idade']);
$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
$altura = mysqli_real_escape_string($conexao, $_POST['altura']);
$peso = mysqli_real_escape_string($conexao, $_POST['peso']);


$sql = "INSERT INTO usuario (usuario, senha, num_registro, 
idade, sexo, altura, peso)
 VALUES ('{$nome}', md5('{$senha}'), '{$matricula}',
  '{$idade}', '{$sexo}', '{$altura}', '{$peso}')";

 mysqli_query($conexao,$sql) or die("erro a executar o create ".mysqli_error($conexao));
 echo "usuario cadastrado com sucesso";
?>
