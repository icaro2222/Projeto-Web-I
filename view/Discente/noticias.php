<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

require_once('../../app/controller/Noticia.php');

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Discente4</title>
    <link rel="stylesheet" type="text/css" <?php echo $css ?> >
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <div class="container">
            <div class="notas">
                <table>
                    <thead>
                        <tr>
                            <th><h1>Notícias</h1></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $Noticia = new Noticia;
                        $Noticias = $Noticia->findAll();
                        foreach ($Noticias as $key => $value) { ?>
                        <tr>

                            <td><p><?php echo "Noticia " . $value->idNoticia . " : " . $value->descricao; ?></p></td>

                        </tr>
                                <?php
                            } ?>
                    </tbody>
                </table>
            </div>
            <!--notas-->
        </div>
        <!--container-->
    </section>

</body>

</html>