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
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 3";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 100){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 60 where id_cad = $id and id_Curso = 3";
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
            
                <?php
                
                $sqlImg = "SELECT * from cadastro where id= $id";
                $resultImg = mysqli_query($conn, $sqlImg);
                $row = mysqli_fetch_assoc($resultImg);
                $img = $row['imagem'];
                
                if (!isset($_SESSION['usuario'])) {
                    echo "<!--NAV BAR ======================-->
                    <nav class='navbar navbar-expand-lg navbar-light'>
                        <a class='navbar-brand' href='#'><img src='/musiclly/www/galeria/logo.png' class='img-fluid' id='logoNavBar'></a>
                        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button>
            <div class='collapse navbar-collapse' id='navbarNavAltMarkup'>
              <div class='navbar-nav'>
                
                <a class='nav-item nav-link' href='#' id='contatoNavBar'><button type='button' class='btn' style='color:#1778aa'>Contato</button></a>
                <a class='nav-item nav-link' href='#' id='entrarNavBar'><button type='button' class='btn' style='color:#f27d16'>Entrar</button></a>
                <a class='nav-item nav-link' href='#' id='cadastrarNavBar'><button type='button' class='btn btn-warning' id='cadastrarNavBarButton'>Cadastrar</button></a>
                
              </div>
              
            </div></nav><fieldset style='width: 60% ;margin-top: 20%;margin-left:15%;background-color:white;border: 2px solid red;border-radius:15px;padding:15px'><img src='/musiclly/www/galeria/cadeado.png' style='margin-left:35%'><p style='text-align:center;font-size:50px;font-family: roboto;color:red;font-weight: bold'>Conteúdo BLOQUEADO!</p><a href='/musiclly/logar.php' style='text-decoration:none' id='linkCadeado'><p style='text-align:center;font-size:20px;font-family: roboto;color:darkorange;font-weight: bold'>Entre Para Desbloquear o Conteúdo!</p></a></fieldset></div>";
                } else {

                    echo "
                    <!--NAV BAR ======================-->
                    <nav class='navbar navbar-expand-lg navbar-light'>
                        <a class='navbar-brand' href='#'><img src='/musiclly/www/galeria/logo.png' class='img-fluid' id='logoNavBar'></a>
                        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNavAltMarkup' aria-controls='navbarNavAltMarkup' aria-expanded='false' aria-label='Toggle navigation'>
                            <span class='navbar-toggler-icon'></span>
                        </button><div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                            <a class='nav-item nav-link' href='#' id='contatoNavBar' style='color:#1778aa;margin-left: 320px'>Contato</a>
                            <a class='nav-item nav-link' href='index.php' id='entrarNavBar' style='color:#1778aa;'>Home</a>
                            <a class='nav-item nav-link' href='cadastro.php' id='cadastrarNavBar' style='color:#1778aa;'>Cursos</a>
                            
                            <div style='background-color:#fafdff;z-index:2'><a class='nav-item nav-link' id='menuUsuario' href='#' style='margin-left: 300px;display:inline-block'>$usuario<img src='/musiclly/".$img."' style='margin-left: 3%;max-width: 35%;border-radius: 10%;max-height: 35%'></a></div>
                            
                            <div id='menuUsuarioExpandido' style='background-color:#fafdff;border:1px solid #1778aa;height: 250px;width: 15%;position:absolute;z-index:1;margin-left: 70%;margin-top: 5%;border-radius: 5px'>
          <a href='/musiclly/painel.php' style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Meu Perfil</a>
          <a href='/musiclly/alterar_senha.php' style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Senha</a>
          <a href='/musiclly/alterar_usuario' style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Usuário</a>
          <a href='/musiclly/alterar_email' style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Email</a>
          <a href='/musiclly/notas.php' style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Notas</a>
          <a href='/musiclly/logout.php' style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Logout</a>
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
                    <a href='/musiclly/modulos/Tetrade.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/GrausMusicaisComplementar.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/OQueSaoCifras.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/OQueEUmCompasso.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/NotacaoDosDedosParaViolao.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/OQueEArpejo.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/FormacaoDeAcordes.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.7</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_3_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.8</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>3.4 O que é um compasso</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        <b style='color:darkorange'>O que é um compasso?</b>
                            <br />Um compasso é uma forma de dividir quantitativamente em grupos os sons de uma composição musical. Os compassos facilitam a execução musical, ao definir a unidade de tempo, o pulso e o ritmo da composição ou de partes dela.

                            <br /><br />O significado de compasso pode se resumir a uma divisão de uma música em partes menores igualmente espaçadas. Essa divisão se baseia no tempo (andamento) da música.

                            <br /><br />Na partitura, os compassos são representados como linhas verticais desenhadas sobre a pauta.  Para quem não sabe partitura, vamos dar uma definição mais simplista: compasso é um intervalo de tempo. Acordes que possuem a mesma duração (ficam a mesma quantidade de tempo) na música, ficam divididos por compassos iguais.

                            <br /><br />Quando um acorde, nesse caso, dura a metade do tempo dos outros acordes, dizemos que ele durou meio compasso.

                            <br /><br />Os compassos representam uma outra forma de se escrever o acompanhamento dos acordes de uma música, além da já mencionada cifra. Nesse caso, a representação dos compassos é feita por meio de barras “| |”. A diferença é que a letra da música não precisa aparecer, já que a duração de cada acorde na música vai ser especificada por meio dos compassos. Por exemplo, observe esse trecho:

                                <br /><br />C

                                <br />Atirei o pau no gato – to

                                <br /><br />            Dm

                                <br /> Mas o gato – to

                                <br /><br />                C

                                <br />Não Morreu – reu – reu

                                <br /><br />Ao utilizar os compassos, poderíamos escrever esse mesmo treco da seguinte forma:

                                    <br />| C | C | Dm | C |

                                    <br /><br /><b style='color:darkorange'>Significado do compasso substituindo a cifra</b>
                                    <br />Note que o acorde de Dó apareceu duas vezes consecutivas no início, pois ele durou dois compassos (o dobro do tempo do acorde Dm). É dessa forma que os compassos representam os tempos na notação simplificada. 
                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/NotacaoDosDedosParaViolao.php' class='proximo'>Ir para 3.5(Notação Dos Dedos Para Violão) >></a></div>
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