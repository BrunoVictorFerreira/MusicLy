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
if($row['progresso'] <= 15){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 15 where id_cad = $id and id_Curso = 2";
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

                        <h1 class='titulosh1'>2.1 Escalas Musicais</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        <b style='color:darkorange'>O que são escalas musicais?</b>
                        <br /><b>Escalas musicais</b> são sequências ordenadas de notas. Por exemplo: dó, ré, mi, fá, sol, lá, si, dó…repetindo esse ciclo. Nessa escala, começou-se com a nota dó e foi-se seguindo uma sequência bem definida de intervalos até o retorno para a nota dó novamente. Essa sequência de distâncias foi: tom, tom, semitom, tom, tom, tom, semitom…repetindo o ciclo.
                        
                        <br /><b style='color:darkorange'>Escala maior</b>
                        <br />Essa escala que mostramos é chamada de “<b>escala maior</b>”. Poderíamos utilizar essa mesma sequência (escala maior) começando de uma nota que não fosse dó, por exemplo, sol. A escala então seria sol, lá, si, dó, ré, mi, fá#, sol… Note como a <b>mesma lógica foi seguida</b> (tom, tom, semitom, tom, tom, tom, semitom).
                        
                        <br />No primeiro caso, formamos a escala maior de dó. No segundo caso, a escala maior de sol.
                        
                        <br />Seguindo a mesma lógica podemos montar a escala maior de todas as 12 notas que conhecemos.  Faça isso como exercício e depois confira abaixo. Mostraremos a escala maior das 7 notas básicas:
                        
                        <br /><br /><img src='/musiclly/www/galeria/escalasMusicais.png' style='max-width: 400px'>
                        
                        <br /><br />
                        
                        
                        
                        <br /><b style='color:darkorange'>Escala menor</b>
                        <br />A chamada “<b>escala menor</b>” é formada a partir da seguinte sequência: tom, semitom, tom, tom, semitom, tom, tom…repetindo o ciclo.
                        
                        <br />Vamos construir então a escala de dó menor. Você já é capaz de construir essa escala. Basta seguir essa sequência dada começando pela nota dó. Fica assim:
                        
                        <br /><br />dó, ré, ré#, fá, sol, sol#, lá#, dó… repetindo o ciclo.
                        
                        <br /><br />As notas ré#, sol# e lá# equivalem, respectivamente, a mib, láb e sib. Poderíamos reescrever então a sequência acima como:
                        
                        <br /><br />dó, ré, mib, fá, sol, láb, sib, dó.
                        
                        <br /><br />Note que a escala é absolutamente a mesma; a única diferença é que antes ela estava escrita com <b>sustenidos</b> (#), e agora ela foi escrita com as alterações <b>bemóis</b> (b). Geralmente a escala menor de dó é escrita da segunda forma e não da primeira. Por quê? Simplesmente porque nela todas as 7 notas apareceram (com ou sem alterações – sustenidos/bemóis). No primeiro caso, a nota si não aparece. Isso muda alguma coisa? Faz diferença? Não. Mas nas literaturas você provavelmente vai encontrar a segunda descrição, pelo motivo mencionado.
                        
                        <br />Na realidade, a preferência pela segunda descrição tem um sentido mais profundo, pois facilita a observação das funções harmônicas, mas não se preocupe com isso agora.
                        
                        <br />Confira então as digitações (em partitura e tablatura) da escala maior e da escala menor de Dó:
                        
                        <br /><br /><b style='color:darkorange'>Escala Dó maior</b>
                        <br /><br /><img src='/musiclly/www/galeria/escalaMaior.png' style='max-width: 400px'>
                        
                        <br />Obs: caso você seja tecladista/pianista e ainda não aprendeu partitura, confira a digitação no teclado abaixo:
                        <br /><br /><img src='/musiclly/www/galeria/doMaiorTeclado.png' style='max-width: 400px'>
                        
                        
                        <br /><br /><b style='color:darkorange'>Escala Dó menor</b>
                        <br /><br /><img src='/musiclly/www/galeria/escalaMenor.png' style='max-width: 400px'>
                        
                        <br /><br /><img src='/musiclly/www/galeria/doMenorTeclado.png' style='max-width: 400px'>
                        
                        <br />Obs: No braço do <b>violão/ guitarra</b>, para se obter a escala de outra nota (além da nota “dó” que mostramos), basta deslocar esse mesmo desenho para a nota que se deseja. Experimente testar fazendo esse mesmo desenho (mesmo shape) da escala maior de dó partindo da nota Ré. Depois confira as notas geradas comparando com a tabela que mostramos anteriormente.
                        
                        <br />Isso é ótimo, não? Significa que só precisamos decorar um desenho para cada escala! No teclado, não temos esse privilégio. Porém, o teclado apresenta outras inúmeras vantagens facilitadoras. Cada instrumento tem seus prós e contras!
                        
                        <br /><b style='color:darkorange'>Qual o motivo das escalas musicais serem chamadas de maiores e menores?</b>
                        <br />Essa explicação pode ser encontrada em nossa apostila completa de teoria musical. Essa página que você está lendo é um artigo parcial.

                        <br /><b style='color:darkorange'>Escalas naturais</b>
                        <br />Essa explicação pode ser encontrada em nossa apostila completa de teoria musical. Essa página que você está lendo é um artigo parcial.

                        <br /><b style='color:darkorange'>Escala diatônica</b>
                        <br />Essa explicação pode ser encontrada em nossa apostila completa de teoria musical. Essa página que você está lendo é um artigo parcial.

                        <br /><b style='color:darkorange'>Para que servem as escalas musicais</b>
                        <br />Ok, tudo muito legal, muito bonito, mas para que serve cada escala?? onde elas são utilizadas?! Meu amigo, é aí que mora o segredo! Isso ninguém fala. Você vai encontrar textos em livros e na internet mostrando diversas escalas, mas duvido que alguém explique onde aplicar cada uma.

                        <br />Felizmente, você está no lugar certo! Organizamos todos os conteúdos aqui do site de maneira que você consiga ter toda a base necessária para deslanchar esse assunto.

                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/DesenhoDeEscalaAlternativo.php' class='proximo'>Ir para 2.2(Desenho de Escala Alternativo) >></a></div>
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