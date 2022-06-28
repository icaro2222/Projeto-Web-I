
<section>
<div class="container">
<div class="bloquear-agendamento">
    <h1>Bloquer agendamento:</h1>
    <div class="texto1-bt">
        <h2>Agendamento:</h2>

        <?php
        
        $bloqueio->idDiscente = $_SESSION['idUsuario'];
        $bloqueio->idTutor = $_SESSION['idUsuario'];
        $bloqueio->bloqueio = true;
        $on = $bloqueio->findUnit();
        
        if ($on) {?>
        <form action="" method="POST">
        <input type="submit" name="on-off" value="false">
        <?php

        }else{ ?>

        <form action="" method="POST">
        <input type="submit" name="on-off" value="true">
        <?php 
        }
        ?>

    </form>
    </div>
    <!--texto1-->

</div>
<!--bloquear-agendamento-->
</div>
<!--container-->
</section>

<section>
<div class="container">
    <form action="" method="POST">
<div class="agendamento">
    <div class="texto1">
        <h1>Adicione mais um horário:</h1>
        <p>Data e hora:</p>
    </div>
    <!--texto1-->
    <div class="select">
        <div class="select-data">

            <p>Dia:</p>
            <input type="date" name="date" id="" required>
            <p>Hora Inicial:</p>
            <input type="time" name="timeInicial" id="" required>
            <p>Hora Final:</p>
            <input type="time" name="timeFinal" id="" required>
        </div>
        <!--select-min-->
    </div>
    <!--select-->
    <div class="botão-agendamento">
        <input type="submit" name="Agendar" value="Adicionar">
    </div>
    <!--botão-agendamento-->
</div>
<!--agendamento-->
    </form>
</div>
<!--container-->
</section>

<section>
<div class="container">
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