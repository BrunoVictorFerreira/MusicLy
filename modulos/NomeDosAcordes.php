<?php

$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');
include_once($serve_file.'php/functions.php');
if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }else{
    echo "<script>window.location.href='index.php';</script>";
}
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 4";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 14){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 14 where id_cad = $id and id_Curso = 4";
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
                        <a href='/musiclly/modulos/NomeDosAcordes.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/ComoEscreverCifras.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/CampoHarmonico.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/TermosMusicais.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/EscalaCromatica.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/ImprovisacaoMusical.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/ComoFazerASegundaVoz.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.7</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_4_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>4.8</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>4.1 Nome dos acordes</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                            <span style='color: darkorange'><b>Descobrindo o nome dos acordes</b></span>

                            <br>Continuando nosso aprendizado sobre montagem de acordes, dessa vez montaremos o acorde Em7(9). Caso você não tenha lido o artigo anterior, pare tudo e comece por aqui: formação de acordes.

<br>Muito bem, o acorde Em7 é o acorde de Dm7 um tom acima, por isso pouparemos o trabalho de montar o sétimo grau (é idêntico ao que fizemos anteriormente). 
Veja abaixo o acorde Em7 e suas respectivas notas:

<img src='/musiclly/www/galeria/acorde-em7.png' style='max-height: 400px'>

<br>Vamos acrescentar então o 9º grau maior, que é F#. Confira abaixo onde estão as notas F# no braço do violão:

<br><img src='/musiclly/www/galeria/nota-f-violao.png' style='max-height: 400px'>

<br>Aparentemente, uma boa opção seria esse F# (em amarelo):

<br><img src='/musiclly/www/galeria/montar-acordes.png' style='max-height: 400px'>

<br>Porém, como você deve ter percebido, ele ficaria no lugar do E. Isso nós não podemos fazer porque Mi é o primeiro grau, a tônica.

<br>Uma opção para contornar esse problema seria utilizar a corda Mi que não está sendo usada. Ela poderia servir como primeiro grau e o acorde ficaria:

<br><img src='/musiclly/www/galeria/formar-acordes.png' style='max-height: 400px'>

<br>Esse acorde é uma boa opção para Em7(9), pois possui uma sonoridade interessante. Mas talvez você não queira deixar um som tão grave no acorde (a corda E está muito baixa). Existe uma diferença muito grande de oitavas nesse acorde, e isso pode ser desagradável dependendo do contexto.

<br>Vamos procurar outra opção mais universal que possamos aplicar em qualquer contexto. Vamos tentar utilizar esse outro F#:

<br><img src='/musiclly/www/galeria/escrever-acordes.png' style='max-height: 400px'>

<br>Esse F# ficaria no lugar da nota Sol. Já vimos no exemplo anterior que não podemos fazer isso, pois esse é o terceiro grau (é ele quem diz que o acorde de Mi em questão é menor). Utilizando esse F# no lugar do terceiro grau, o acorde ficaria suspenso.

<br>Ficamos sem opções? Não, se o problema é a nota Sol, podemos tentar encontrar outro Sol que substitua aquele! Veja abaixo como existe outro Sol perto do acorde que estamos fazendo:

<br><img src='/musiclly/www/galeria/montar-um-acorde.png' style='max-height: 400px'>

<br>Se utilizássemos esse Sol, ele ficaria no lugar da nota Si. Mas o Si já está dobrado (aparece duas vezes), então não há problema!

<br>Nosso desejo foi atendido, conseguimos acrescentar um F# sem prejudicar o acorde Em7, repare abaixo como ficou nosso acorde:

<br><img src='/musiclly/www/galeria/opcao-de-acorde-em79.png' style='max-height: 400px'>

<br>Tente fazê-lo no seu violão. Teve alguma dificuldade? Provavelmente sim, pois fazer uma pestana com o dedo 4 ou com o dedo 3 não é mole! Alguns guitarristas de jazz gostam de fazer isso, mas creio que seja uma minoria.

