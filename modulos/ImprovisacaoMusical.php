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
if($row['progresso'] <= 84){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 84 where id_cad = $id and id_Curso = 4";
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

            <?php include($serve_file. 'includes/header.php'); ?>
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

                        <h1 class='titulosh1'>4.6 Improvisação musical</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                            Improvisação musical é a arte de compor e registrar ao mesmo tempo; ou seja, é inventar na hora!

                            Uma improvisação pode ser uma harmonia, uma melodia, um solo, um riff, um ritmo, etc.

                            Essa arte diferencia músicos criadores de músicos reprodutores. Músicos reprodutores são aqueles que apenas reproduzem ou executam músicas prontas. Eles geralmente possuem técnica e boa leitura, mas são completamente engessados musicalmente (dependentes de um repertório) e não sabem o que estão fazendo, estão apenas seguindo uma receita de bolo.

                            Músicos criadores não se limitam a apenas reproduzir músicas prontas; são capazes de alterá-las, incrementá-las, criar novas melodias ou harmonias automaticamente. Estes são músicos que sabem o que estão fazendo, são aqueles que entendem o que está por trás da cifra e da pauta. Podem dialogar musicalmente.

                            Vantagens de saber improvisar
                            Resumindo, quem sabe improvisar:

                            Entende o que está se passando e tem ideias imediatas;
                            Possui facilidade para compor, pois tem muitas ferramentas e recursos em mente;
                            Possui um ouvido muito apurado;
                            Consegue se sair bem em situações inesperadas como: músicas novas, alterações de repertório de última hora, falha de memória (branco), etc.
                            Coloca sua própria identidade nas músicas.
                            Motivador, não?!

                            Para ser capaz de improvisar, é necessário conhecer o assunto em questão. Por exemplo, no ramo de palestras, qualquer pessoa é capaz de improvisar um discurso sobre “felicidade”, pois todos possuem algum conceito sobre esse tema.

                            Talvez o fato de ser um improviso prejudique a qualidade do discurso; muitos falariam sem utilizar palavras bonitas ou reflexões profundas. Agora, quantas pessoas improvisariam um discurso sobre a importância da equação de Schrödinger no eletromagnetismo quântico?

                            Na música, é a mesma coisa, precisamos de um bom vocabulário (saber escolher palavras adequadas) e também precisamos conhecer o contexto em que estamos inseridos, para que as palavras façam sentido.

                            Essa conversa está boa, mas vamos falar de algo mais prático agora: como se aprende a improvisar afinal?

                            Bom, existem alguns segredos para se tornar um bom improvisador. Falaremos especificamente de solos aqui nesse tópico, mas o conceito é o mesmo para as demais vertentes de improvisação na música.

                            Como fazer uma improvisação musical
                            improvisando no pianoExplicando de uma maneira bem simplista, basta conhecer as escalas básicas e saber identificar a tonalidade da música para se fazer um improviso.

                            Isso tudo nós aprenderemos aqui no Descomplicando a Música, não se preocupe. Porém, na prática, não basta apenas saber e entender as escalas e suas tonalidades, é preciso saber criar um solo com elas.

                            Parece óbvio, mas não é. Um improvisador iniciante pode aprender a escala maior e entender onde aplicá-la, mas se ele não tiver algumas frases e licks prontos desenhados na cabeça, o improviso vai ficar horrível.

                            Ninguém gosta de ouvir uma escala digitada para cima e para baixo sem dinâmica. A beleza da música está justamente em saber desenhar frases musicais com as notas. E como um improvisador iniciante conseguirá fazer isso?

                            Ele deve começar pegando frases prontas de outros músicos, decorando-as e aplicando-as em vários contextos. Assim, ele vai desenvolver a habilidade de saber encaixar frases em músicas. Isso é essencial.

                            O próximo passo é pegar essas mesmas frases e fazer pequenas alterações, tentando colocar suas ideias a partir das ideias das próprias frases. Depois de certo tempo fazendo isso, o improvisador começará a criar as suas próprias frases do zero, sem precisar se basear em alguma frase pronta.

                            Muito bem, para quem nunca improvisou nada, adquirir essa habilidade leva tempo. É como tudo na vida: se o resultado é bom, o esforço precisa fazer merecer esse resultado.

                            Recomendamos fortemente que o iniciante dedique-se bastante a pegar frases prontas e aplique elas em tonalidades maiores e menores. Essas frases podem fazer parte da escala maior, menor, pentatônica e escala blues. Esse deve ser o mundo inicial do improvisador. Ele precisa se sentir seguro nisso, pois é a base para aperfeiçoamentos futuros.

                            Nessa fase o iniciante vai adquirir feeling, vai aprender a colocar sua expressão na música.
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
        <?php include($serve_file. 'includes/footer.php') ?>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>