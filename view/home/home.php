<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css//stylesform.css">
    <title>Contatos</title>
</head>
</head>


<div class="adiscent">
    <button class="button button2"><a href="index_admin.php?menuop=createdisc">ADD Discente</a></button>
</div>

<body>
    <table id="customers">
        <tr>
            <th>Nome</th>
            <label>Buscar<input id="filtro-nome"/></label>
            <th>N° Matricula</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>mover pra direita Ações</th>
        </tr>

        </tr>
        <?php
        include('db/conexao.php');
        $query = " SELECT * FROM usuario";
        $result = mysqli_query($conexao, $query) or die("Erro ao execultar consulta de contatos" . mysqli_error($conexao));
        while ($discentes = mysqli_fetch_assoc($result)) {

        ?>
            <tr>
                <td><?= $discentes['usuario'] ?></td>
                <td><?= $discentes['num_registro'] ?></td>
                <td><?= $discentes['idade'] ?></td>
                <?php
                if ($discentes['sexo'] == 'M') { ?>
                    <td>Masculino</td>
                <?php
                } else { ?>
                    <td>Feminino</td>
                <?php
                }
                ?>

                <td id="butonsfim">
                    <button class="button button3"><a href="index_admin.php?menuop=update&id=<?= $discentes['id'] ?>">edit</a></button>
                    <button class="button button4"><a href="index_admin.php?menuop=delete&&id=<?= $discentes['id'] ?>">delete</a></button>
                </td>


            </tr>
        <?php
        }
        ?>
    </table>

</body>

</html>
<script>
var filtro = document.getElementById('filtro-nome');
var tabela = document.getElementById('customers');
filtro.onkeyup = function() {
    var nomeFiltro = filtro.value;
    for (var i = 1; i < tabela.rows.length; i++) {
        var conteudoCelula = tabela.rows[i].cells[0].innerText;
        var corresponde = conteudoCelula.toLowerCase().indexOf(nomeFiltro) >= 0;
        tabela.rows[i].style.display = corresponde ? '' : 'none';
    }
};
</script>