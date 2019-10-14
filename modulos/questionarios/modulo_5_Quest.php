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

                    

                    <div style='background-color:#fafdff;z-index:2'><a class='nav-item nav-link' id='menuUsuario' href='#' style='margin-left: 300px;display:inline-block'>$usuario<img src='".$img."' style='margin-left: 3%;max-width: 35%;border-radius: 10%;max-height: 35%'></a></div>";
                    
                    
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
            <div style="border-bottom: 1px solid #f27d16"><div style="padding: 6px;width: 7%;font-family: roboto;border-radius: 5px;font-size: 18px;color:#1778aa;font-weight: bold">Questionário 5</div></div>
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


          
        

         
        <div class="container" style="height: 1000px"><!--ABERTURA DA DIV CONTAINER -->
        <?php
          $verificadorProg = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 1";
          $resultProg = mysqli_query($conn, $verificadorProg);
          $row = mysqli_fetch_assoc($resultProg);
          if($row['progresso'] == 100){
            echo '
                <form action="\Musiclly\modulos\questionarios\results\ver_result_5.php" method="POST">
                    <article>
                        <p>
                            <label>1 -A relativa menor da escala Sol maior é a escala de:</label><br />
                            <input type="radio" name="perg1" value="opt1" />Dó menor<br />
                            <input type="radio" name="perg1" value="opt2" />Ré menor<br />
                            <input type="radio" name="perg1" value="opt3" /> Mi menor<br />
                            <input type="radio" name="perg1" value="opt4" />Fá menor<br />
                            <input type="radio" name="perg1" value="opt5" />Lá menor<br />
                        </p>
                        <p>
                            <label>2 -Para improvisar em uma música que está na tonalidade de G#m, podemos utilizar a escala:</label><br />
                            <input type="radio" name="perg2" value="opt1" />Dó maior<br />
                            <input type="radio" name="perg2" value="opt2" />Si maior<br />
                            <input type="radio" name="perg2" value="opt3" />Mi maior<br />
                            <input type="radio" name="perg2" value="opt4" />Fá maior<br />
                            <input type="radio" name="perg2" value="opt5" />Sol sustenido maior<br />
                        </p>
                        <p>
                            <label>3 -Sol mixolídio é equivalente à tonalidade de:</label><br />
                            <input type="radio" name="perg3" value="opt1" /> Dó maior<br />
                            <input type="radio" name="perg3" value="opt2" />Ré menor<br />
                            <input type="radio" name="perg3" value="opt3" />Mi maior<br />
                            <input type="radio" name="perg3" value="opt4" />Fá menor<br />
                            <input type="radio" name="perg3" value="opt5" />Lá maior<br />
                        </p>
                        <p>
                            <label>4 -Poderíamos utilizar a escala de Dó sustenido Frígio em uma música formada pelos acordes:</label><br />
                            <input type="radio" name="perg4" value="opt1" />C#m, E, B<br />
                            <input type="radio" name="perg4" value="opt2" />C#m, A, G#m<br />
                            <input type="radio" name="perg4" value="opt3" />C#m, D#m, E<br />
                            <input type="radio" name="perg4" value="opt4" />C#m, D, A<br />
                            <input type="radio" name="perg4" value="opt5" />C#m, F#, B<br />
                        </p>
                        <p>
                            <label>5 -Marque a alternativa correta:</label><br />
                            <input type="radio" name="perg5" value="opt1" />A pentatônica de Lá maior pode ser tocada sobre a tonalidade de Dó maior.<br />
                            <input type="radio" name="perg5" value="opt2" />A escala pentatônica menor é uma escala inútil do ponto de vista de improvisação<br />
                            <input type="radio" name="perg5" value="opt3" />Podemos utilizar a pentatônica de Mi menor para improvisar na tonalidade de Fá maior.<br />
                            <input type="radio" name="perg5" value="opt4" />A escala pentatônica nada mais é do que um apanhado específico de notas da escala natural.<br />
                            <input type="radio" name="perg5" value="opt5" />O conceito de relativa menor não se aplica à escala pentatônica.<br />
                        </p>
                        <p>
                            <label>6 -A estrutura básica de um blues é:</label><br />
                            <input type="radio" name="perg6" value="opt1" />Parecida com um campo harmônico maior.<br />
                            <input type="radio" name="perg6" value="opt2" />Idêntica ao modo dórico.<br />
                            <input type="radio" name="perg6" value="opt3" />Bem diferente dos campos harmônicos naturais, sendo fundamentada em acordes com sétima menor.<br />
                            <input type="radio" name="perg6" value="opt4" />Uma mistura de acordes maiores com seus relativos menores.<br />
                            <input type="radio" name="perg6" value="opt5" />Igual a qualquer outra estrutura, portanto não precisa ser analisada.<br />
                        </p>
                        <p>
                            <label>7 -Para improvisar em um blues formado pelos acordes G7, C7, D7 podemos utilizar a escala:</label><br />
                            <input type="radio" name="perg7" value="opt1" />Pentatônica de Sol menor<br />
                            <input type="radio" name="perg7" value="opt2" /> Pentatônica de Lá menor<br />
                            <input type="radio" name="perg7" value="opt3" />Pentatônica de Si menor<br />
                            <input type="radio" name="perg7" value="opt4" />Pentatônica de Dó menor<br />
                            <input type="radio" name="perg7" value="opt5" />Pentatônica de Ré menor<br />
                        </p>
                        <p>
                            <label>8 -A escala blues é uma pentatônica acrescida da blue note. Sobre esta nota adicional, podemos afirmar que:</label><br />
                            <input type="radio" name="perg8" value="opt1" />É uma nota de repouso, podendo ser utilizada também como nota de passagem.<br />
                            <input type="radio" name="perg8" value="opt2" />É uma nota tonal que enriquece o solo.<br />
                            <input type="radio" name="perg8" value="opt3" />Essa nota pode ser utilizada na pentatônica menor somente.<br />
                            <input type="radio" name="perg8" value="opt4" />Não se pode dizer que a blue note possui um efeito cromático.<br />
                            <input type="radio" name="perg8" value="opt5" />A blue note é uma nota atonal utilizada para temperar um solo (outside note).<br />
                        </p>
                        <p>
                            <label>9 -Um blues tradicional é formado por quantos compassos?</label><br />
                            <input type="radio" name="perg9" value="opt1" />6<br />
                            <input type="radio" name="perg9" value="opt2" />8<br />
                            <input type="radio" name="perg9" value="opt3" />10<br />
                            <input type="radio" name="perg9" value="opt4" />12<br />
                            <input type="radio" name="perg9" value="opt5" />15<br />
                        </p>
                        <p>
                            <label>10 -Marque a alternativa correta:</label><br />
                            <input type="radio" name="perg10" value="opt1" />As escalas dórica, frígia e lídia de uma mesma tonalidade não possuem as mesmas notas.<br />
                            <input type="radio" name="perg10" value="opt2" />Uma das notas da escala blues deve ser tocada somente como nota de passagem.<br />
                            <input type="radio" name="perg10" value="opt3" />A escala pentatônica é idêntica à escala relativa menor.<br />
                            <input type="radio" name="perg10" value="opt4" />O modo eólio é diferente da escala menor natural.<br />
                            <input type="radio" name="perg10" value="opt5" />Uma improvisação não precisa levar em conta as escalas nem as tonalidades.<br />
                        </p>
                        <input type="submit" value="Ver Resultado"/>
                    </article>
                    
                </form>
                ';
          }else{
            echo 
            "<nav class='navbar navbar-expand-lg navbar-light'>
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
  
</div>
</nav>


<fieldset style='width: 60% ;margin-top: 20%;margin-left:15%;background-color:white;border: 2px solid red;border-radius:15px;padding:15px'><img src='/musiclly/www/galeria/cadeado.png' style='margin-left:35%'><p style='text-align:center;font-size:50px;font-family: roboto;color:red;font-weight: bold'>Conteúdo BLOQUEADO!</p><a href='/musiclly/painel.php' style='text-decoration:none' id='linkCadeado'><p style='text-align:center;font-size:20px;font-family: roboto;color:darkorange;font-weight: bold'>Seu Progresso está em <span style='color:#1778aa;'>".$row['progresso']."%</span> conclua todos os Tópicos!</p></a></fieldset>";
          }
          ?>
            
                
              </div>
            </div>
            <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
            <div class="row"><div class="col-12" id="footer"><footer></footer></div></div> 
        </div><!--FECHAMENTO DIV CONTAINER FLUID-->
        
    </body>
</html>
