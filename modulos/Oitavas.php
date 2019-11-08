<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }else{
    echo "<script>window.location.href='index.php';</script>";
}
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 2";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 75){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 75 where id_cad = $id and id_Curso = 2";
  $resultProg = mysqli_query($conn, $progresso);
}

?>
<html lang="pt_br">

<head>
    <!-- STYLES =========================================-->
    <link rel="stylesheet" type="text/css" href="/musiclly/css/style.css">
    <style>
        .titulosh1 {
            color: #1778aa;
        }

        .boldAzul {
            color: #1778aa;
        }

        .circulosModulos {
            width: 50px;
            height: 50px;
            margin-top: 10px;
            background-color: #1778aa;
            border-radius: 50%;
            color: white;
            box-shadow: 2px 2px rgba(0, 0, 0, .2);
        }

        .titleCirculos {
            text-align: center;
            padding-top: 20%;

        }

        .proximo {
            float: right;
            color: #1778aa;
        }
        .backMenuExpandido:hover {
      background-color: rgba(23, 120, 170, .2);

    }
    </style>
    <!--METAS   =========================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!-- BOOTSTRAP CSS =========================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP JS =========================================-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--FONTES ================================================-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--SCRIPTS JS-->
    <script>
        function msg() {
            location.href = '#';
        }
    </script>
    <!--SCRIPTS JS-->
    <script>
        function msg() {
            location.href = '#';
        }

        var i = 1;


        $(document).ready(function() {
            $('#menuUsuarioExpandido').hide();

            $("#menuUsuario").click(function() {
                $("#menuUsuarioExpandido").slideToggle("slow");
            });
        });
    </script>
</head>

<body style="background-image: url('/musiclly/www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">
    <div class="container-fluid">
        <!--CLASSE CONTAINER =======================-->
        <div class="container">
            <?php include($serve_file. 'includes/header.php'); ?>
        </div>
        <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->

        <div class='container' style='height: 1000px'>
            <!--ABERTURA DA DIV CONTAINER -->
            <div class='row'>
                <div class='col-1'>
                    <div style='height:60%;margin-top: 180%'>
                    <a href='/musiclly/modulos/EscalasMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/DesenhoDeEscalaAlternativo.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/GrausMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/DiminutaAumentadaEJusta.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/Oitavas.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/DefinicaoDeAcorde.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/Triade.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.7</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_2_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>2.8</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>2.5 Oitavas</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        <b style='color:darkorange'>O que são oitavas?</b>
                        <br /><br />Provavelmente você já ouviu falar os termos “uma oitava acima” ou “uma oitava abaixo”. Mas o que significa isso?

                        <br /><br />Dizer que uma nota está uma oitava acima significa dizer que a nota é a mesma, porém ela está em uma região mais aguda do instrumento.

                        <br /><br />Imagine um piano. Nele, as teclas da esquerda são mais graves do que as teclas da direita. Se você for apertando as teclas brancas, partindo de dó, da esquerda para a direita, vai seguir a sequência: dó, ré, mi, fá, sol, lá, si, dó…continuando nesse ciclo até terminarem as teclas do piano.

                        <br /><br />Como as notas vão ficando mais agudas, fica fácil de perceber que o próximo dó será mais agudo que o anterior. Sempre que se termina um ciclo e a nota volta a ser dó, completa-se uma oitava.

                        <br /><br />Repare que “si” é o 7º grau de dó (confira nossa apostila completa de teoria musical para entender isso bem), fazendo com que Dó seja o oitavo grau. Por isso o nome “oitava”.

                        <br /><br />Usamos aqui o exemplo de Dó, mas isso é válido para qualquer nota, desde que se comece e termine na mesma nota. Se partíssemos de Ré, fecharíamos uma oitava quando chegássemos à Ré novamente.

                        <br /><br />A mesma lógica pode ser aplicada para uma oitava abaixo, onde o som fica mais grave.

                        <br /><br /><b>Intervalo de uma oitava</b>
                        <br /><br />Como a música ocidental possui 12 notas (12 semitons), podemos concluir que uma oitava compreende a distância de seis tons. Confira abaixo como em 6 tons retornamos à nota de origem:

                        <br /><br /><img src='/musiclly/www/galeria/oitavas.png'>

                        <br /><br />Apenas a título de curiosidade, os pianos geralmente possuem cerca de 7 oitavas.

                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/DefinicaoDeAcorde.php' class='proximo'>Ir para 2.6(Definicao de Acorde) >></a></div>
                    </div>
                </div>
            </div>
            </div>





    
        <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
        <?php include($serve_file. 'includes/footer.php') ?>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>