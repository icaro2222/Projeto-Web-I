
<section>

<div class="container">
<div class="bloquear-agendamento">
<form action="" method="POST">
<div class="bloquear-aluno">
    <div class="texto1">
        <h1>Bloquear aluno:</h1>
        <p>Selecione o aluno:</p>
    </div>
    <!--texto1-->
    <div class="select-bloqueio">
        <div class="select-bloqueio-aluno">
        <select name="idDiscente">
            <?php
            $usuarios = $usuario->findAllBloqueio();
            foreach ($usuarios as $key => $value) {
                if ($value->usuario !=  '' && $value->nivel ==  3) { ?>
                    <option value="<?php echo $value->idUsuario; ?>"><?php echo $value->usuario; ?></option>
            <?php
                }
            } ?>
        </select>

        </div>
        <!--select-bloqueio-aluno-->
        <div class="texto1">
            <p>Tempo:</p>
        </div>
        <div>
            <label for="">Quantidade de dias:</label>
            <input type="number" name="tempo" id="" value="1" minlength="2" maxlength="2" max="30" min="1">
        <div class="select-tempo-bloqueio">
        <input type="submit" name="Bloquear" value="Bloquear">
    </div>
    </div>
    <!--agendamento-->
</form>
</div>
</div>
<!--container-->
</section>

<section>
<div class="container">
<div class="desbloquear-aluno">
    <div class="texto2">
        <h1>Desbloquear aluno:</h1>
        <p>Selecione o aluno:</p>
    </div>
    <!--texto1-->
    <div class="select-desbloqueio">
        <div class="select-desbloqueio-aluno">
            <form action="" method="POST">
        <select name="idDiscente">
            <?php
            $usuarios = $usuario->findAllDesbloqueio();
            foreach ($usuarios as $key => $value) {
                if ($value->usuario !=  '' && $value->nivel ==  3) { ?>
                    <option value="<?php echo $value->idUsuario; ?>"><?php echo $value->usuario; ?></option>
            <?php
                }
            } ?>
        </select>

            <input type="submit" name="Desbloquear" value="Desbloquear">
            </form>
        </div>
        <!--select-bloqueio-aluno-->

    </div>
    <!--agendamento-->
</div>
<!--container-->
</section>