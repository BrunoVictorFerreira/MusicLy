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
if($row['progresso'] <= 42){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 42 where id_cad = $id and id_Curso = 4";
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

                        <h1 class='titulosh1'>4.3 Campo harmônico</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>

                            Campo harmônico é um conjunto de acordes formados a partir de uma determinada escala. Tome como exemplo a escala de dó maior: C, D, E, F, G, A, B.

                            <br><br><span class="subtitulo">Como formar um campo harmônico</span>
                            <br><br>Para cada nota dessa escala, iremos montar um acorde. Vamos ter, portanto, sete acordes, que serão os acordes do campo harmônico de dó maior.

                            <br><br><span class="subtitulo">Como faremos isso?</span>

                            <br><br>Para cada nota da escala, o acorde respectivo será formado utilizando o primeiro, o terceiro e o quinto graus (contados a partir dessa nota, em cima dessa mesma escala). Vamos começar com a nota C. O primeiro grau é o próprio C. O terceiro grau, contando a partir de C, é E. O quinto grau, contando a partir de C, é G.

                            <br><br><span class="subtitulo">Acordes do campo harmônico de dó maior</span>
                            <br><br>O primeiro acorde do campo harmônico de dó maior é formado então pelas notas C, E, G (repare que esse é o acorde de dó maior, pois E é a terça maior de Dó).

                            <br>Agora vamos montar o acorde da próxima nota da escala, que é D. O primeiro grau é o próprio D. O terceiro grau, contando a partir de D, nessa escala, é F. O quinto grau, contando a partir de D, é A. Portanto, o segundo acorde do nosso campo harmônico é formado pelas notas D, F e A (repare que esse é o acorde de Ré menor, pois a nota F é a terça menor de D).

                            <br>Você deve estar percebendo até aqui que estamos montando os acordes do campo harmônico pensando nas tríades e utilizando somente as notas que aparecem na escala em questão (escala de dó maior).

                            <br>Depois de montar a tríade, observamos se a terça de cada acorde ficou maior ou menor. Você pode também conferir a quinta de cada acorde, mas vai notar que ela sempre vai acabar sendo a quinta justa, exceto no último acorde, que vai ter a quinta bemol. É um bom exercício você tentar montar os acordes restantes desse campo harmônico. Confira depois com a tabela abaixo:

                            <br><br><img src="/musiclly/www/galeria/campo-harmonico.png">

                            <br><br>Muito bem, você acabou de aprender como se forma um campo harmônico. Mas para que isso serve afinal?

                            <br>Bom, um campo harmônico serve para muitas coisas, e nesse momento vamos nos focar no ponto mais básico: ele serve para definir a tonalidade de uma música. Provavelmente você já deve ter ouvido a pergunta: “Em que tom está essa música?”. Pois bem, a tonalidade de uma música depende dos acordes presentes nessa música.

                            <br>Se uma música contém os acordes do campo harmônico maior de dó, significa que a música está em dó maior. Com isso, sabemos que a escala a ser utilizada para fazer um solo, improvisar, criar riffs, etc. em cima da música é a escala de dó maior.

                            <br>Portanto, conhecer os campos harmônicos tem uma grande utilidade: esse conhecimento permite que saibamos as notas que podemos usar para fazer arranjos em cima de uma determinada música. Conhecendo bem os desenhos das escalas, nada impede que possamos criar solos e arranjos automaticamente (habilidade conhecida como improviso).

                            <br>Espero que isso tenha motivado você a continuar nosso estudo de campo harmônico, tendo visto a importância e utilidade desse conhecimento.

                            <br><br><span class="subtitulo">Campo harmônico com tétrades</span>
                            <br><br>Já construímos um campo harmônico utilizando tríades, e agora vamos estender esse conceito para as tétrades.

                            <br>A regra utilizada para montar os acordes, apenas recapitulando, foi pegar o primeiro, o terceiro e o quinto graus da escala em questão.

                            <br>Faremos a mesma coisa agora, porém incluindo o sétimo grau, o que caracteriza uma tétrade. Teremos assim um campo harmônico igual ao anterior, porém formado por tétrades em vez de tríades.

                            <br>Analisando a mesma escala de dó maior, começando pela nota dó, temos que o sétimo grau da escala, contando a partir de Dó, é Si. Os demais graus (terceiro e quinto) nós já vimos quais são. Portanto, o primeiro acorde desse campo harmônico será formado pelas notas C, E, G e B. Esse é o acorde de C7M, pois B é a sétima maior de Dó.

                            <br>Aplicando a mesma regra para a próxima nota (D), veremos que o sétimo grau é C. Assim, o acorde será formado pelas notas D, F, A, C. Esse é o acorde de Dm7. Note que aqui temos a sétima menor de Ré, por isso o símbolo “7”, em vez de “7M” (que caracterizaria a sétima maior).

                            <br><br>Montando a tabela completa, ficamos com:

                            <br><br><img src="/musiclly/www/galeria/campo-harmonico-maior.png">

                            <br><br>Talvez você esteja se perguntando qual é a diferença, do ponto de vista prático, desses dois campos harmônicos que montamos.

                            <br>Pois bem, a única diferença é que esse último contém uma nota a mais em cada acorde, deixando-os mais “cheios”. Do ponto de vista de improvisação, no que se refere a descobrir qual a tonalidade da música, nada se altera.

                            <br>Veremos alguns exemplos desse assunto (descobrir a tonalidade da música) em breve. Antes, lembre que nós utilizamos como exemplo a escala maior de dó.

                            <br>Agora, em vez de especificar a tonalidade (dó), vamos deixar um pouco mais genérico: “campo harmônico de uma escala maior”, pois se aplicarmos essa regra na escala maior de sol, na escala maior de lá, ou na escala maior de qualquer outra nota, sempre teremos uma coisa em comum. O campo harmônico maior de qualquer nota da escala vai seguir essa formação (onde os números romanos indicam os graus):

                            <br><br>I7M     IIm7    IIIm7     IV7M     V7     VIm7     VIIm7(b5)

                            <br><br>Você pode verificar isso montando o campo harmônico das demais tonalidades (além de Dó, que já fizemos).

                            <br>Tome como exemplo a escala maior de Mi e o seu campo harmônico associado:

                            <br><br><img src="/musiclly/www/galeria/tonalidade.png">

                            <br><br>Note como o primeiro grau ficou maior com sétima, o segundo grau ficou menor com sétima, etc. Seguindo a formação que havia sido apresentada antes:

                            <br><br>I7M     IIm7     IIIm7     IV7M     V7     VIm7     VIIm7(b5)

                            <br><br>Isso facilita muito a nossa vida, pois significa que memorizando apenas essa sequência acima você já sabe o campo harmônico maior de qualquer nota. Basta colocar as notas respectivas da escala maior em questão no lugar dos graus.

                            <br>Por exemplo: Qual o campo harmônico maior de Ré?

                            <br><br>D7M     Em7     F#m7     G7M     A7     Bm7     C#m7(b5)

                            <br><br>Obs: A escala maior de ré é: D, E, F#, G, A, B, C#.

                            <br>Como exercício, tente montar o campo harmônico maior de todas as notas. Confira depois com a tabela abaixo:

                            <br><br><img src="/musiclly/www/galeria/campo-harmônico-completo.png">

                            <br><br>Obs: para formar os campos harmônicos utilizando apenas 3 notas (tríade), basta retirar a sétima de todos os acordes dessa tabela, como fizemos na tabela abaixo. Deixaremos aqui a sétima apenas no último acorde, pois os acordes com quinta bemol raramente aparecem sem a sétima na prática:

                            <br><br><img src="/musiclly/www/galeria/campo-harmonico-formado-por-triade.png">

                            <br><br><span class="subtitulo">1.200 palavras depois…</span>
                            <br><br>Agora que sabemos o campo harmônico maior de todas as notas, podemos aplicar esse conhecimento para descobrir a tonalidade das músicas.

                            <br><br><span class="subtitulo">Exercícios de campo harmônico</span>
                            <br><br>Os exercícios podem ser encontrados em nossa apostila completa de teoria musical. Essa página que você está lendo é um artigo parcial.

                            <br><br><span class="subtitulo">Músicas com mais de uma tonalidade</span>
                            <br><br>É importante destacar que algumas músicas possuem mais de uma tonalidade. Nesse caso, parte da música está em uma tonalidade e parte da música está em outra tonalidade. Isso é muito comum nos estilos jazz, mpb, bossa nova, fusion, entre outros.
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