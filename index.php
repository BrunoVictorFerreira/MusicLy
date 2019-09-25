<?php
    require_once("php/conexao.php");
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
            
                
              
            </div>
            <img src="www/galeria/msg.png" id="msg" onClick="msg()">
            <div class="row"><div class="col-12" id="footer"><footer></footer></div></div> 
        </div><!--FECHAMENTO DIV CONTAINER FLUID-->
        
    </body>
</html>