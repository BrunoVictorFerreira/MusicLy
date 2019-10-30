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
  if($row['progresso'] <= 34){
    $progresso = "UPDATE tbl_cad_curso SET progresso = 34 where id_cad = $id and id_Curso = 1";
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
                        <a href='/musiclly/modulos/questionarios/modulo_2_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>1.7</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    

                        <h1 class='titulosh1'>1.2 Notas Musicais</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        <b style='color: darkorange'>Notas musicais</b> são os elementos mínimos de um som. Quando uma corda vibra, ela movimenta as moléculas de ar ao seu redor. Essa agitação das moléculas ocorre na mesma frequência de vibração da corda. O ouvido humano capta essa vibração do ar e a processa atribuindo um som ao cérebro.  Para cada frequência de vibração, o cérebro atribui um som diferente (uma <b>nota</b> diferente).<br />

                        <br /><b style='color:#f27d16'>Como representar as notas musicais?</b>
                        <br />As notas musicais podem ser identificadas por letras para facilitar a escrita e aumentar a velocidade de leitura. A notação utilizada é universal, o que facilita a comunicação com músicos de outros países. Existem 7 letras para representar as notas musicais. A definição das letras e suas notas correspondentes é a seguinte:
                        
                            <br /><br /><b style='color:#1778aa'>C –> dó
                            <br />D –> ré
                            <br />E –> mi
                            <br />F –> fá
                            <br />G –> sol
                            <br />A –> lá
                            <br />B –> si  (H no alemão)</b>
                        
                            <br /><br /> Existe também outra representação para as notas musicais, que não depende de letras. É a famosa <b>partitura</b>.
                        
                        
                        
                            
                        
                        Caso esse seja seu primeiro contato com <b>representações musicais</b>, não se preocupe tanto com a partitura, procure antes decorar a representação por letras, que é bem mais simples.

                            
                        </fieldset>
                    
                    <div class='row'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/Timbre.php' class='proximo'>Ir para 1.3(Timbre) >></a></div>
                    </div>
                </div>
            </div>
            
            ";
        }
        ?>
    <div class="row justify-content-center">
            <div class='col-6' style=''>
            <fieldset style="background-color:rgba(23,120,170,.1);padding: 0px 10px;border-radius: 5px;margin-top: 10px;margin-bottom: 50px">
            <legend><h4 style="font-family: roboto;font-size: 20px;color:darkorange;text-shadow: 1px 1px rgba(0,0,0,.2)">Comentários</h4></legend>    
            
                
                <?php
                    $sqlComent = "SELECT * FROM comentarios where sessao = 2"; 
                    $resultComent = mysqli_query($conn, $sqlComent);
                    while($row = mysqli_fetch_assoc($resultComent)){
                        $id2 = $row['id'];
                        $sql = "SELECT a.usuario from cadastro as a join comentarios as b on a.id = b.id_cad where b.id = '$id2'";
                        $result2 = mysqli_query($conn, $sql);
                        $row23 = mysqli_fetch_assoc($result2);
                        echo "<div style='padding:2px;border-bottom: 1px solid black'>
                                <span style='color:#1778aa;font-size: 15px;font-weight: bold;float:left'>".$row['titulo']."</span><br>
                                <span class='text-break' style='font-size: 12px'>".$row['descricao']."</span><br>
                                <span style='float:left;font-size: 10px;margin-top: 5px'><b>Feito em:</b> ".$row['dataEnviada']."</span>
                                <span style='float:right'>".$row23['usuario']."</span><br>
                                </div>";
                    }
                ?>

                <?php

                ?>
                <fieldset style="width: 100%;padding: 5px;border:1px solid #1778aa;border-radius: 15px;margin-top: 10px;margin-bottom: 15px">
                <p style="font-size: 12px;color:darkorange;font-weight: bold">Nova Mensagem</p>
                <form action='' method='POST'>
                    <label for="titulo" style="width: 100%">Titulo
                    <input type='text' name="titulo" id="titulo" maxlength="50" style="width: 100%;outline:0;border: 1px solid #1778aa;border-radius:5px">
                    </label>
                    <label for="descricao" style="width: 100%">Descrição
                    <textarea id="descricao" name="descricao" rows='5' maxlength="512" style='width: 100%;border: 1px solid #1778aa;border-radius: 5px;outline:0'></textarea>
                    </label>
                    <input type='submit' value='Enviar' style='float:right;margin-top: 5px;border-radius: 10px;background-color:rgba(0,0,0,.0);color:#1778aa;border: 1px solid #1778aa;outline:0'>
                </form>
                <?php
                    if(isset($_POST['titulo'])){
                    
                    date_default_timezone_set('America/Sao_Paulo');
                    $now = new DateTime();
                    $dateTime = $now->format('d-m-Y H:i:s');
                    $titulo = $_POST['titulo'];
                    $descricao = $_POST['descricao'];
                    $sqlComentInsert = "INSERT into comentarios values(null,'$titulo','$descricao','$dateTime','0',3,2,$id)";
                    $resultSqlComent = mysqli_query($conn, $sqlComentInsert);
                    if($resultSqlComent){
                        echo "<script>alert('Comentário Adicionado!');window.location.href='/musiclly/modulos/NotasMusicais.php';</script>";

                    }
                }
                ?>
                </fieldset>
                </fieldset>
            </div>
        </div>
            
        </div>


    
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