<br><br><span style='color: darkorange'><b>A influência do quinto grau no nome do acorde</b></span><br>
<br>Então vamos cogitar a hipótese de não tocar a última nota, o Si, pois isso facilitaria muito nosso desenho na hora de montar o acorde.

<br>E aí, podemos fazer isso?

<br>Lembre-se do que comentamos a respeito do quinto grau, que ele pode ser omitido sem prejudicar a nomenclatura do acorde.

<br>Então está resolvido! O acorde não está tão completo e “cheio” como os anteriores que tentamos montar, mas está em uma versão bem fácil de se fazer e a sonoridade está agradável. Veja abaixo nosso resultado final:

<br><img src='/musiclly/www/galeria/acorde-em79.png' style='max-height: 400px'>

<br>Essa é a versão mais comum que você vai encontrar nos livros e dicionários para o acorde Em7(9).

<br><br><span style='color: darkorange'><b>Acordes de mesmo nome</b></span><br>
<br>O importante depois de todo esse nosso estudo é que você tenha assimilado o raciocínio que tivemos. Note como existem inúmeras possibilidades e combinações diferentes para se montar um mesmo acorde. Aqui no final nós apresentamos um exemplo de Em7(9), mas poderíamos escrever mais uma dezena de páginas mostrando outras opções de desenhos para esse mesmo acorde.

<br>Aos poucos, à medida que for praticando e fazendo exercícios, você irá visualizar mais rapidamente as opções, pois vai conhecer melhor o braço do instrumento e também vai ter alguma bagagem teórica de acordes já decorados. Tudo isso permitirá uma visualização cada vez mais rápida e precisa.

<br>Durante todo esse estudo nós montamos os acordes utilizando como referência as notas, mas esse não é o caminho mais rápido. O caminho mais rápido é pensar automaticamente em função dos graus. Em nossa apostila completa, nós explicamos essa estratégia; esse artigo que você está lendo é uma versão parcial do tópico da apostila.

<br>Antes de finalizarmos esse estudo, vamos mostrar as nomenclaturas mais utilizadas nas cifras. Colocamos esse complemento na parte 3 desse tópico (como escrever cifras), não deixe de conferir!
                        </fieldset>
                    </p>
                    <div class='row'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/NotasMusicais.php' class='proximo'>Ir para 1.2(Notas Musicais) >></a></div>
                    </div>
                </div>
            </div>
        
        
        
           

 
        <div class="row justify-content-center">
            <div class='col-6' style=''>
            <fieldset style="background-color:rgba(23,120,170,.1);padding: 0px 10px;border-radius: 5px;margin-top: 10px;margin-bottom: 50px">
            <legend><h4 style="font-family: roboto;font-size: 20px;color:darkorange;text-shadow: 1px 1px rgba(0,0,0,.2)">Comentários</h4></legend>    
            
                
                <?php
                    $sqlComent = "SELECT * FROM comentarios where sessao = 4.1";
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
                                <span style='float:right'>
                                <form action='/musiclly/modulos/perfil.php' method='POST'>
                                    <input type='submit' name='usuarioNome' value='".$row23['usuario']."' style='background-color:rgba(0,0,0,.0);border: 0'>
                                </form>
                                
                                
                                
                                </span><br>
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
                    $sqlComentInsert = "INSERT into comentarios values(null,'$titulo','$descricao','$dateTime','0',3,1,$id)";
                    $resultSqlComent = mysqli_query($conn, $sqlComentInsert);
                    if($resultSqlComent){
                        echo "<script>alert('Comentário Adicionado!');window.location.href='/musiclly/modulos/OQueEMusica.php';</script>";

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
                <footer>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4" style="text-align:center"><a href="../metronomo/metronomo.php"
                                                                        style="color:white;text-decoration:none">Metronomo</a>
                        </div>
                        <div class="col-4"></div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>