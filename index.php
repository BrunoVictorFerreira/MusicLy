<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');
session_start();
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
}
?>
<html lang="pt_br">
<head>
    <!-- STYLES =========================================-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--METAS   =========================================-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <!-- BOOTSTRAP CSS =========================================-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- BOOTSTRAP JS =========================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <!--SCRIPTS JS-->
    <script>
        function msg() {
            location.href = '#';
        }

        var i = 1;


        $(document).ready(function () {
            $('#menuUsuarioExpandido').hide();

            $("#menuUsuario").click(function () {
                $("#menuUsuarioExpandido").slideToggle("slow");
            });

            $('.cursoDe1').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $('.instrumento1').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $('.imgMenu1').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });

            $('.cursoDe2').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $('.instrumento2').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $('.imgMenu2').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });

            $('.cursoDe3').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $('.instrumento3').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $('.imgMenu3').mouseenter(function () {
                $(this).css({'filter': 'brightness(60%)'});
            }).mouseout(function () {
                $(this).css({'filter': 'brightness(100%)'});
            });
            $(window).scroll(function(){
                var topo = $(window).scrollTop();
                if(topo > 100){
                    $('#display').fadeIn('5000');
                }else{
                    $('#display').fadeOut('5000');
                }
            });

        });

        function redirecionar(){
            window.location.href="/musiclly/painel.php";
        }
        function redirecionar2(){
            window.location.href="/musiclly/cadastro.php";
        }
    </script>
    <style>
        @keyframes heartbeat {
            from {
                transform: scale(1);
                transform-origin: center center;
                animation-timing-function: ease-out;
                transform: rotate(0deg);
            }
            10% {
                transform: scale(.98);
                transform: rotate(2deg);
                animation-timing-function: ease-in;
            }
            17% {
                transform: scale(.97);
                transform: rotate(2.5deg);
                animation-timing-function: ease-out;

            }
            33% {
                transform: scale(.98);
                transform: rotate(2deg);
                animation-timing-function: ease-in;
            }
            45% {
                transform: scale(1);
                transform: rotate(0deg);
                animation-timing-function: ease-out;
            }
        }

        @keyframes heartbeat2 {
            from {
                transform: scale(1);
                transform-origin: center center;
                animation-timing-function: ease-out;
                transform: rotate(0deg);
            }
            10% {
                transform: scale(.98);
                transform: rotate(-2deg);
                animation-timing-function: ease-in;
            }
            17% {
                transform: scale(.97);
                transform: rotate(-2.5deg);
                animation-timing-function: ease-out;

            }
            33% {
                transform: scale(.98);
                transform: rotate(-2deg);
                animation-timing-function: ease-in;
            }
            45% {
                transform: scale(1);
                transform: rotate(0deg);
                animation-timing-function: ease-out;
            }
        }

        #spanCursos {
            font-size: 60px;
            font-weight: bold;
            text-transform: uppercase;
            color: #f78726;


        }

        .backMenuExpandido:hover {
            background-color: rgba(23, 120, 170, .2);
        }

        #img1 {
            max-width: 100%;


            box-shadow: 4px 5px rgba(0, 0, 0, .3);
            margin-left: 5%;
            margin-top: 17%;
            animation: heartbeat 15s ease-in-out infinite both;
        }

        #img2 {
            max-width: 100%;

            margin-top: 20%;
            margin-left: 20%;
            box-shadow: 4px 5px rgba(0, 0, 0, .3);

            animation: heartbeat2 15s ease-in-out infinite both;
        }

        #img3 {
            max-width: 100%;

            margin-top: 2%;
            margin-left: 35%;
            animation: heartbeat 15s ease-in-out infinite both;
            box-shadow: 4px 5px rgba(0, 0, 0, .3);

        }

        #img4 {
            max-width: 100%;

            margin-left: 50%;
            margin-top: 16%;
            animation: heartbeat2 15s ease-in-out infinite both;
            box-shadow: 4px 5px rgba(0, 0, 0, .3);

        }

        #img5 {
            max-width: 100%;

            margin-left: 70%;
            margin-top: 3%;
            animation: heartbeat 15s ease-in-out infinite both;
            box-shadow: 4px 5px rgba(0, 0, 0, .3);

        }

        #menuzin {
            height: 100px;
            width: 100px;
            background-color: #1778b2;
            border-radius: 0px 50px 50px 0px;
            transition: all 500ms;
        }

        #menuzin:hover {
            height: 100px;
            width: 100px;
            background-color: #f78726;
            transition: all 500ms;
            border-radius: 50px 0px 0px 50px;
        }
        .liBlue{
            background-color: rgba(23,120,170,.2);
            width: 65%;
            font-family: roboto;
            color: #1778b2;
            margin-top: 1%;
        }
        .liBlueA{
            background-color: rgba(23,120,170,.2);
            width: 57%;
            font-family: roboto;
            color: #1778b2;
            margin-top: 1%;

        }
        #display{
            width: 10%;
            height: 25px;
            background-color: #1778aa;
            border-radius: 0px 0px 30px 30px;
            margin-left: 45%;
            position: fixed;
            z-index: 1;
            display:none;
            cursor : pointer;
        }
        #texto1{
            transform: rotate(0deg);
        }
        #texto2{
             transform: rotate(-2deg);
         }
        #texto3{
            transform: rotate(0deg);
        }
        #hr{
            background-color: #1778aa;
            width: 20%;
            margin-top: 2%;
            transform: rotate(-2deg);
            margin-bottom: 0px;

        }

        #hr3{
            background-color: #1778aa;
            width: 20%;
            transform: rotate(2deg);
            margin-top: -5px;

        }
        .circulo1{
            height: 20px;
            width: 20px;

            background-color: #1778aa;
            border-radius: 100%;
            display: inline-block;
            margin-left: 46%;


        }
        .circulo2{
            height: 20px;
            width: 20px;
            background-color: #f27d16;
            border-radius: 100%;
            display: inline-block;
            margin-bottom: 0px;
            margin-left: 2%;
        }
        .circulo3{
            height: 20px;
            width: 20px;
            background-color: #1778aa;
            border-radius: 100%;
            display: inline-block;
            margin-bottom: 0px;
            margin-left: 2%;

        }




    </style>


