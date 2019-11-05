<?php
    error_reporting(0);
    $serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
    session_save_path($serve_file . 'cache/temp');
    include_once($serve_file . 'php/banco.php');
    session_start();

    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'];
        $id = $_SESSION['id'];
    }

    $sqlContagem = "SELECT count(*) from cadastro";
    $resultContagem = mysqli_query($conn, $sqlContagem);
    $rowContagem = mysqli_fetch_array($resultContagem);
    $resta = 10 - $rowContagem[0];

?>
<html lang="pt_br">
<head>
    <!-- STYLES =========================================-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--METAS   =========================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!-- BOOTSTRAP CSS =========================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP JS =========================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--SCRIPTS JS-->
    <script src="includes/scriptIndex.js"></script>
    <script src="includes/scriptDisplay.js"></script>
</head>

<body style="background-image: url('www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">

    <!-- DISPLAY SUPERIOR -->
    <?php include('includes/display.php'); ?>
    <!-- DISPLAY SUPERIOR -->

<div class="container-fluid">

    <!-- HEADER -->
    <?php include($serve_file.'includes/header.php'); ?>
    <!-- HEADER -->
    
    <div>
        <p id="MatriculasAbertas">Matriculas Abertas</p><br>
        <a href="/musiclly/cadastro.php" id="linkCadastro">
            <div id="divCadastreAgora">
                <h6 id="spanCadastreAgora">Cadastre-se agora</h6>
            </div>
        </a>
        <p id="Contagem">Restam <?php echo $resta ?> Vagas</p>
    </div>

    <div class="row" id="rowMotivos">
        <div class="col-12">

            <div class="row justify-content-center" id="RowMotivos2">
                <div class="col-3">
                    <img src="/musiclly/www/galeria/relogio.png" id="RelogioImg"><br>
                    <div id="texto1">
                        <p align="center">Você pode estudar a qualquer hora e a qualquer dia, podendo dar descanços entre aulas e até mesmo pausando uma aula e voltando no outro dia.</p>
                    </div>
                </div>
                <div class="col-3">
                    <img src="/musiclly/www/galeria/cerebro.png" id="CerebroImg"><br>
                    <div id="texto2">
                        <p align="center">Para que se tenha um bom desenvolvimento do estudo da música,
                            tanto para instrumentos quanto para a educação da voz,
                            desenvolvemos uma metodologia baseada no que existe de mais moderno no cenário musical.
                        </p>
                    </div>
                </div>
                <div class="col-3">
                    <img src="/musiclly/www/galeria/cifrao.png" id="cifraoImg"><br>
                        <div id="texto3">
                        <p align="center">Conteúdo totalmente Gratuito e acessível a todos que tenham conexão a internet.</p>
                    </div>
                </div>

            </div>

            <hr id="hr">
            <div id="circulo1"></div>
            <div id="circulo2"></div>
            <div id="circulo3"></div>
            <hr id="hr2">

            <div class="row justify-content-center" style="margin-top: 2%">
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>

            </div>
            

            <div class="row justify-content-center">
                <div class="col-1">
                    <img src="/musiclly/www/galeria/gibson.png" class="LogosMarcas">
                </div>


                <div class="col-1">
                    <img src="/musiclly/www/galeria/fender.png" class="LogosMarcas">
                </div>


                <div class="col-1">
                    <img src="/musiclly/www/galeria/gianini.png" class="LogosMarcas">
                </div>


                <div class="col-1">
                    <img src="/musiclly/www/galeria/ddario.png" class="LogosMarcas">
                </div>
            </div>
        </div>
    </div>

    <!--ABERTURA DA DIV CONTAINER -->
    <div class="container" style="height: 1000px">
        <img src="www/galeria/separador.png" class="separador">

        <div class="row justify-content-md-center" style="padding:30px">

        <div class="col-3">
            <div id="guitarraOptionDiv">
                <img src="www/galeria/guitar.png" class="ImgMenu1">
                <p class="cursoDe1">Curso de </p>
                <p class="instrumento1">Guitarra</p>
            </div>
        </div>

        <div class="col-3">
            <div id="violaoOptionDiv">
                <img src="www/galeria/violao.png" class="ImgMenu2">
                <p class="cursoDe2">Curso de </p>
                <p class="instrumento2">Violão</p>
            </div>
        </div>
        <div class="col-3">
            <div id="baixoOptionDiv">
                <img src="www/galeria/baixo.png" class="ImgMenu3">
                <p class="cursoDe3">Curso de </p>
                <p class="instrumento3">Baixo</p>
            </div>
        </div>
    </div>


    <img src="www/galeria/separador.png" class="separador">

    <div id="tagModulo1">Modulo 1</div>

    <div class="row justify-content-center" id="rowModulo1">

        <div class="col-11" id="colModulo1">
            <div class="row">
                <div class="col-5"><img src="www/galeria/modulo_1.jpg" id="img1" class="img-fluid"></div>
                <div class="col-7">
                    <p id="cabecalhoModulo1"><b>O que Contém no Módulo 1?</b></p>

                    <ul>
                        <li class="conteudoModuloEsquerda">O que é Musica?<br></li>

                        <li class="conteudoModuloEsquerda">Notas Musicais<br></li>

                        <li class="conteudoModuloEsquerda">Timbre<br></li>

                        <li class="conteudoModuloEsquerda">Sustenido e Bemol<br></li>

                        <li class="conteudoModuloEsquerda">Tom e Semitom<br></li>

                        <li class="conteudoModuloEsquerda">Notas no instrumento<br></li>

                        <li class="conteudoModuloEsquerda">Questionário - <b>Módulo 1</b></li>
                    </ul>

                </div>
            </div>



        </div>
    </div>

    <div id="tagModulo2">Modulo 2</div>

    <div class="row justify-content-center" id="rowModulo2">

        <div class="col-11" id="colModulo2">
            <div class="row">
                <div class="col-7">
                    <p id="cabecalhoModulo2"><b>O que Contém no Módulo 2?</b></p>

                    <ul>
                        <li class="conteudoModuloDireita">Escalas Musicais<br></li>


                        <li class="conteudoModuloDireita">Desenho de escala alternativo<br></li>


                        <li class="conteudoModuloDireita">Graus Musicais<br></li>


                        <li class="conteudoModuloDireita">Diminuta aumentada e justa<br></li>


                        <li class="conteudoModuloDireita">Definição de Acorde<br></li>


                        <li class="conteudoModuloDireita">Tríade<br></li>


                        <li class="conteudoModuloDireita">Questionário - <b>Módulo 2</b></li>
                    </ul>

                </div>
                <div class="col-5"><img src="www/galeria/modulo_2.jpg" id="img2" class="img-fluid"></div>

            </div>



        </div>
    </div>

        <div id="tagModulo3">Modulo 3</div>

        <div class="row justify-content-center" id="rowModulo3">

            <div class="col-11" id="colModulo3">
                <div class="row">
                    <div class="col-5"><img src="www/galeria/modulo_3.jpg" id="img3" class="img-fluid"></div>
                    <div class="col-7">
                        <p id="cabecalhoModulo3"><b>O que Contém no Módulo 3?</b></p>

                        <ul>
                            <li class="conteudoModuloEsquerda">Tétrade<br></li>


                            <li class="conteudoModuloEsquerda">Graus Musicais - complementar<br></li>


                            <li class="conteudoModuloEsquerda">O que são cifras<br></li>


                            <li class="conteudoModuloEsquerda">O que é um compasso<br></li>


                            <li class="conteudoModuloEsquerda">Notação dos dedos para violão<br></li>


                            <li class="conteudoModuloEsquerda">O que é arpejo<br></li>

                            <li class="conteudoModuloEsquerda">Formação de Acordes<br></li>

                            <li class="conteudoModuloEsquerda">Questionário - <b>Módulo 3</b></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div id="tagModulo4">Modulo 4</div>

        <div class="row justify-content-center" id="rowModulo4">

            <div class="col-11" id="colModulo4">
                <div class="row">
                    <div class="col-7">
                        <p id="cabecalhoModulo4"><b>O que Contém no Módulo 4?</b></p>

                        <ul>
                            <li class="conteudoModuloDireita">Nome dos Acordes<br></li>


                            <li class="conteudoModuloDireita">Como escrever Cifras<br></li>


                            <li class="conteudoModuloDireita">Campo Harmonico<br></li>


                            <li class="conteudoModuloDireita">Termos Musicais<br></li>


                            <li class="conteudoModuloDireita">Escala Cromática<br></li>


                            <li class="conteudoModuloDireita">Improvisação Musical<br></li>

                            <li class="conteudoModuloDireita">Como fazer Segunda Voz<br></li>

                            <li class="conteudoModuloDireita">Questionário - <b>Módulo 4</b></li>
                        </ul>

                    </div>
                    <div class="col-5"><img src="www/galeria/modulo_4.jpg" id="img4" class="img-fluid"></div>

                </div>



            </div>
        </div>

    <div id="tagModulo5">Modulo 5</div>

    <div class="row justify-content-center" id="rowModulo5">

        <div class="col-11" id="colModulo5">
            <div class="row">
                <div class="col-5"><img src="www/galeria/modulo_5.jpg" id="img5" class="img-fluid"></div>
                <div class="col-7">
                    <p id="cabecalhoModulo5"><b>O que Contém no Módulo 5?</b></p>

                    <ul>
                        <li class="conteudoModuloEsquerda">Escalas Relativas<br></li>


                        <li class="conteudoModuloEsquerda">Modos Gregos<br></li>


                        <li class="conteudoModuloEsquerda">Escala Pentatônica<br></li>


                        <li class="conteudoModuloEsquerda">O que é blues<br></li>


                        <li class="conteudoModuloEsquerda">Escala Blues<br></li>


                        <li class="conteudoModuloEsquerda">Harmonia Funcional<br></li>

                        <li class="conteudoModuloEsquerda">Trítono<br></li>

                        <li class="conteudoModuloEsquerda">Questionário - <b>Módulo 5</b></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</div>
<img src="www/galeria/msg.png" id="msg" onClick="">
<div class="row">
    <div class="col-12" id="footer" style="z-index: 2;">
        <footer>
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4" style="text-align:center"><a href="metronomo/metronomo.php" style="color:white;text-decoration:none">Metronomo</a>
                </div>
                <div class="col-4"></div>
            </div>
        </footer>
    </div>
</div>
</div><!--FECHAMENTO DIV CONTAINER FLUID-->


</body>
</html>