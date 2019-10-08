<?php
error_reporting(0);
    include_once("../php/conexao.php");
    session_start();
    if(isset($_SESSION['usuario'])){
    $usuario = $_SESSION['usuario'];
    $id = $_SESSION['id'];


    $sql = "SELECT * FROM cadastro where usuario = '{$usuario}' and id = '{$id}'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0){

        while($row = mysqli_fetch_assoc($result)){
            $nome = $row['nome'];
            $sobrenome = $row['sobrenome'];
            $email = $row['email'];
            $usuario = $row['usuario'];
        }

    }
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Metronome</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <script src="https://unpkg.com/tone@13.8.25/build/Tone.js"></script>
        <!--FONTES ================================================-->
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
</head>

<body style="background-image: url('../www/galeria/background.png');background-repeat:no-repeat;background-attachment: fixed;background-size: 100%;">

    <div class="container-fluid">
        <!--CLASSE CONTAINER =======================-->    
        <div class="container">
    <!--NAV BAR ======================-->       
    <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#"><img src="../www/galeria/logo.png"class="img-fluid" id="logoNavBar"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <?php
                    
                echo "<div class='collapse navbar-collapse' id='navbarNavAltMarkup'><div class='navbar-nav'>  
                <a class='nav-item nav-link' href='#' id='contatoNavBar' style='color:#1778aa;margin-left: 320px'>Contato</a>
                <a class='nav-item nav-link' href='../index.php' id='entrarNavBar' style='color:#1778aa;'>Home</a>
                <a class='nav-item nav-link' href='../cadastro.php' id='entrarNavBar' style='color:#1778aa;'>Cursos</a>
                <a class='nav-item nav-link' href='../painel.php' style='background-color:#f27d16;color:white;border: 1px solid #f27d16; border-radius: 10px;margin-left: 300px;'>$usuario</a>
                <a class='nav-item nav-link' href='../logout.php' style='color:#1778aa'>Logout</a>";   
                ?>
                
              </div>
            </div>
    </nav>
    <!-- FECHAMENTO NAVBAR ===============-->
    </div> <!--FECHAMENTO DA DIV CONTAINER PARA MENU -->
   


    
       
    
    

     
    <div class="container" style="height: 1000px"><!--ABERTURA DA DIV CONTAINER -->
        
        <h1>Metronome</h1>
        <p style="font-size: 70%">By <a href="https://davebsoft.com">Dave Briccetti</a><a style="margin-left: 1em" href="https://github.com/dcbriccetti/metronome">Source code</a></p>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="tempo">Tempo</label>
                    <input id="tempo" class='form-control' type="number" value='60'
                    min='20' max='180' onChange="metronomeApp.setTempo(this.value);">
                </div>
                <div class="form-group">
                    <label for="metroSound">Sound</label>
                    <select id="metroSound" class="form-control"
                            onChange="metronomeApp.setSound(this.selectedIndex + 1)">
                    </select>
                </div>
                
                <input id="metronome" style="margin-top: 100px;" class="form-control btn btn-secondary"
                       type="button" value="Start" onclick="metronomeApp.toggle()"/>
            </div>
            
            <div id='visualization' class="col-sm"></div>
        </div>
        
        
            
          </div>
        </div>
        <img src="../www/galeria/msg.png" id="msg" onClick="msg()">
        <div class="row"><div class="col-12" id="footer"><footer></footer></div></div> 
    </div><!--FECHAMENTO DIV CONTAINER FLUID-->


    <!----===============================================-->





<script src="https://cdnjs.cloudflare.com/ajax/libs/p5.js/0.7.3/p5.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="js/metronome-sound.js"></script>
<script src="js/visualization.js"></script>
<script src="js/app.js"></script>

</body>
</html>

