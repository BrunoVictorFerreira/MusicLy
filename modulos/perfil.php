<?php
  error_reporting(0);
  $serve_file = $_SERVER['DOCUMENT_ROOT']."/Musiclly/";
  session_save_path($serve_file.'cache/temp');
  session_start();
  include_once($serve_file.'php/banco.php');
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];
  $id = $_SESSION['id'];

}else{
  echo "<script>window.location.href='/musiclly/cadastro.php';</script>";

}
$sql = "SELECT * FROM cadastro where usuario = '{$usuario}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

  while ($row = mysqli_fetch_assoc($result)) {
    $nome = $row['nome'];
    $sobrenome = $row['sobrenome'];
    $email = $row['email'];
    $usuario = $row['usuario'];
  }
}

$usuarioClickado = $_GET['usuarioNome'];


$sql2 = "SELECT * from cadastro where nome = '$usuarioClickado'";
$result2 = mysqli_query($conn, $sql2);
$row2 = mysqli_fetch_array($result2);

if($_SESSION['usuario'] == $row2['nome']){
      header('Location: /Musiclly/painel.php');

    }





?>
<html lang="pt_br">

<head>
  <!-- STYLES =========================================-->
  <link rel="stylesheet" type="text/css" href="../css/style.css">
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
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">


  <!--SCRIPTS JS-->
  <script src="/musiclly/includes/scriptMenuUsuario.js"></script>

</head>
<body>
<div style="background-image: url('/musiclly/www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">
  <div class="container-fluid">
    <!--CLASSE CONTAINER =======================-->
    <div class="container">
        <?php include($serve_file. 'includes/header.php'); ?>
    </div>
    <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->

    <div class="row">
      <div class="col-12" style="">
        <div style="border-bottom: 1px solid #f27d16">
          <div style="padding: 6px;width: 7%;font-family: roboto;border-radius: 5px;font-size: 18px;color:#1778aa;font-weight: bold">Perfil</div>
        </div>
      </div>

    </div>

    <div class="container">
    
        <div class="row" style="margin-top: 5%">
          <div class="col-3">
            
            <fieldset style="width: 100%;height: 100%;border: 1px solid #1778aa;border-radius: 5%;padding: 5%;">
            <img src="<?php echo $row2['imagem']; ?>" style='max-width: 100%;margin-left:auto;margin-right:auto;display:block'>
            
            </fieldset>
          </div>
          <div class="col-2">



          </div>
          <div class="col-7">
            <fieldset border="1">
              <legend>Dados</legend>
              <div class="row">
                <div class="col-4">
                  <span>Nome: </span><br>
                </div>
                <div class="col-8">
                  <span><?php echo $row2['nome'] ?></span><br>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <span>Sobrenome: </span><br>
                </div>
                <div class="col-8">
                  <span><?php echo $row2['sobrenome'] ?></span><br>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <span>Email: </span><br>
                </div>
                <div class="col-8">
                  <span><?php echo $row2['email'] ?></span><br>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <span>usuario: </span><br>
                </div>
                <div class="col-8">
                  <span><?php echo $row2['usuario'] ?></span><br>
                </div>
              </div>
              
              
            </fieldset>
          </div>
        </div>

        <div class="row" style="margin-top: 2%">
          <div class="col-5">
            <div style="background-color:#1778aa;width: 57%;border-radius:10px">
            <p style="text-align:center;color:white;text-transform: uppercase;font-weight: bold">
              <?php
                $concluido = 0;
                $id = $row['id'];
                $sql = "SELECT * from tbl_cad_curso where id_Cad = '$id'";
                $result = mysqli_query($conn, $sql);
                while($row2 = mysqli_fetch_array($result)){
                  if(($row2['nota'] > 60) and ($row2['progresso'] == 100)){
                    $concluido++;
                  }
                }
                if($concluido == 1){
                  echo "iniciante";
                }else if($concluido == 2){
                  echo "intermediário";
                }else if($concluido == 3){
                  echo "intermediário";
                }else if($concluido == 4){
                  echo "Avançado";
                }else if($concluido == 5){
                  echo "Avançado";
                }else{
                  echo "iniciante";
                }
              ?>
              </p>
            </div>
          </div>
          <div class="col-7">
            <div class="row">
              <div class="col-1" id="estrela">
              <form action="/musiclly/modulos/favoritar.php" method="POST">
              <?php
              $sql3 = "SELECT * from cadastro where nome = '$usuarioClickado'";
              $result3 = mysqli_query($conn, $sql3);
              $row3 = mysqli_fetch_array($result3);
                 $id2 = $row3['id']; 
                 echo "<input type='hidden' name='Afavoritar' value=\"$id2\">";
              ?>
              
              <input type="image" src='/Musiclly/www/galeria/favorito.png' style='max-width: 30px;cursor:pointer'>
              </form>  
              </div>
              <div class="col-1">
                  <form action="/musiclly/chat/chat.php" method="GET">
                      <input type='hidden' name='idPara' value="<?php echo $id2 ?>">
                      <input type="image" src="/Musiclly/www/galeria/msgicon.png" style="max-width: 30px">

                  </form>
              </div>
                <div class="col-9">

                </div>
                <div class="col-1">
                    <?php
                        $sqlStatus = "SELECT status FROM cadastro where id = '$id2'";
                        $resultStatus = mysqli_query($conn, $sqlStatus);
                        $row = mysqli_fetch_assoc($resultStatus);
                        if($row['status'] == 1){
                            echo "<span style='color: green;font-weight: bold'>ONLINE</span>";
                        }else{
                            echo "<span style='color: red;font-weight: bold'>OFFLINE</span>";
                        }
                    ?>

                </div>


            </div>
          </div>
        </div>
      


      

     



      <div class="container" style="">
        <!--ABERTURA DA DIV CONTAINER -->





      </div>
    </div>
    <img src="/Musiclly/www/galeria/msg.png" id="msg" onClick="msg()">
      <?php include($serve_file. 'includes/footer.php') ?>
  </div>
  <!--FECHAMENTO DIV CONTAINER FLUID-->

</body>

</html>