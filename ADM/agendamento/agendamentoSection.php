
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
        <p>Tempo:</p>
        <div class="select-tempo-bloqueio">
            <select name="tempo">
                <option value="1">1 dia</option>
                <option value="2">2 dias</option>
                <option value="3">3 dias</option>
                <option value="4">5 dias</option>
                <option value="5">1 semana</option>
                <option value="6">2 semana</option>
                <option value="7">1 mês</option>
            </select>

        <input type="submit" name="Bloquear" value="Bloquear">
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