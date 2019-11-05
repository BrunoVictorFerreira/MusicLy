<?php
error_reporting(0);
$serve_file = $_SERVER['DOCUMENT_ROOT'] . "/Musiclly/";
session_save_path($serve_file . 'cache/temp');
include_once($serve_file . 'php/banco.php');
session_start();

if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];
}else{
    echo "<script>window.location.href='/musiclly/cadastro.php';</script>";
}
$_SESSION['id_para'] = $_GET['idPara'];
$id_de = $id;
$idPara = $_GET['idPara'];

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- FONTES -->
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <!--SCRIPTS JS-->
    <script src="/musiclly/chat/scriptDisplay.js"></script>
    <script src="/musiclly/chat/script.js"></script>

</head>

<body style="background-image: url('/musiclly/www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">

<!-- DISPLAY SUPERIOR -->
<?php include('/musiclly/includes/display.php'); ?>
<!-- DISPLAY SUPERIOR -->

<div class="container-fluid">

    <!-- HEADER -->
    <?php include($serve_file.'includes/header.php'); ?>
    <!-- HEADER -->

    <div id="content">
        <div style="width: 100%;padding: 2px 8px;border-bottom: 1px solid lightgray">
            <?php
                $sqlStatus = "SELECT * FROM cadastro where id = $idPara";
                $resultStatus = mysqli_query($conn, $sqlStatus);
                $row = mysqli_fetch_assoc($resultStatus);
                if($row['status'] == 1){
                    echo "<form action='/musiclly/modulos/perfil.php' method='GET' style='padding-top: 5px'>
                            <input type='hidden'  value='".$row['usuario']."' name='usuarioNome'>
                            <input type='image' src='" . $row['imagem'] . "' style='max-width: 30px;float: left'>
                            <span style='text-transform: uppercase;margin-left: 1%;font-size: 12px;font-weight: bold;color: #1778aa'>".substr($row['usuario'],0,20)."</span>
                            <div style='width:10px;height: 10px;background-color:green;display:inline-block;border-radius: 100%'></div>
                            
                          </form>
                          
                        ";
                }else{
                    echo "<form action='/musiclly/modulos/perfil.php' method='GET' style='padding-top: 5px'>
                            <input type='hidden'  value='".$row['usuario']."' name='usuarioNome'>
                            <input type='image' src='" . $row['imagem'] . "' style='max-width: 30px;float: left'>
                            <span style='text-transform: uppercase;margin-left: 1%;font-size: 12px;font-weight: bold;color: #1778aa'>".substr($row['usuario'],0,20)."</span>
                            <div style='width:10px;height: 10px;background-color:darkred;display:inline-block;border-radius: 100%'></div>
                            
                          </form>
                          
                        ";
                }
            ?>
        </div>
        <div id="lista"><?php include("lista.php"); ?></div>
        <hr>
        <form id="form-chat" action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="col-lg-12">
                <div class="input-group">
                    <input type="hidden" value="<?php echo $id_de; ?>" name="id_de">
                    <input type="hidden" value="<?php echo $idPara; ?>" name="id_para">
                    <input type="text" name="mensagem" placeholder="Digite a sua mensagem" class="controle">
                    <span class="input-group-btn">
                        <input type="submit" value="Enviar Msg" class="botao">
                        <input type="hidden" name="env" value="envMsg">
                    </span>
                </div>
            </div>
        </form>

        <br><br>
    </div>


    <img src="www/galeria/msg.png" id="msg" onClick="">
    <div class="row">
        <div class="col-12" id="footer" style="z-index: 2;">
            <footer>
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4" style="text-align:center"><a href="metronomo/metronomo.php" style="color:white;text-decoration:none">Metronomo</a>
                    </div>
                    <div class="col-4"></div>
                </div>
            </footer>
        </div>
    </div>
</div><!--FECHAMENTO DIV CONTAINER FLUID-->


</body>
</html>
