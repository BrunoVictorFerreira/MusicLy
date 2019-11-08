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
if($row['progresso'] <= 28){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 28 where id_cad = $id and id_Curso = 4";
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

                        <h1 class='titulosh1'>4.2 Como montar Acordes e escrever Cifras</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                            Em resumo, o que fizemos até agora foi aprender como montar acordes a partir de uma cifra. Utilizamos o processo de ler a cifra, identificar o acorde e encontrar a melhor posição para formar esse acorde no instrumento.

                            <br><br>Continuando nosso aprendizado sobre acordes e cifras, veremos a seguir as nomenclaturas mais utilizadas em dicionários de acordes e song books. Isso é útil não apenas para montar acordes, mas também para escrever as cifras.

                            <br><br><span class="subtitulo">Como escrever cifras corretamente</span>
                            <br><br><b>Acordes com sétima menor:</b> recebem apenas o número 7. Exemplos: G7, Bm7, etc.
                            <br><b>Acordes com sétima maior:</b> recebem o número 7 seguido da letra M. Exemplos: C7M, A7M, Bm(7M), etc. Outra notação possível para a sétima maior, geralmente utilizada por estrangeiros, é  “maj”: Cmaj7 ou apenas CMaj (do inglês: Major Seven). Em sites populares de cifras, as pessoas utilizam muito a notação 7+ (C7+), porém essa não é a notação mais adequada, já que é utilizada para acordes aumentados.
                            <br><b>Acordes com nona adicionada:</b> recebem o número 9 seguido da palavra add. Exemplo: Cadd9 (lê-se: Dó “éd naine”, pois é uma notação americana). Esses são os acordes formados por uma tríade acrescida de uma nona. Quando o acorde possui também a sétima, a notação americana costuma colocar somente o número 9. Como veremos logo a seguir.
                            <br><b>Acordes com nona e sétima menor:</b> podem receber apenas o número 9, ou o número 7 seguido do número 9. Exemplo: C9 ou C7(9). Isso se deve ao fato de que acordes com nona costumam ter a sétima também, por isso subentende-se que o símbolo “9” já informa que há uma sétima junto. Quando não há uma sétima menor no acorde, deixa-se claro por meio do símbolo “add”, como já vimos. Seria como dizer, para não haver dúvidas: “Esse acorde possui nona adicionada, ou seja, é a nona adicionada a uma tríade. Não há uma sétima!”. Porém, na prática, nem todos fazem essa distinção, então é preciso ter cautela.
                            <br>Obs: quanto falamos “nona”, entenda “nona maior”. O mesmo ocorre com a “sexta”. A nomenclatura de ambas não usa o símbolo “M” para representar o grau maior, basta colocar C9 ou C6, por exemplo. No caso da quarta justa, também podemos dizer somente “quarta” e escrever “4”, sem nenhum símbolo adicional.

                            <br><br><b>Acordes suspensos:</b> são os acordes que não possuem a terça. Recebem a sigla “sus”. Geralmente, esses acordes vêm acompanhados de uma quarta justa. Exemplo: Asus4. Explicaremos o porquê dessa quarta quando entrarmos no assunto “acordes complexos”.
                            <br><br><b>Acordes aumentados:</b> podem receber o símbolo “#” ou “+” ao lado do grau alterado em questão. Exemplo: G7(#5) ou G7(+5). Obs: quando a nota alterada é a quinta, o acorde também pode receber somente o “+”, por exemplo: C+.
                            <br>Outro detalhe importante de se considerar é a utilização dos parênteses. Geralmente, utilizamos os parênteses quando o acorde possui mais de 4 graus. A ordem de representação segue a lógica de mostrar primeiro a sétima (caso haja) e depois o grau adicional entre parênteses. Ex: A7(b5), F7M(9), etc. Quando há muitos graus adicionais, costuma-se usar barras em vez de parênteses. Por exemplo: Bm7/6/9/11. Muitos preferem escrever somente com barras em vez de parênteses, isso varia conforme o gosto do compositor.

                            <br><br><b>Acordes diminutos:</b> recebem o símbolo “ ° ”. Exemplo: C°. O acorde diminuto é aquele formado pelos graus 1, 3b, 5b e 7bb. Quando apenas uma nota está diminuta (abaixada), pode-se utilizar o símbolo “b” ou “-“. Exemplo: G7(b5) ou G7(-5). O símbolo “-“ também é utilizado na notação americana para dizer que o acorde é menor (em vez da letra “m”), por exemplo: A- (é o mesmo que Am). Por isso, não se confunda ao ver por aí algo do tipo C-7 (nesse caso, é o acorde Cm7, não o acorde de Dó com sétima diminuta).
                            <br>Obs: estudaremos profundamente o acorde diminuto em outro tópico. Aqui estamos vendo apenas a nomenclatura.

                            <br><br><b>Acordes meio-diminutos:</b> são os acordes com a extensão m7(b5). Exemplo: Dm7(b5). Diz-se “Ré meio-diminuto”. Esse apelido é muito utilizado, pois o acorde m7(b5) é quase um acorde diminuto; a única diferença está na sétima (que no acorde diminuto, é sétima diminuta em vez de sétima menor). Aliás, é muito mais fácil dizer “Ré meio-diminuto” do que “Ré menor com sétima e quinta bemol”, não achas?!
                            <br><br><b>Acordes alterados:</b> são os acordes com a extensão #9#5. Exemplo: G#9#5. Geralmente, esse tipo de acorde contém a sétima menor também (G7#9#5). Entraremos em mais detalhes sobre esse assunto no tópico de escala alterada. Por enquanto, apenas saiba que essa extensão #9#5 é representada pela sigla “alt”. Por exemplo, o acorde anterior poderia ser escrito como G7alt em vez de G7#9#5 (Sol com sétima menor, nona aumentada e quinta aumentada).
                            <br>Ufa! Terminamos. É importante que você leia algumas vezes esse tópico para memorizar bem essas nomenclaturas. Assim você vai saber ler e interpretar qualquer acorde que aparecer em qualquer lugar.

                            <br><br>Resumindo tudo o que vimos, podemos concluir que há coisas que a cifra informa para nós e também há coisas que ela não informa.

                            <br><br><span class="subtitulo">O que a cifra estabelece</span>
                            <br><br>– Se o acorde é maior, menor ou suspenso.

                            <br>– Se o acorde possui uma sétima ou demais graus adicionados (4ª, 6ª, 9ª).

                            <br>– Se o acorde possui eventuais alterações (#5, b9, etc.)

                            <br>– Se o acorde está invertido (3ª, 5ª ou 7ª no baixo). Obs: estudaremos isso em outro tópico.

                            <br><br><span class="subtitulo">O que a cifra não estabelece</span>
                            <br><br>– A posição do acorde no instrumento (pode estar em diferentes regiões).

                            <br>– Dobramentos ou supressões de notas no acorde (pode-se duplicar, triplicar ou suprimir a quinta justa, dobrar a terça, etc.)

                            <br><br>3.000 palavras depois…
                            <br><br>Depois de ler esses 3 longos artigos você já está perito nesse assunto! Basta exercitar os conceitos aprendidos aqui e você terá autonomia total na formação de acordes, sem nunca mais precisar depender de um dicionário de acordes. Agora você é o dicionário!
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