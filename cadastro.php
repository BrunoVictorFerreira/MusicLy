<?php
  error_reporting(0);
  $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
  session_save_path($serve_file.'cache/temp');
  session_start();
  include_once($serve_file.'php/banco.php');

?>
<html lang="pt_br">
    <head>
        <!-- STYLES =========================================-->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--METAS   =========================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <!-- BOOTSTRAP CSS =========================================-->
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- BOOTSTRAP JS =========================================-->
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

           $(document).ready(function(){
             
             $('#senhaNov, #senha').focusout(function(){
             
             if($('#senhaNov').val() == $('#senha').val() || $('#senha').val() == $('#senhaNov').val()){
              $('#textoSenha').html('');
             }
             else{
              $('#textoSenha').html('<span id="senhaText">Senhas Não Correspondentes!</span>');
              $('#senhaText').css({color: 'red','font-family':'roboto','font-size':'15px','margin':'0 auto'});
              
             }
            });
           });
           
        </script>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="requisicaoAjax.js"></script>

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
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                  <div class="navbar-nav">
                    
                    <a class="nav-item nav-link" href="#" id="contatoNavBar"><button type="button" class="btn" style="color:#1778aa">Contato</button></a>
                    <a class="nav-item nav-link" href="#" id="entrarNavBar"><button type="button" class="btn" style="color:#f27d16">Entrar</button></a>
                    <a class="nav-item nav-link" href="#" id="cadastrarNavBar"><button type="button" class="btn btn-warning" id="cadastrarNavBarButton">Cadastrar</button></a>
                    
                  </div>
                </div>
        </nav>
        <!-- FECHAMENTO NAVBAR ===============-->
        </div> <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->
       
        

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-6">
              <fieldset style="border: 1px solid rgba(13,82,189,.2);padding: 10px;border-radius: 10px;border-top: 0px"><legend><fieldset style="border: 1px;background-color: #1778aa;width: 30%;border-radius: 5px;margin-bottom: 8%;margin-left:auto;margin-right:auto"><p class="h5 text-center" style="color: white;font-family: roboto;">Cadastro</p></fieldset></legend>
              <form action="php/cadastro_code.php" id="form" method="POST">

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm" style="width:130px;background-color: #1778aa;color:white;border: 0;font-family: roboto;font-weight: bold">Nome</span>
                    </div>
                    <input type="text" class="form-control" required="true" id="nome" name="nome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                  </div>

                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm" style="width:130px;background-color: #1778aa;color:white;border: 0;font-family: roboto;font-weight: bold">Sobrenome</span>
                    </div>
                    <input type="text" class="form-control" required="true" id="sobrenome" name="sobrenome" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                  </div>

                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm" style="width:130px;background-color: #1778aa;color:white;border: 0;font-family: roboto;font-weight: bold">Email</span>
                    </div>
                    <input type="text" class="form-control" required="true" id="email" name="email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                  </div>

                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm" style="width:130px;background-color: #1778aa;color:white;border: 0;font-family: roboto;font-weight: bold">Usuário</span>
                    </div>
                    


                    <input type="text" class="form-control" required="true" id="usuario" name="usuario" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    



                  </div>
                  <div id="resultado"></div>
                  

                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm" style="width:130px;background-color: #1778aa;color:white;border: 0;font-family: roboto;font-weight: bold">Senha</span>
                    </div>
                    <input type="password" class="form-control" required="true" id="senha" name="senha" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                  </div>
                  
                  <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-sm" style="width:130px;background-color: #1778aa;color:white;border: 0;font-family: roboto;font-weight: bold">Senha Novamente</span>
                    </div>
                    <input type="password" class="form-control" required="true" id="senhaNov" name="" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                    
                  </div>
                  <span id="textoSenha"></span>
                  <input class="btn btn-primary" type="submit" value="Cadastrar" id="submit" style="background-color:#f27d16;border: 0px;margin-left:auto;margin-right:auto;display:block;font-family: roboto;">
            
            
            </div>
          </form>
         
          </fieldset>
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
