<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
session_start();
include_once($serve_file . 'php/banco.php');

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
  }
$verificador = "SELECT * from tbl_cad_curso where id_cad = $id and id_Curso = 3";
$result = mysqli_query($conn, $verificador);
$row = mysqli_fetch_array($result);
if($row['progresso'] <= 100){
  $progresso = "UPDATE tbl_cad_curso SET progresso = 100 where id_cad = $id and id_Curso = 3";
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

                        <h1 class='titulosh1'>3.7 Formação De Acordes</h1>
                        <fieldset style='background-color:white;padding:15px;border: 1px solid #1778aa;border-radius:10px'>
                        Você já passou por alguma situação triste envolvendo o nome dos acordes? Lá está você querendo tocar uma música, aí consegue baixar a cifra da internet. Ótimo (você pensa). Então em algum ponto da música aparece um acorde que você nunca viu. Puxa vida, que acorde é esse?

                                <br /><br />Você corre para um dicionário de acordes, digita o acorde em questão, mas o dicionário não traz nenhum acorde com aquele nome. É o fim, nem o dicionário de acordes conhece! Na realidade, talvez você pense que a única maneira de saber montar um acorde é decorando-o. Se você não possui um banco de dados gigantesco na sua cabeça, nunca saberá muitos acordes. Bom, saiba isso é uma grande besteira!

                                <br /><br />Correr atrás de dicionário de acordes é coisa de principiante. Agora você vai aprender a não depender mais dele. Até mais do que isso, vai aprender a ser melhor do que ele!

                                



                               



                                <br /><br /><b style='color:darkorange'>Existe lógica na formação de acordes?</b>
                                <br /><br />Como tudo na música, existe uma regra lógica para se definir o nome de cada acorde. Se você sabe a regra, sabe montar e nomear qualquer acorde no seu instrumento.

                                <br /><br />Maravilha, vamos aprender então como se faz isso! Você olhará um acorde “estranho” na cifra e saberá montá-lo sem ajuda externa. E mais, um amigo seu irá montar qualquer acorde ou combinação de notas no seu instrumento e você dirá para ele qual acorde ele está fazendo. Não importa o que ele faça, ele pode ficar o dia todo inventando acordes, você sempre saberá o nome de todos eles.

                                <br /><br />Iremos utilizar o violão como exemplo, mas esses conceitos se aplicam a qualquer instrumento. Em nossa apostila completa, nós mostramos também os desenhos no teclado.

                                <br /><br />Então vamos lá:

                                <br /><br /><b style='color:darkorange'>Formando os acordes básicos</b>
                                <br /><br />Você já aprendeu como se formam os acordes maiores, menores e com sétima. Mas talvez não tenha ficado muito claro como se faz para montar esses acordes no seu instrumento. Bom, é muito simples, basta que você faça soar todas as notas que formam cada acorde que estudamos!

                                <br /><br />Por exemplo, confira abaixo um desenho possível para o acorde de Dm no violão:

                                <br /><br /><img src='/musiclly/www/galeria/AcordeDeDm.png'>

                                <br /><br />Note como todas as notas da tríade de Dm aparecem nesse acorde (D, F, A), e somente elas. 

                                <br /><br />Nosso primeiro objetivo agora será montar o acorde Dm7. Para isso, acrescentaremos uma nota ao acorde de Dm, que é o sétimo grau menor (a nota dó, nesse caso). Ok, agora precisamos saber onde há alguma nota C que possamos pegar para acrescentar ao acorde de Dm. Veja abaixo onde estão as notas dó no braço do violão:

                                <br /><br /><img src='/musiclly/www/galeria/NotaCViolao.png'> 

                                <br /><br />Note como é muito difícil acrescentar a nota C ao acorde Dm sem modificar o seu desenho. Por outro lado, podemos utilizar aquele dó que está bem próximo do acorde Dm:

                                    <br /><br /><img src='/musiclly/www/galeria/NomeDosAcordes.png'> 

                                    <br /><br />Para isso, precisamos retirar a nota Ré (pois ela está “na frente” dele ali no braço, ocupando o lugar dele naquela corda). Assim ficaríamos com o acorde:

                                    <br /><br /><img src='/musiclly/www/galeria/AcordeDm7.png'> 

                                    <br /><br />Há algum problema em retirar essa nota Ré, como fizemos? Não, pois já existe outro Ré nesse acorde; nós retiramos apenas um Ré que estava “sobrando”. 

                                    <br /><br />No violão, isso é muito comum, pois praticamente todos os acordes naturais que formamos possuem alguma nota que está “dobrada”, ou seja, aparecendo mais de uma vez. 

                                    <br /><br />Do ponto de vista de nomenclatura, nada se altera quando se retira uma nota que está sendo repetida. Inclusive dá para se escolher qual nota queremos “dobrar”, formando acordes distintos em sonoridade, mas com o mesmo nome.

                                    <br /><br />Veja abaixo, por exemplo, o acorde de Sol maior:

                                    <br /><br /><img src='/musiclly/www/galeria/AcordeSolMaior.png'>

                                    <br /><br />Provavelmente você já deve ter visto ou tocado essa outra versão de Sol maior:

                                    <br /><br /><img src='/musiclly/www/galeria/NomeDeUmAcorde.png'>       

                                    <br /><br />Qual a diferença entre essas duas versões?

                                    <br /><br />A nota Sol aparece 3 vezes em cada, mas no primeiro desenho, a nota Ré está sendo dobrada, enquanto no segundo desenho, a nota Si está sendo dobrada. 

                                    <br /><br />Como em ambos os desenhos há somente as notas Sol, Si e Ré, a nomenclatura não muda, o nome do acorde é “Sol maior” para os dois formatos. 

                                    <br /><br />Você deve concordar que, apesar do nome não mudar, o som fica levemente diferente, dependendo de qual nota você está dobrando, pois ela fica mais destacada. 

                                    <br /><br />Entendido isso, podemos continuar nosso estudo.

                                    <br /><br />Como formar acordes com mais de 4 notas
                                    <br /><br />Já conseguimos montar o acorde Dm7. Sabemos que esse acorde é formado por uma tétrade (4 notas). Agora vamos formar o acorde Dm7(4), ou seja, estaremos acrescentando mais uma nota, a quarta justa, ao acorde de Dm7.

                                    <br /><br />Obs: Se fosse quarta aumentada ou diminuta, o acorde seria Dm7(#4) e Dm7(b4) respectivamente, mas o procedimento seria o mesmo. 

                                    <br /><br />Muito bem, quem é a quarta justa de Ré? Sabemos que é Sol. Então vamos tentar acrescentar essa nota ao acorde Dm7. Confira abaixo onde estão as notas Sol no violão:

                                    <br /><br /><img src='/musiclly/www/galeria/NotaSolViolao.png'>   

                                    <br /><br />Compare com nosso acorde de Dm7:

                                    <br /><br /><img src='/musiclly/www/galeria/CifrasDosAcordes.png'>

                                    <br /><br />Qual nota sol podemos pegar? Bom, você deve estar percebendo que, para acrescentar alguma nota Sol, será necessário “perder” alguma outra nota, afinal todas as cordas já estão ocupadas com alguma nota. Talvez você diga: “Ei, a 6ª corda ali está vazia! Podemos utilizar a nota Sol que aparece nela!” Pois bem, tente montar esse acorde no violão. Viu como não dá?! Existem limitações físicas para isso (os dedos não alcançam). Vamos tentar outra coisa então.

                                    <br /><br />Há uma nota Sol bem perto do acorde Dm7 que montamos, repare:

                                    <br /><br /><img src='/musiclly/www/galeria/NomenclaturaDosAcordes.png'>

                                    <br /><br />Porém, para utilizá-la será necessário colocá-la no lugar da nota Fá, pois não há como tocar duas notas numa mesma corda. Podemos fazer isso?

                                    <br /><br />Não! Pois a nota Fá é o terceiro grau, ou seja, ela é quem está definindo que o acorde é Ré menor. Sem ela, o acorde Dm7 seria Dsus7, pois não haveria terça (o acorde não seria maior nem menor, seria suspenso). Mas nosso objetivo não era montar o acorde D7sus4, e sim Dm7(4). Por isso não podemos utilizar essa nota Sol que cogitamos. Vamos tentar outra. Que tal essa:

                                    <br /><br /><img src='/musiclly/www/galeria/NotasDosAcordes.png'>

                                    <br /><br />Repare que ela iria substituir a nota Lá. Podemos fazer isso?

                                    <br /><br />Sim, primeiro porque a nota Lá já está dobrada. Além disso, mesmo que houvesse apenas uma nota Lá, ela poderia ser suprimida pelo fato de ser o quinto grau de Ré. Perder o quinto grau não descaracteriza o acorde, ele não deixa de ser maior ou menor por causa do quinto grau. Claro que o acorde Dm7 sem o quinto grau não será tão completo, afinal uma nota da tríade foi perdida. Mas essa perda é tolerável do ponto de vista de nomenclatura. Dm7 sem o quinto grau ainda é Dm7. Então conseguimos! O acorde Dm7(4) será:

                                    <br /><br /><img src='/musiclly/www/galeria/AcordeDm7-4.png'>

                                    <br /><br />Esse método que utilizamos para montar o acorde de Dm7(4) pode ser utilizado para montar qualquer acorde que desejarmos. Como regra básica, siga os seguintes passos ao se deparar com alguma cifra desconhecida:

                                        <br /><br />Passos para formar qualquer acorde

                                        <br /><br />Para exercitar um pouco mais, vamos formar mais um acorde. Continuaremos na Parte 2 desse tópico (fizemos essa divisão de tópico em 3 partes para não ficar extenso demais um único tópico). O título dessa segunda parte será “nome dos acordes”.

                                        <br /><br />Obs: Muitos passos ensinados aqui não precisam ser seguidos no teclado, pois a organização das teclas facilita esse processo. Se você for um tecladista ou pianista, ignore os itens que não se aplicam ao seu instrumento, ou confira nossa apostila completa para acompanhar a explicação detalhada no teclado também.
                        </fieldset>
                    </p>
                    <div class='row' style='margin-bottom: 50px;'>
                        <div class='col-6'></div>
                        <div class='col-6'><a href='/musiclly/modulos/questionarios/modulo_3_Quest.php' class='proximo'>Ir para 3.8(Questionário módulo 3) >></a></div>
                    </div>
                </div>
            </div>
            </div>
            ";
        }
        ?>




    
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