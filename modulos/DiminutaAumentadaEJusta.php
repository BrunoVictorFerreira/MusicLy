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
if($row['progresso'] <= 60){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 60 where id_cad = $id and id_Curso = 2";
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

                        <h1 class='titulosh1'>2.4 Diminuta Aumentada e Justa</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                            <b style='color:darkorange'>O que significa diminuta, aumentada e justa?</b>
                            <br />Se você leu o artigo sobre graus, reparou que mencionamos apenas 7 notas da música ocidental (C, D, E, F, G, A, B). Mas e se quiséssemos utilizar uma referência de graus para as demais notas também (C#, D#, F#, G#, A#)? Para isso existe uma definição mais abrangente, como veremos agora:

                            <br /><br />A primeira nota é representada pelo primeiro grau, como já vimos. Esse grau pode ser chamado também de primeiro grau maior. Vamos utilizar como exemplo de primeiro grau a nota Dó.

                            <br /><br />Nesse caso, a nota Ré é o segundo grau, também chamado de segundo grau maior. A nota Dó# (ou Ré b), nesse caso, é o segundo grau MENOR.

                            <br /><br />Os nomes “segundo grau menor” e “segundo grau maior” geralmente são abreviados para “segundo maior” e “segundo menor”, e o mesmo se aplica aos demais graus maiores e menores.

                            <br /><br />Essa nomenclatura (“maior” e “menor”) existe para indicar se o intervalo (distância entre as notas) é curto ou longo. Intervalos maiores são longos e menores são curtos.

                            <br /><br />Repare que, no exemplo anterior, o “segundo grau maior” representou o intervalo de um tom (pois Ré está um tom acima de Dó), e o “segundo grau menor” representou o intervalo de meio tom (Ré bemol está meio tom acima de Dó).

                            <br /><br />Portanto, esses nomes foram dados apenas para termos uma indicação da distância entre as notas. Expandindo o conceito para todas as notas, partindo de Dó, teremos o seguinte:

                            <br /><br />C    —> Primeiro grau maior

                            <br />Db —> Segundo grau menor

                            <br />D   —> Segundo grau maior

                            <br />Eb—> Terceiro grau menor

                            <br />E   —> Terceiro grau maior

                            <br />F   —> Quarta justa

                            <br />F#—> Quarta aumentada (ou Quinta diminuta: Gb)

                            <br />G  —> Quinta justa

                            <br />G#—> Quinta aumentada (ou sexta menor: Ab)

                            <br />A   —> Sexta maior

                            <br />Bb —> Sétima menor

                            <br />B  —> Sétima maior

                            <br /><br />Provavelmente você está se perguntando por que raios existem os nomes “aumentada”, “justa” e “diminuta”. Bom, saiba que é apenas uma definição, e é esse linguajar que você vai encontrar em qualquer livro de música ou song book.

                            <br /><br />A lógica é a mesma que vimos para os nomes “maior” e “menor”. O nome “aumentada” indica um intervalo mais longo e “diminuta” indica um intervalo mais curto. “Justa” fica no meio entre essas duas.

                            <br /><br />Mas não poderíamos simplesmente utilizar os nomes “maior” e “menor” para todas as notas em vez de utilizar esses “diminuta”, “aumentada” e “justa”? Sim, poderíamos. Então por que existem esses outros nomes?

                            <br /><br />Por enquanto, apenas memorize essas nomenclaturas e o que elas representam. Como você viu, não há nenhum mistério, são apenas nomes dados para graus específicos.

                            <br /><br />Vamos agora exercitar essa nomenclatura partindo de outras notas além de Dó:

                            <br /><br /><img src='/musiclly/www/galeria/diminutaAumentadaEJusta.png' style='max-width: 400px'>

                            <br /><br />Obs: utilizamos nessa tabela apenas sustenidos para ficar mais fácil de enxergar e comparar tudo, mas poderíamos ter mesclado essa tabela com bemóis sem problemas.

                            <br /><br />A partir do sétimo grau, as notas começam a se repetir, pois o 8º grau já é igual ao 1º grau. Seguindo essa lógica:

                            <br /><br />– O 9º grau é igual ao 2º grau.
                            <br />– O 11º grau é igual ao 4º grau.
                            <br />– O 13º grau é igual ao 6º grau.

                            <br /><br />Você deve estar se perguntando: se não há necessidade de se falar em graus após o sétimo, pelo fato de se repetir, por que então se usam as notações 9º, 11º e 13º?? Bom, alguns músicos preferem utilizar esses graus para deixar claro qual oitava deve ser utilizada.

                            <br /><br />Por exemplo: se estiver escrito em uma cifra apenas Cm6, provavelmente você irá montar o acorde de dó menor e pegar o sexto grau mais próximo para formar o Cm6. Agora, escrevendo Cm13, você saberia que deve utilizar o sexto grau uma oitava acima, e não o sexto grau mais próximo.

                            <br /><br />A única diferença entre esses dois acordes é uma sonoridade levemente distinta devido à oitava utilizada para o 6º grau (nos próximos tópicos, falaremos tudo o que você precisa saber sobre acordes e cifras, não se preocupe caso não tenha entendido esse exemplo).

                            <br /><br />Quanto à extensão 9ª, ela quase sempre aparece uma oitava acima, por isso é utilizada em vez de 2ª. Mas não se surpreenda ao ver o número 2 em cifras por aí, pois a notação americana gosta de colocar o número 2 ao invés do número 9.

                            <br /><br />É importante você saber detalhes como esse para não ficar com dúvidas sobre essas nomenclaturas.

                            <br /><br />Muito bem, vamos falar agora da utilidade prática dessa notação toda que vimos!

                            <br /><br />Podemos nos referir a qualquer nota que quisermos tomando como base alguma nota de referência, da mesma maneira que fizemos no artigo graus musicais. Tomaremos aqui o mesmo princípio do artigo anterior, pois estamos apenas complementando o assunto.

                            <br /><br />Porém, antes a gente trabalhou em cima da escala de dó maior, pois ao dizer apenas “3º grau”, “6º grau”, etc. não estávamos especificando se o grau era maior, menor, justo, diminuto ou aumentado. Por isso, foi necessário dizer que os graus seriam conforme o formato da escala maior. Agora não será mais necessário se vincular a uma escala, pois vamos especificar cada grau separadamente. Seguem abaixo alguns exemplos (exercícios):
                            <br /><br />Obs: Por enquanto, estamos falando apenas de notas, não de acordes! Os nomes “<b>aumentada</b>” e “<b>diminuta</b>”, bem como os nomes “maior” e “menor” também aparecem no ramo dos acordes, mas isso é outra abordagem!

                            <br /><br />Cuide para não confundir as coisas, aqui estamos falando apenas de notas e de sua nomenclatura isolada. Quando o assunto é acordes, a nomenclatura tem outro objetivo. Por isso é importante essa distinção. Mantenha isso em mente.

                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/Oitavas.php' class='proximo'>Ir para 2.5(Oitavas) >></a></div>
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