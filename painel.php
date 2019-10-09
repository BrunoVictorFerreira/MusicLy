<?php
    include_once("php/conexao.php");
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
                        
                    echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                    <a class='nav-item nav-link' href='#' id='contatoNavBar' style='color:#1778aa;margin-left: 320px'>Contato</a>
                    <a class='nav-item nav-link' href='index.php' id='entrarNavBar' style='color:#1778aa;'>Home</a>
                    <a class='nav-item nav-link' href='cadastro.php' id='cadastrarNavBar' style='color:#1778aa;'>Cursos</a>

                    <div style='background-color:#fafdff;z-index:2'><a class='nav-item nav-link' id='menuUsuario' href='#' style='margin-left: 300px;display:inline-block'>$usuario<img src='/musiclly/www/galeria/user.png' style='margin-left: 3%;max-width: 25%'></a></div>";
                    
                    
                    ?>
                    <div id="menuUsuarioExpandido" style="background-color:#fafdff;border:1px solid #1778aa;height: 170px;width: 15%;position:absolute;z-index:1;margin-left: 70%;margin-top: 4%;border-radius: 5px">
                    <a href="/musiclly/alterar_senha.php" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Senha</a>
                    <a href="/musiclly/alterar_usuario" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Usuário</a>
                    <a href="/musiclly/alterar_email" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Alterar Email</a>
                    <a href="/musiclly/logout.php" style='width: 100%;padding: 8px;display:block;font-weight: bold;text-align:center;text-decoration:none;color:#1778aa' class='backMenuExpandido'>Logout</a>
                    </div>
                  
        </nav>
        <!-- FECHAMENTO NAVBAR ===============-->
        </div> <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->
       
        <div class="row">
           <div class="col-12" style="">
            <div style="border-bottom: 1px solid #f27d16"><div style="padding: 6px;width: 7%;font-family: roboto;border-radius: 5px;font-size: 18px;color:#1778aa;font-weight: bold">Painel</div></div>
           </div>
        
        </div>

        <div class="container">
        <!-- Button trigger modal -->
      
        
        <!-- Modais -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                1
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Comprar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable2" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                2
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Comprar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable3" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                3
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Comprar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable4" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                4
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Comprar</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="exampleModalScrollable5" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                5
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Comprar</button>
              </div>
            </div>
          </div>
        </div>
        


          <div class="row" style="">
            <div class="col-6" style="padding-bottom:30px">
            <?php
              $sqlCurso = "SELECT * from tbl_curso";
              $resultCurso = mysqli_query($conn, $sqlCurso);
              ?>
              <table>
                <tr>
                  <th colspan="2" style='padding:20px;font-size: 30px;text-align:center;font-family: Staatliches;color: #1778aa;letter-spacing: 2px'>Cursos</th>
                </tr>
                <tr>
                  <td align='center' style=''><fieldset style='padding: 15px;margin-top: 5px;border-radius: 10px'><button type="button" id="button1" data-toggle="modal" style="background-color:rgba(0,0,0,.0);border:0;outline:0" data-target="#exampleModalScrollable"><p class="tracking-in-expand" id="verMais1" style="position:absolute;color:white;margin-left: 3%;margin-top: 6%;font-size: 20px;font-family:roboto">Mais informações</p><img id="cursoCard1" src='/musiclly/www/galeria/modulo_1.jpg'></button></fieldset></td>
                  <td align='center' style=''><fieldset style='padding: 15px;margin-top: 5px;border-radius: 10px'><button type="button" id="button1" data-toggle="modal" style="background-color:rgba(0,0,0,.0);border:0;outline:0" data-target="#exampleModalScrollable2"><p class="tracking-in-expand" id="verMais2" style="position:absolute;color:white;margin-left: 3%;margin-top: 6%;font-size: 20px;font-family:roboto">Mais informações</p><img id="cursoCard2" src='/musiclly/www/galeria/modulo_2.jpg'></fieldset></td>
                </tr>
                <tr>
                  <td align='center' style=''><fieldset style='padding: 15px;margin-top: 5px;border-radius: 10px'><button type="button" id="button1" data-toggle="modal" style="background-color:rgba(0,0,0,.0);border:0;outline:0" data-target="#exampleModalScrollable3"><p class="tracking-in-expand" id="verMais3" style="position:absolute;color:white;margin-left: 3%;margin-top: 6%;font-size: 20px;font-family:roboto">Mais informações</p><img id="cursoCard3" src='/musiclly/www/galeria/modulo_3.jpg'></fieldset></td>
                  <td align='center' style=''><fieldset style='padding: 15px;margin-top: 5px;border-radius: 10px'><button type="button" id="button1" data-toggle="modal" style="background-color:rgba(0,0,0,.0);border:0;outline:0" data-target="#exampleModalScrollable4"><p class="tracking-in-expand" id="verMais4" style="position:absolute;color:white;margin-left: 3%;margin-top: 6%;font-size: 20px;font-family:roboto">Mais informações</p><img id="cursoCard4" src='/musiclly/www/galeria/modulo_4.jpg'></fieldset></td>
                </tr>
                <tr>
                  <td align='center' colspan="2" style=''><fieldset style='padding: 15px;margin-top: 5px;width:50%;border-radius: 10px'><button type="button" id="button1" data-toggle="modal" style="background-color:rgba(0,0,0,.0);border:0;outline:0" data-target="#exampleModalScrollable5"><p class="tracking-in-expand" id="verMais5" style="position:absolute;color:white;margin-left: 3%;margin-top: 6%;font-size: 20px;font-family:roboto">Mais informações</p><img id="cursoCard5" src='/musiclly/www/galeria/modulo_5.jpg'></fieldset></td>
                </tr>
              
              </table>

            </div>
              <div class="col-6" style="text-align:center">
              
              <!--ABERTURA  DA PRIMEIRA ROW -->
                <div class="row" style="height: 36%"><div class="col-12">
                <div class="row">
                      <div class="col-12">
                        <h5 style="font-family: Staatliches;">Dados</h5>
                      </div>
                    </div>
                  <div id="dadosExpandidos" style="width: 60%;margin-left:auto;margin-right:auto">
                    <fieldset style="background-color:#fafdff;border: 1px solid rgba(13,82,189,.2);padding: 10px;border-radius: 10px;border-top: 0px;font-family: roboto">
                    
                    <div class="row">
                      <div class="col-6">
                        <h5 style="font-family: Staatliches;">Nome</h5>
                      </div>
                     
                      <div class="col-6">
                        <h5 style="font-family: Staatliches;"><?php echo $nome; ?></h5>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <h5 style="font-family: Staatliches;">Sobrenome</h5>
                      </div>
                     
                     <div class="col-6">
                        <h5 style="font-family: Staatliches;"><?php echo $sobrenome; ?></h5>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <h5 style="font-family: Staatliches;">Email</h5>
                      </div>
                      
                     <div class="col-6">
                        <h5 style="font-family: Staatliches;"><?php echo $email; ?></h5>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-6">
                        <h5 style="font-family: Staatliches;">Usuário</h5>
                      </div>
                      
                     <div class="col-6">
                        <h5 style="font-family: Staatliches;"><?php echo $usuario; ?></h5>
                      </div>
                    </div>

       


                    
                    </fieldset>
                  </div>
                </div>
              </div><!--FECHAMENTO DA PRIMEIRA ROW -->

              <div class="row" style="height: 32%;border-top: 1px solid black"><!--ABERTURA DA SEGUNDA ROW-->
              
                <div class="col-12">
                    <h3 style="font-family: Staatliches;">Meus Cursos</h3>
                    <div class="row" style="background-color:pink">
                      <div class="col-12">
                        
                      </div>
                    </div>
                </div>
              </div><!--FECHAMENTO DA SEGUNDA ROW -->


              <div class="row" style="height: 32%;border-top: 1px solid black"><!--ABERTURA DA TERCEIRA ROW-->
                <div class="col-12">
                  <h3 style="font-family: Staatliches;">Curiosidades</h3>
                  <div class="row" style="background-color:pink">
                    <div class="col-12">
                      
                    </div>
                  </div>
                </div>
              </div><!--FECHAMENTO DA TERCEIRA ROW -->
                  

              </div>
              
          

        </div>
        
        

         
        <div class="container" style="height: 1000px"><!--ABERTURA DA DIV CONTAINER -->
            
                
            <img src="www/galeria/separador.png" class="img-fluid">
            
                
              </div>
            </div>
            <img src="www/galeria/msg.png" id="msg" onClick="msg()">
            <div class="row"><div class="col-12" id="footer"><footer></footer></div></div> 
        </div><!--FECHAMENTO DIV CONTAINER FLUID-->
        
    </body>
</html>

