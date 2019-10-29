<?php
    error_reporting(0);
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once($serve_file.'php/banco.php');
    session_start();
    if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- BOOTSTRAP JS =========================================-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!--FONTES ================================================-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        <!--SCRIPTS JS-->
        <script>
           function msg(){
                location.href = '#';
           }
           
        </script>
        <style>
            @keyframes heartbeat{
                from{transform:scale(1);
                    transform-origin:center center;
                    animation-timing-function:ease-out;
                    transform: rotate(0deg);
                }10%{
                    transform:scale(.98);
                    transform: rotate(2deg);
                    animation-timing-function:ease-in;
                }17% {
                    transform:scale(.97);
                    transform: rotate(2.5deg);
                    animation-timing-function:ease-out;

                }33%{
                    transform:scale(.98);
                    transform: rotate(2deg);
                    animation-timing-function:ease-in;
                }45%{
                    transform:scale(1);
                    transform: rotate(0deg);
                    animation-timing-function:ease-out;
                }
            }
            @keyframes heartbeat2{
                from{transform:scale(1);
                    transform-origin:center center;
                    animation-timing-function:ease-out;
                    transform: rotate(0deg);
                }10%{
                     transform:scale(.98);
                     transform: rotate(-2deg);
                     animation-timing-function:ease-in;
                 }17% {
                      transform:scale(.97);
                      transform: rotate(-2.5deg);
                      animation-timing-function:ease-out;

                  }33%{
                       transform:scale(.98);
                       transform: rotate(-2deg);
                       animation-timing-function:ease-in;
                   }45%{
                        transform:scale(1);
                        transform: rotate(0deg);
                        animation-timing-function:ease-out;
                    }
            }
            #spanCursos{
                font-size: 60px;
                font-weight: bold;
                text-transform: uppercase;
                color: #f78726;


            }

            #img1{
                max-width: 100%;
                position:absolute;
                margin-top: 5%;
                box-shadow: 4px 5px rgba(0,0,0,.3);
                margin-left: 5%;

                animation: heartbeat 15s ease-in-out infinite both;
            }
            #img2{
                max-width: 100%;
                position:absolute;
                margin-top: 20%;
                margin-left: 20%;
                box-shadow: 4px 5px rgba(0,0,0,.3);

                animation: heartbeat2 15s ease-in-out infinite both;
            }
            #img3{
                max-width: 100%;
                position:absolute;
                margin-top: 2%;
                margin-left: 35%;
                animation: heartbeat 15s ease-in-out infinite both;
                box-shadow: 4px 5px rgba(0,0,0,.3);

            }
            #img4{
                max-width: 100%;
                position:absolute;
                margin-left: 50%;
                margin-top: 16%;
                animation: heartbeat2 15s ease-in-out infinite both;
                box-shadow: 4px 5px rgba(0,0,0,.3);

            }
            #img5{
                max-width: 100%;
                position:absolute;
                margin-left: 70%;
                margin-top: 3%;
                animation: heartbeat 15s ease-in-out infinite both;
                box-shadow: 4px 5px rgba(0,0,0,.3);

            }
        </style>
    </head>
    <body style="background-image: url('www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">
        <div class="container-fluid">
            <!--CLASSE CONTAINER =======================-->    
            <div class="container">
        <!--NAV BAR ======================-->       
        <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="www/galeria/logo.png"class="img-fluid" id="logoNavBar"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                
                  
                    
                    <?php
                        if(!isset($_SESSION['usuario'])){
                    echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='#' id='contatoNavBar'><button type='button' class='btn' style='color:#1778aa'>Contato</button></a>
                    <a class='nav-item nav-link' href='logar.php' id='entrarNavBar'><button type='button' class='btn' style='color:#f27d16'>Entrar</button></a>
                    <a class='nav-item nav-link' href='cadastro.php' id='cadastrarNavBar'><button type='button' class='btn btn-warning' id='cadastrarNavBarButton'>Cadastrar</button></a>";
                        }else{
                            echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                            <a class='nav-item nav-link' style='margin-left: 800px;font-family:roboto;'></a>
                            <a class='nav-item nav-link' href='logout.php' style='color:black'>Logout</a>
                            <a class='nav-item nav-link' href='painel.php' style='color:black'>$usuario</a>";
                        }
                    ?>
                  </div>
                </div>
        </nav>
        <!-- FECHAMENTO NAVBAR ===============-->
        </div> <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->
        <div class="container">
            <p id="logoTexto">Music<b id="logoTexto1">lly</b></p>
            <p id="descSite">Curso de <b id="descSite2">Música</b></p>





        </div>



                <div class="row justify-content-md-center" style="padding:30px;background-color: rgba(23,120,170,.1)">
                    
                    <div class="col-3">
                        <div id="guitarraOptionDiv"><img src="www/galeria/guitar.png" style="margin-top: 7px;max-width: 80px;margin-left: auto;margin-right:auto;display:block"><p style="display:block;font-family: 'Montserrat', sans-serif;text-align:center;margin-top: 7px;letter-spacing: 1px;color:#1778aa">Curso de </p><p style="margin-top: -20px;display:block;font-size: 25px;font-family: 'Montserrat', sans-serif;font-weight:bold;text-align:center;letter-spacing: 4px;color:
                            #f27d16">Guitarra</p></div>
                    </div>
                   
                    <div class="col-3">
                        <div id="violaoOptionDiv"><img src="www/galeria/violao.png" style="margin-top: 7px;max-width: 80px;margin-left: auto;margin-right:auto;display:block"><p style="display:block;font-family: 'Montserrat', sans-serif;text-align:center;margin-top: 7px;letter-spacing: 1px;color:#1778aa">Curso de </p><p style="margin-top: -20px;display:block;font-size: 25px;font-family: 'Montserrat', sans-serif;font-weight:bold;text-align:center;letter-spacing: 4px;color:
                            #f27d16">Violão</p></div>
                    </div>
                    <div class="col-3">
                        <div id="baixoOptionDiv"><img src="www/galeria/baixo.png" style="margin-top: 7px;max-width: 80px;margin-left: auto;margin-right:auto;display:block"><p style="display:block;font-family: 'Montserrat', sans-serif;text-align:center;margin-top: 7px;letter-spacing: 1px;color:#1778aa">Curso de </p><p style="margin-top: -20px;display:block;font-size: 25px;font-family: 'Montserrat', sans-serif;font-weight:bold;text-align:center;letter-spacing: 4px;color:
                            #f27d16">Baixo</p></div>
                    </div>
            </div>

        
        

         
        <div class="container" style="height: 1000px"><!--ABERTURA DA DIV CONTAINER -->
            
                
            <img src="www/galeria/separador.png" class="img-fluid">
            <div class="row" style="height: 300px">
                <div class="col-3" style="padding-top: 8%"><span id="spanCursos">Cursos</span></div>
                <div class="col-9" style="border: 1px solid #1778aa;border-radius: 50px 10px ">
                    <img src="www/galeria/modulo_1.jpg" id="img1" class="img-fluid">
                    <img src="www/galeria/modulo_2.jpg" id="img2" class="img-fluid">
                    <img src="www/galeria/modulo_3.jpg" id="img3" class="img-fluid">
                    <img src="www/galeria/modulo_4.jpg" id="img4" class="img-fluid">
                    <img src="www/galeria/modulo_5.jpg" id="img5" class="img-fluid">

                </div>
            </div>
            <div class="row justify-content-center" style="margin-top: 20px">
                <div class="col-10">

                </div>
                <div class="col-2">
                    <div style="height: 20px;width: 20px;border-radius: 100%;background-color: #1778aa;margin-right:10px;display:inline-block"></div>
                    <div style="height: 20px;width: 20px;border-radius: 100%;background-color: #f78726;margin-right:10px;display:inline-block"></div>
                    <div style="height: 20px;width: 20px;border-radius: 100%;background-color: #1778aa;display:inline-block"></div>
                </div>


            </div>
            
                
              
            </div>
            <img src="www/galeria/msg.png" id="msg" onClick="msg()">
            <div class="row"><div class="col-12" id="footer"><footer>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4" style="text-align:center"><a href="metronomo/metronomo.php" style="color:white;text-decoration:none">Metronomo</a></div>
                    <div class="col-4"></div>
                </div>
            </footer></div></div> 
        </div><!--FECHAMENTO DIV CONTAINER FLUID-->
        
    </body>
</html>