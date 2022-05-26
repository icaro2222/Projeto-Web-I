<?php 
include('db/conexao.php');
$id = mysqli_real_escape_string($conexao, $_POST['id']);
$nome = mysqli_real_escape_string($conexao, $_POST['nome']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
$matricula = mysqli_real_escape_string($conexao, $_POST['matricula']);
$idade = mysqli_real_escape_string($conexao, $_POST['idade']);
$sexo = mysqli_real_escape_string($conexao, $_POST['sexo']);
$altura = mysqli_real_escape_string($conexao, $_POST['altura']);
$peso = mysqli_real_escape_string($conexao, $_POST['peso']);


$sql = "UPDATE discente SET 
                            nome='{$nome}',
                            senha= md5('{$senha}'),
                            matricula= '{$matricula}', 
                            idade= '{$idade}',
                            sexo='{$sexo}',
                            altura='{$altura}', 
                            peso='{$peso}'
                            where id = '{$id}'
                            ";


 mysqli_query($conexao,$sql) or die("erro a executar o create ".mysqli_error($conexao));
 echo "usuario Atualizado com sucesso";
?>