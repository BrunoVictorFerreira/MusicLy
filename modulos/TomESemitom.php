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

  $verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 1";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 85){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 85 where id_cad = $id and id_Curso = 1";
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

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="/musiclly/www/galeria/logo.png" class="img-fluid" id="logoNavBar"></a>
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
            <!-- FECHAMENTO NAVBAR ===============-->
        </div>
        <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->

        <div class='container' style='height: 1000px'>
            <!--ABERTURA DA DIV CONTAINER -->
            <div class='row'>
                <div class='col-1'>
                    <div style='height:60%;margin-top: 180%'>
                        <a href='/musiclly/modulos/OQueEMusica.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/NotasMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/Timbre.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/SustenidoEBemol.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/TomESemitom.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/NotasNoInstrumento.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_1_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.7</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>1.5 Tom e Semitom</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        <b style='color: darkorange'>O que é um tom?</b>
                        <br />Um <b>tom</b> é uma distância de dois sustenidos (ou de dois bemóis).
                        
                        <br /><b style='color: darkorange'>O que é um semitom?</b>
                        <br />Um <b>semitom</b> é uma distância de um sustenido (ou de um bemol). Por exemplo, a distância entre dó e ré é de um tom, pois entre dó e ré há uma distância de dois sustenidos (de dó para dó# e de dó# para ré). Simples, não?! Para ficar ainda mais claro, nada melhor do que uns exercícios:
                        
                        <br />Qual a distância entre as notas sol e si? Vamos conferir quantos sustenidos (<b>semitons</b>) há entre sol e si:<br />
                        
                        <br /><img src='/musiclly/www/galeria/tom.png' style='max-height: 400px'>
                        
                        <br />Logo, há 4 sustenidos de distância, totalizando 2 <b>tons</b>. Agora que você já sabe dizer a distância entre as notas, tente encontrar a distância entre ré e fá. Depois confira abaixo.
                        
                        <br /><img src='/musiclly/www/galeria/semitom.png' style='max-height: 400px'>
                        
                        <br />Logo, a distância é de um tom e meio.
                        
                        <br />Obs: um tom e meio = um tom + um semitom.
                        
                        <br />Nos instrumentos: violão, guitarra, baixo, cavaquinho, ukulelê, entre outros, cada casa do braço do instrumento corresponde a um semitom.
                        </fieldset>
                    </p>
                    <div class='row'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/NotasNoInstrumento.php' class='proximo'>Ir para 1.6(Notas No Instrumento) >></a></div>
                    </div>
                </div>
            </div>
            </div>
            ";
        }
        ?>




    
        <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
        <div class="row">
            <div class="col-12" id="footer">
                <footer></footer>
            </div>
        </div>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>