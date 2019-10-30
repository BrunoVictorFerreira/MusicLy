<?php
    error_reporting(0);
    $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
    session_save_path($serve_file.'cache/temp');
    session_start();
    include_once($serve_file.'php/banco.php');
  session_start();
  if(isset($_SESSION['usuario'])){
  $usuario = $_SESSION['usuario'];
  $id = $_SESSION['id'];
}else{
  echo "<script>window.location.href='index.php';</script>";
}

    $sql = "SELECT * FROM cadastro where usuario = '{$usuario}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            $nome = $row['nome'];
            $sobrenome = $row['sobrenome'];
            $email = $row['email'];
            $usuario = $row['usuario'];
        }

    }

?>
<html lang="pt_br">
    <head>
        <!-- STYLES =========================================-->
        <link rel="stylesheet" type="text/css" href="/musiclly/css/style.css">
        <!--METAS   =========================================-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <!-- BOOTSTRAP CSS =========================================-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- BOOTSTRAP JS =========================================-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="path/to/jquery.sliphover.min.js"></script>
        <!--FONTES ================================================-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
        

        <!--SCRIPTS JS-->
        <script>
           

           
           function msg(){
                location.href = '#';
           }
           
           var i = 1;

           
           $(document).ready(function(){
           $('#menuUsuarioExpandido').hide(); 
           
            $( "#menuUsuario" ).click(function() {
              $( "#menuUsuarioExpandido" ).slideToggle( "slow" );
            });

            $('#verMais1').hide();
            $('#verMais2').hide();
            $('#verMais3').hide();
            $('#verMais4').hide();
            $('#verMais5').hide();
            
            // -----------------------------
            $('#cursoCard1, #vermais1').mouseenter(function(){  
              $('#cursoCard1').attr({src : "/musiclly/www/galeria/modulo_1_blur.jpg"});
              
              $('#verMais1').show();
              
              $('#verMais1').css({'z-index': '0'})
              

            }).mouseout(function () { 
              $(this).attr({src : "/musiclly/www/galeria/modulo_1.jpg"});
              $('#verMais1').hide();
            });

            // -----------------------------
            $('#cursoCard2, #vermais2').mouseenter(function(){  
              $('#cursoCard2').attr({src : "/musiclly/www/galeria/modulo_2_blur.jpg"});
              
              $('#verMais2').show();
              

            }).mouseout(function () { 
              $(this).attr({src : "/musiclly/www/galeria/modulo_2.jpg"});
              $('#verMais2').hide();
            });
            // -----------------------------
            $('#cursoCard3, #vermais3').mouseenter(function(){  
              $('#cursoCard3').attr({src : "/musiclly/www/galeria/modulo_3_blur.jpg"});
              
              $('#verMais3').show();
              

            }).mouseout(function () { 
              $(this).attr({src : "/musiclly/www/galeria/modulo_3.jpg"});
              $('#verMais3').hide();
            });
            // -----------------------------
            $('#cursoCard4, #vermais4').mouseenter(function(){  
              $('#cursoCard4').attr({src : "/musiclly/www/galeria/modulo_4_blur.jpg"});
              
              $('#verMais4').show();
              

            }).mouseout(function () { 
              $(this).attr({src : "/musiclly/www/galeria/modulo_4.jpg"});
              $('#verMais4').hide();
            });
            // -----------------------------
            $('#cursoCard5, #vermais5').mouseenter(function(){  
              $('#cursoCard5').attr({src : "/musiclly/www/galeria/modulo_5_blur.jpg"});
              
              $('#verMais5').show();
              

            }).mouseout(function () { 
              $(this).attr({src : "/musiclly/www/galeria/modulo_5.jpg"});
              $('#verMais5').hide();
            });
            
            
           
            
            
            
            
           });
          
        </script>
        
        
        <style>
        .tracking-in-expand{-webkit-animation:tracking-in-expand .7s cubic-bezier(.215,.61,.355,1.000) both;animation:tracking-in-expand .7s cubic-bezier(.215,.61,.355,1.000) both}
        @-webkit-keyframes tracking-in-expand{0%{letter-spacing:-.5em;opacity:0}40%{opacity:.6}100%{opacity:1}}@keyframes tracking-in-expand{0%{letter-spacing:-.5em;opacity:0}40%{opacity:.6}100%{opacity:1}}
          .imgModulos{
            max-width: 300px;
            max-height: 150px;
          }
          .backMenuExpandido:hover{
          background-color: rgba(23,120,170,.2);
          
        }
        .circle{
          border-radius: 50%;
        }
        #botaoEnviarImg{
          border-radius:10px;
          border: 1px solid #1778aa;
          background-color: rgba(0,0,0,.0);
          color:#1778aa;
          margin-top: 10px;
          
        }
        #botaoEnviarImg:hover{
          border-radius:10px;
          border: 1px solid #1778aa;
          background-color: #1778aa;
          color:white;
        }
        #btnEscolher{
          
        }
        input[type=file]::-webkit-file-upload-button {
          border: 1px solid #f78726;
          background: #f78726;
          color:white;
          cursor:pointer;
          border-radius: 5px;
        }
        input[type=file]::-webkit-file-upload-button:hover {
          
          background: #f78726;
          color:white;
          cursor:pointer;
        }

        input[type=file] {
          
          
          color:#f78726;
          cursor:pointer;
         
        }
        input[type=file]:hover {
          
          
          color:#f78726;
          cursor:pointer;
        }
        
        </style>
        
    </head>
    <body style="background-image: url('/musiclly/www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">
        <div class="container-fluid">
            <!--CLASSE CONTAINER =======================-->    
            <div class="container">
        <!--NAV BAR ======================-->       
        <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#"><img src="/musiclly/www/galeria/logo.png"class="img-fluid" id="logoNavBar"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                    $sqlImg = "SELECT * from cadastro where id=$id";
                    $resultImg = mysqli_query($conn, $sqlImg);
                    $row = mysqli_fetch_assoc($resultImg);
                    $img = $row['imagem'];        
                    
                    echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='#' id='contatoNavBar' style='color:#1778aa;margin-left: 320px'>Contato</a>
                    <a class='nav-item nav-link' href='index.php' id='entrarNavBar' style='color:#1778aa;'>Home</a>
                    <a class='nav-item nav-link' href='cadastro.php' id='cadastrarNavBar' style='color:#1778aa;'>Cursos</a>

                    

                    <div style='background-color:#fafdff;z-index:2'><a class='nav-item nav-link' id='menuUsuario' href='#' style='margin-left: 300px;display:inline-block'>$usuario<img src='/musiclly/".$img."' style='margin-left: 3%;max-width: 35%;border-radius: 10%;max-height: 35%'></a></div>";
                    
                    
                    ?>
                    <div id="menuUsuarioExpandido" style="background-color:#fafdff;border:1px solid #1778aa;height: 250px;width: 15%;position:absolute;z-index:1;margin-left: 70%;margin-top: 5%;border-radius: 5px">
          <a href="/musiclly/painel.php" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Meu Perfil</a>
          <a href="/musiclly/alterar_senha.php" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Senha</a>
          <a href="/musiclly/alterar_usuario" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Usuário</a>
          <a href="/musiclly/alterar_email" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Email</a>
          <a href="/musiclly/notas.php" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Notas</a>
          <a href="/musiclly/logout.php" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Logout</a>
        </div>
                  
        </nav>
        <!-- FECHAMENTO NAVBAR ===============-->
        </div> <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->
       
        <div class="row">
           <div class="col-12" style="">
            <div style="border-bottom: 1px solid #f27d16"><div style="padding: 6px;width: 7%;font-family: roboto;border-radius: 5px;font-size: 18px;color:#1778aa;font-weight: bold">Questionário 1</div></div>
           </div>
        
        </div>

        <div class="container">
        <!-- Button trigger modal -->
      
        
        <!-- Modais -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modulo 1 - Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p><b>O que Contém no Módulo 1?</b></p>
                <p>O que é Musica?</p>
                <p>Notas Musicais</p>
                <p>Timbre</p>
                <p>Sustenido e Bemol</p>
                <p>Tom e Semitom</p>
                <p>Notas no instrumento</p>
                <p>Questionário - <b>Módulo 1</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="cadastroModulo1.php"><button type="button" class="btn btn-primary">Cadastrar</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modulo 2 - Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p><b>O que Contém no Módulo 2?</b></p>
                <p>Escalas Musicais</p>
                <p>Desenho de escala alternativo</p>
                <p>Graus Musicais</p>
                <p>Diminuta aumentada e justa</p>
                <p>Oitavas</p>
                <p>Definição de Acorde</p>
                <p>Tríade</p>
                <p>Questionário - <b>Módulo 2</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="cadastroModulo2.php"><button type="button" class="btn btn-primary">Cadastrar</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modulo 3 - Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p><b>O que Contém no Módulo 3?</b></p>
                <p>Tétrade</p>
                <p>Graus Musicais - complementar</p>
                <p>O que são cifras</p>
                <p>O que é um compasso</p>
                <p>Notação dos dedos para violão</p>
                <p>O que é arpejo</p>
                <p>Formação de Acordes</p>
                <p>Questionário - <b>Módulo 3</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="cadastroModulo3.php"><button type="button" class="btn btn-primary">Cadastrar</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modulo 4 - Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p><b>O que Contém no Módulo 4?</b></p>
                <p>Nome dos Acordes</p>
                <p>Como escrever Cifras</p>
                <p>Campo Harmonico</p>
                <p>Termos Musicais</p>
                <p>Escala Cromática</p>
                <p>Improvisação Musical</p>
                <p>Como fazer Segunda Voz</p>
                <p>Questionário - <b>Módulo 4</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="cadastroModulo4.php"><button type="button" class="btn btn-primary">Cadastrar</button></a>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable5" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modulo 5 - Cadastrar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              <p><b>O que Contém no Módulo 5?</b></p>
                <p>Escalas Relativas</p>
                <p>Modos Gregos</p>
                <p>Escala Pentatônica</p>
                <p>O que é blues</p>
                <p>Escala Blues</p>
                <p>Harmonia Funcional</p>
                <p>Trítono - o som do diabo</p>
                <p>Questionário - <b>Módulo 5</b></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="cadastroModulo5.php"><button type="button" class="btn btn-primary">Cadastrar</button></a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modais -->


          
        

         
        <?php
    
    error_reporting(0);
    if(!isset($perg1) or !isset($perg2) or !isset($perg3) or !isset($perg4) or !isset($perg5) or !isset($perg6) or !isset($perg7) or !isset($perg8) or !isset($perg9) or !isset($perg10)){
        $perg1 = $_POST['perg1'];
        $perg2 = $_POST['perg2'];
        $perg3 = $_POST['perg3'];
        $perg4 = $_POST['perg4'];
        $perg5 = $_POST['perg5'];
        $perg6 = $_POST['perg6'];
        $perg7 = $_POST['perg7'];
        $perg8 = $_POST['perg8'];
        $perg9 = $_POST['perg9'];
        $perg10 = $_POST['perg10'];
        $certa = 0;
        echo "<div class='container' style='height: 1000px'>
                <form action='\Musiclly\modulos\questionarios/results/ver_result_3.php' method='POST'>
                    <article>";
        if($perg1 == "opt4"){
            echo "<p>
            <label>1 -Um compasso musical pode ser definido como:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg1' value='opt1' />Uma marca para repetir a música.<br />
            <input type='radio' name='perg1' value='opt2' />Uma nota que define o nome de um acorde.<br />
            <input type='radio' name='perg1' value='opt3' />Um grupo de acordes tocados ao mesmo tempo.<br />
            <input type='radio' name='perg1' value='opt4' /><span style='color:green'>Uma divisão da música em partes menores igualmente espaçadas.</span><br />
            <input type='radio' name='perg1' value='opt5' />Um agrupamento de músicas.<br />
        </p>";
            
            $certa++;
        }else{
           switch($perg1){
               case 'opt1':
               echo "<p>
               <label>1 -Um compasso musical pode ser definido como:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
               <input type='radio' name='perg1' value='opt1' /><span style='color:red'>Uma marca para repetir a música.</span><br />
               <input type='radio' name='perg1' value='opt2' />Uma nota que define o nome de um acorde.<br />
               <input type='radio' name='perg1' value='opt3' />Um grupo de acordes tocados ao mesmo tempo.<br />
               <input type='radio' name='perg1' value='opt4' /><span style='color:green'>Uma divisão da música em partes menores igualmente espaçadas.</span><br />
               <input type='radio' name='perg1' value='opt5' />Um agrupamento de músicas.<br />
           </p>";
               break;
               case 'opt2':
               echo "<p>
               <label>1 -Um compasso musical pode ser definido como:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
               <input type='radio' name='perg1' value='opt1' />Uma marca para repetir a música.<br />
               <input type='radio' name='perg1' value='opt2' /><span style='color:red'>Uma nota que define o nome de um acorde.</span><br />
               <input type='radio' name='perg1' value='opt3' />Um grupo de acordes tocados ao mesmo tempo.<br />
               <input type='radio' name='perg1' value='opt4' /><span style='color:green'>Uma divisão da música em partes menores igualmente espaçadas.</span><br />
               <input type='radio' name='perg1' value='opt5' />Um agrupamento de músicas.<br />
           </p>";
               break;
               case 'opt3':
               echo "<p>
               <label>1 -Um compasso musical pode ser definido como:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
               <input type='radio' name='perg1' value='opt1' />Uma marca para repetir a música.<br />
               <input type='radio' name='perg1' value='opt2' />Uma nota que define o nome de um acorde.<br />
               <input type='radio' name='perg1' value='opt3' /><span style='color:red'>Um grupo de acordes tocados ao mesmo tempo.</span><br />
               <input type='radio' name='perg1' value='opt4' /><span style='color:green'>Uma divisão da música em partes menores igualmente espaçadas.</span><br />
               <input type='radio' name='perg1' value='opt5' />Um agrupamento de músicas.<br />
           </p>";
               break;
               case 'opt5':
               echo "<p>
               <label>1 -Um compasso musical pode ser definido como:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
               <input type='radio' name='perg1' value='opt1' />Uma marca para repetir a música.<br />
               <input type='radio' name='perg1' value='opt2' />Uma nota que define o nome de um acorde.<br />
               <input type='radio' name='perg1' value='opt3' />Um grupo de acordes tocados ao mesmo tempo.<br />
               <input type='radio' name='perg1' value='opt4' /><span style='color:green'>Uma divisão da música em partes menores igualmente espaçadas.</span><br />
               <input type='radio' name='perg1' value='opt5' /><span style='color:red'>Um agrupamento de músicas.</span><br />
           </p>";
           break;
           } 
            
           
        }
        if($perg2 == "opt4"){
            echo "<p>
            <label>2 -O acorde Dm7(9) possui ao todo:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg2' value='opt1' />uma tríade.<br />
            <input type='radio' name='perg2' value='opt2' />uma tétrade.<br />
            <input type='radio' name='perg2' value='opt3' />uma tríade e o nono grau.<br />
            <input type='radio' name='perg2' value='opt4' /><span style='color:green'>uma tétrade e o nono grau.</span><br />
            <input type='radio' name='perg2' value='opt5' />uma tríade, o quarto e o nono graus.<br />
        </p>";
            $certa++;
        }else{
            switch($perg2){
                case 'opt1':
                echo "<p>
                <label>2 -O acorde Dm7(9) possui ao todo:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg2' value='opt1' /><span style='color:red'>uma tríade.</span><br />
                <input type='radio' name='perg2' value='opt2' />uma tétrade.<br />
                <input type='radio' name='perg2' value='opt3' />uma tríade e o nono grau.<br />
                <input type='radio' name='perg2' value='opt4' /><span style='color:green'>uma tétrade e o nono grau.</span><br />
                <input type='radio' name='perg2' value='opt5' />uma tríade, o quarto e o nono graus.<br />
            </p>";
                break;
                case 'opt2':
                echo "<p>
                <label>2 -O acorde Dm7(9) possui ao todo:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg2' value='opt1' />uma tríade.<br />
                <input type='radio' name='perg2' value='opt2' /><span style='color:red'>uma tétrade.</span><br />
                <input type='radio' name='perg2' value='opt3' />uma tríade e o nono grau.<br />
                <input type='radio' name='perg2' value='opt4' /><span style='color:green'>uma tétrade e o nono grau.</span><br />
                <input type='radio' name='perg2' value='opt5' />uma tríade, o quarto e o nono graus.<br />
            </p>";
                break;
                case 'opt3':
                echo "<p>
                <label>2 -O acorde Dm7(9) possui ao todo:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg2' value='opt1' />uma tríade.<br />
                <input type='radio' name='perg2' value='opt2' />uma tétrade.<br />
                <input type='radio' name='perg2' value='opt3' /><span style='color:red'>uma tríade e o nono grau.</span><br />
                <input type='radio' name='perg2' value='opt4' /><span style='color:green'>uma tétrade e o nono grau.</span><br />
                <input type='radio' name='perg2' value='opt5' />uma tríade, o quarto e o nono graus.<br />
            </p>";
                break;
                case 'opt5':
                echo "<p>
                <label>2 -O acorde Dm7(9) possui ao todo:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg2' value='opt1' />uma tríade.<br />
                <input type='radio' name='perg2' value='opt2' />uma tétrade.<br />
                <input type='radio' name='perg2' value='opt3' />uma tríade e o nono grau.<br />
                <input type='radio' name='perg2' value='opt4' /><span style='color:green'>uma tétrade e o nono grau.</span><br />
                <input type='radio' name='perg2' value='opt5' /><span style='color:red'>uma tríade, o quarto e o nono graus.</span><br />
            </p>";
                break;
            }
        }
        if($perg3 == "opt3"){
            echo "<p>
            <label>3 -A tétrade de um acorde é formada pelos graus:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg3' value='opt1' />1º, 3º, 5º e 6º<br />
            <input type='radio' name='perg3' value='opt2' />1º, 2º, 5º, 7º<br />
            <input type='radio' name='perg3' value='opt3' /><span style='color:green'>1º, 3º, 6º, 7º</span><br />
            <input type='radio' name='perg3' value='opt4' />1º, 3º, 4º, 5º<br />
            <input type='radio' name='perg3' value='opt5' />1º, 3º, 5º, 7º<br />
        </p>";
            $certa++;
        }else{
            switch($perg3){
                case 'opt1':
                echo "<p>
                <label>3 -A tétrade de um acorde é formada pelos graus:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg3' value='opt1' /><span style='color:red'>1º, 3º, 5º e 6º</span><br />
                <input type='radio' name='perg3' value='opt2' />1º, 2º, 5º, 7º<br />
                <input type='radio' name='perg3' value='opt3' /><span style='color:green'>1º, 3º, 6º, 7º</span><br />
                <input type='radio' name='perg3' value='opt4' />1º, 3º, 4º, 5º<br />
                <input type='radio' name='perg3' value='opt5' />1º, 3º, 5º, 7º<br />
            </p>";
                break;
                case 'opt2':
                echo "<p>
                <label>3 -A tétrade de um acorde é formada pelos graus:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg3' value='opt1' />1º, 3º, 5º e 6º<br />
                <input type='radio' name='perg3' value='opt2' /><span style='color:red'>1º, 2º, 5º, 7º</span><br />
                <input type='radio' name='perg3' value='opt3' /><span style='color:green'>1º, 3º, 6º, 7º</span><br />
                <input type='radio' name='perg3' value='opt4' />1º, 3º, 4º, 5º<br />
                <input type='radio' name='perg3' value='opt5' />1º, 3º, 5º, 7º<br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>3 -A tétrade de um acorde é formada pelos graus:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg3' value='opt1' />1º, 3º, 5º e 6º<br />
                <input type='radio' name='perg3' value='opt2' />1º, 2º, 5º, 7º<br />
                <input type='radio' name='perg3' value='opt3' /><span style='color:green'>1º, 3º, 6º, 7º</span><br />
                <input type='radio' name='perg3' value='opt4' /><span style='color:red'>1º, 3º, 4º, 5º</span><br />
                <input type='radio' name='perg3' value='opt5' />1º, 3º, 5º, 7º<br />
            </p>";
                break;
                case 'opt5':
                echo "<p>
                <label>3 -A tétrade de um acorde é formada pelos graus:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg3' value='opt1' />1º, 3º, 5º e 6º<br />
                <input type='radio' name='perg3' value='opt2' />1º, 2º, 5º, 7º<br />
                <input type='radio' name='perg3' value='opt3' /><span style='color:green'>1º, 3º, 6º, 7º</span><br />
                <input type='radio' name='perg3' value='opt4' />1º, 3º, 4º, 5º<br />
                <input type='radio' name='perg3' value='opt5' /><span style='color:red'>1º, 3º, 5º, 7º</span><br />
            </p>";
                break;
            }
        }
        if($perg4 == "opt1"){
            echo "<p>
            <label>4 -Sobre a notação dos dedos para o violão, podemos afirmar que:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg4' value='opt1' /><span style='color:green'>cada dedo possui um número aleatório.</span><br />
            <input type='radio' name='perg4' value='opt2' />os dedos da mão esquerda são numerados do número 5 ao 9.<br />
            <input type='radio' name='perg4' value='opt3' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 1 e o indicador é o dedo 4.<br />
            <input type='radio' name='perg4' value='opt4' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 4 e o indicador é o dedo 1.<br />
            <input type='radio' name='perg4' value='opt5' />ninguém utiliza numeração para os dedos na prática pois não é útil.<br />
        </p>";
            $certa++;
        }else{
            switch($perg4){
                case 'opt2':
                echo "<p>
                <label>4 -Sobre a notação dos dedos para o violão, podemos afirmar que:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg4' value='opt1' /><span style='color:green'>cada dedo possui um número aleatório.</span><br />
                <input type='radio' name='perg4' value='opt2' /><span style='color:red'>os dedos da mão esquerda são numerados do número 5 ao 9.</span><br />
                <input type='radio' name='perg4' value='opt3' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 1 e o indicador é o dedo 4.<br />
                <input type='radio' name='perg4' value='opt4' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 4 e o indicador é o dedo 1.<br />
                <input type='radio' name='perg4' value='opt5' />ninguém utiliza numeração para os dedos na prática pois não é útil.<br />
            </p>";
                break;
                case 'opt3':
                echo "p>
                <label>4 -Sobre a notação dos dedos para o violão, podemos afirmar que:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg4' value='opt1' /><span style='color:green'>cada dedo possui um número aleatório.</span><br />
                <input type='radio' name='perg4' value='opt2' />os dedos da mão esquerda são numerados do número 5 ao 9.<br />
                <input type='radio' name='perg4' value='opt3' /><span style='color:red'>os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 1 e o indicador é o dedo 4.</span><br />
                <input type='radio' name='perg4' value='opt4' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 4 e o indicador é o dedo 1.<br />
                <input type='radio' name='perg4' value='opt5' />ninguém utiliza numeração para os dedos na prática pois não é útil.<br />
            </p>";
                break;
                case 'opt4':
                echo "p>
                <label>4 -Sobre a notação dos dedos para o violão, podemos afirmar que:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg4' value='opt1' /><span style='color:green'>cada dedo possui um número aleatório.</span><br />
                <input type='radio' name='perg4' value='opt2' />os dedos da mão esquerda são numerados do número 5 ao 9.<br />
                <input type='radio' name='perg4' value='opt3' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 1 e o indicador é o dedo 4.<br />
                <input type='radio' name='perg4' value='opt4' /><span style='color:red'>os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 4 e o indicador é o dedo 1.</span><br />
                <input type='radio' name='perg4' value='opt5' />ninguém utiliza numeração para os dedos na prática pois não é útil.<br />
            </p>";
                break;
                case 'opt5':
                echo "p>
                <label>4 -Sobre a notação dos dedos para o violão, podemos afirmar que:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg4' value='opt1' /><span style='color:green'>cada dedo possui um número aleatório.</span><br />
                <input type='radio' name='perg4' value='opt2' />os dedos da mão esquerda são numerados do número 5 ao 9.<br />
                <input type='radio' name='perg4' value='opt3' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 1 e o indicador é o dedo 4.<br />
                <input type='radio' name='perg4' value='opt4' />os dedos da mão esquerda são numerados do número 1 ao 4, onde o dedo mínimo é o 4 e o indicador é o dedo 1.<br />
                <input type='radio' name='perg4' value='opt5' /><span style='color:red'>ninguém utiliza numeração para os dedos na prática pois não é útil.</span><br />
            </p>";
                break;
            }
        }
        if($perg5 == "opt5"){
            echo "<p>
            <label>5 -Cifra é:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg5' value='opt1' />uma notação para representar os nomes e símbolos dos acordes<br />
            <input type='radio' name='perg5' value='opt2' />um símbolo que informa quantos compassos uma música possui<br />
            <input type='radio' name='perg5' value='opt3' />somente o desenho de um acorde montado em um instrumento<br />
            <input type='radio' name='perg5' value='opt4' />uma representação para acordes com mais de 3 notas<br />
            <input type='radio' name='perg5' value='opt5' /><span style='color:green'>uma letra que informa qual a oitava que uma nota deve ser tocada</span><br />
        </p>";
            $certa++;
        }else{
            switch($perg5){
                case 'opt1':
                echo "<p>
                <label>5 -Cifra é:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg5' value='opt1' /><span style='color:red'>uma notação para representar os nomes e símbolos dos acordes</span><br />
                <input type='radio' name='perg5' value='opt2' />um símbolo que informa quantos compassos uma música possui<br />
                <input type='radio' name='perg5' value='opt3' />somente o desenho de um acorde montado em um instrumento<br />
                <input type='radio' name='perg5' value='opt4' />uma representação para acordes com mais de 3 notas<br />
                <input type='radio' name='perg5' value='opt5' /><span style='color:green'>uma letra que informa qual a oitava que uma nota deve ser tocada</span><br />
            </p>";
                break;
                case 'opt2':
                echo "<p>
                <label>5 -Cifra é:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg5' value='opt1' />uma notação para representar os nomes e símbolos dos acordes<br />
                <input type='radio' name='perg5' value='opt2' /><span style='color:red'>um símbolo que informa quantos compassos uma música possui</span><br />
                <input type='radio' name='perg5' value='opt3' />somente o desenho de um acorde montado em um instrumento<br />
                <input type='radio' name='perg5' value='opt4' />uma representação para acordes com mais de 3 notas<br />
                <input type='radio' name='perg5' value='opt5' /><span style='color:green'>uma letra que informa qual a oitava que uma nota deve ser tocada</span><br />
            </p>";
                break;
                case 'opt3':
                echo "<p>
                <label>5 -Cifra é:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg5' value='opt1' />uma notação para representar os nomes e símbolos dos acordes<br />
                <input type='radio' name='perg5' value='opt2' />um símbolo que informa quantos compassos uma música possui<br />
                <input type='radio' name='perg5' value='opt3' /><span style='color:red'>somente o desenho de um acorde montado em um instrumento</span><br />
                <input type='radio' name='perg5' value='opt4' />uma representação para acordes com mais de 3 notas<br />
                <input type='radio' name='perg5' value='opt5' /><span style='color:green'>uma letra que informa qual a oitava que uma nota deve ser tocada</span><br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>5 -Cifra é:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg5' value='opt1' />uma notação para representar os nomes e símbolos dos acordes<br />
                <input type='radio' name='perg5' value='opt2' />um símbolo que informa quantos compassos uma música possui<br />
                <input type='radio' name='perg5' value='opt3' />somente o desenho de um acorde montado em um instrumento<br />
                <input type='radio' name='perg5' value='opt4' /><span style='color:red'>uma representação para acordes com mais de 3 notas</span><br />
                <input type='radio' name='perg5' value='opt5' /><span style='color:green'>uma letra que informa qual a oitava que uma nota deve ser tocada</span><br />
            </p>";
                break;
                
            }
            
        }
        if($perg6 == "opt3"){
            echo "<p>
            <label>6 -Tocar um arpejo significa tocar:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg6' value='opt1' />duas ou mais notas sucessivamente<br />
            <input type='radio' name='perg6' value='opt2' />duas ou mais notas simultaneamente<br />
            <input type='radio' name='perg6' value='opt3' /><span style='color:green'>notas de acorde simultaneamente</span><br />
            <input type='radio' name='perg6' value='opt4' />notas de acorde sucessivamente<br />
            <input type='radio' name='perg6' value='opt5' />acordes sucessivos<br />
        </p>";
            $certa++;
        }else{
            switch($perg6){
                case 'opt1':
                echo "<p>
                <label>6 -Tocar um arpejo significa tocar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg6' value='opt1' /><span style='color:red'>duas ou mais notas sucessivamente</span><br />
                <input type='radio' name='perg6' value='opt2' />duas ou mais notas simultaneamente<br />
                <input type='radio' name='perg6' value='opt3' /><span style='color:green'>notas de acorde simultaneamente</span><br />
                <input type='radio' name='perg6' value='opt4' />notas de acorde sucessivamente<br />
                <input type='radio' name='perg6' value='opt5' />acordes sucessivos<br />
            </p>";
                break;
                case 'opt2':
                echo "<p>
                <label>6 -Tocar um arpejo significa tocar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg6' value='opt1' />duas ou mais notas sucessivamente<br />
                <input type='radio' name='perg6' value='opt2' /><span style='color:red'>duas ou mais notas simultaneamente</span><br />
                <input type='radio' name='perg6' value='opt3' /><span style='color:green'>notas de acorde simultaneamente</span><br />
                <input type='radio' name='perg6' value='opt4' />notas de acorde sucessivamente<br />
                <input type='radio' name='perg6' value='opt5' />acordes sucessivos<br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>6 -Tocar um arpejo significa tocar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg6' value='opt1' />duas ou mais notas sucessivamente<br />
                <input type='radio' name='perg6' value='opt2' />duas ou mais notas simultaneamente<br />
                <input type='radio' name='perg6' value='opt3' /><span style='color:green'>notas de acorde simultaneamente</span><br />
                <input type='radio' name='perg6' value='opt4' /><span style='color:red'>notas de acorde sucessivamente</span><br />
                <input type='radio' name='perg6' value='opt5' />acordes sucessivos<br />
            </p>";
                break;
                case 'opt5':
                echo "<p>
                <label>6 -Tocar um arpejo significa tocar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg6' value='opt1' />duas ou mais notas sucessivamente<br />
                <input type='radio' name='perg6' value='opt2' />duas ou mais notas simultaneamente<br />
                <input type='radio' name='perg6' value='opt3' /><span style='color:green'>notas de acorde simultaneamente</span><br />
                <input type='radio' name='perg6' value='opt4' />notas de acorde sucessivamente<br />
                <input type='radio' name='perg6' value='opt5' /><span style='color:red'>acordes sucessivos</span><br />
            </p>";
                break;
            }
        }
        if($perg7 == "opt1"){
            echo "<p>
            <label>7 -Para que uma tríade vire uma tétrade, precisamos acrescentar:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg7' value='opt1' /><span style='color:green'>o sétimo grau</span><br />
            <input type='radio' name='perg7' value='opt2' />o terceiro grau<br />
            <input type='radio' name='perg7' value='opt3' />o quinto grau<br />
            <input type='radio' name='perg7' value='opt4' />o segundo grau<br />
            <input type='radio' name='perg7' value='opt5' />o sexto grau<br />
        </p>";
            $certa++;
        }else{
            switch($perg7){
                case 'opt2':
                echo "<p>
                <label>7 -Para que uma tríade vire uma tétrade, precisamos acrescentar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg7' value='opt1' /><span style='color:green'>o sétimo grau</span><br />
                <input type='radio' name='perg7' value='opt2' /><span style='color:red'>o terceiro grau</span><br />
                <input type='radio' name='perg7' value='opt3' />o quinto grau<br />
                <input type='radio' name='perg7' value='opt4' />o segundo grau<br />
                <input type='radio' name='perg7' value='opt5' />o sexto grau<br />
            </p>";
                break;
                case 'opt3':
                echo "<p>
                <label>7 -Para que uma tríade vire uma tétrade, precisamos acrescentar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg7' value='opt1' /><span style='color:green'>o sétimo grau<br />
                <input type='radio' name='perg7' value='opt2' />o terceiro grau</span><br />
                <input type='radio' name='perg7' value='opt3' /><span style='color:red'>o quinto grau</span><br />
                <input type='radio' name='perg7' value='opt4' />o segundo grau<br />
                <input type='radio' name='perg7' value='opt5' />o sexto grau<br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>7 -Para que uma tríade vire uma tétrade, precisamos acrescentar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg7' value='opt1' /><span style='color:green'>o sétimo grau</span><br />
                <input type='radio' name='perg7' value='opt2' />o terceiro grau<br />
                <input type='radio' name='perg7' value='opt3' />o quinto grau<br />
                <input type='radio' name='perg7' value='opt4' /><span style='color:red'>o segundo grau</span><br />
                <input type='radio' name='perg7' value='opt5' />o sexto grau<br />
            </p>";
                break;
                case 'opt5':
                echo "<p>
                <label>7 -Para que uma tríade vire uma tétrade, precisamos acrescentar:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg7' value='opt1' /><span style='color:green'>o sétimo grau</span><br />
                <input type='radio' name='perg7' value='opt2' />o terceiro grau<br />
                <input type='radio' name='perg7' value='opt3' />o quinto grau<br />
                <input type='radio' name='perg7' value='opt4' />o segundo grau<br />
                <input type='radio' name='perg7' value='opt5' /><span style='color:red'>o sexto grau</span><br />
            </p>";
                break;
            }
        }
        if($perg8 == "opt5"){
            echo "<p>
            <label>8 -Marque a alternativa INCORRETA:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg8' value='opt1' />o acorde de Ré maior é formado pelas notas D, F#, A<br />
            <input type='radio' name='perg8' value='opt2' />um acorde menor natural possui a quinta justa<br />
            <input type='radio' name='perg8' value='opt3' />um acorde suspenso pode ter a terça maior ou a terça menor<br />
            <input type='radio' name='perg8' value='opt4' />tríades e tétrades são notas de formação de acordes<br />
            <input type='radio' name='perg8' value='opt5' /><span style='color:green'>o site Musiclly tem como objetivo facilitar o seu aprendizado</span><br />
        </p>";
            $certa++;
        }else{
            switch($perg8){
                case 'opt1':
                echo "<p>
                <label>8 -Marque a alternativa INCORRETA:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg8' value='opt1' /><span style='color:red'>o acorde de Ré maior é formado pelas notas D, F#, A</span><br />
                <input type='radio' name='perg8' value='opt2' />um acorde menor natural possui a quinta justa<br />
                <input type='radio' name='perg8' value='opt3' />um acorde suspenso pode ter a terça maior ou a terça menor<br />
                <input type='radio' name='perg8' value='opt4' />tríades e tétrades são notas de formação de acordes<br />
                <input type='radio' name='perg8' value='opt5' /><span style='color:green'>o site Musiclly tem como objetivo facilitar o seu aprendizado</span><br />
            </p>";
                break;
                case 'opt2':
                echo "<p>
                <label>8 -Marque a alternativa INCORRETA:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg8' value='opt1' />o acorde de Ré maior é formado pelas notas D, F#, A<br />
                <input type='radio' name='perg8' value='opt2' /><span style='color:red'>um acorde menor natural possui a quinta justa</span><br />
                <input type='radio' name='perg8' value='opt3' />um acorde suspenso pode ter a terça maior ou a terça menor<br />
                <input type='radio' name='perg8' value='opt4' />tríades e tétrades são notas de formação de acordes<br />
                <input type='radio' name='perg8' value='opt5' /><span style='color:green'>o site Musiclly tem como objetivo facilitar o seu aprendizado</span><br />
            </p>";
                break;
                case 'opt3':
                echo "<p>
                <label>8 -Marque a alternativa INCORRETA:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg8' value='opt1' />o acorde de Ré maior é formado pelas notas D, F#, A<br />
                <input type='radio' name='perg8' value='opt2' />um acorde menor natural possui a quinta justa<br />
                <input type='radio' name='perg8' value='opt3' /><span style='color:red'>um acorde suspenso pode ter a terça maior ou a terça menor</span><br />
                <input type='radio' name='perg8' value='opt4' />tríades e tétrades são notas de formação de acordes<br />
                <input type='radio' name='perg8' value='opt5' /><span style='color:green'>o site Musiclly tem como objetivo facilitar o seu aprendizado</span><br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>8 -Marque a alternativa INCORRETA:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg8' value='opt1' />o acorde de Ré maior é formado pelas notas D, F#, A<br />
                <input type='radio' name='perg8' value='opt2' />um acorde menor natural possui a quinta justa<br />
                <input type='radio' name='perg8' value='opt3' />um acorde suspenso pode ter a terça maior ou a terça menor<br />
                <input type='radio' name='perg8' value='opt4' /><span style='color:red'>tríades e tétrades são notas de formação de acordes</span><br />
                <input type='radio' name='perg8' value='opt5' /><span style='color:green'>o site Musiclly tem como objetivo facilitar o seu aprendizado</span><br />
            </p>";
                break;
            }
        }
        if($perg9 == "opt2"){
            echo "<p>
            <label>9 -O segundo grau aumentado está a que distância da tônica:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg9' value='opt1' />um tom<br />
            <input type='radio' name='perg9' value='opt2' /><span style='color:green'>um tom e meio</span><br />
            <input type='radio' name='perg9' value='opt3' />meio tom<br />
            <input type='radio' name='perg9' value='opt4' />dois tons<br />
            <input type='radio' name='perg9' value='opt5' />dois tons e meio<br />
        </p>";
            $certa++;
        }else{
            switch($perg9){
                case 'opt1':
                echo "<p>
                <label>9 -O segundo grau aumentado está a que distância da tônica:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg9' value='opt1' /><span style='color:red'>um tom</span><br />
                <input type='radio' name='perg9' value='opt2' /><span style='color:green'>um tom e meio</span><br />
                <input type='radio' name='perg9' value='opt3' />meio tom<br />
                <input type='radio' name='perg9' value='opt4' />dois tons<br />
                <input type='radio' name='perg9' value='opt5' />dois tons e meio<br />
            </p>";
                break;
                case 'opt3':
                echo "<p>
                <label>9 -O segundo grau aumentado está a que distância da tônica:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg9' value='opt1' />um tom<br />
                <input type='radio' name='perg9' value='opt2' /><span style='color:green'>um tom e meio</span><br />
                <input type='radio' name='perg9' value='opt3' /><span style='color:red'>meio tom</span><br />
                <input type='radio' name='perg9' value='opt4' />dois tons<br />
                <input type='radio' name='perg9' value='opt5' />dois tons e meio<br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>9 -O segundo grau aumentado está a que distância da tônica:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg9' value='opt1' />um tom</span><br />
                <input type='radio' name='perg9' value='opt2' /><span style='color:green'>um tom e meio<br />
                <input type='radio' name='perg9' value='opt3' />meio tom<br />
                <input type='radio' name='perg9' value='opt4' /><span style='color:red'>dois tons</span><br />
                <input type='radio' name='perg9' value='opt5' />dois tons e meio<br />
            </p>";
                break;
                case 'opt5':
                echo "<p>
                <label>9 -O segundo grau aumentado está a que distância da tônica:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg9' value='opt1' />um tom<br />
                <input type='radio' name='perg9' value='opt2' /><span style='color:green'>um tom e meio</span><br />
                <input type='radio' name='perg9' value='opt3' />meio tom<br />
                <input type='radio' name='perg9' value='opt4' />dois tons<br />
                <input type='radio' name='perg9' value='opt5' /><span style='color:red'>dois tons e meio</span><br />
            </p>";
                break;
            }
        }
        if($perg10 == "opt1"){
            echo "<p>
            <label>10 -É importante conhecer os graus que formam uma tríade, pois:<img src='/musiclly/www/galeria/certo.png' style='max-width: 50px'></label><br />
            <input type='radio' name='perg10' value='opt1' /><span style='color:green'>a tríade informa em qual oitava o acorde está localizado</span><br />
            <input type='radio' name='perg10' value='opt2' />a tríade não informa se um acorde é maior ou menor, mas informa se o acorde é suspenso<br />
            <input type='radio' name='perg10' value='opt3' />o quinto grau da tríade define se o acorde é maior ou menor<br />
            <input type='radio' name='perg10' value='opt4' />sabendo os graus que formam uma tríade, podemos montar qualquer acorde natural<br />
            <input type='radio' name='perg10' value='opt5' />não é importante saber o que é tríade, pois isso não serve pra nada<br />
        </p>";
            $certa++;
        }else{
            switch($perg10){
                case 'opt2':
                echo "<p>
                <label>10 -É importante conhecer os graus que formam uma tríade, pois:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg10' value='opt1' /><span style='color:green'>a tríade informa em qual oitava o acorde está localizado</span><br />
                <input type='radio' name='perg10' value='opt2' /><span style='color:red'>a tríade não informa se um acorde é maior ou menor, mas informa se o acorde é suspenso</span><br />
                <input type='radio' name='perg10' value='opt3' />o quinto grau da tríade define se o acorde é maior ou menor<br />
                <input type='radio' name='perg10' value='opt4' />sabendo os graus que formam uma tríade, podemos montar qualquer acorde natural<br />
                <input type='radio' name='perg10' value='opt5' />não é importante saber o que é tríade, pois isso não serve pra nada<br />
            </p>";
                break;
                case 'opt3':
                echo "<p>
                <label>10 -É importante conhecer os graus que formam uma tríade, pois:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg10' value='opt1' /><span style='color:green'>a tríade informa em qual oitava o acorde está localizado</span><br />
                <input type='radio' name='perg10' value='opt2' />a tríade não informa se um acorde é maior ou menor, mas informa se o acorde é suspenso<br />
                <input type='radio' name='perg10' value='opt3' /><span style='color:red'>o quinto grau da tríade define se o acorde é maior ou menor</span><br />
                <input type='radio' name='perg10' value='opt4' />sabendo os graus que formam uma tríade, podemos montar qualquer acorde natural<br />
                <input type='radio' name='perg10' value='opt5' />não é importante saber o que é tríade, pois isso não serve pra nada<br />
            </p>";
                break;
                case 'opt4':
                echo "<p>
                <label>10 -É importante conhecer os graus que formam uma tríade, pois:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg10' value='opt1' /><span style='color:green'>a tríade informa em qual oitava o acorde está localizado</span><br />
                <input type='radio' name='perg10' value='opt2' />a tríade não informa se um acorde é maior ou menor, mas informa se o acorde é suspenso<br />
                <input type='radio' name='perg10' value='opt3' />o quinto grau da tríade define se o acorde é maior ou menor<br />
                <input type='radio' name='perg10' value='opt4' /><span style='color:red'>sabendo os graus que formam uma tríade, podemos montar qualquer acorde natural</span><br />
                <input type='radio' name='perg10' value='opt5' />não é importante saber o que é tríade, pois isso não serve pra nada<br />
            </p>";
                break;
                case 'opt5':
                echo "<p>
                <label>10 -É importante conhecer os graus que formam uma tríade, pois:<img src='/musiclly/www/galeria/errado.png' style='max-width: 50px'></label><br />
                <input type='radio' name='perg10' value='opt1' /><span style='color:green'>a tríade informa em qual oitava o acorde está localizado</span><br />
                <input type='radio' name='perg10' value='opt2' />a tríade não informa se um acorde é maior ou menor, mas informa se o acorde é suspenso<br />
                <input type='radio' name='perg10' value='opt3' />o quinto grau da tríade define se o acorde é maior ou menor<br />
                <input type='radio' name='perg10' value='opt4' />sabendo os graus que formam uma tríade, podemos montar qualquer acorde natural<br />
                <input type='radio' name='perg10' value='opt5' /><span style='color:red'>não é importante saber o que é tríade, pois isso não serve pra nada</span><br />
            </p>";
                break;
            }
        }
        $porc = ($certa / 10) * 100;
        if($porc < 40){
            echo "<div class='row' style='padding: 3px;background:darkred;width: 22%'><div class='col-6' style='color:white'>".$porc."%"."</div><div class='col-6' style='border-left: 1px solid white'><span style='color:white'>REPROVADO!</span></div></div>";
        }else if($porc < 60){
            echo "<div class='row' style='padding: 3px;background:darkorange;width: 22%'><div class='col-6' style='color:white'>".$porc."%"."</div><div class='col-6' style='border-left: 1px solid white'><span style='color:white'>MEDIANO!</span></div></div>";
        }else{
            echo "<div class='row' style='padding: 3px;background:darkgreen;width: 22%'><div class='col-6' style='color:white'>".$porc."%"."</div><div class='col-6' style='border-left: 1px solid white'><span style='color:white'>ÓTIMO!</span></div></div>";
            
        }

        $sql = "UPDATE tbl_cad_curso set nota = $porc where id_Cad = $id and id_Curso=3";
        $result = mysqli_query($conn, $sql);

        

    }else{
        echo "Complete o questionário!";
    }
    echo "</article>
            </form>
                </div></div>";

?>
            <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
            <div class="row"><div class="col-12" id="footer"><footer></footer></div></div> 
        </div><!--FECHAMENTO DIV CONTAINER FLUID-->
        
    </body>
</html>
