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
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 3";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 100){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 30 where id_cad = $id and id_Curso = 3";
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
                    <a href='/musiclly/modulos/Tetrade.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.1</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/GrausMusicaisComplementar.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.2</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/OQueSaoCifras.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.3</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/OQueEUmCompasso.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.4</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/NotacaoDosDedosParaViolao.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.5</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/OQueEArpejo.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.6</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/FormacaoDeAcordes.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.7</p>
                            </div>
                        </a>
                        <a href='/musiclly/modulos/questionarios/modulo_3_Quest.php'>
                            <div class='circulosModulos'>
                                <p class='TitleCirculos'>3.8</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class='col-11'>
                    <p class='text-break'>

                        <h1 class='titulosh1'>3.2 Graus Musicais - Complementar</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        No artigo “diminuta, aumentada e justa”, as nomenclaturas “aumentada” e “diminuta” foram utilizadas somente para os graus 4º e 5º. Porém, veremos agora que esses nomes podem ser utilizados para os demais graus também. Nesse caso, para os graus que já possuem a denominação “maior” e “menor”, a nomenclatura “aumentada” significará um semitom acima do grau maior. Por exemplo:

                            <br /><br />    – O segundo grau maior possui um tom de distância da tônica. O segundo grau aumentado possui um tom e meio de distância da tônica.
                           
                            <br /><br />   – O terceiro grau maior possui 2 tons de distância da tônica. O terceiro grau aumentado possui 2 tons e meio de distância da tônica.
                           
                            <br /><br />    Da mesma forma, a nomenclatura “diminuta” significa um semitom abaixo da nomenclatura “menor”. Exemplos:
                           
                                <br /><br />    – O terceiro grau menor possui um tom e meio de distância da tônica. O terceiro grau diminuto possui um tom de distância da tônica.
                           
                                <br /><br />    – O sétimo grau menor possui 5 tons de distância da tônica. O sétimo grau diminuto possui 4 tons e meio de distância da tônica.
                           
                                <br /><br />   Bom, vamos resumir tudo o que vimos até agora sobre graus, para ficar bem claro.
                           
                                <br />Caso você ainda tenha dificuldade em pensar nos tons e semitons, acompanhe esse estudo com o diagrama abaixo (onde ST significa “semitom”):
                           
                                    <br /><br /><img src='/musiclly/www/galeria/grausMusicaisConceito.png'>
                           
                                    <br /><br />Para todos os graus teremos então as seguintes distâncias:
                           
                                    <br />Usando o exemplo de Dó como primeiro grau:<br />
                           
                                    <br />2º maior – está a 1 tom da tônica (D)
                                    <br />2º menor – está a meio tom da tônica (Db)
                                    <br />2º aumentada – está a 1 tom e meio da tônica (D#)
                                    <br />2º diminuta – não existe
                           
                           <br /><br />Obs: Optamos por escrever todas as alterações utilizando Ré aqui pois essa é a nota do segundo grau em relação a Dó. Poderíamos ter escrito, por exemplo, Eb em vez de D#, mas a ideia aqui é pensar no Ré.
                           
                           <br /><br />3º maior – está a 2 tons da tônica (E)
                           <br />3º menor – está a 1 tom e meio da tônica (Eb)
                           <br />3º aumentada – está a 2 tons e meio da tônica (E#)
                           <br />3º diminuta – está a 1 tom da tônica (Ebb)
                           
                           <br /><br />Obs: Apenas para enfatizar, colocamos todas as alterações aqui em relação a Mi, pois ele é o terceiro grau de Dó. Por isso que apareceu Ebb em vez de Ré. Dessa forma, a lógica fica mais clara. Continuaremos seguindo essa linha de raciocínio.
                           
                           <br /><br />4º justa – está a 2 tons e meio da tônica (F)
                           <br />4º aumentada – está a 3 tons da tônica (F#)
                           <br />4º diminuta – está a 2 tons da tônica (Fb)
                           
                           <br /><br />5º justa – está a 3 tons e meio da tônica (G)
                           <br />5º aumentada – está a 4 tons da tônica (G#)
                           <br />5º diminuta – está a 3 tons da tônica (Gb)
                           
                           <br /><br />6º maior – está a 4 tons e meio da tônica (A)
                           <br />6º menor – está a 4 tons da tônica (Ab)
                           <br />6º aumentada – está a 5 tons da tônica (A#)
                           <br />6º diminuta – está a 3 tons e meio da tônica (Abb)
                           
                           <br /><br />7º maior – está a 5 tons e meio da tônica (B)
                           <br />7º menor – está a 5 tons da tônica (Bb)
                           <br />7º aumentada – está a 6 tons da tônica (B#)
                           <br />7º diminuta – está a 4 tons e meio da tônica (Bbb)
                           
                           <br /><br />Existem também as definições “super aumentado” e “super diminuto“, mas elas são bem mais raras de aparecer, e referem-se a um semitom acima do aumentado e um semitom abaixo do diminuto, respectivamente.
                           
                           <br /><br />Talvez pareça meio desnecessária essa definição toda que acabamos de mostrar, afinal o segundo grau aumentado é idêntico ao terceiro grau menor, por exemplo. Isso parece ser uma coisa criada só para confundir a nossa cabeça.
                           
                           <br /><br />Bom, realmente, não há necessidade de utilizarmos essa nomenclatura “aumentada” e “diminuta” para os graus que já possuem a definição “maior” e “menor”. Porém, ela pode nos ajudar.
                           
                           <br /><br />Espere um pouco, ajudar?!
                           
                           <br /><br />Isso mesmo. Imagine que estamos querendo montar um acorde que possui uma determinada tríade. Vamos montar essa tríade com a quinta diminuta em vez de quinta justa, ok? Digamos Dó menor com quinta diminuta. Como o acorde é menor, já sabemos que o terceiro grau é menor:
                           
                           <br /><br />Primeiro grau: C
                           
                           <br />Terceiro grau menor: Eb
                           
                           <br />Quinta diminuta: Gb
                           
                           <br />Esse é o nosso Dó menor com quinta diminuta.
                           
                           <br /><br />Digamos agora que o vocalista da banda pede para acrescentarmos a nota Lá a esse acorde. Tudo bem, acrescentamos a nota Lá, mas como iremos chamar esse acorde? A nota Lá é o sexto grau maior, então o acorde irá se chamar: “Dó menor com quinta diminuta e sexta maior“.
                           
                           <br /><br />Ok, até aqui não aplicamos nenhum conceito novo. Esse acorde possui apenas 4 notas e ficou com um nome bem grande e complicado. As tétrades mais comuns que conhecemos possuem nomes simples (Si menor com sétima, Fá com sétima maior, etc.), mas esse nosso Cm6(b5) está chato de se visualizar por causa do nome.
                           
                           <br /><br />Vamos aplicar então os conceitos que vimos agora há pouco. O sexto grau maior também pode ser chamado de sétimo grau diminuto.
                           
                           <br /><br />Isso é interessante de se observar, pois nossa tétrade aqui teria os graus básicos 1, 3, 5 e 7 (o que é o mais comum e fácil de enxergar do que 1, 3, 5 e 6).
                           
                           <br /><br />Legal, mas isso facilitou alguma coisa na nossa nomenclatura? Sim! Como temos uma tétrade comum (graus 1, 3, 5 e 7) e dois desses graus são diminutos (o quinto e o sétimo), decidiu-se que esse acorde se chamaria “acorde diminuto“. Ou seja, em vez de “Dó menor com quinta diminuta e sexta maior” temos “Dó diminuto“.
                           
                           <br /><br />Essa foi apenas uma aplicação para essa terminologia. Existem outras situações em que você verá esses conceitos também, quando quisermos manter o foco em determinadas notas em alguns contextos, então é bom que você saiba dessa nomenclatura para não se assustar quando vir por aí escrito “terceiro grau aumentado”, por exemplo. É só uma questão de referência.
                           
                           <br /><br />Você também não precisa se preocupar com as cifras que acabamos de mostrar, pois nos próximos artigos do site vamos ensinar detalhadamente como montar acordes e escrever suas respectivas cifras.
                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/OQueSaoCifras.php' class='proximo'>Ir para 3.3(O que são Cifras) >></a></div>
                    </div>
                </div>
            </div>
            </div>
            ";
        }
        ?>




    
        <img src="/musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
        <?php include($serve_file. 'includes/footer.php') ?>
    </div>
    <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>