</head>
<body style="background-image: url('www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">

<?php
$sqlImg = "SELECT * from cadastro where id=$id";
$resultImg = mysqli_query($conn, $sqlImg);
$row = mysqli_fetch_assoc($resultImg);
$img = $row['imagem'];
?>
<?php if(isset($_SESSION['usuario'])){?>
        <div id="display" onClick="redirecionar()">

            <?php echo "<h6 style='z-index:2;display:inline-block;margin-left: 7%;font-size: 12px;color:white;font-family:roboto;text-transform: uppercase'>".substr($usuario,0,5)."</h6>"; ?>
            <h6 style='z-index:2;margin-top: 2px;display:inline-block;margin-left: 7%;font-weight:bold;color:white;font-family:roboto;text-transform: uppercase''>Painel</h6>
    <img src="<?php echo $img ?>" style="max-width: 20px;margin-left:1.5%;margin-top: 3px;position:fixed;border-radius: 5%;"></div><?php }else{?>
            <div id="display" onClick="redirecionar2()">
                <h6 align="center" style='z-index:2;margin-top: 2px;font-weight:bold;color:white;font-family:roboto;text-transform: uppercase' onclick="">Cadastre-se</h6>
            <?php }?>
            </div>

<div class="container-fluid">



    <div class="container">
        <!--NAV BAR ======================-->
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="www/galeria/logo.png" class="img-fluid" id="logoNavBar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                             aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            $sqlImg = "SELECT * from cadastro where id=$id";
            $resultImg = mysqli_query($conn, $sqlImg);
            $row = mysqli_fetch_assoc($resultImg);
            $img = $row['imagem'];
            $qtdLetras = substr_count($row['usuario']);
            if (isset($_SESSION['usuario'])) {
                echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='/musiclly/cursos.php' id='entrarNavBar' style='margin-left: 280px'><div id='divMenu1'>Cursos</div></a>
                    <a class='nav-item nav-link' href='/musiclly/index.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu2'>Inicio</div></a>
                    <a class='nav-item nav-link' href='/musiclly/contato.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu3'>Contato</div></a>

                    

                    <div style='background-color:#fafdff;z-index:2'>
                        <a class='nav-item nav-link' id='menuUsuario' href='#' style='margin-left: 240px;margin-top: 0.5%;display:inline-block;text-transform: uppercase;font-family: roboto'>".substr($usuario,0,6)."<img src='" . $img . "' style='margin-left: 3%;max-width: 35%;border-radius: 10%;max-height: 35%'>
                        </a>
                    </div>";
            } else {
                echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='/musiclly/cursos.php' id='entrarNavBar' style='margin-left: 230px'><div id='divMenu1'>Cursos</div></a>
                    <a class='nav-item nav-link' href='/musiclly/index.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu2'>Inicio</div></a>
                    <a class='nav-item nav-link' href='/musiclly/contato.php' id='entrarNavBar' style='margin-left: 10px;'><div id='divMenu3'>Contato</div></a>

                    

                    <div style='background-color:#fafdff;z-index:2'>
                        <a class='nav-item nav-link' id='menuUsuario' href='/musiclly/logar.php' style='color:#1778b2;margin-left: 210px;margin-top: 0.5%;display:inline-block;font-family: roboto'>Login</a>
                        <a class='nav-item nav-link'  href='/musiclly/cadastro.php' style='color:#f78726;display:inline-block;margin-top: 0.5%;font-family: roboto'>Cadastro</a>
                    </div>";
            }

            ?>
            <div id="menuUsuarioExpandido"
                 style="background-color:#fafdff;border:1px solid #1778aa;height: 250px;width: 15%;position:absolute;z-index:1;margin-left: 71%;margin-top: 5%;border-radius: 5px">
                <a href="/musiclly/painel.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Meu Perfil</a>
                <a href="/musiclly/alterar_senha.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Alterar Senha</a>
                <a href="/musiclly/alterar_usuario"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Alterar Usuário</a>
                <a href="/musiclly/alterar_email"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Alterar Email</a>
                <a href="/musiclly/notas.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Notas</a>
                <a href="/musiclly/logout.php"
                   style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa'
                   class='backMenuExpandido'>Logout</a>
            </div>

        </nav>

    </div>

    <div class="row" style="height: 60%;background-color:rgba(0,0,0,.1)">
        <div class="col-12">

            <div class="row justify-content-center" style="margin-top: 2%">
                <div class="col-3">
                    <img src="/musiclly/www/galeria/relogio.png" style="max-width: 100px;margin-left: auto;margin-right: auto;display: block"><br>
                    <div style="background-color:#e1e3e5" id="texto1"><span><p align="center" style="text-align: justify;font-family: Raleway;font-size: 18px;color: #1778aa">Você pode estudar a qualquer hora e a qualquer dia, podendo dar descanços entre aulas e até mesmo pausando uma aula e voltando no outro dia.</p></span></div>

                </div>
                <div class="col-3">
                    <img src="/musiclly/www/galeria/cerebro.png" style="max-width: 100px;margin-left: auto;margin-right: auto;display: block"><br>
                <div style="background-color:lightgray" id="texto2"><span><p align="center" style="text-align: justify;font-family: Raleway;font-size: 16px;color: #1778aa">Para que se tenha um bom desenvolvimento do estudo da música,
                        tanto para instrumentos quanto para a educação da voz,
                        desenvolvemos uma metodologia baseada no que existe de mais moderno no cenário musical.
                            </p></span></div>
                </div>
                <div class="col-3">
                    <img src="/musiclly/www/galeria/cifrao.png" style="max-width: 100px;margin-left: auto;margin-right: auto;display: block"><br>
                    <div style="background-color:#e1e3e5" id="texto3"><span><p align="center" style="text-align: justify;font-family: Raleway;font-size: 18px;color: #1778aa">Conteúdo totalmente Gratuito e acessível a todos que tenham conexão a internet.</p></span></div>
                </div>

            </div>
            <hr id="hr">
            <div class="circulo1"></div>
            <div class="circulo2"></div>
            <div class="circulo3"></div>
            <hr id="hr3">

            <div class="row justify-content-center" style="margin-top: 2%">
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>
                <div class="col-3">

                </div>

            </div>
            <div style="height: 120px;"></div>

            <div class="row justify-content-center">
                <div class="col-1">
                    <img src="/musiclly/www/galeria/gibson.png" style="max-width: 120px;margin-left:auto;margin-right: auto;display: block">
                </div>


                <div class="col-1">
                    <img src="/musiclly/www/galeria/fender.png" style="max-width: 120px;margin-left:auto;margin-right: auto;display: block">
                </div>


                <div class="col-1">
                    <img src="/musiclly/www/galeria/gianini.png" style="max-width: 120px;margin-left:auto;margin-right: auto;display: block">
                </div>


                <div class="col-1">
                    <img src="/musiclly/www/galeria/ddario.png" style="max-width: 120px;margin-left:auto;margin-right: auto;display: block">
                </div>
            </div>
        </div>
    </div>


    <div class="container" style="height: 1000px"><!--ABERTURA DA DIV CONTAINER -->
        <img src="www/galeria/separador.png" class="img-fluid" style="max-width: 70%;margin-left:auto;margin-right:auto;display:block">

        <div class="row justify-content-md-center" style="padding:30px" )
        ">

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


    <img src="www/galeria/separador.png" class="img-fluid" style="max-width: 70%;margin-left:auto;margin-right:auto;display:block">
    <div style="background-color:darkorange;z-index:1;border-radius: 15px 30px 5px 30px;padding: 15px;float:left;width: 6%;font-family: roboto;position:absolute;font-weight:bold;color:white">Modulo 1</div>

    <div class="row justify-content-center" style="margin-top: 2%;width: 80%">

        <div class="col-11" style="border: 1px solid #1778aa;border-radius: 0px 20px 5px 10px ">
            <div class="row">
                <div class="col-5"><img src="www/galeria/modulo_1.jpg" id="img1" class="img-fluid"></div>
                <div class="col-7">
                    <p style="font-size: 20px;color: #1778aa"><b>O que Contém no Módulo 1?</b></p>

                    <ul>
                        <li class="liBlueA">O que é Musica?<br></li>

                        <li class="liBlueA">Notas Musicais<br></li>

                        <li class="liBlueA">Timbre<br></li>

                        <li class="liBlueA">Sustenido e Bemol<br></li>

                        <li class="liBlueA">Tom e Semitom<br></li>

                        <li class="liBlueA">Notas no instrumento<br></li>

                        <li class="liBlueA">Questionário - <b>Módulo 1</b></li>
                    </ul>

                </div>
            </div>



        </div>
    </div>

    <div style="background-color:darkorange;z-index:1;margin-top: 0%;margin-left: 52%;border-radius: 30px 15px 30px 5px;padding: 15px;width: 6%;font-family: roboto;position:absolute;font-weight:bold;color:white">Modulo 2</div>

    <div class="row justify-content-center" style="margin-top:2%;margin-bottom: 2%;width: 72%;float: right">

        <div class="col-11" style="border: 1px solid #1778aa;border-radius: 0px 20px 5px 10px ">
            <div class="row">
                <div class="col-7">
                    <p style="font-size: 20px;color: darkorange"><b>O que Contém no Módulo 2?</b></p>

                    <ul>
                        <li class="liBlue">Escalas Musicais<br></li>


                        <li class="liBlue">Desenho de escala alternativo<br></li>


                        <li class="liBlue">Graus Musicais<br></li>


                        <li class="liBlue">Diminuta aumentada e justa<br></li>


                        <li class="liBlue">Definição de Acorde<br></li>


                        <li class="liBlue">Tríade<br></li>


                        <li class="liBlue">Questionário - <b>Módulo 2</b></li>
                    </ul>

                </div>
                <div class="col-5"><img src="www/galeria/modulo_2.jpg" id="img1" class="img-fluid"></div>

            </div>



        </div>
    </div>

        <div style="background-color:darkorange;z-index:1;border-radius: 15px 30px 5px 30px;padding: 15px;width: 6%;font-family: roboto;position:absolute;margin-top: 14%;font-weight:bold;color:white">Modulo 3</div>

        <div class="row justify-content-center" style="margin-top: 25%;width: 80%">

            <div class="col-11" style="border: 1px solid #1778aa;border-radius: 0px 20px 5px 10px ">
                <div class="row">
                    <div class="col-5"><img src="www/galeria/modulo_3.jpg" id="img1" class="img-fluid"></div>
                    <div class="col-7">
                        <p style="font-size: 20px;color: #1778aa"><b>O que Contém no Módulo 3?</b></p>

                        <ul>
                            <li class="liBlueA">Tétrade<br></li>


                            <li class="liBlueA">Graus Musicais - complementar<br></li>


                            <li class="liBlueA">O que são cifras<br></li>


                            <li class="liBlueA">O que é um compasso<br></li>


                            <li class="liBlueA">Notação dos dedos para violão<br></li>


                            <li class="liBlueA">O que é arpejo<br></li>

                            <li class="liBlueA">Formação de Acordes<br></li>

                            <li class="liBlueA">Questionário - <b>Módulo 3</b></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

        <div style="background-color:darkorange;z-index:1;margin-top: 0%;margin-left: 52%;border-radius: 30px 15px 30px 5px;padding: 15px;width: 6%;font-family: roboto;position:absolute;font-weight:bold;color:white">Modulo 4</div>

        <div class="row justify-content-center" style="margin-top:2%;margin-bottom: 2%;width: 72%;float: right">

            <div class="col-11" style="border: 1px solid #1778aa;border-radius: 0px 20px 5px 10px ">
                <div class="row">
                    <div class="col-7">
                        <p style="font-size: 20px;color: darkorange"><b>O que Contém no Módulo 4?</b></p>

                        <ul>
                            <li class="liBlue">Nome dos Acordes<br></li>


                            <li class="liBlue">Como escrever Cifras<br></li>


                            <li class="liBlue">Campo Harmonico<br></li>


                            <li class="liBlue">Termos Musicais<br></li>


                            <li class="liBlue">Escala Cromática<br></li>


                            <li class="liBlue">Improvisação Musical<br></li>

                            <li class="liBlue">Como fazer Segunda Voz<br></li>

                            <li class="liBlue">Questionário - <b>Módulo 4</b></li>
                        </ul>

                    </div>
                    <div class="col-5"><img src="www/galeria/modulo_4.jpg" id="img1" class="img-fluid"></div>

                </div>



            </div>
        </div>

    <div style="background-color:darkorange;z-index:1;border-radius: 15px 30px 5px 30px;padding: 15px;width: 6%;font-family: roboto;position:absolute;margin-top: 15.5%;font-weight:bold;color:white">Modulo 5</div>

    <div class="row justify-content-center" style="margin-top: 20%;width: 80%">

        <div class="col-11" style="border: 1px solid #1778aa;border-radius: 0px 20px 5px 10px ">
            <div class="row">
                <div class="col-5"><img src="www/galeria/modulo_5.jpg" id="img1" class="img-fluid"></div>
                <div class="col-7">
                    <p style="font-size: 20px;color: #1778aa"><b>O que Contém no Módulo 5?</b></p>

                    <ul>
                        <li class="liBlueA">Escalas Relativas<br></li>


                        <li class="liBlueA">Modos Gregos<br></li>


                        <li class="liBlueA">Escala Pentatônica<br></li>


                        <li class="liBlueA">O que é blues<br></li>


                        <li class="liBlueA">Escala Blues<br></li>


                        <li class="liBlueA">Harmonia Funcional<br></li>

                        <li class="liBlueA">Trítono<br></li>

                        <li class="liBlueA">Questionário - <b>Módulo 5</b></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>




<!--    <div class="row justify-content-center" style="margin-top: 20px">-->
<!--        <div class="col-10">-->
<!---->
<!--        </div>-->
<!--        <div class="col-2">-->
<!--            <div style="height: 20px;width: 20px;border-radius: 100%;background-color: #1778aa;margin-right:10px;display:inline-block"></div>-->
<!--            <div style="height: 20px;width: 20px;border-radius: 100%;background-color: #f78726;margin-right:10px;display:inline-block"></div>-->
<!--            <div style="height: 20px;width: 20px;border-radius: 100%;background-color: #1778aa;display:inline-block"></div>-->
<!--        </div>-->
<!---->
<!---->
<!--    </div>-->
<!---->
<!---->
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